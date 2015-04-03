<?php
session_start();

include ("dbaccess.php");

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
$_SESSION["mess"]="<br>"."Your message successfully sent!"."<br>";
header("Location: write.php");
