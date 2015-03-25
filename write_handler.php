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
  
if($stmt = $mysqli->prepare("INSERT INTO messages (user_id,theme,message,times) VALUES (?,?,?,?)")) 
{
	/* bind parameters for markers */
	$stmt->bind_param("ssss", $i,$t,$m,$d);
	/* execute query */
	$stmt->execute();
	/* close statement */
	$stmt->close();
} 

$mysqli->close();