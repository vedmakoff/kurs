<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Вышли денег</title>
    </head>
    <body>
        <?php
        $a = "Мама";
        $b = "Папа";
        echo $b.', вышли денег';
        echo '<br>';
        echo 111;
        echo '<br>';
        $c = 222;
        $d = "333";
        echo $c.$d;
        echo '<br>';
        echo $c+$d;
        echo '<br>';
        $e = mom;
        echo $e;
        echo '<br>';
        if (10>25.1)
        {
            echo 'Полезное действие N1';
        }
        else {
             echo 'Полезное действие N10';
         }
        echo '<br>';
        $s = 'woman';
        echo 'студент';
        if (strcmp($s, "woman")==0)
        {
            echo 'ка';
        }
        echo '<br>';
        echo '<br>';
        $m[0]=100.5;
        $m[1]=77.2;
        $m[2]=-77.2;
        $m[3]=22.2;
        $m[4]='Привет';
        $m['name']='Denis';
        echo 'вывод массива с помощью эхо<br>';
        echo $m[0].'<br>';
        echo $m[1].'<br>';
        echo $m[2].'<br>';
        echo $m[3].'<br>';
        echo $m[4].'<br>';
        echo $m[5].'<br>';
        echo $m['name'].'<br>';
        echo '<br>';
        echo 'Вывод массива с помошью цикла его 4-х элементов <br>';
        $n=4;
        for ($i=0;$i<$n;$i=$i+1)
        {
            echo $m[$i].'<br>';
        }
        echo 'Играемся с циклом, задали другую переменную <br>';
        $j =0;
        for ($i=0;$j<100;$i=$i+1)
        {
            echo $m[$i].'<br>';
            $j=$j+25;
        }
        echo '<br>';
        echo $i.' таково значение i после всех циклов <br>';
        echo $j.' таково значение j после второго цикла <br>';
        echo '<br>';
        $names["Иванов"] = "Андрей";
        $names["Петров"] = "Борис";
        $names["Волков"] = "Сергей";
        $names["Макаров"] = "Федор";
        foreach ($names as $key => $value) {
            echo "<b>$value $key</b><br>";
        }
         echo '<br>';
        $flag=FALSE;
        $k=2;
        foreach ($names as $key => $value) {
            if (strcmp($key, "Иванов")==0)
            {
                $flag=TRUE;
                if ($flag && $k>0)
                {
                    echo "<b>$value $key</b><br>";
                    $k--;
                }
            }
        }
        
        
        foreach ($m as $number => $value)
        {
            echo "$value $number<br>";
        }
        ?>
    </body>
</html>
