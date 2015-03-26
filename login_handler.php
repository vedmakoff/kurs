<?php
session_start();

echo $_POST["login"]."</br>";
echo $_POST["pass"]."</br>";

$server="localhost";
$user="root";
$password="";
$db="kurs";

$mysqli=new mysqli($server, $user, $password, $db);
if ($mysqli==0) {
echo "Ошибка подключения к серверу MySQL ".  mysqli_connect_error();
exit;
}
$login=$_POST["login"];
$pass=$_POST["pass"];

if ($stmt = $mysqli->prepare("SELECT id,name,email FROM users WHERE login=? and pass=?")) 
 {
    /* bind parameters for markers */
    $stmt->bind_param("ss",$login,$pass);
   
   /* execute query */
    $stmt->execute();
	
	$stmt->store_result();
	
	if($stmt->num_rows!=0)
	{
		 /* bind result variables */
		$stmt->bind_result($uid,$name,$email);
		/* fetch value */
		$stmt->fetch();
	
		echo "<br>"."Ваш ФИО: ".$name.", ваш e-mail: ".$email."<br>"."ваш ID: ".$uid;
               $_SESSION["name"]=$name;
               $_SESSION["email"]=$email;
               $_SESSION["user_id"]=$uid;
        }
        else
	{
            echo "<br>"."Нет такого пользователя"."<br>";
	}

    /* close statement */
    $stmt->close();
} 
 $mysqli->close();
