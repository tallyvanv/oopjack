<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "blackjack.php";
session_start();

$player = "";
$dealer = "";

if (!isset($_SESSION["player"])) {
    $player = new Blackjack();
    $_SESSION["player"] = $player;
} else {
    $player = $_SESSION["player"];
}

if (!isset($_SESSION["dealer"])) {
    $dealer = new Blackjack();
    $_SESSION["dealer"] = $dealer;
} else {
    $dealer = $_SESSION["dealer"];
}

/*$player = new Blackjack();
$dealer = new Blackjack();*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["hit"])) {
        $player->hit();
    }
    if (isset($_POST["stand"])) {
        $player->stand();
        $dealer->hit();
    }
    if (isset($_POST["surrender"])) {
        $player->surrender();
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <button type="submit" name="hit" id="test">Hit me</button>
    <button type="submit" name="stand" id="test">Stand</button>
    <button type="submit" name="surrender" id="test">Surrender</button>
</form>
</body>
</html>


