<?php


namespace app\Controllers\admin;


use app\Models\Order;
use core\Controller;
use core\View;

class OrderController extends Controller
{
    private $order;

    public function __construct()
    {
        $this->order = new Order();
    }

    public function index()
    {
        $orders = $this->order->getOrders();
        View::render('admin/order/index', ['orders' => $orders]);
    }

}