<?php
if (strcmp($_SERVER["REQUEST_URI"], "/index.php")==0)
   {
   echo "Здравствуй мир";
   }
 else if (strcmp($_SERVER["REQUEST_URI"], "/about.php")==0)
   {
   echo "Hellow Kitty";
   }
   else if (strcmp($_SERVER["REQUEST_URI"], "/sign.php")==0)
   {
   echo "Регистрация";
   }
   else if (strcmp($_SERVER["REQUEST_URI"], "/write.php")==0)
   {
   echo "Написать администратору";
   }
   else if (strcmp($_SERVER["REQUEST_URI"], "/login.php")==0)
   {
   echo "Логин";
   }
   else if (strcmp($_SERVER["REQUEST_URI"], "/logaut.php")==0)
   {
   echo "Выход";
   }
   else if (strcmp($_SERVER["REQUEST_URI"], "/show.php")==0)
   {
   echo "Сообщения";
   }
   


