<?php
error_reporting(-1);
mb_internal_encoding('utf-8');

$text = "«Grammar Nazi». Напиши скрипт, проверяющий текст на наличие злостных ошибок:\n
нет пробела после запятой,точки с запятой;восклицательного!знака, \n
вопросительного?знака, двоеточия:«жы» или «шы» написано с буквой ы.\n
в тексте есть слово «координально» или «зделал», «зделаю», «зделан»\n
в тексте есть слова «а» или «но» без запятой после них например а или но даже.\n";

echo $text."\n\n\n";

$regSpace = '/([\,\;\:\!\?\»])([а-яёА-ЯЁa-z0-9«])/iu';
$regKardinalno = '/координально/iu';
$regSdelal = '/(здел)(ал|аю|ан)/iu';
$regJiShi = '/([Жж]|[Шш])ы/iu';
$regProbelNoA = '/([а-яёА-ЯЁa-z0-9]{1,})(\\s+)(а|но)(\\s+)/iu';

$text = preg_replace($regSpace, '$1 $2', $text);
$text = preg_replace($regKardinalno, 'кардинально', $text);
$text = preg_replace($regSdelal, 'сдел$2', $text);
$text = preg_replace($regJiShi, '$1и', $text);
$text = preg_replace($regProbelNoA, '$1,$2$3$4', $text);

echo $text;

?>
