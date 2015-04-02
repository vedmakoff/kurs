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
                <img src="images/person-faye.jpg" width="200"/>
                <a href="write.php">Написать администратору</a>
            </div>

        <div class="bottom" >
            <?
                include ("bottom.php");
            ?>
        </div>
    </div>
<!--    <? 
        phpinfo();
    ?>-->
</body>
</html>