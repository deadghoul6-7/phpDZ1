<?php

function checkFunc($a){
	if(!is_int($a))
	{
		echo "false";
	}
	else
	{
		if($a > 170)
			echo "Big";
		else
        echo "Small";
	}
};
echo(checkFunc(180));