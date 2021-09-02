<!-- Provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping. Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito... $c = new CreditCard(..); $user->insertCreditCard($c);
BONUS: Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->

<?php

require_once 'Spice.php';
require_once 'Tea.php';
require_once 'User.php';
require_once 'CreditCard.php';

/* create users */
$u1 = new User(1, "Pippo", "Pappo", "Via 123");
$u2 = new User(2, "Pluto", "Bo", "Via 234");
$u3 = new User(3, "Rosa", "Gialla", "Via 456");
$u4 = new User(4, "Fumo", "Scuro", "Via 765");
$u5 = new User(5, "Acqua", "Blu", "Via 13");
$u5 -> premium = true;

/* create spices */
$s1 = new Spice("Smoked Paprika Hot", 32.5, "Paprika", "Spain");
$s1->spicy_lvl = 4;
$s2 = new Spice("Smoked Paprika Mild", 30, "Paprika", "Spain");
$s2->spicy_lvl = 2;
$s3 = new Spice("Hungarian Paprika 'Noble Sweet'", 36.3, "Paprika", "Hungary");
$s3->spicy_lvl = 1;
$s4 = new Spice("Kampot Black Pepper", 42, "Black Pepper", "Cambodia");
$s4->spicy_lvl = 2;
$s5 = new Spice("Kampot White Pepper", 38.5, "White Pepper", "Cambodia");
$s5->spicy_lvl = 3;
$s6 = new Spice("Aleppo Red Pepper Flakes", 52.3, "Chili Pepper", "Turkey");
$s6->spicy_lvl = 6;
$s7 = new Spice("Cayenne Pepper", 45.2, "Chili Pepper", "French Guiana");
$s7->spicy_lvl = 7;
$s8 = new Spice("Habanero Powder", 60.4, "Chili Pepper", "Mexico");
$s8->spicy_lvl = 9;

/* create teas */
$t1 = new Tea("Ceylon", 80, "Black Tea", "Sri Lanka");
$t2 = new Tea("Darjeeling", 95, "Black Tea", "India");
$t3 = new Tea("Oolong", 105, "Green Tea", "China", 75);
$t4 = new Tea("Matcha", 330, "Green Tea", "Japan", 45);
$t5 = new Tea("Chamomile", 75, "Herbal Tea", "Egypt");
$t6 = new Tea("Rooibos", 65, "Rooibos Tea", "South Africa");
$t7 = new Tea("White Peony", 160, "White Tea", "China", 60);

/* create credit card */
try {
    $cc1 = new CreditCard("0000111122223333", "2020-11");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}



$allUsers = [$u1, $u2, $u3, $u4, $u5];
$allTea = [$t1, $t2, $t3, $t4, $t5, $t6, $t7];
$allSpices = [$s1, $s2, $s3, $s4, $s5, $s6, $s7, $s8];
$allProducts = array_merge($allTea, $allSpices);

$activeUser = $u5;

if($activeUser->premium) {
    array_map('applyDiscount', $allProducts);
}

function applyDiscount($el) {
    return $el->price*=0.8;
}

/* var_dump($allSpices, $allTea, $allUsers); */


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
    
    <section id="tea">
        <h2>Tea</h2>
        <ul>
            <?php 
                foreach ($allTea as $tea) {
            ?>
                <li>
                    <h3> <?php echo $tea->name ?></h3>
                    <ol>
                        <li>Country: <?php echo $tea->country_origin ?></li>
                        <li>Type: <?php echo $tea->type ?></li>
                        <li>Quantity: <?php echo $tea->grams ?>g</li>
                    </ol>
                    <h4><?php echo $tea->price ?> €</h4>
                </li>
            <?php
                }
            ?>
        </ul>
    </section>

    <section id="spices">
        <h2>Spices</h2>
        <ul>
            <?php 
                foreach ($allSpices as $spice) {
            ?>
                <li>
                    <h3> <?php echo $spice->name ?></h3>
                    <ol>
                        <li>Country: <?php echo $spice->country_origin ?></li>
                        <li>Spice Level: <?php echo $spice->spicy_lvl ?> / 10</li>
                        <li>Quantity: <?php echo $spice->grams ?>g</li>
                    </ol>
                    <h4><?php echo $spice->price ?> €</h4>
                </li>
            <?php
                }
            ?>
        </ul>
    </section>
    
</body>
</html>