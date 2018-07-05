<?php
// Правильные: 
$correctNumbers = [ 
  '84951234567',  '+74951234567', '8-495-1-234-567', 
  ' 8 (8122) 56-56-56', '8-911-1234567', '8 (911) 12 345 67', 
  '8-911 12 345 67', '8 (911) - 123 - 45 - 67', '+ 7 999 123 4567', 
  '8 ( 999 ) 1234567', '8 999 123 4567'
];

// Неправильные: 
$incorrectNumbers = [
  '02', '84951234567 позвать люсю', '849512345', '849512345678', 
  '8 (409) 123-123-123', '7900123467', '5005005001', '8888-8888-88',
  '84951a234567', '8495123456a', 
  '+1 234 5678901', /* неверный код страны */
  '+8 234 5678901', /* либо 8 либо +7 */
  '7 234 5678901' /* нет + */
];

$regexp = "/^\\s?([+]\\s?[7]|8)\\W*[0-9]\\W*[0-9]\\W*[0-9]\\W*[0-9]\\W*[0-9]\\W*[0-9]\\W*[0-9]\\W*[0-9]\\W*[0-9]\\W*[0-9]$/u";
foreach ($correctNumbers as $correctNumber) {
  echo "Номер: $correctNumber\n";

  $match = [];
  if (preg_match($regexp, $correctNumber, $match)) {
    echo nl2br("= Верно ".PHP_EOL);
  }else {
    echo nl2br("= номер не верный".PHP_EOL);
  }
}

foreach ($incorrectNumbers as $correctNumber2) {
  echo "Номер: $correctNumber2\n";

  $match = [];
  if (preg_match($regexp, $correctNumber2, $match)) {
    echo nl2br("= Верно ".PHP_EOL);
  }else {
    echo nl2br("= номер не верный".PHP_EOL);
  }
}
