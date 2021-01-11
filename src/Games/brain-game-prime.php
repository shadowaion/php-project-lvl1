<?php

namespace php\project\lvl1\Games;

use function cli\line;
use function cli\prompt;

function braingamePrime(): bool
{
    $wrongAnswer = false;
    $userAnswer = '';
    $rightAnswer = '';
    for ($i = 0; $i < 3; ++$i) {
        $number = rand(0, 100);
        $rightAnswer = "yes";
        for ($j = 2; $j < $number - 1; ++$j) {
            if ($number % $j === 0) {
                $rightAnswer = "no";
                break;
            }
        }
        line('Question: %d', $number);
        $userAnswer = prompt('Your answer: ');
        if ($rightAnswer !== $userAnswer) {
            line('Wrong!');
            $wrongAnswer = true;
            break;
        }
        line('Correct!');
    }
    return $wrongAnswer;
}
