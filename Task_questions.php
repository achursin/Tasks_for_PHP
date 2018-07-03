<?php
require('question.php');
    function createQuestions(){
    $questions = [];

    $myobj = new Question('В какой команде играет Месси?',5,'a');
    $myobj->answers= array('a' => 'Барселона', 'b' => 'Бавария', 'c' => 'Манчестер Сити', 'd' => 'ПСЖ');
    $questions[] = $myobj;

    $myobj = new Question('Сколько золотых мячей у Месси?',10,'c');
    $myobj->answers= array('a' => 'один', 'b' => 'три', 'с'=>'пять', 'd'=>'шесть');
    $questions[] = $myobj;

    $myobj = new Question('В финале какого турнира не играл Месси?',15,'d');
    $myobj->answers=array('a'=>'в финале ЛЧ', 'b' => 'в финале КОНМЕБОЛ', 'c'=>'в финале кубка Испании','d'=>'в финале ЧЕ');
    $questions[] = $myobj;

    return $questions; // Возвращаем массив
    }

// Функция выводящая номер вопроса и сам вопроса
    function printQuestions($questions){
    $number = 1;
    foreach ($questions as $key => $question) {
        echo nl2br("{$number}. {$question->text}\n");
        echo nl2br("Варианты ответов:\n");
                foreach ($question->answers as $letter => $answer) {
            echo nl2br("{$letter}. {$answer}\n");
            }
        $number++;
        }
    }
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
        } else {
            $number = $i + 1;
            echo nl2br("Неправильный ответ на вопрос №{$number} ({$question->text})\n Правильным ответом будет: {$answer}. {$answerWord}\n");
        }
    }
    echo nl2br("Правильных ответов: {$correctAnswer} из {$totalQuestions}, баллов набрано: {$pointsTotal} из {$pointsMax}");
}


$questions = createQuestions();
printQuestions($questions);
$answers = array('a', 'b', 'd');
$answersWord = array('Барселона', 'пять', 'в финале ЧЕ');
checkAnswers($questions, $answers, $answersWord);
?>
