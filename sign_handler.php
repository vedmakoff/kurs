<?php
echo $_POST["name"]."</br>";
echo $_POST["login"]."</br>";
echo $_POST["pass"]."</br>";
echo $_POST["email"]."</br>";

setcookie("login", $_POST["login"], time()+3600);
//print_r ($_FILES["file"]);
echo $_FILES["file"]["tmp_name"]."</br>";
echo $_FILES["file"]["name"]."</br>";
move_uploaded_file($_FILES["file"]["tmp_name"], "images/".$_FILES["file"]["name"]);