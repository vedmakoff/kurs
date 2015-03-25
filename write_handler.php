<?php

$mysqli= new mysqli("localhost", "root", "", "kurs");
if($mysqli==0) 
{
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit;
}
  
if($stmt = $mysqli->prepare("INSERT INTO users (name,login,pass,email,file) VALUES (?,?,?,?,?)")) 
{
	/* bind parameters for markers */
	$stmt->bind_param("sssss", $name,$login,$pass,$email,$fullpath);
	/* execute query */
	$stmt->execute();
	/* close statement */
	$stmt->close();
} 

$mysqli->close();