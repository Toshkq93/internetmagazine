<?php


namespace app\Controllers;


use app\Models\Order;
use core\Controller;
use RedBeanPHP\R;

class OrderController extends Controller
{
    private $order;

    public function __construct()
    {
        $this->order = new Order();
    }

    public function save()
    {
        $data = removeHtml($_POST);
        $data['user_id'] = $_SESSION['user']['id'];
        $data['currency'] = $_SESSION['cart.currency']['code'];
        $order_id = $this->order->saveOrder($data);
        $products = $_SESSION['cart'];

        if ($this->order->saveOrderProduct($products, $order_id)){
            unset($_SESSION['cart']);
            unset($_SESSION['cart.qty']);
            unset($_SESSION['cart.sum']);
            unset($_SESSION['cart.currency']);
            $_SESSION['success'] = 'Спасибо за Ваш заказ. В ближайшее время с Вами свяжется менеджер для согласования заказа';
            redirect(PATH);
        }

    }

}