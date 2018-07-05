<?php
// Функция выводящая правильные ответы и набранные баллы
function checkAnswers($questions, $answers, $answersWord){
    // Проверяем, что число ответов равно числу вопросов (защищаемся от ошибки)
    if (count($questions) != count($answers)) {
        die("Число ответов и вопросов не совпадает\n");
    }
    $pointsTotal = 0;
    $pointsMax = 0;
    $correctAnswer = 0;
    $totalQuestions = count($questions);
    for ($i = 0; $i<count($questions); $i++){
        $answerWord = $answersWord[$i];
        $question = $questions[$i];
        $answer = $answers[$i];
        $pointsMax += $question->points;
        // Проверяем правильность ответов
        if ($answer == $question->correctAnswer) {
            $correctAnswer++;
            $pointsTotal += $question->points;
            $number = $i +1;
            echo "Правильный ответ на вопрос №{$number} ({$question->text}). Ответ: {$answer}. {$answerWord}<br>".PHP_EOL;
        } else {
            $number = $i + 1;
            echo "Неправильный ответ на вопрос №{$number} ({$question->text}) Правильным ответом будет: {$answer}. {$answerWord}<br>".PHP_EOL;
        }
    }
    echo "Правильных ответов: {$correctAnswer} из {$totalQuestions}, баллов набрано: {$pointsTotal} из {$pointsMax}<br>".PHP_EOL;
}
?>
