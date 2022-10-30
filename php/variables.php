<?php

declare(strict_types=1);

//All adventure scenes in the game. To do: CONTAINS:
$adventures = [
    ["message" => "You find nothing, just snow.", "startCombat" => true],
    ["message" => "Hello, you look lovely tonight.", "startCombat" => false]
];


//Array holds all characters. More are added as they appear.
if (isset($_SESSION['characters'])) $characters = $_SESSION['characters'];

//Key for player character
if (isset($_SESSION['playerCharacter'])) $playerCharacter = $_SESSION['playerCharacter'];

if (isset($_SESSION["inCombat"])) $inCombat = $_SESSION["inCombat"];
