<?php


namespace app\Models;


use core\Model;
use RedBeanPHP\R;

class Modification extends Model
{

    public function getMods($id)
    {
        return R::findAll('modification', 'product_id = ?', [$id]);
    }

    public function getModId($modId, $prodId){
        return R::findOne('modification', 'id = ? AND product_id = ?', [$modId, $prodId]);
    }

}