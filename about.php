<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Здравствуй мир</title>
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
                <img src="images/hello_kitty_jpg.jpg" width="140" alt=""/><br>
                <iframe src="index.html" width="500" height="400"></iframe> <!-- это фрейм внутри страницы -->
            </div>

        <div class="bottom" >
            <?
                include ("bottom.php");
            ?>
        </div>
    </div>
</body>
</html>