<?php

require_once __DIR__. '/cart.php';

class Order extends Cart {
    
    public $user;
    public $total;
    public $discount;

    function __construct ($_shopping_cart = [], $_user = '', $_total = 0, $_discount = 0) {

        parent::__construct($_shopping_cart = []);
        $this->user = $_user;
        $this->total = $_total;
        $this->discount = $_discount;

    }

}
