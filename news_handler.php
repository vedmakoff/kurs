<?php
session_start();

include ("dbaccess.php");

$t=$_POST["title"];
$m=$_POST["news"];
$d=date("Y.m.d H:i:s");
// вставка в таблицу
if ($stmt = $mysqli->prepare("INSERT INTO `news`(`title`,`news`,`date_time`) VALUES(?,?,?)"))
{
    $stmt->bind_param("sss",$t,$m,$d);
    $stmt->execute();
    $stmt->close();
    // это возвратит нам id вставленной записи
    $row_id = $mysqli->insert_id;
}
$mysqli->close();
$_SESSION["mess"]="<br>"."Your news successfully sent!"."<br>";
header("Location: news.php");
?>