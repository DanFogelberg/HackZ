<?php



//Roll a new character and add to array. For creating enemies, player character etc etc
function generate_character(string $name, int $strength, int $agility )
{
    $_SESSION['characters'][$name] = ["strength" => $strength, "agility" => $agility];
}


//Renders header with hit points, stats, etc etc
function render_header(){

}

