<?php
$arr = [-1,-12,41,2,312,80,-77,-44,2,-1];
$resultPositive = 0;
$resultNegative = 0;
foreach($arr as $a)
{
	if($a > 0) { $resultPositive += $a; }
	else $resultNegative+=$a;
}
echo "Сумма положительных: $resultPositive </br>Сумма отрицательных: $resultNegative";