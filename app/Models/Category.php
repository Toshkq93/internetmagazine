<?php


namespace app\Models;


use core\Model;
use RedBeanPHP\R;

class Category extends Model
{
    public function getCategories()
    {
        return R::getAssoc('SELECT * FROM categories');
    }

    public function getCategoryAlias($alias)
    {
        return R::findOne('categories', 'alias_category = ?', [$alias]);
    }

}