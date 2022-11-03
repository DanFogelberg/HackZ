<?php

declare(strict_types=1);

if (isset($playerCharacter)) { ?>
    <h2>Name: <?= $playerCharacter ?> </h2>
    <h3>Health: <?= $characters[$playerCharacter]["health"] ?> Strength: <?= $characters[$playerCharacter]["strength"] ?></h3>



<?php }
