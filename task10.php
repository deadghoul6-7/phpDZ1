<?php
$min = rand(0, 59);
switch ($min) {
    case $min > 0 and $min <= 15:
        echo "Первая четверть";
        break;
     case $min > 15 and $min <= 30:
        echo "Вторая четверть";
        break;
     case $min > 30 and $min <= 45:
        echo "Третья четверть";
        break;
	case $min > 45 and $min <= 59:
        echo "Четвертая четверть";
        break;
}
echo(": ".$min);