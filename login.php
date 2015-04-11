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
                <form action="login_handler.php" method="post" enctype="multipart/form-data">
                    <p><label>Логин: </label><input type="text" name="login"/></p>
                    <p><label>Пароль: </label><input type="password" name="pass"/></p>
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