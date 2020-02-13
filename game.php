<?php
$player = new Blackjack();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["test"] == 1) {
        $player->hit();
    }
    if ($_POST["test"] == 2) {
        $player->stand();
    }
    if ($_POST["test"] == 3) {
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
    <button type="submit" name="test" id="test" value="1">Hit me</button>
    <button type="submit" name="test" id="test" value="2">Stand</button>
    <button type="submit" name="test" id="test" value="3">Surrender</button>
</form>
</body>
</html>


