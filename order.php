<?php


require_once __DIR__. '/cart.php';
require_once __DIR__.'/registered.php';
require_once __DIR__.'/guest.php';

class Order extends Cart {
    
    public $total;

    function __construct ($_shopping_cart = [], $_total = 0) {

        parent::__construct($_shopping_cart = []);
        $this->total = $_total;

    }

    public function totalPrice ($order) {
        $sum = 0;

        foreach($order as $item) {

            if ($item !== 0){
                foreach($item as $el){
                    $sum = $sum + $el->price; 
                }
            }
        }

        return $sum;
    }

}