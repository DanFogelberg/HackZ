<?php

declare(strict_types=1);

//All adventure scenes in the game. To do: CONTAINS:
$adventures = [
    [
        "message" => "You walk to the grand forests of doom. Suddenly a bandit approaches you with murderous intent.", "enemy" =>
        ["name" => "Bandit", "strength" => rand(5, 10), "health" => rand(10, 150)]
    ],
    [
        "message" => "Up in the misty mountains you are attacked by a murderous dragon!", "enemy" =>
        ["name" => "Murderous Dragon of Doom", "strength" => 255, "health" => 255]
    ],
    [
        "message" => "For some reason you are fighting rats in a cellar.", "enemy" =>
        ["name" => "Rats", "strength" => rand(1, 3), "health" => rand(1, 20)]
    ],
    [
        "message" => "You went for a few tankards of ale at the local tavern. Once you were a bit drunk you started looking for a fight. A drunken barbarian decided to take you up on the offer.", "enemy" =>
        ["name" => "Drunken Barbarian", "strength" => rand(12, 20), "health" => rand(10, 100)]
    ],
    ["message" => "You take a quiet walk through the park. The weather is really nice.", "enemy" => false],
    ["message" => "You take a nap. It lasts just long enough for you to feel perfectly rested.", "enemy" => false],
    ["message" => "It's raining outside. You decide to stay in. You play some solitaire to pass the time.", "enemy" => false],
];


//Array holds all characters. More are added as they appear.
if (isset($_SESSION['characters'])) {
    $characters = $_SESSION['characters'];
}


//Key for player character
if (isset($_SESSION['playerCharacter'])) $playerCharacter = $_SESSION['playerCharacter'];

if (isset($_SESSION["inCombat"])) {
    $inCombat = $_SESSION["inCombat"];
} else $inCombat = false;

if (isset($_SESSION["target"])) $target = $_SESSION["target"];
