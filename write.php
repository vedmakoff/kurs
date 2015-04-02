<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><? 
       include ("title.php");
   ?> </title>
<link rel="stylesheet" href="css/style.css">
<link rel="shortcut icon" href="kurs/images/favicon.ico" type="image/x-icon">
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
                <?
                echo $_SESSION["mess"];
                $_SESSION["mess"]="";
                ?>
                <form method="POST" action="write_handler.php" enctype="multipart/form-data">

                    Тема обращения: <br>
                    <select name="theme">
                        <option>Неправильно отображаются страницы</option>
                        <option>Заявление о случаях нарушений правил пользователями</option>
                        <option>Выражение благодарности администрации</option>
                    </select>
                    <hr/>
                    Сообщение: <br>
                    <textarea cols="70" rows="7" name="message">Введите текст сообщения тут</textarea>
                    <input type="submit" value="Отправить" />    
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