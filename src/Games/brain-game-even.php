<?php

namespace php\project\lvl1\Games;

use function cli\line;
use function cli\prompt;

function braingameEven()
{
    $wrongAnswer = false;
    $userAnswer = '';
    $answer = '';
    for ($i = 0; $i < 3; ++$i) {
        $number = rand(0, 20);
        $answer = $number % 2 === 0 ? "yes" : "no";
        line('Question: %d', $number);
        $userAnswer = prompt('Your answer');
        if ($number % 2 !== 0) {
            $answer = "no";
        } else {
            $answer = "yes";
        }
        if ($answer !== $userAnswer) {
            line('Wrong!');
            $wrongAnswer = true;
            break;
        }
        line('Correct!');
    }
    return $wrongAnswer;
}
