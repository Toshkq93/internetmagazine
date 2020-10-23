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

    public function getprodId($id)
    {
        return R::findOne('products', 'WHERE id = ?', [$id]);
    }

    public function search($query)
    {
        return R::getAll("SELECT * FROM products WHERE title_product LIKE ?", ["%{$query}%"]);
    }

    public function getCatProd($catId, $start, $perpage, $sql_part)
    {
        return R::find('products', "status = 1 AND category_id IN ($catId) $sql_part LIMIT $start, $perpage");
    }

    public function getCountProd($catId)
    {
        return R::count('products', "WHERE category_id IN ($catId)");
    }

}