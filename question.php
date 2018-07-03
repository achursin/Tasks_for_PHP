<?php
class Question
{
    public $text;                // Текст вопроса
    public $points;              // Число баллов
    public $correctAnswer;       // Правильный ответ

    public function __construct($text, $points, $correctAnswer)
    {
        $this->text = $text;
        $this->points = $points;
        $this->correctAnswer = $correctAnswer;
    }
}

?>
