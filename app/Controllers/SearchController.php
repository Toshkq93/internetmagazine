<?php


namespace app\Controllers;


use app\Models\Currency;
use app\Models\Product;
use core\Controller;
use core\View;

class SearchController extends Controller
{
    private $product;
    private $currency;

    public function __construct()
    {
        $this->product = new Product();
        $this->currency = new Currency();
    }

    public function index()
    {
        $data = removeHtmlStr($_GET['query']);
        $products = $this->product->search($data);
        $currency = $this->currency->getCurrency($_COOKIE['currency']);
        View::render('search/index', ['products' => $products, 'currency' => $currency]);
    }

}