<?php
session_start();

class Blackjack {
    public $score = 0;

    function hit(){
        $randNum = rand(1,11);
        $this->score = $_SESSION["score"];
        $_SESSION["score"] = $this->score += $randNum;
        echo $_SESSION["score"];
        if ($this->score > 21) {
            echo "<br>LOSER";
            $_SESSION["score"] = 0;
        }
        return $_SESSION["score"];
    }
    function stand(){
        echo "dealer's turn now";
    }
    function surrender(){
        echo "you gave up";
    }

}

require "game.php";