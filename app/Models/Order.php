<?php


namespace app\Models;


use core\Model;
use RedBeanPHP\R;

class Order extends Model
{

    public function saveOrder($data){
        $order = R::dispense('orders');
        foreach ($data as $name => $value) {
            $order->$name = $value;
        }
        $order_id = R::store($order);
        return $order_id;
    }

    public function saveOrderProduct($products, $order_id){
        foreach($products as $product_id => $product){
            $product['order_id'] = $order_id;
            $product_id = (int)$product_id;
            R::exec("INSERT INTO order_products (order_id, product_id, qty, title, price) VALUES ('{$product['order_id']}', '{$product_id}', '{$product['qty']}', '{$product['title']}', {$product['price']})");
        }
        return true;
    }

}