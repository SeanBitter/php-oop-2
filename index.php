<?php

/*
Provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L’e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
*/

require_once "classes/Product.php";
require_once "classes/Food.php";
require_once "classes/Toys.php";
require_once "classes/Beds.php";
// require_once "classes/User.php";

$food1 = new Food(
  "Croccantini",
  "Buonissimi croccantini per cani",
  6,
  "Proteine e cereali",
  "12/2023",
  "345 ogni 100 grammi",
);

$food2 = new Food(
  "Cibo in scatola",
  "Buonissimo cibo in scatola per cani",
  3,
  "Verdure, pollo",
  "12/2022",
  "412 ogni 100 grammi",
);

$toy1 = new Toys(
  "Pallina",
  "Divertente pallina per cani",
  1,
  "Verde",
  "Gomma",
  "Small",
);

$toy2 = new Toys(
  "Mucchina",
  "Bellissima mucca per il tuo cane",
  2,
  "Rosa",
  "Plastica",
  "Big",
);

$bed1 = new Beds(
  "Cuccia per cane",
  "Bellissima cuccia per cani",
  70,
  "Cuccia",
  "70 cm",
);

$bed2 = new Beds(
  "Lettino per cane",
  "Comodo letto per cani",
  70,
  "Divanetto",
  "150 cm",
);

var_dump($food1, $food2);
var_dump($toy1, $toy2);
var_dump($bed1, $bed2);


?>
