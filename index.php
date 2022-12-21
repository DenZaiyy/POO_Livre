<?php
require 'Auteur.php';
require 'Livre.php';

$aut1 = new Auteur("Stephen", "King", "1947-09-21", "");
$aut1_livre1 = new Livre("CA", 1986, 1138, 20, $aut1);
$aut1_livre2 = new Livre("Simetierre", 1983, 374, 15, $aut1);
$aut1_livre3 = new Livre("Le Fléau", 1978, 823, 14, $aut1);
$aut1_livre4 = new Livre("Shining", 1977, 447, 16, $aut1);

$aut2 = new Auteur("Victor", "Hugo", "1802-02-26", "1885-05-22");
$aut2_livre1 = new Livre("Les Misérables", 1862, 2598, 5, $aut2);
$aut2_livre2 = new Livre("Notre-Dame de Paris", 1831, 940, 5, $aut2);
$aut2_livre3 = new Livre("Les Contemplations", 1856, 496, 3, $aut2);


echo $aut1;
echo $aut1->afficherBibliographie();
echo $aut1->calcTotalPrix();

echo '<br>' . $aut2;
echo $aut2->afficherBibliographie();
echo $aut2->calcTotalPrix();
