<?php
include ('Ucenik.php');
$ucenik = new Ucenik();

$ucenik1 = new Ucenik();
$ucenik1->ime = "Marko";
$ucenik1->prezime = "Markic";
$ucenik1->prosjek = "5";
$ucenik->lista[] = $ucenik1;

$ucenik2 = new Ucenik();
$ucenik2->ime = "Ivo";
$ucenik2->prezime = "Ivic";
$ucenik2->prosjek = "4";
$ucenik->lista[] = $ucenik2;

$ucenik3 = new Ucenik();
$ucenik3->ime = "Ana";
$ucenik3->prezime = "Anic";
$ucenik3->prosjek = "4.6";
$ucenik->lista[] = $ucenik3;

echo $ucenik->Ispis();

?>