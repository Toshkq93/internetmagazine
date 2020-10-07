<?php


namespace app\Models;


use core\Model;
use RedBeanPHP\R;

class Gallery extends Model
{
    public function getGalleryProdId($id)
    {
        return R::getAssoc('SELECT * FROM gallery WHERE product_id = ?', [$id]);
    }

}