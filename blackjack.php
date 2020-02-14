<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Blackjack {
    public $score = 0;

    function hit(){
        $randNum = rand(1,11);
/*        $cards = [];
        array_push($cards, $randNum);
        $_SESSION["cards"] = $cards;
        var_dump($_SESSION["cards"]);*/
        $this->score += $randNum;
        if ($this->score > 21) {
            echo "<br>LOSER";
        }
        echo $this->score;
    }

    function stand(){
        echo "dealer's turn now";

    }
    function surrender(){
        echo "you gave up";
    }

}