<?php
echo $_POST["login"]."</br>";
echo $_POST["pass"]."</br>";

$server="localhost";
$user="root";
$password="";
$db="kurs";

$mysqli=new mysqli($server, $user, $password, $db);
if (!$mysqli) {
echo "Ошибка подключения к серверу MySQL ".  mysqli_connect_error();
exit;
}
$login=$_POST["login"];
$pass=$_POST["pass"];

$stmt = $mysqli->prepare("SELECT name,email FROM users WHERE login=? and pass=?");
if ($stmt) {

    /* bind parameters for markers */
    $stmt->bind_param("ss",$login,$pass);

    /* execute query */
    $stmt->execute();
    
if ($stmt->num_rows()!=0)  {
      
    /* bind result variables */
    $stmt->bind_result($name,$email);

    /* fetch value */
    $stmt->fetch();

    echo "<br> Пользователь".$name." ваша электропочта".$email;
   
    
    /* close statement */
    $stmt->close();
    
}
 else {
    echo '<br>'.'нет такого пользователя'.'<br>';
}   
} 

$mysqli->close();
