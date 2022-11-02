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
    ["message" => "You take a quiet walk through the park. The weather is really nice.", "enemy" => false]
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
