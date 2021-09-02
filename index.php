<!-- Provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping. Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito... $c = new CreditCard(..); $user->insertCreditCard($c);
BONUS: Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->

<?php

require_once 'Spice.php';
require_once 'User.php';

/* create spices */
$s1 = new Spice("Smoked Paprika Hot",  2.90, "Spain");
$s2 = new Spice("Smoked Paprika Mild", 2.60, "Spain");
$s3 = new Spice("Hungarian Paprika 'Noble Sweet'", 3.10, "Hungary");
$s4 = new Spice("Kampot Black Pepper", 5.90, "Cambodia");
$s5 = new Spice("Kampot White Pepper", 7.90, "Cambodia");
$s6 = new Spice("Aleppo Red Pepper Flakes", 4.90, "Turkey");
$s7 = new Spice("Cayenne Pepper", 3.90, "French Guiana");
$s8 = new Spice("Habanero Powder", 6.10, "Mexico");


/* create users */
$u1 = new User(1, "Pippo", "Pappo", "Via 123");
$u2 = new User(1, "Pluto", "Bo", "Via 234");
$u3 = new User(1, "Rosa", "Gialla", "Via 456");
$u4 = new User(1, "Fumo", "Scuro", "Via 765");
$u5 = new User(1, "Acqua", "Blu", "Via 13");

$spices = [$s1, $s2, $s3, $s4, $s5, $s6, $s7, $s8];
$users = [$u1, $u2, $u3, $u4, $u5];

var_dump($spices, $users);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
</head>
<body>
    
</body>
</html>