<?php //To do: Generation and handling of fights.





?>

You are out on a dangerous adventure. Your name is <?= $playerCharacter ?> and you have <?= $characters[$playerCharacter]["health"] ?> health!



<form method="post">
    <input type="submit" name="fight" class="button" value="Fight!" />
</form>