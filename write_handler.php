<?php
session_start();

$server="localhost";
$user="root";
$password="";
$db="kurs";

$mysqli=new mysqli($server, $user, $password, $db);
if ($mysqli==0) {
echo "Ошибка подключения к серверу MySQL ".  mysqli_connect_error();
exit;
}
$t=$_POST["theme"];
$m=$_POST["message"];
$i=$_SESSION["user_id"];
$d=date("Y.m.d H:i:s");
// вставка в таблицу
if ($stmt = $mysqli->prepare("INSERT INTO `messages`(`user_id`,`theme`,`message`,`times`) VALUES(?,?,?,?)"))
{
    $stmt->bind_param("isss",$i,$t,$m,$d);
    $stmt->execute();
    $stmt->close();
    // это возвратит нам id вставленной записи
    $row_id = $mysqli->insert_id;
    // выведем этот id
    echo "Номер вашего обращения: <strong>".$row_id."</strong><br>";
    echo "Через несколько секунд вы будете перенаправлены на предыдущую страницу <br>";
    echo "Спасибо за обращение";
    
}
$mysqli->close();

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