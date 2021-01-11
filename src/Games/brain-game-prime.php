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
        if ($number === 0 || $number === 1) {
            $rightAnswer = "no";
        } else {
            for ($j = 2; $j < sqrt($number); ++$j) {
                if ($number % $j === 0) {
                    $rightAnswer = "no";
                    break;
                }
            }
        }
        line('Question: %d', $number);
        $userAnswer = prompt('Your answer');
        if ($rightAnswer !== $userAnswer) {
            line('Wrong!');
            $wrongAnswer = true;
            break;
        }
        line('Correct!');
    }
    return $wrongAnswer;
}
