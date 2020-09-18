<?php


namespace app\Models;


use core\Model;
use RedBeanPHP\R;

class Sale extends Model
{
    public function getSalies()
    {
        return R::getAssoc('SELECT * FROM sale');
    }

    public function getCountSalies()
    {
        return R::count('sale');
    }


}