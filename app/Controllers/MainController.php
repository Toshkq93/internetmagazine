<?php


namespace app\Controllers;


use app\Models\Arrivals;
use app\Models\Currency;
use app\Models\Sale;
use core\Controller;
use core\View;

class MainController extends Controller
{
    private $arrivals;
    private $currency;
    private $sale;

    public function __construct()
    {
        $this->arrivals = new Arrivals();
        $this->currency = new Currency();
        $this->sale = new Sale();
    }

    public function index()
    {
        $arrivals = $this->arrivals->getArrivals();
        $currencies = $this->currency->getCurrencies();
        $salies = $this->sale->getSalies();
        View::render('main/index',
            ['arrivals' => $arrivals,
                'currencies' => $currencies,
                'salies' => $salies]);
    }

}