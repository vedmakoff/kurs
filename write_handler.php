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
echo $t."<br>"; 
echo $m."<br>";  
echo $i."<br>";  
echo $d."<br>";  

// вставка в таблицу
if ($stmt = $mysqli->prepare("INSERT INTO `messages`(`user_id`,`theme`,`message`,`times`) VALUES(?,?,?,?)"))
{
    $stmt->bind_param("isss",$i,$t,$m,$d);
    $stmt->execute();
    $stmt->close();
    // это возвратит нам id вставленной записи
    $row_id = $mysqli->insert_id;
    // выведем этот id
    echo $row_id;
}

$mysqli->close();