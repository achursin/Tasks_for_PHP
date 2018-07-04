<?php
// Правильные: 
$correctNumbers = [ 
  '84951234567',  '+74951234567', '8-495-1-234-567', 
  ' 8 (8122) 56-56-56', '8-911-1234567', '8 (911) 12 345 67', 
  '8-911 12 345 67', '8 (911) - 123 - 45 - 67', '+ 7 999 123 4567', 
  '8 ( 999 ) 1234567', '8 999 123 4567'
];

$regexp = "/^\\s?([+]\\s?[7]|8)\\W*[0-9]\\W*[0-9]\\W*[0-9]\\W*[0-9]\\W*[0-9]\\W*[0-9]\\W*[0-9]\\W*[0-9]\\W*[0-9]\\W*[0-9]$/u";



$correctNumbers = preg_replace('/^\\s?([+]\\s?[7])/','8',$correctNumbers);
$correctNumbers = preg_replace('/\W*/','',$correctNumbers);
print_r($correctNumbers);


foreach ($correctNumbers as $correctNumber) {
  echo "Был номер: $correctNumber\n";

  $match = [];
  if (preg_match($regexp, $correctNumber, $match)) {
    echo nl2br("= Верно ".PHP_EOL);
  }else {
    echo nl2br("= номер не верный".PHP_EOL);
  }
}
?>
