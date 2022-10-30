<?php
//Resolves all logic from button presses etc



//Generate random player character
if (array_key_exists('roll-stats', $_POST) && !empty($_POST["name"])) {
    echo "You see me rolling!";
    generate_character($_POST["name"], rand(3, 18), rand(3, 18), 100, "playerCharacter");
}

//Generate an adventure scene
if (array_key_exists('adventure', $_POST)) {
    $adventure = createAdventure();
    echo $adventure["message"];
    if ($adventure["startCombat"] === true) {
        $inCombat = true;
        $_SESSION["inCombat"] = $inCombat;
    }
}


//Combat happens
if (array_key_exists('fight', $_POST)) {
    echo "It's a fight!";

    fight($characters[$playerCharacter], $characters[$playerCharacter]);
    $_SESSION["characters"] = $characters;

    // print_r($characters[$playerCharacter]);
}
