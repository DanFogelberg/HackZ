<?php
declare(strict_types = 1);


//Roll a new character and add to array. For creating enemies, player character etc etc
function generate_character(string $name, int $strength, int $agility, int $health)
{
    $_SESSION['characters'][$name] = ["strength" => $strength, "agility" => $agility, "health" => $health];
}


//Renders header with hit points, stats, etc etc
function render_header(){

}


//Returns true if dead
function take_damage(int $damage, array &$target):bool{
    $target["health"] -= $damage;
    if($target["health"] <= 0)
    {
        return true;
    }else return false;




}
