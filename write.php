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
                <form>

                    Тема обращения: <br>
                    <select>
                        <option>Неправильно отображаются страницы</option>
                        <option>Заявление о случаях нарушений правил пользователями</option>
                        <option>Выражение благодарности администрации</option>
                    </select>
                    <hr/>
                    Сообщение: <br>
                    <textarea cols="70" rows="7">Введите текст сообщения тут</textarea>
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