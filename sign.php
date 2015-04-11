<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    <?php 
       include ("title.php");
   ?> 
</title>
<link rel="stylesheet" href="css/style.css">
<link rel="shortcut icon" href="kurs/images/favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="wrap">
        <div class="header">
            <?php
                include ("header.php");
            ?>
        </div>
            <div class="menu">
                <?php
                    include ("menu.php");
                ?>
            </div>
            <div class="content">
                <?php
                echo $_SESSION["mess"];
                $_SESSION["mess"]="";
                ?>
                <form action="sign_handler.php" method="post" enctype="multipart/form-data">
                    <p><label>ФИО: </label><input type="text" name="name"/></p>
                    <p><label>Логин: </label><input type="text" name="login" value="<?php=$_COOKIE["login"]?>"/></p>
                    <p><label>Пароль: </label><input type="password" name="pass"/></p>
                    <p><label>E-mail: </label><input type="text" name="email"/></p>
                    <p><label>Аватар: </label><input type="file" name="file"/></p>
                    <p><label>Введите текст с картинки</label><input type="text" name="phrase"/><img src="captcha.php"></p>
                    <br>
                    <p><input type="submit" value="Отправить"/></p>
                </form>
            </div>

        <div class="bottom" >
            <?php
                include ("bottom.php");
            ?>
        </div>
    </div>
</body>
</html>