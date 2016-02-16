<?php
/*19. Составьте массив дней недели.
 С помощью цикла foreach выведите все
дни недели, а текущий день выведите курсивом.
 Текущий день должен храниться в переменной $day. 	*/

echo "<pre>";

$arr = array(
    'Mon',
    'Tue',
    'Wed',
    'Thr',
    'Fri',
    'Sat',
    'Sun',
);

$day  = date('D');


foreach ($arr as $item) {
    echo $item == $day  ? '<b>'.$item.'</b>' : $item;
    echo '<br>';
}