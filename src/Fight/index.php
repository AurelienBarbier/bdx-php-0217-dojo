<?php
require 'Worm.php';
require 'Arena.php';
$wormy = new Worm(2, 6, 'Mau\'ice');
$asticot = new Worm(1, 10, 'José');

$thunderDome = new Arena($wormy, $asticot);
echo $thunderDome->fightMaggots();


