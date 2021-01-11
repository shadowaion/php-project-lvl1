<?php

namespace php\project\lvl1\Games;

use function cli\line;
use function cli\prompt;

function braingameCalc(): bool
{
    $wrongAnswer = false;
    $userAnswer = 0;
    $rightAnswer = 0;
    $operation = '';
    for ($i = 0; $i < 3; ++$i) {
        $firstNumber = rand(0, 30);
        $secondNumber = rand(0, 30);
        switch (rand(0, 2)) {
            case 0:
                $operation = '+';
                $rightAnswer = $firstNumber + $secondNumber;
                break;
            case 1:
                $operation = '-';
                $rightAnswer = $firstNumber - $secondNumber;
                break;
            case 2:
                $operation = '*';
                $rightAnswer = $firstNumber * $secondNumber;
                break;
        }
        line('Question: %d %s %d', $firstNumber, $operation, $secondNumber);
        $userAnswer = (int)prompt('Your answer');
        if ($userAnswer !== $rightAnswer) {
            line("'{$userAnswer}' is wrong answer! ;(. Correct answer was '{$rightAnswer}'.");
            $wrongAnswer = true;
            break;
        }
        line('Correct!');
    }
    return $wrongAnswer;
}
