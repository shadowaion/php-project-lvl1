<?php

namespace php\project\lvl1\engine;

use php\project\lvl1\Games;
use php\project\lvl1\Cli;

use function cli\line;
use function cli\prompt;

function startTheGame(int $gameNumber): void
{
    $gameEndNotSuccess = false;
    //Cli\greeting();
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    switch ($gameNumber) {
        case 1:
            line('Answer "yes" if the number is even, otherwise answer "no".');
            $gameEndNotSuccess = Games\braingameEven();
            break;
        case 2:
            line('What is the result of the expression?');
            $gameEndNotSuccess = Games\braingameCalc();
            break;
        case 3:
            line('Find the greatest common divisor of given numbers.');
            $gameEndNotSuccess = Games\braingameGCD();
            break;
        case 4:
            line('What number is missing in the progression?');
            $gameEndNotSuccess = Games\braingameProgression();
            break;
        case 5:
            line('Answer "yes" if the number is prime, otherwise answer "no".');
            $gameEndNotSuccess = Games\braingamePrime();
            break;
        default:
            break;
    }
    if ($gameEndNotSuccess === false) {
        line('Congratulations, %s!', $name);
    } else {
        line("Let's try again, %s!", $name);
    }
    line('Game over!');
}
