<?php
$server="localhost";
$user="root";
$password="";
$db="kurs";

$mysqli=new mysqli($server, $user, $password, $db);
if ($mysqli==0) {
echo "Ошибка подключения к серверу MySQL ".  mysqli_connect_error();
exit;
}
if ($stmt = $mysqli->prepare("SELECT messages.user_id,messages.theme,messages.message,messages.times,users.name FROM messages JOIN users ON messages.user_id=users.id")) 
{
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($uid,$theme,$message,$times,$name);
   
    while ($stmt->fetch())
    {
        echo "<b>Сообщение от ".$name." (".$times."<br>".$theme."</b><br>";
        echo $message;
        echo "<br><hr><br>";
    }
    /* close statement */
    $stmt->close();
} 
 $mysqli->close();

