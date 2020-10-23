<?php


namespace app\Controllers;


use app\Helper\CartHelper;
use app\Models\Currency;
use app\Models\Modification;
use app\Models\Product;
use core\Controller;
use core\View;

class CartController extends Controller
{
    private $product;
    private $modification;
    private $cart;
    private $currency;

    public function __construct()
    {
        $this->product = new Product();
        $this->modification = new Modification();
        $this->cart = new CartHelper();
        $this->currency = new Currency();
    }

    public function add()
    {
        $id = !empty($_GET['id']) ? (int)$_GET['id'] : null;
        $qty = !empty($_GET['qty']) ? (int)$_GET['qty'] : null;
        $modId = !empty($_GET['mod']) ? (int)$_GET['mod'] : null;
        $mod = null;
        $prod = $this->product->getprodId($id);
        $mod = $this->modification->getModId($modId, $id);

        $currency = $this->currency->getCurrency($_COOKIE['currency']);

        $cartRes = $this->cart->addToCart($prod, $qty, $mod, $currency);
        if ($this->isAjax()) {
            View::loadView('cart/cart_modal');
        }

    }

    public function show()
    {
        View::loadView('cart/cart_modal');
    }

    public function delete()
    {
        $id = !empty($_GET['id']) ? $_GET['id'] : null;
        if (isset($_SESSION['cart'][$id])){
            $qtyMinus = $_SESSION['cart'][$id]['qty'];
            $sumMinus = $_SESSION['cart'][$id]['qty'] * $_SESSION['cart'][$id]['price'];
            $_SESSION['cart.qty'] -= $qtyMinus;
            $_SESSION['cart.sum'] -= $sumMinus;
            unset($_SESSION['cart'][$id]);
        }
        if ($this->isAjax()) {
            View::loadView('cart/cart_modal');
        }
        redirect();
    }

    public function clear(){
        if ($this->isAjax()) {
        unset($_SESSION['cart']);
        unset($_SESSION['cart.qty']);
        unset($_SESSION['cart.sum']);
        unset($_SESSION['cart.currency']);
        View::loadView('cart/cart_modal');
        }
    }

    public function index(){
        View::render('cart/index');
    }

}