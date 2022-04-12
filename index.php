<?php

require_once __DIR__.'/product.php';

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