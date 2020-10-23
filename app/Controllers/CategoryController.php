<?php


namespace app\Controllers;


use app\Models\Attribute;
use app\Models\Category;
use app\Models\Currency;
use app\Models\Product;
use core\Controller;
use core\Pagination;
use core\View;
use RedBeanPHP\R;

class CategoryController extends Controller
{
    private $category;
    private $product;
    private $currency;
    private $attribute;

    public function __construct()
    {
        $this->category = new Category();
        $this->product = new Product();
        $this->currency = new Currency();
        $this->attribute = new Attribute();
    }

    public function index($alias)
    {
        $category = $this->category->getCategoryAlias($alias);

        $sql_part = '';
        if (!empty($_GET['filter'])) {
            $filter = trim(removeHtmlStr($_GET['filter']), ',');
            if ($filter){
                $sql_part = $this->attribute->getFilterProd($filter);
            }
        }
        $total = $this->product->getCountProd($category['id']);
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 6;
        $pagination = new Pagination($page, $perpage, $total);
        $start = $pagination->getStart();

        $prodCat = $this->product->getCatProd($category['id'], $start, $perpage, $sql_part);
        $currency = $this->currency->getCurrency($_COOKIE['currency']);

        if ($this->isAjax()) {
            View::loadView('category/filter', ['prodCat' => $prodCat, 'currency' => $currency, 'pagination' => $pagination]);
        }

        View::render('category/index', ['prodCat' => $prodCat, 'currency' => $currency, 'pagination' => $pagination]);
    }

}