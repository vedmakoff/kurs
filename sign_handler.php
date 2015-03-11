<?php
echo $_POST["name"]."</br>";
echo $_POST["login"]."</br>";
echo $_POST["pass"]."</br>";
echo $_POST["email"]."</br>";

setcookie("login", $_POST["login"], time()+3600);