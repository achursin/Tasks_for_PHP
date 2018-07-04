<?php
// Работа с массивами
error_reporting(-1);

$anonHeight = 169; /* Рост анона */

/* Рост одноклассников */
$classmates = array(
	'Антон'	=>	172,
	'Семен'	=>	165,
	'Лена'	=>	189,
	'Иван'	=>	171,
	'Петр'	=>	182,
	'Сидор'	=>	176,
	'Аня'	=>	180,
	'Таня'	=>	179,
	'Маня'	=>	171
);

$number = 0;

/* Перебираем всех одноклассников */
foreach ($classmates as $name => $height) {
    echo "Имя: {$name}, рост: {$height} см.\n";
    	if ($anonHeight<$height) {
    		$number++;
    		echo $name."\nвыше анона <br>";
    	}
    	else {echo $name."\nниже анона <br>";}
}
echo "В классе {$number} человек выше анона\n";
?>
