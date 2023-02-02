<?php

function createFunc($a){
	if(is_int($a))
	{
        $result = floor($a / 7);
		$i = ($a % 7)*1000;
		echo "Создано $result штук";
		if($i > 0)
		{
			echo ", остаток - $i грамм";
		}
		
	}
	else
	{
		echo "введено не число"; 
	}
};
echo(createFunc(71));