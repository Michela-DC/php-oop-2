<?php


require_once __DIR__. '/cart.php';
require_once __DIR__. '/product.php';

class Order extends Cart {

    public $total;

    function __construct ($_shopping_cart = [], $_total = 0) {

        parent::__construct($_shopping_cart = []);
        $this->total = $_total;

    }

    public function totalPrice ($_shopping_cart) {
        $sum = 0;

        foreach($_shopping_cart as $item) {
            
            foreach($item as $el){

                $sum = $sum + $el->price; 
            }
        }

        return $sum;
    }

}