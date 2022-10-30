<?php //To do: Add enemy generation and info. Add different buttons for fighting and finding enemies.





?>
<!-- Placeholder text -->


You are out on a dangerous adventure. Your name is <?= $playerCharacter ?> and you have <?= $characters[$playerCharacter]["health"] ?> health!





<form method="post">
    <input type="submit" name="adventure" class="button" value="Search for adventure!" />
</form>
