<?php


namespace app\Controllers;


use app\Models\Currency;
use core\Controller;

class CurrencyController extends Controller
{
    private $currency;

    public function __construct()
    {
        $this->currency = new Currency();
    }

    public function change()
    {
        $currency = removeHtmlStr($_GET['curr']);
        if ($currency) {
            $curr = $this->currency->getCurrency($currency);
            if (!empty($curr)) {
                setcookie('currency', $currency, time()+3600);

            }
        }
        redirect();
    }

}