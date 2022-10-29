<?php
//This is a basic rpg game with very basic combat. 




declare(strict_types=1);
session_start();
// session_destroy();
require "style.css";
require "variables.php";
require "functions.php";
require "resolvePost.php"; //All function calls for game logic are called here.

//Each require is a different screen in the game. They mostly print a bit of text to the player and give them buttons to press. These buttons correspond to logic in "resolvePost.php".
if (!playerAlive()) { //If no player character exists: Roll a new one

    require "characterGeneration.php";
} else { //Else run main game loop

    require "gameMenu.php";
}

?>











<?php



//print_r($characters);





/*generate_character("Player", rand(1,10), rand(1,10));

foreach($_SESSION['characters'] as $key => $character)
{
    echo "$key has $character[strength] strength!";


}

*/



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