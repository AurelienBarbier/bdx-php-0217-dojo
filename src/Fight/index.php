<?php
require 'Worm.php';
require 'Arena.php';
$wormy = new Worm("Wormy ", 5);
$asticot = new Worm("Asticot ", 10);


echo Arena::fight($wormy, $asticot) . ' win !!';