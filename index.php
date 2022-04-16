<?php

require_once __DIR__.'/product.php';
require_once __DIR__.'/user.php';
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

var_dump($doghouse, $cat_food);


// USER registrato ------------

echo 'UTENTE REGISTRATO';

$user1 = new User(
    'Luca',
    'Rossi',
    '15/04/1992',
    'Via Emilia n. 5',
    'Milano',
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

var_dump($user1);


// Carrello --------------------

$cart1 = new Cart();

echo 'CARELLO:';

$cart1->addToCart($doghouse);
$cart1->addToCart($cat_food);

var_dump($cart1);




