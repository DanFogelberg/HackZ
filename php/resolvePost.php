<?php
//Resolves all logic from button presses etc



//CHARACTER GENERATION
//Generate random player character
if (array_key_exists('roll-stats', $_POST) && !empty($_POST["name"])) {
    echo "You see me rolling!";
    generate_character($_POST["name"], rand(3, 18), rand(3, 18), 15, "playerCharacter");
}


//ADVENTURE
//Generate an adventure scene
if (array_key_exists('adventure', $_POST)) {
    $adventure = createAdventure();
    echo $adventure["message"];
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
    echo "It's a fight!";

    fight($characters[$playerCharacter], $characters[$target]);
    $_SESSION["characters"] = $characters;
    //If enemy dies, combat is over.
    if (isDead($characters[$target])) {
        unset($characters[$target]);
        $target = false;
        $inCombat = false;
        $_SESSION["inCombat"] = $inCombat;
    }


    //If player is dead, remove all characters, print death message. Game will return to character creation.

    if (!playerAlive()) { ?>
        <h1>Tragedy has struck!</h1>
        <p>The great hero <?= $playerCharacter ?> is no longer. I am so sorry.</p>

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
