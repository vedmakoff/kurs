<?php
session_start();

include ("dbaccess.php");
if ($stmt = $mysqli->prepare("SELECT id,title,news,date_time FROM news WHERE 1 ORDER BY RAND() LIMIT 1"))
{
    /* execute query */
    $stmt->execute();
    $stmt->store_result();
	
    if($stmt->num_rows!=0)
    {
        /* bind result variables */
        $stmt->bind_result($id,$title,$news,$date_time);
        /* fetch value */
        $stmt->fetch();
        echo "<h1>Новости</h1>";
        echo "Дата добавления ".$date_time."<br><b>".$title."</b><br>";
        echo "<p>".$news."</p>";
    }
    $stmt->close();
} 
$mysqli->close();