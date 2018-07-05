<?php
require('Question.php');
require('createQuestions.php');
require('printQuestions.php');
require('checkAnswers.php');


$questions = createQuestions();
printQuestions($questions);
$answers = array('a', 'b', 'd');
$answersWord = array('Барселона', 'пять', 'в финале ЧЕ');
checkAnswers($questions, $answers, $answersWord);

?>
