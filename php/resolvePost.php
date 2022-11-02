<?php

declare(strict_types=1);
//Resolves all logic from button presses etc



//CHARACTER GENERATION
//Generate random player character
if (array_key_exists('roll-stats', $_POST) && !empty($_POST["name"])) {
    generate_character($_POST["name"], rand(3, 18), rand(3, 18), 15, "playerCharacter");
    $message = "This is the end times dear child. You are the great hero $_POST[name] and it is up to you to save the world from the evil WU22 overlord Hasse.";
}


//ADVENTURE
//Generate an adventure scene
if (array_key_exists('adventure', $_POST)) {
    $adventure = createAdventure();
    $message = $adventure["message"];
    if ($adventure["enemy"] !== false) { //If the adventure contains an enemy, enter combat
        generate_character("Guran", 10, 10, 10);
        $target = "Guran"; //Target of fight button
        $_SESSION["target"] = $target;
        $inCombat = true;
        $_SESSION["inCombat"] = $inCombat;
    }
}



//COMBAT
//Combat happens
if (array_key_exists('fight', $_POST)) {
    fight($characters[$playerCharacter], $characters[$target]);
    $_SESSION["characters"] = $characters;
    $message  = "You attack the horrible $target. You deal " . $characters[$playerCharacter]["strength"] . " damage. Fighting ferociously he strikes you back for " . $characters[$target]["strength"] . " damage.";
    //If enemy dies, combat is over.
    if (isDead($characters[$target])) {
        $message .= "<br> This means you have managed to murder the poor $target. Well done!";
        unset($characters[$target]);
        $target = false;
        $inCombat = false;
        $_SESSION["inCombat"] = $inCombat;
    }


    //If player is dead, remove all characters, print death message. Game will return to character creation.

    if (!playerAlive()) { ?>
        <h1>Tragedy has struck!</h1>
        <p>The great hero <?= $playerCharacter ?> is no more. I am so sorry.</p>

<?php
        unset($characters);
        unset($_SESSION["characters"]);
        unset($playerCharacter);
        unset($_SESSION["playerCharacter"]);
        $target = false;
        $inCombat = false;
        $_SESSION["inCombat"] = $inCombat;
    }
}
