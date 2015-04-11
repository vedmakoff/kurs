<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php 
       include ("title.php");
   ?> </title>
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
                include ("show_message.php");
            ?>
        </div>
        <div class="bottom" >
            <?php
                include ("bottom.php");
            ?>
        </div>
    </div>
</body>
</html>