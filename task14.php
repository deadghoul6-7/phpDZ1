<?php
$arr = [
	'Коля' => 200,
	'Вася' => 300,
	'Петя' => 400
];
foreach($arr as $name => $z)
{
    // header("Content-Type: text/plain; ");

    // echo "\n";
    echo "$name - зарплата $z долларов </br>";
}