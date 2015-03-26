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
$pass=$_POST["pass"];
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
}
 else {
    echo 'Такой пользователь уже зарегистрирован! Попробуйте придумать другое имя пользователя.'; 
    // так получаем URL, с которого пришёл посетитель  
    $back = $_SERVER['HTTP_REFERER']; // для справки, не обязательно создавать переменную

    // Теперь создаём страницу, пересылающую
    // в meta теге на предыдущую
    echo "
    <html>
      <head>
       <meta http-equiv='Refresh' content='5; URL=".$_SERVER['HTTP_REFERER']."'>
      </head>
    </html>";
    // content='5; число указывает на количество секунд перед возвращением назад
    // необходимых для прочтения какого-то сообщения.
}

$mysqli->close();
echo "Поздравляем с регистрацией на портале";
// так получаем URL, с которого пришёл посетитель  
$back = $_SERVER['HTTP_REFERER']; // для справки, не обязательно создавать переменную

// Теперь создаём страницу, пересылающую
// в meta теге на предыдущую
echo "
<html>
  <head>
   <meta http-equiv='Refresh' content='5; URL=index.php'>
  </head>
</html>";
// content='5; число указывает на количество секунд перед возвращением назад
// необходимых для прочтения какого-то сообщения.