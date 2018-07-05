<?php
// Функция выводящая номер вопроса и сам вопроса
    function printQuestions($questions){
    $number = 1;
    foreach ($questions as $key => $question) {
        echo "{$number}. {$question->text}<br>".PHP_EOL;
        echo "Варианты ответов:".PHP_EOL;
                foreach ($question->answers as $letter => $answer) {
            echo "{$letter}. {$answer}<br>".PHP_EOL;
            }
        $number++;
        }
    }
?>
