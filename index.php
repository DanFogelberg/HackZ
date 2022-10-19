<?php

declare(strict_types = 1);

session_start();

require "style.css";
require "variables.php";
require "functions.php";

print "Hello Hackz0r";





generate_character("My Character", 15, 167);
print_r ($_SESSION['characters']);


//HTML button for rolling your character

echo "<br><br><br>";

if(array_key_exists('roll-stats', $_POST)) {
    echo "You see me rolling!";
}
else if(array_key_exists('fight', $_POST)) {
    echo "It's a fight!";
}

?>
<!-- Interactive buttons -->

<br><br><br>
<form method="post">
    <input type="submit" name="roll-stats"
        class="button" value="Roll stats" />
          
    <input type="submit" name="fight"
        class="button" value="Fight!" />
</form>

<?php 





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