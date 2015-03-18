<?php
if (strcmp($_SERVER["REQUEST_URI"], "/kurs/index.php")==0)
   {
   echo "Здравствуй мир";
   }
 else if (strcmp($_SERVER["REQUEST_URI"], "/kurs/about.php")==0)
   {
   echo "Hellow Kitty";
   }
   else if (strcmp($_SERVER["REQUEST_URI"], "/kurs/sign.php")==0)
   {
   echo "Регистрация";
   }
   else if (strcmp($_SERVER["REQUEST_URI"], "/kurs/write.php")==0)
   {
   echo "Написать администратору";
   }
   else if (strcmp($_SERVER["REQUEST_URI"], "/kurs/login.php")==0)
   {
   echo "Логин";
   }
   else {
       die();
   }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

