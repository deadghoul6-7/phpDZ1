<?php
$arr = array(
    "Петя" => 100,
    "Коля" => 200,
    "Иван" => 300
);
function sum($arr){
    $res = 0;
    foreach($arr as $cl){
        $res += $cl;
    }
    return $res;
};
echo(sum($arr));
