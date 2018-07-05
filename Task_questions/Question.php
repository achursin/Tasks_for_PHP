<?php
class Question
{
    public $text;                // Текст вопроса
    public $points;              // Число баллов
    public $answers = [];        // Варианты ответов
    public $correctAnswer;       // Правильный ответ

    public function __construct($text, $points,$answers, $correctAnswer)
    {
        $this->text = $text;
        $this->points = $points;
        $this->answers = $answers;
        $this->correctAnswer = $correctAnswer;
    }
}

?>
