<?php
// This is a very basic rpg game with very basic combat. The player makes choices by pressing buttons which reload the page. "resolvePost.php" resolves logic based on the most recent button press.

// Then this file calculates which game screen is appropriate and will require() a corresponding .php file. For example: combat.php or adventure.php
declare(strict_types=1);
session_start();
// session_destroy();
require "php/variables.php";
require "php/functions.php";
require __DIR__ . "/php/resolvePost.php"; //All function calls for game logic are called here.
require __DIR__ . "/php/header.php"



?>

<?php
//Different game screens. Prints text and buttons.
if (!playerAlive()) { //If no player character exists: Roll a new one
    require "php/characterGeneration.php";
} else if ($inCombat) {
    require "php/playerInfo.php";
    require "php/combat.php";
} else {
    require "php/playerInfo.php";
    require "php/adventure.php";
}


?>

<?php

/*

To do:

1. Character generation button.


Program flow:

1. Generate player character
2. Render world with options
3. Buttons change states for what is rendered and what logic happens, also create new characters for combat etc etc
4. Player keeps pressing buttons until player character dies(Or they win?)
5. Game over screen/Restart




*/
