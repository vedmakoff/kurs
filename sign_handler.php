<?php
$server="localhost";
$user="root";
$password="";
$db="kurs";

$mysqli=new mysqli($server, $user, $password, $db);
if (!$mysqli) {
echo "Ошибка подключения к серверу MySQL ".  mysqli_connect_error();
exit;
}
$name=$_POST["name"];
$login=$_POST["login"];
$pass=  md5($_POST["pass"]);
$email=$_POST["email"];
if ($stmt = $mysqli->prepare("SELECT count(*) FROM users WHERE login=?")) 
 {
    /* bind parameters for markers */
    $stmt->bind_param("s",$login);
    /* execute query */
    $stmt->execute();
    $stmt->store_result();
     /* bind result variables */
    $stmt->bind_result($nr);
    /* fetch value */
    $stmt->fetch();	
    /* close statement */
    $stmt->close();
} 
if ($nr==0) {
    $fullpath="";
    if(strcmp($_FILES["file"]["tmp_name"],"")!=0)
    {
            $fullpath="images/".md5($login).".jpg";
    }
    if ($stmt = $mysqli->prepare("INSERT INTO users (name,login,pass,email,file) VALUES (?,?,?,?,?)")) {

    /* bind parameters for markers */
    $stmt->bind_param("sssss",$name,$login,$pass,$email,$fullpath);

    /* execute query */
    $stmt->execute();

    /* close statement */
    $stmt->close();
    } 
    setcookie("login",$_POST["login"],time()+3600);

    if(strcmp($fullpath,"")!=0)
    {
            move_uploaded_file($_FILES["file"]["tmp_name"],$fullpath);
    }
    echo "Поздравляем с регистрацией на портале";
    sleep(3);
    //переход на страницу входа
    header("location: login.php");
}
 else {
    echo 'Такой пользователь уже зарегистрирован! Попробуйте придумать другое имя пользователя.';
    sleep(3);
    //возврат на страницу регистрации
    header("location: sign.php");
}

$mysqli->close();

