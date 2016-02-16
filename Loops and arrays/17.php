<?php
/* 17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
месяц выведите жирным. Текущий месяц должен храниться в переменной $month.*/

echo "<pre>";
$arr = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec',);

$month = 'Feb';

foreach ($arr as $val) {
    echo $val == $month ? '<b>'.$val.'</b>' : $val;
    echo '<br>';
}