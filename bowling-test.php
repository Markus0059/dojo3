<?php

require 'vendor/autoload.php';

use App\Bowling;

function bowling()
{
    $game = new Bowling();
    $gameScores = [2, 8, 10, 5];
    foreach ($gameScores as $score) {
        $game->newThrow($score);
    }
    try{
        if($game->getCurrentScore() === 16){
            echo "success ! your score is : " . $game->getCurrentScore();
        }
    }catch(Exception $error){
        echo $error->getMessage();
    }

};

bowling();
