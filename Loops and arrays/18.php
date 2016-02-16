<?php
/*18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
выходные дни следует вывести жирным.*/

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

$holidays = array('Sat', 'Sun');

foreach ($arr as $item) {
    echo in_array($item, $holidays) ? '<b>'.$item.'</b>' : $item;
    echo PHP_EOL;
}