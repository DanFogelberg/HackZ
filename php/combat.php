<?php

declare(strict_types=1);
//Combat page. Shows a message about the situation and prints a button for fighting
showMessage($message);

?>

<form method="post">
    <input type="submit" name="fight" class="button" value="Fight!" />
    <input type="submit" name="quickFight" class="button" value="Quick Fight!" />
</form>




<?php foreach ($characters as $name => $character) {
    if ($character["type"] === "enemy") { ?> You are fighting <?= $name ?>. His health is <?= $character["health"] ?> and his strength is <?= $character["strength"] ?>

<?php }
}
