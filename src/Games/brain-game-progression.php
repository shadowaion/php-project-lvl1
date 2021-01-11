<?php

namespace php\project\lvl1\Games;

use function cli\line;
use function cli\prompt;

function braingameProgression(): bool
{
    $wrongAnswer = false;
    $userAnswer = 0;
    $rightAnswer = 0;
    $progression = [];
    $progressionStep = 0;
    $progressionSize = 0;
    $progressionStart = 0;
    $hiddenElement = 0;
    for ($i = 0; $i < 3; ++$i) {
        echo 'Question: ';
        $progression = [];
        $progressionStep = rand(1, 10);
        $progressionSize = rand(5, 10);
        $progressionStart = rand(1, 50);
        $hiddenElement = rand(0, $progressionSize - 1);
        for ($j = 0; $j < $progressionSize; ++$j) {
            $progression[] = $progressionStart + ($j * $progressionStep);
            if ($j === $hiddenElement) {
                $rightAnswer = $progression[$j];
                echo ".. ";
            } else {
                echo "{$progression[$j]} ";
            }
        }
        echo "\n";
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
