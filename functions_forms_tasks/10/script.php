<?php


$word = ( $_POST['str'] );
$str = explode( " ", $word );
$unique = array_unique($str);
$number =count($unique);
echo "Количество уникальных слов =" . " ";
print_r ($number);





