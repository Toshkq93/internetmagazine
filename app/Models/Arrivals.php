<?php


namespace app\Models;


use core\Model;
use RedBeanPHP\R;

class Arrivals extends Model
{
    public function getArrivals()
    {
        return R::getAssoc('SELECT * FROM arrivals');
    }

}