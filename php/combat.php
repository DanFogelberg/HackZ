<?php

declare(strict_types=1);
//Combat page. Shows a message about the situation and prints a button for fighting

if (isset($message)) showMessage($message);


?>

<?php foreach ($characters as $name => $character) {
    if ($character["type"] === "enemy") { ?> <p class="combatMessage">You are fighting <?= $name ?>. His health is <?= $character["health"] ?> and his strength is <?= $character["strength"] ?></p>

<?php }
} ?>

<form method="post">
    <input type="submit" name="fight" class="button" value="Fight!" />
    <input type="submit" name="quickFight" class="button" value="Quick Fight!" />
    <input type="submit" name="run" class="button" value="Run away!(Bravely)" />
</form>
