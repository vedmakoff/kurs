<?php
include ("dbaccess.php");

if ($stmt = $mysqli->prepare("SELECT messages.user_id,messages.theme,messages.message,messages.times,users.name FROM messages JOIN users ON messages.user_id=users.id ORDER BY messages.times DESC")) 
{
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($uid,$theme,$message,$times,$name);
   
    while ($stmt->fetch())
    {
        echo "<b>Сообщение от ".$name." (".$times.")<br>".$theme."</b><br>";
        echo $message;
        echo "<br><hr><br>";
    }
    /* close statement */
    $stmt->close();
} 
 $mysqli->close();

