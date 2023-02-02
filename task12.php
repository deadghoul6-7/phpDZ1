<?php
$arr = ['html', 'css', 'php', 'js', 'jq'];
foreach($arr as $a)
{
	if($a == 'aa')
	{
		echo($a);
	}
	else
		echo($a.", ");
}