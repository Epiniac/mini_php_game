<?php

require_once 'personnage.php';
require_once 'combat.php';

$combat = new Combat;

$j1 = new Personnage('joueur 1');
$j2 = new Personnage('joueur 2');

$combat -> prendrePart($j1,$j2);

$combat -> seDerouler();


