<?php


namespace app\Helper;


use app\Models\Currency;

class CurrencyHelper
{
    protected $tpl;
    public $currencies;
    public $currency;

    public function __construct()
    {
        $this->currency = new Currency();
        $this->tpl = APP . '/Views/currency/index.php';
        $this->currencies = $this->currency->getCurrencies();
        $this->run();
    }

    protected function run()
    {
        $currencies = $this->currencies;
        $currency = $this->currency;
        $this->getHtml();
    }

    public static function getCurrency($currencies)
    {
        if (isset($_COOKIE['currency']) && array_key_exists($_COOKIE['currency'], $currencies)) {
            $key = $_COOKIE['currency'];
        } else {
            $key = key($currencies);
        }
        $currency = $currencies[$key];
        $currency['code'] = $key;
        return $currency;
    }

    public function getHtml()
    {
        ob_start();
        require_once $this->tpl;
        return ob_get_clean();
    }

}