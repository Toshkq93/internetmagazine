<?php


namespace app\Models;


use core\Model;
use RedBeanPHP\R;

class Currency extends Model
{
    public function getCurrencies()
    {
        return R::getAssoc('SELECT * FROM currency ORDER BY base_currency DESC');
    }

}