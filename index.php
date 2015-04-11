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
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
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
                <?php
                    include ("news_show.php");
                ?>
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
