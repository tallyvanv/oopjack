<?php
session_start();

class Blackjack {
    public $score = 0;

    function hit(){
        $randNum = rand(1,11);
/*        $cards = [];
        array_push($cards, $randNum);
        $_SESSION["cards"] = $cards;
        var_dump($_SESSION["cards"]);*/
        $this->score = $_SESSION["score"];
        $_SESSION["score"] = $this->score += $randNum;
        if ($this->score > 21) {
            echo "<br>LOSER";
        }
        return $_SESSION["score"];
    }

    function getScore() {
        return $_SESSION["score"];
    }
    function stand(Blackjack $player, Blackjack $dealer){
        echo "your score was". $player->getScore(). "<br>";

    }
    function surrender(){
        echo "you gave up";
    }

}

require "game.php";