<?php
// Работа с массивами
error_reporting(-1);
$anonHeight = 169; /* твой рост */
/* Рост одноклассников */
$classmates = [
	'Антон'	=>	172,
	'Семен'	=>	165,
	'Лена'	=>	189,
	'Иван'	=>	171,
	'Петр'	=>	182,
	'Сидор'	=>	176,
	'Аня'	=>	180,
	'Таня'	=>	179,
	'Маня'	=>	171
];
$number = 0;
/* Перебираем всех одноклассников */
foreach ($classmates as $name => $height) {
    echo "{$name} ростом: {$height} см.\n";
    	if ($anonHeight<$height) {
    		$number++;
    		echo "значит выше тебя".PHP_EOL;
    	}
    	else {echo "значит ниже тебя".PHP_EOL;}
}
echo "В классе {$number} человек выше анона\n";
?>
