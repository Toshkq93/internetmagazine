<?php


namespace app\Models;


use core\Model;
use RedBeanPHP\R;

class Attribute extends Model
{

    public function getAttrGroup()
    {
        return R::getAssoc('SELECT * FROM attribute_group');
    }

    public function getAttrs()
    {
        $attributes = \R::getAssoc('SELECT * FROM attribute_value');
        $attrs = [];
        foreach ($attributes as $k => $v) {
            $attrs[$v['attr_group_id']][$k] = $v['value'];
        }
        return $attrs;
    }

    public function getFilterProd($filter)
    {
        $products = R::getAssoc("SELECT product_id FROM attribute WHERE attr_value IN ($filter)");
        $sql_part = "AND id IN(" . implode(',',$products). ")";
        return $sql_part;
    }

    /*public function getfilterProd($filter){
        return R::getAssoc("SELECT product_id, img_product, price_product FROM attribute JOIN products ON attribute.product_id = products.id WHERE attr_value = ?", [$filter]);
    }*/

}