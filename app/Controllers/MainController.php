<?php


namespace app\Controllers;


use app\Models\Currency;
use app\Models\Product;
use core\Controller;
use core\View;

class MainController extends Controller
{
    private $currency;
    private $product;

    public function __construct()
    {
        $this->currency = new Currency();
        $this->product = new Product();
    }

    public function index()
    {
        $arrivals = $this->product->getArrivals();
        $currency = $this->currency->getCurrency($_COOKIE['currency']);
        $products = $this->product->getProductsHit();
        $salies = $this->product->getSalies();
        View::render('main/index',
            ['arrivals' => $arrivals,
                'currency' => $currency,
                'salies' => $salies,
                'products' => $products]);
    }

}