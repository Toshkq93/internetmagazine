<?php


namespace app\Models;


use core\Model;
use RedBeanPHP\R;

class Currency extends Model
{
    public function getCurrencies()
    {
        return R::getAssoc('SELECT code, title_currency, symbol_left, symbol_right, value_currency, base_currency FROM currency ORDER BY base_currency DESC');
    }

    public function getCurrency($currency)
    {
        return R::findOne('currency', 'code = ?', [$currency]);
    }

}