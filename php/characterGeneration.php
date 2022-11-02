<?php

declare(strict_types=0);
//Start page and character generation.
?>


<h1> HackZ </h1>
<p>Welcome adventurer. Choose your name, roll your dice and prepare for lamentation.</p>

<form method="post">
    <label for="name">Character name:</label><br>
    <input type="text" id="name" name="name"><br>
    <input type="submit" name="roll-stats" class="button" value="Roll stats" />
</form>
