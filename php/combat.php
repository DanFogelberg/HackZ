<?php

declare(strict_types=1);
?>


You are in a dangerous battle! Scary stuff.

<!-- Add enemy stats and situation. Possibly different options -->


<form method="post">
    <input type="submit" name="fight" class="button" value="Fight!" />
</form>




<?php foreach ($characters as $name => $character) {
    if ($character["type"] === "enemy") { ?> You are fighting <?= $name ?>. His health is <?= $character["health"] ?> and his strength is <?= $character["strength"] ?>

<?php }
}
