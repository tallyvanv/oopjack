<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Blackjack {
    public $score;

    public function __construct(int $score) {
        $this->score = $score;
    }

    public function hit(){
        $randNum = rand(1,11);
        $this->score += $randNum;
        echo $this->score;

/*        $cards = [];
        array_push($cards, $randNum);
        $_SESSION["cards"] = $cards;
        var_dump($_SESSION["cards"]);*/

/*        if ($this->score > 21) {
            echo "<br>LOSER";
        }*/

    }

    public function getScore(): int {
        return $this->score;
    }

    function stand(Blackjack $player, Blackjack $dealer){
        $playTotal = $player->getScore();

        do {
            $dealer->hit();
            $_SESSION["dealer"] = $dealer->getScore();
        } while ($dealer->getScore() < 15);


        if ($dealer->getScore() > 21) {
            echo "dealer done";
        } elseif ($dealer->getScore() >= $playTotal && $dealer->getScore() <= 21) {
            echo "dealer wins";
        } elseif ($dealer->getScore() < $playTotal) {
            echo "you win, dealer loses";
        }
    }
    function surrender(){
        die("you gave up");
        session_destroy();
    }

}