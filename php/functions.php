<?php

declare(strict_types=1);


//Roll a new character and add to array. For creating enemies, player character etc etc
function generate_character(string $name, int $strength, int $agility, int $health, $type = "enemy")
{
    global $characters;
    $characters[$name] = ["strength" => $strength, "agility" => $agility, "health" => $health];
    $_SESSION["characters"] = $characters;

    if ($type === "playerCharacter") {

        $_SESSION["playerCharacter"] = $name;
        global $playerCharacter;
        $playerCharacter = $_SESSION["playerCharacter"];
    }
}


//Renders header with hit points, stats, etc etc
function render_header()
{
}


//Returns true if dead
function take_damage(int $damage, array &$target): bool
{
    $target["health"] -= $damage;
    if ($target["health"] <= 0) {
        return true;
    } else return false;
}


//Characters damage eachother. Returns true if someone died.
function fight(array &$fighter1, array &$fighter2): bool
{

    $dead = take_damage($fighter2["strength"], $fighter1);
    if ($dead == true) {
        return true;
    }



    $dead = take_damage($fighter1["strength"], $fighter2);
    if ($dead == true) {
        return true;
    }


    return false;
}


function playerAlive(): bool
{
    if (isset($_SESSION["playerCharacter"]) && isset($_SESSION["characters"][$_SESSION["playerCharacter"]]["health"])) {

        if ($_SESSION["characters"][$_SESSION["playerCharacter"]]["health"] > 0) return true;
    }
    return false;
}


function createAdventure(): array
{
    global $adventures;
    $key = array_rand($adventures);
    return $adventures[$key];
}
