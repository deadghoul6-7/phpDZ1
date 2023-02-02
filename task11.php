<?php
$lang = 'en';
$arr;
$masRu = ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'];
$masEn = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
// через 2 if
if($lang == "ru")
{
	$arr = $masRu;
}
if($lang == "en")
{
	$arr = $masEn;
}

// через switch
switch ($lang) {
    case 'ru':
        $arr = $masRu;
        break;
	case 'en':
        $arr = $masEn;
        break;
}
// через многомерный массив
$arrLang = [
	'ru' => ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'],
	'en' => ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday']];
    // foreach ($arrLang as $lang => $it)
	// {
	//     if($lang == "ru")
	//     {
	// 	    echo ($lang.": ");
	// 	    foreach ($it as $lang => $value)
	// 	    {
	// 	        echo $value;
	// 	        echo(" ");
                
	// 	    }
	//     }
       
    //     if($lang == "en"){
    //         echo("</br>");
    //         echo ($lang.": ");
	// 	    foreach ($it as $lang => $value)
	// 	    {
	// 	        echo $value;
	// 	        echo(" ");
	// 	    }
    //     }
	// }