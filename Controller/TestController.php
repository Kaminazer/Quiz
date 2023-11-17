<?php

namespace Controller;
use Model\Result;

require_once __DIR__ ."/../Model/Result.php";

class TestController
{
    public function index()
    {
        include __DIR__ . '/../View/test.php';
    }

    public function check()
    {
        $correctAnswers = [
            'q1' => '3',
            'q2' => '1',
            'q3' => '2',
            'q4' => '4',
            'q5' => '1',
            'q6' => '3',
            'q7' => '2',
            'q8' => '1 ',
        ];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $correct = 0;
            foreach ($correctAnswers as $question => $correctAnswer) {
                if ($_POST[$question] == $correctAnswer) {
                    $correct++;
                }
            }
            $total = count($correctAnswers);
            $result = new Result();
            $result->addResult($_POST['name'], $total, $correct, $total - $correct );
            include __DIR__ . '/../View/result.php';
        }
    }
}