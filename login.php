<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    <? 
       include ("title.php");
   ?> 
</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrap">
        <div class="header">
            <?
                include ("header.php");
            ?>
        </div>
            <div class="menu">
                <?
                    include ("menu.php");
                ?>
            </div>
            <div class="content">
                <form action="login_handler.php" method="post" enctype="multipart/form-data">
                    <p><label>Логин: </label><input type="text" name="login"/></p>
                    <p><label>Пароль: </label><input type="password" name="pass"/></p>
                    <p><input type="submit" value="Отправить"/></p>
                </form>
            </div>

        <div class="bottom" >
            <?
                include ("bottom.php");
            ?>
        </div>
    </div>
</body>
</html>