<?php


namespace app\Controllers\admin;


use app\Models\Currency;
use app\Models\Order;
use app\Models\Product;
use app\Models\User;
use core\Controller;
use core\View;
use RedBeanPHP\R;

class MainController extends Controller
{
    private $user;
    private $order;
    private $product;
    private $currency;

    public function __construct()
    {
        $this->product = new Product();
        $this->order = new Order();
        $this->user = new User();
        $this->currency = new Currency();
    }

    public function index(){

        $countOrder = $this->order->count('orders');
        $countUser = $this->user->count('users');
        $countCurrency = $this->currency->count('currency');
        $countProduct = $this->product->count('products');

        View::render('admin/main/index', ['countOrder' => $countOrder, 'countUser' => $countUser, 'countCurrency'=> $countCurrency, 'countProduct' => $countProduct]);
    }

}