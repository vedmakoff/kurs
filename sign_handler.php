<?php
echo $_POST["name"]."</br>";
echo $_POST["login"]."</br>";
echo $_POST["pass"]."</br>";
echo $_POST["email"]."</br>";

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

$result = $mysqli->query("INSERT INTO users (name,login,pass,email) VALUES ('$name','$login','$pass','$email')");
        
if (!$result) {
    printf("Error: %s\n", mysqli_error($mysqli));
}
$mysqli->mysqli();

//setcookie("login", $_POST["login"], time()+3600);
////print_r ($_FILES["file"]);
//echo $_FILES["file"]["tmp_name"]."</br>";
//echo $_FILES["file"]["name"]."</br>";
//move_uploaded_file($_FILES["file"]["tmp_name"], "images/".$_FILES["file"]["name"]);