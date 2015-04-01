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
$login=$_POST["login"];
$pass=md5($_POST["pass"]);

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

            echo "<br>"."Вы вошли по именем: ".$name."<br>Ваш e-mail: ".$email."<br>";
            $_SESSION["name"]=$name;
            $_SESSION["email"]=$email;
            $_SESSION["user_id"]=$uid;
            // по выполнении переходим на индекс.пхп
            header("Location: index.php");
        }
        else
	{
            echo "<br>"."Нет такого пользователя"."<br>";
	}

    /* close statement */
    $stmt->close();
} 
 $mysqli->close();



//// так получаем URL, с которого пришёл посетитель  
//$back = $_SERVER['HTTP_REFERER']; // для справки, не обязательно создавать переменную
//
//// Теперь создаём страницу, пересылающую
//// в meta теге на предыдущую
//echo "
//<html>
//  <head>
//   <meta http-equiv='Refresh' content='5; URL=index.php'>
//  </head>
//</html>";
//// content='5; число указывает на количество секунд перед возвращением назад
//// необходимых для прочтения какого-то сообщения.