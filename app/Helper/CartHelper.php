<?php


namespace app\Helper;


class CartHelper
{

    public function addToCart($product, $qty = 1, $mod = null, $currency)
    {
        $_SESSION['cart.currency'] = $currency;
        if ($mod) {
            $ID = "{$product->id}-{$mod->id}";
            $title = "{$product->title_product} ({$mod->name_mod})";
            $price = $mod->price_mod;
        }else{
            $ID = $product->id;
            $title = $product->title_product;
            $price = $product->price_product;
        }
        if(isset($_SESSION['cart'][$ID])){
            $_SESSION['cart'][$ID]['qty'] += $qty;
        }else{
            $_SESSION['cart'][$ID] = [
                'qty' => $qty,
                'title' => $title,
                'alias' => $product->alias_product,
                'price' => $price / $_SESSION['cart.currency']['value_currency'],
                'img' => $product->img_product,
            ];
        }
        $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $qty : $qty;
        $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $qty * ($price / $_SESSION['cart.currency']['value_currency']) : $qty * ($price / $_SESSION['cart.currency']['value_currency']);
    }

    public function recalc($curr)
    {
        if (isset($_SESSION['cart.currency'])) {
            if ($_SESSION['cart.currency']['base_currency'] ) {
                $_SESSION['cart.sum'] /= $curr['value_currency'];
            } else {
                $_SESSION['cart.sum'] = $_SESSION['cart.sum'] * ($_SESSION['cart.currency']['value_currency'] * $curr['value_currency']);
            }
            foreach ($_SESSION['cart'] as $k => $v) {
                if ($_SESSION['cart.currency']['base_currency']) {
                    $_SESSION['cart'][$k]['price'] /= $curr['value_currency'];
                } else {
                    $_SESSION['cart'][$k]['price'] = $_SESSION['cart'][$k]['price'] * ($_SESSION['cart.currency']['value_currency'] * $curr['value_currency']);
                }
            }
            foreach ($curr as $k => $v) {
                $_SESSION['cart.currency'][$k] = $v;
            }
        }
    }

}