<?php

require_once __DIR__.'/product.php';
require_once __DIR__.'/user.php';
require_once __DIR__.'/credit_card.php';

//PRODOTTI

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

$user1 = new User(
    'Luca',
    'Rossi',
    '15/04/1992',
    'Via Emilia n. 5',
    'Milano',
);

$user1->addCreditCard(
    12345678910,
    '04/2024',
    987
); 

$user1->addCreditCard(
    10987654321,
    '05/2025',
    345
);

var_dump($user1);