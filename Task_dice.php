<?php
// Игра с кубиками через условие
error_reporting(-1);
$FirstCastPlayer = mt_rand(1,6);
$SecondCastPlayer = mt_rand(1,6);
$SumCastPlayer = $FirstCastPlayer + $SecondCastPlayer;
echo "У игрока выпало: " . $SumCastPlayer .PHP_EOL;
$FirstCastComputer = mt_rand(1,6);
$SecondCastComputer = mt_rand(1,6);
$SumCastComputer = $FirstCastComputer + $SecondCastComputer;
echo "У компьютера выпало: " . $SumCastComputer .PHP_EOL;
// Проверяем кто победит
if ($SumCastPlayer == $SumCastComputer) {
	echo "У компьютера и игрока выпало одинковое количество, ничья";
}
elseif ($SumCastPlayer>$SumCastComputer) {
	echo "Победил игрок";
}
else {
	echo "Победил компьютер";
}
?>
