<?php


namespace app\Controllers;


use app\Models\Currency;
use app\Models\Gallery;
use app\Models\Modification;
use app\Models\Product;
use app\Models\RelatedProduct;
use core\Controller;
use core\View;

class ProductController extends Controller
{
    private $product;
    private $gallery;
    private $currency;
    private $relatedProd;
    private $modification;

    public function __construct()
    {
        $this->product = new Product();
        $this->gallery = new Gallery();
        $this->currency = new Currency();
        $this->relatedProd = new RelatedProduct();
        $this->modification = new Modification();
    }

    public function index($alias)
    {

        $alias = removeHtmlStr($alias);
        $prod = $this->product->getProductAlias($alias);
        $gallery = $this->gallery->getGalleryProdId($prod['id']);
        $currency = $this->currency->getCurrency($_COOKIE['currency']);
        $prod['old_price'] = round($prod['price_product'] / $currency['value_currency'], 2);
        $prod['new_price'] = round($prod['price_product'] / $currency['value_currency'] * $prod['discount_product']/100, 2);
        $prod['result'] = $prod['old_price'] - $prod['new_price'];

        //связанные товары
        $related = $this->relatedProd->getRelatedProduct($prod['id']);

        //модификации
        $mods = $this->modification->getMods($prod['id']);

        View::render('product/index',['prod'=> $prod,'gallery' => $gallery, 'currency' => $currency, 'related' => $related, 'mods' => $mods]);

    }

}