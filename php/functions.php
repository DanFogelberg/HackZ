<?php

declare(strict_types=1);


//Roll a new character and add to array. For creating both player character and enemies
function generate_character(string $name, int $strength, int $health, $type = "enemy")
{
    global $characters;
    $characters[$name] = ["strength" => $strength, "health" => $health, "type" => $type];
    $_SESSION["characters"] = $characters;

    if ($type === "playerCharacter") {

        $_SESSION["playerCharacter"] = $name;
        global $playerCharacter;
        $playerCharacter = $_SESSION["playerCharacter"];
    }
}


//Reduce target health
function take_damage(int $damage, array &$target)
{
    $target["health"] -= $damage;
}


//Characters damage each other
function fight(array &$fighter1, array &$fighter2)
{

    take_damage($fighter2["strength"], $fighter1);




    take_damage($fighter1["strength"], $fighter2);
}



function playerAlive(): bool
{
    if (isset($_SESSION["playerCharacter"]) && isset($_SESSION["characters"][$_SESSION["playerCharacter"]]["health"])) {

        if ($_SESSION["characters"][$_SESSION["playerCharacter"]]["health"] > 0) return true;
    }
    return false;
}

//For enemies
function isDead(array $target): bool
{

    if ($target["health"] <= 0) {
        return true;
    }
    return false;
}

function createAdventure(): array
{
    global $adventures;
    $key = array_rand($adventures);
    return $adventures[$key];
}


//Shows message about what has happened, based on last button press
function showMessage($message)
{
?>
    <p class="message"><?= $message ?></p>
    <?php


}


//Checks if anyone has died in the combat, adds approriate messages and removes dead characters. Resets character array on player death.
function checkDeaths()
{
    global $inCombat;
    global $target;
    global $characters;
    global $message;
    global $playerCharacter;
    if (isDead($characters[$target])) {
        $message .= "<br> This means you have managed to murder the poor $target. Well done!";
        leaveCombat();
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


function leaveCombat()
{
    global $target;
    global $inCombat;
    global $characters;
    unset($characters[$target]);
    $_SESSION["characters"] = $characters;
    $target = false;
    $_SESSION["target"] = $target;
    $inCombat = false;
    $_SESSION["inCombat"] = $inCombat;
}
