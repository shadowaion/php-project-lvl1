<?php

namespace php\project\lvl1\game\logic;

use php\project\lvl1\Cli;

use function cli\line;
use function cli\prompt;

function braingameEven()
{
    $wrongAnswer = false;
    $userAnswer = '';
    $answer = '';
    Cli\greeting();
    for ($i = 0; $i < 3; ++$i) {
        line('Answer "yes" if the number is even, otherwise answer "no".');
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
    if ($wrongAnswer !== true) {
        line('Congratulations!');
    }
    line('Game over!');
}

function braingameCalc()
{
    $wrongAnswer = false;
    $userAnswer = 0;
    $rightAnswer = 0;
    $operation = '';
    Cli\greeting();
    for ($i = 0; $i < 3; ++$i) {
        line('What is the result of the expression?');
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
            line("Let's try again!");
            $wrongAnswer = true;
            break;
        }
        line('Correct!');
    }
    if ($wrongAnswer !== true) {
        line('Congratulations!');
    }
    line('Game over!');
}

function braingameGCD()
{
    $wrongAnswer = false;
    $userAnswer = 0;
    $rightAnswer = 0;
    Cli\greeting();
    for ($i = 0; $i < 3; ++$i) {
        line('Find the greatest common divisor of given numbers.');
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
            line("Let's try again!");
            $wrongAnswer = true;
            break;
        }
        line('Correct!');
    }
    if ($wrongAnswer !== true) {
        line('Congratulations!');
    }
    line('Game over!');
}

function braingameProgression()
{
    $wrongAnswer = false;
    $userAnswer = 0;
    $rightAnswer = 0;
    $progression = [];
    $progressionStep = 0;
    $progressionSize = 0;
    $progressionStart = 0;
    $hiddenElement = 0;
    
    Cli\greeting();
    line('What number is missing in the progression?');
    for ($i = 0; $i < 3; ++$i) {
        line('Question:');
        $progression = array();
        $progressionStep = rand(1, 10);
        $progressionSize = rand(5, 10);
        $progressionStart = rand(1, 50);
        $hiddenElement = rand(0, $progressionSize);
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
            line("Let's try again!");
            $wrongAnswer = true;
            break;
        }
        line('Correct!');
    }
    if ($wrongAnswer !== true) {
        line('Congratulations!');
    }
    line('Game over!');
}

function braingamePrime()
{
    $wrongAnswer = false;
    $userAnswer = '';
    $rightAnswer = '';
    Cli\greeting();
    for ($i = 0; $i < 3; ++$i) {
        line('Answer "yes" if the number is prime, otherwise answer "no".');
        $number = rand(0, 100);
        $rightAnswer = "yes";
        for ($j = 2; $j < $number - 1; ++$j) {
            if ($number % $j === 0) {
                $rightAnswer = "no";
                break;
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
    if ($wrongAnswer !== true) {
        line('Congratulations!');
    }
    line('Game over!');
}
