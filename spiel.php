<?php
include('class.php');


$spiel = new spiel();

$heim = "Deutschland";
$gast = "Belgien";

$spiel->setHeim($heim);
$spiel->setGast($gast);

$spiel->tor($heim);
$spiel->tor($gast);
$spiel->tor($heim);

echo $spiel->ergebnis();

?>