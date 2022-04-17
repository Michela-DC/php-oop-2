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

$guineaPig_food = new Product(
    'Cibo',
    'Fieno',
    'Porcellino d\'india',
    'Hey Hay',
    3.75
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

echo 'CARELLO:';

$cart1 = new Cart();

$cart1->addToCart($doghouse);
$cart1->addToCart($cat_food);
$cart1->addToCart($guineaPig_food);

var_dump($cart1);

// Ordine ----------------------

echo 'ORDINE:';

$order1 = new Order();

$order1->addToCart($doghouse);
$order1->addToCart($cat_food);
$order1->addToCart($guineaPig_food);
$order1->total = $order1->totalPrice($cart1);

var_dump($order1);

echo 'Totale ordine: € '. $order1->total;




