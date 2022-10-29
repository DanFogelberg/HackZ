<?php

declare(strict_types=1);


//Array holds all characters. More are added as they appear. 
if (isset($_SESSION['characters'])) $characters = $_SESSION['characters'];

//Key for player character
if (isset($_SESSION['playerCharacter'])) $playerCharacter = $_SESSION['playerCharacter'];
