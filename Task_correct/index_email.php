<?php
error_reporting(-1);
mb_internal_encoding('utf-8');

/*Дан текст, содержащий в себе email'ы (адреса почты вроде you+me@some.domain-domain.com ). 
Напиши скрипт, выводящий все email, встречающиеся в этом тексте*/

$emailadress = [
  'you+me@some.domain-domain.com', 'cybersport.com', 'vk.com', 'ww2@q/ru', 
  'l@a.pro', 'ccd@y.ru', 'yandex.ru', 'fffz;yandex.ru', 'test@test.test'
];


$regexp = '/([a-zA-Z0-9_.+-]+)@([a-z0-9.-]+)\\.([a-z]+)/u';

print_r($emailadress);

foreach ($emailadress as $emailadress1) {
  echo "<br>эмейл: $emailadress1\n";

  $match = [];
  if (preg_match($regexp, $emailadress1, $match)) {
    echo "= Верно \n<br>";
  }else {
    echo "= не верный\n<br>";
  }
}

?>
