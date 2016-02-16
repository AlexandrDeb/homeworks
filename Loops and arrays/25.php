<?php
/* 3.Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами.*/
echo "<pre>";
$arr = array();

for($i = 0; $i<15; $i++){
    $arr[] = rand(1, 20);
}

print_r($arr);

$min = current($arr);
$min_pos = 0;

foreach($arr as $key => $current_value){
    if ( $current_value < $min ){
        $min = $current_value;
        $min_pos = $key;
    }
}

echo "Минимальный элемент найден в позиции {$min_pos} и равен {$min}";

echo PHP_EOL;

$max = current($arr);
$max_pos = 0;

foreach($arr as $key => $current_value){
    if ( $current_value > $max ){
        $max = $current_value;
        $max_pos = $key;
    }
}

echo "Минимальный элемент найден в позиции {$max_pos} и равен {$max}";



$arr[$min_pos] = $max;
$arr[$max_pos] = $min;

print_r($arr);







