<?php


function topThreeWords($val){
    $strs = explode(" ", $val);
    $res=[];
    foreach ($strs as $v){
        $l=strlen($v);
        $res[$v]=$l;
    }
    asort($res);
   $keys=array_keys($res);
    $start=count($keys)-1;
    for ($i=$start;$i>($start-3);$i--){
        echo $keys[$i]."<br>";
    }



            }


topThreeWords($_POST['word']);

