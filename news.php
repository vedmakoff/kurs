<body>
    <div cl<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    <? 
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
                <form method="POST" action="news_handler.php" enctype="multipart/form-data">
                    Заголовок:<br>
                    <input type="text" name="title"></input>
                    <hr/>
                    Новость: <br>
                    <textarea cols="70" rows="7" name="news">Введите текст новости тут</textarea>
                    <input type="submit" value="Отправить" />    
                </form>
            </div>

        <div class="bottom" >
            <?php
                include ("bottom.php");
            ?>
        </div>
    </div>
<!--    <?php 
        phpinfo();
    ?>-->
</body>
</html>