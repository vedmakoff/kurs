<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><? 
       include ("title.php");
   ?> </title>
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
                <form>
                    <p><label>ФИО: </label><input type="text" /></p>
                    <p><label>Логин: </label><input type="text" /></p>
                    <p><label>Пароль: </label><input type="password" /></p>
                    <p><label>E-mail: </label><input type="text" /></p>
                    <p><label>Аватар: </label><input type="file" /></p>
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