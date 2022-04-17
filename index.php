<?php

require_once __DIR__.'/product.php';
require_once __DIR__.'/registered.php';
require_once __DIR__.'/guest.php';
require_once __DIR__.'/credit_card.php';
require_once __DIR__.'/cart.php';
require_once __DIR__.'/order.php';


//Prodotti -------------------

echo 'PRODOTTI';

$doghouse = new Product(
    'Cuccia',
    'Cuccia da interno',
    'Cane',
    'Puppy',
    32.55
);

$cat_food = new Product(
    'Cibo',
    'Crocchette',
    'Gatto',
    'Friskies',
    4.99
);

$guineaPig_food = new Product(
    'Cibo',
    'Fieno',
    'Porcellino d\'india',
    'Hey Hay',
    3.75
);

$dog_antiFlea = new Product(
    'Medicale',
    'Pipette',
    'Cane',
    'Advantix',
    24.90
);

var_dump($doghouse, $cat_food, $guineaPig_food, $dog_antiFlea);


// Carrello utente registrato --------------------

echo 'CARELLO utente registrato';

$cart1 = new Cart();

$cart1->addToCart($doghouse);
$cart1->addToCart($dog_antiFlea);
$cart1->addToCart($guineaPig_food);

var_dump($cart1);

// USER registrato ------------

echo 'UTENTE REGISTRATO';

$user1 = new Registered(
    'Marta',
    'Bianchi',
    '18/06/1990',
    'marta.bianchi@gmail.com',
    'Via Verdi n. 12 - Bologna',
);

$user1->addCreditCard(
    12345678910,
    '04/24',
    987
); 

$user1->addCreditCard(
    10987654321,
    '05/25',
    345
);

$user1->cart = $cart1;
$user1->total = $user1->totalPrice($cart1);
$user1->discount = $user1->appliedDiscount($user1->total);

var_dump($user1);


// Carrello utente NON registrato--------------------

echo 'CARELLO utente NON registrato';

$cart2 = new Cart();

$cart2->addToCart($dog_antiFlea);
$cart2->addToCart($doghouse);
$cart2->addToCart($cat_food);

var_dump($cart1);

// USER NON registrato ------------

echo 'UTENTE NON REGISTRATO';

$user2 = new Guest(
    'Luca',
    'Rossi',
    '15/04/1992',
    'luca.rossi@gmail.com',
    'Via Emilia n. 5 - Milano',
);

$user2->addCreditCard(
    10987654321,
    '07/25',
    234
); 

$user2->addCreditCard(
    10987654321,
    '09/27',
    890
);

$user2->cart = $cart2;
$user2->total = $user2->totalPrice($cart2);

var_dump($user2);


// Ricapitolo ordini ---------------

echo 'RICAPITOLO ORDINE UTENTE REGISTRATO:';

$order1 = new Order();

$order1->user = $user1->getFullName();
$order1->shopping_cart = $cart1->shopping_cart;
$order1->total = $user1->total;

var_dump($order1);

echo 'RICAPITOLO ORDINE UTENTE NON REGISTRATO:';

$order2 = new Order();

$order2->user = $user2->getFullName();
$order2->shopping_cart = $cart2->shopping_cart;
$order2->total = $user2->total;

var_dump($order2);






