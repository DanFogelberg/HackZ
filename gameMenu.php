<?php //To do: Add enemy generation and info. Add different buttons for fighting and finding enemies.





?>

You are out on a dangerous adventure. Your name is <?= $playerCharacter ?> and you have <?= $characters[$playerCharacter]["health"] ?> health!




<form method="post">
    <input type="submit" name="fight" class="button" value="Fight!" />
</form>