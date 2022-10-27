<?php //To do: Make character generation its own page to reduce clutter
declare (strict_types = 1);
session_start();

require "style.css";
require "variables.php";
require "functions.php";




if(array_key_exists('roll-stats', $_POST)) {
    echo "You see me rolling!";
    generate_character("DinKaraktärsNamnHär", rand(3,18), rand(3,18), 100);


}


?>
<br><br><br>
<form method="post">
    <input type="submit" name="roll-stats"
        class="button" value="Roll stats" />
          
    <input type="submit" name="fight"
        class="button" value="Fight!" />
</form>




