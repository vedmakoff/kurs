<?php
$server="mysql.hostinger.ru";
$user="u380806894_vik";
$password="682970";
$db="u380806894_kurs";

$mysqli=new mysqli($server, $user, $password, $db);
if ($mysqli==0) {
echo "Ошибка подключения к серверу MySQL ".  mysqli_connect_error();
exit;
}


