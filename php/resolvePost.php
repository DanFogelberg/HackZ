<?php

declare(strict_types=1);
//Resolves all logic from button presses



//CHARACTER GENERATION
//Generate random player character
if (array_key_exists('roll-stats', $_POST) && !empty($_POST["name"])) {
    $name = filter_var($_POST["name"]); //A better filter should be used
    generate_character($name, rand(3, 18), 1500, "playerCharacter");
    $message = "This is the end times dear child. You are the great hero $name and it is up to you to save the world from the evil WU22 overlord Hasse.";
}


//ADVENTURE
//Generate an adventure scene
if (array_key_exists('adventure', $_POST)) {
    $adventure = createAdventure();
    $message = $adventure["message"];
    if ($adventure["enemy"] !== false) { //If the adventure contains an enemy, enter combat
        generate_character($adventure["enemy"]["name"], $adventure["enemy"]["strength"], $adventure["enemy"]["health"]);
        $target = $adventure["enemy"]["name"]; //Target of fight button
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

    checkDeaths();
}


//Combat happens until someone dies
if (array_key_exists('quickFight', $_POST)) {
    $message = "You fight to the death! ";
    while ($characters[$playerCharacter]["health"] > 0 && $characters[$target]["health"] > 0) {
        fight($characters[$playerCharacter], $characters[$target]);
        $_SESSION["characters"] = $characters;
        $message  .= "You attack the horrible $target. You deal " . $characters[$playerCharacter]["strength"] . " damage. Fighting ferociously he strikes you back for " . $characters[$target]["strength"] . " damage.";
    }

    checkDeaths();
}

if (array_key_exists('run', $_POST)) {
    leaveCombat();
    $message = "You run away! You live to fight another day, as a true hero!";
}
