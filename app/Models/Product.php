<?php


namespace app\Models;


use core\Model;
use RedBeanPHP\R;

class Product extends Model
{

    public function getProductsHit()
    {
        return R::findAll('products', 'WHERE hit = 1');
    }

    public function getArrivals()
    {
        return R::findAll('products', 'WHERE arrivale_product = 1');
    }

    public function getSalies()
    {
        return R::findAll('products', 'WHERE sale_product = 1');
    }

    public function getProductAlias($alias)
    {
        return R::getRow('SELECT * FROM products WHERE alias_product = ?', [$alias]);
    }

    public function getprodId($id){
        return R::findOne('products', 'WHERE id = ?', [$id]);
    }

}