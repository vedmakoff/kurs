<?php
include ("dbaccess.php");

$name=$_POST["name"];
$login=$_POST["login"];
$pass=  md5($_POST["pass"]);
$email=$_POST["email"];
$captcha=$_POST["captcha"];

if (strcmp($captcha,$_SESSION["phrase"])!=0){
    $_SESSION["message"]="<br>"."Неправильная ключевая фраза!"."<br>";
    header("Location: sign.php");
    die();
}
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
    $_SESSION["message"]="<br>"."Зарегистрировались"."<br>";
    //переход на страницу входа
    header("location: login.php");
}
 else {
     $_SESSION["message"]="<br>"."Логин уже занят"."<br>";
    //возврат на страницу регистрации
    header("location: sign.php");
}

$mysqli->close();


