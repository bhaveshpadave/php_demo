<?php

class GameController {

    public $game2DArray = [
        ['', '', ''],
        ['', '', ''],
        ['' ,'', ''],
    ];


    public function play ($keyPressed) {
        $playerArray = [];
        array_push($playerArray, $keyPressed);
        return $playerArray;
    }

    public function gameLogic ($userInput) {
        
        $game2DArray[i][j] = $userInput;
        
    }

}