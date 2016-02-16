<?php
/* 2.Вам нужно разработать программу, которая считала бы количество вхождений
какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
442158755745 встречается 4 раза*/

if ( $_POST ){


    $count = 0;

    if ( isset($_POST['number']) ){
        $number = $_POST['number'];
    }

    if ( isset($_POST['q']) ){
        $q = $_POST['q'];
    }

    $symbols = str_split($number);
    foreach($symbols as $symbol){
        if ( $symbol == $q ){
            $count++;
        }
    }

    echo "Символ {$q} найден {$count} раз";

}

?>

<form method="post" action="">
    <input type="text" name="number" placeholder="Enter number" />
    <input type="text" name="q" placeholder="Enter Search Element" />
    <input type="submit" />
</form>