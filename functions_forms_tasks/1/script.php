<?php
function getCommonWords($a, $b){
    $string_1 = explode(" ", $a);
    $string_2 = explode(" ", $b);
    $res=[];
    foreach($string_1 as $val_1) {
        if (in_array($val_1,$string_2)){
            $res[]=$val_1;
        }
    }
    return $res;
    }
echo "<pre>";
var_dump($_POST);
$res=getCommonWords($_POST['val_1'],$_POST['val_2']);
print_r($res);

