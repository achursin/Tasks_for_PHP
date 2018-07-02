<?php
class Question
{
    public $text;                // Текст вопроса
    public $points = 5;          // Число баллов, по умолчанию 5
    public $answers;             // Варианты ответов
    public $correctAnswer;       // Правильный ответ
    public $correctAnswerWord;   // Правильный ответ словами
}

// Функция, создающая массив с вопросами:
function createQuestions(){
    $questions = []; // Создаём пустой массив

    $q = new Question;
    $q->text="В какой команде играет Месси?"; // Вопрос
    $q->points=5; // Баллы за ответ
    $q->answers= array('a' => 'Барселона', 'b' => 'Бавария', 'c' => 'Манчестер Сити', 'd' => 'ПСЖ'); // Варианты ответа
    $q->correctAnswer='a'; // Правильный вариант ответа
    $q->correctAnswerWord='Барселона'; // Правильный вариант ответа словами
    $questions[] = $q; // Кладём вопрос в массив

    $q = new Question;
    $q->text="Сколько золотых мячей у Месси?"; // Вопрос
    $q->points=10; // Баллы за ответ
    $q->answers= array('a' => 'один', 'b' => 'три', 'с'=>'пять', 'd'=>'шесть'); // Варианты ответа
    $q->correctAnswer='c'; // Правильный вариант ответа
    $q->correctAnswerWord='пять'; // Правильный вариант ответа словами
    $questions[] = $q; // Кладём вопрос в массив

    $q = new Question;
    $q->text="В финале какого турнира не играл Месси?"; // Вопрос
    $q->points=15; // Баллы за ответ
    $q->answers=array('a'=>'в финале ЛЧ', 'b' => 'в финале КОНМЕБОЛ', 'c'=>'в финале кубка Испании','d'=>'в финале ЧЕ'); // Варианты ответа
    $q->correctAnswer='d'; // Правильный вариант ответа
    $q->correctAnswerWord='в финале ЧЕ'; // Правильный вариант ответа словами
    $questions[] = $q; // Кладём вопрос в массив

    return $questions; // Возвращаем массив

}
// Функция выводящая список вопросов с вариантами ответов
function printQuestions($questions)
{
    $number = 1; // Номер вопроса
    foreach ($questions as $question) {
        echo "{$number}. {$question->text}\n\n<br>"; // Выводим номер вопроса и сам вопрос
        echo "Варианты ответов:\n<br>";
        foreach ($question->answers as $letter => $answer) {
            echo "  {$letter}. {$answer}\n<br>"; // Выводим варианты ответов
        }
        $number++; // Добавляем вопрос
    }
}

// Функция выводящая правильные ответы и набранные баллы
function checkAnswers($questions, $answers, $answersWord){
    // Проверяем, что число ответов равно числу вопросов (защищаемся от ошибки)
    if (count($questions) != count($answers)) {
        die("Число ответов и вопросов не совпадает\n<br>");
    }
    $pointsTotal = 0; // Сколько набрано баллов
    $pointsMax = 0; // Сколько можно набрать баллов при всех правильных ответах
    $correctAnswer = 0; // Сколько ответов верно
    $totalQuestions = count($questions); // Сколько всего вопросов
    for ($i = 0; $i<count($questions); $i++){
        $answerWord = $answersWord[$i]; // Текущий ответ словом
        $question = $questions[$i]; // Текущий вопрос
        $answer = $answers[$i]; // Текущий ответ
        $pointsMax += $question->points; // Считаем максимальную сумму баллов
        // Проверяем правильность ответов
        if ($answer == $question->correctAnswer) {
            $correctAnswer++; // Добавляем правильные ответы
            $pointsTotal += $question->points; // Баллов набрано
        } else {
            $number = $i + 1; // Добавляем неправильный ответ
            echo "Неправильный ответ на вопрос №{$number} ({$question->text})\n<br> Хочешь узнать ответ? <span title='{$answer}. {$answerWord}'>Наведи на этот текст</span>\n<br>";
        }
    }
    echo "Правильных ответов: {$correctAnswer} из {$totalQuestions}, баллов набрано: {$pointsTotal} из {$pointsMax}\n"; // Выводим итог
}

$questions = createQuestions();
printQuestions($questions); // Выводим список вопросов с вариантами ответов
$answers = array('a', 'b', 'd'); // Ответы
$answersWord = array('Барселона', 'пять', 'в финале ЧЕ'); // Ответы словами
checkAnswers($questions, $answers, $answersWord); // Выводим правильные ответы и набранные баллы

?>

<style>
    span{
        cursor: pointer;
    }
</style>
