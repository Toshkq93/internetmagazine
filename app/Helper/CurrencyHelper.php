<?php


namespace app\Helper;


use app\Models\Currency;

class CurrencyHelper
{
    protected $tlp;
    protected $currencies;
    protected $currency;
    protected $model_currency;

    public function __construct()
    {
        $this->model_currency = new Currency();
        $this->tlp = APP . '/Views/currency/currency.php';
        $this->currencies = $this->model_currency->getCurrencies();
        $this->getCurrency($this->currencies);
        $this->run();
    }

    protected function run()
    {
        echo $this->getHtml();
    }

    public function getCurrency($currencies)
    {
        if (isset($_COOKIE['currency']) && array_key_exists($_COOKIE['currency'], $currencies)){
            $key = $_COOKIE['currency'];
        }else{
            $key = key($currencies);
        }
        $this->currency = $currencies[$key];
        $this->currency['code'] = $key;
        return $this->currency;
    }

    protected function getHtml()
    {
        ob_start();
        require_once $this->tlp;
        return ob_get_clean();
    }

}