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
                <p>
                    «Hello, world!» — программа, результатом работы которой является вывод на экран или иное устройство фразы «Hello, world!» (в дословном переводе с английского — «Привет, мир!»; представляет собой распространённое неформальное приветствие, близкое к русскому «всем привет!»). Также используются вариации с другой пунктуацией или регистром — например, «Hello World». Обычно это первый пример программы в учебниках по программированию, и для многих студентов такая программа является первым опытом при изучении нового языка.
                </p>
                <p>
                    Такая постановка задачи обращает внимание учащегося сразу на несколько ключевых моментов языка программирования, главным из которых является базовая структура программы.
                </p>
                <p>
                    Хотя небольшие тестовые примеры использовались с тех самых пор, как появились компьютеры, традиция использования фразы «Hello, world!» в качестве тестового сообщения была введена в книге «Язык программирования Си» Брайана Кернигана и Денниса Ритчи, опубликованной в 1978 году.
                </p>
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
