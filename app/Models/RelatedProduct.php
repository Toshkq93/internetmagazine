<?php


namespace app\Models;


use core\Model;
use RedBeanPHP\R;

class RelatedProduct extends Model
{

    public function getRelatedProduct($id)
    {
        return R::getAll('SELECT * FROM related_product JOIN products ON products.id = related_product.related_id WHERE related_product.product_id = ?', [$id]);
    }


}