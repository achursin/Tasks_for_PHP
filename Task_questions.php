<?php
class Question
{
    public $text;                // Текст вопроса
    public $points;              // Число баллов
    public $answers;             // Варианты ответов
    public $correctAnswer;       // Правильный ответ

    public function __construct($text, $answers, $correctAnswer)
    {
        $this->text = $text;
        $this->answers = $answers;
        $this->correctAnswer = $correctAnswer;
    }

    function createQuestions(){
    $questions = [];

    $myobj = new Question;
    $myobj->text="В какой команде играет Месси?";
    $myobj->points=5;
    $myobj->answers= array('a' => 'Барселона', 'b' => 'Бавария', 'c' => 'Манчестер Сити', 'd' => 'ПСЖ');
    $myobj->correctAnswer='a';
    $questions[] = $myobj;

    $myobj = new Question;
    $myobj->text="Сколько золотых мячей у Месси?";
    $myobj->points=10;
    $myobj->answers= array('a' => 'один', 'b' => 'три', 'с'=>'пять', 'd'=>'шесть');
    $myobj->correctAnswer='c';
    $questions[] = $myobj;

    $myobj = new Question;
    $myobj->text="В финале какого турнира не играл Месси?";
    $myobj->points=15;
    $myobj->answers=array('a'=>'в финале ЛЧ', 'b' => 'в финале КОНМЕБОЛ', 'c'=>'в финале кубка Испании','d'=>'в финале ЧЕ');
    $myobj->correctAnswer='d';
    $questions[] = $myobj;

    return $questions; // Возвращаем массив
    }

    function printQuestions($questions){
    $number = 1;
    foreach ($questions as $key => $question) {
        echo nl2br("{$number}. {$question->text}\n");
        echo nl2br("Варианты ответов:\n");
                foreach ($this->answers as $letter => $answer) {
            echo nl2br("{$letter}. {$answer}\n");
            }
        $number++;
        }
    }
}

$questions = createQuestions();
printQuestions($questions);
