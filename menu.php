<?php session_start(); ?>
<p><a href="index.php">Hello World</a></p>
<p><a href="about.php">Hello Kitty</a></p>
<p><a href="show.php">Сообщения</a></p>
<? if($_SESSION["user_id"]==0){ ?>
<p><a href="login.php">Вход</a></p>
<p><a href="sign.php">Регистрация</a></p>
<? } else { ?>
<p><a href="write.php">Написать администратору</a></p>
<p><a href="logaut.php">Выход</a></p>
<? } ?>