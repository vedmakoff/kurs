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
if ($stmt = $mysqli->prepare("SELECT name,email FROM users WHERE login=?")) 
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
  if ($stmt = $mysqli->prepare("INSERT INTO users (name,login,pass,email) VALUES (?,?,?,?)")) {

    /* bind parameters for markers */
    $stmt->bind_param("ssss",$name,$login,$pass,$email);

    /* execute query */
    $stmt->execute();

   /* close statement */
    $stmt->close();
}   
}
 else {
    echo 'Такой пользователь уже зарегистрирован!';    
}

$mysqli->close();

//$result = $mysqli->query("INSERT INTO users (name,login,pass,email) VALUES ('$name','$login','$pass','$email')");
//        
//if (!$result) {
//    printf("Error: %s\n", mysqli_error($mysqli));
//}
//
//setcookie("login", $_POST["login"], time()+3600);
////print_r ($_FILES["file"]);
//echo $_FILES["file"]["tmp_name"]."</br>";
//echo $_FILES["file"]["name"]."</br>";
//move_uploaded_file($_FILES["file"]["tmp_name"], "images/".$_FILES["file"]["name"]);