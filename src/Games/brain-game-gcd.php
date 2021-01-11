<?php

namespace php\project\lvl1\Games;

use function cli\line;
use function cli\prompt;

function braingameGCD(): bool
{
    $wrongAnswer = false;
    $userAnswer = 0;
    $rightAnswer = 0;
    for ($i = 0; $i < 3; ++$i) {
        $rightAnswer = 0;
        while ($rightAnswer <= 1) {
            $firstNumber = rand(0, 100);
            $secondNumber = rand(0, 100);
            for ($j = $firstNumber; $j > 0; --$j) {
                if (($firstNumber % $j === 0) && ($secondNumber % $j === 0)) {
                    $rightAnswer = $j;
                    break;
                }
            }
        }
        line('Question: %d %d', $firstNumber, $secondNumber);
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
