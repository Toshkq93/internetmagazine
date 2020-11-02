<div class="prdt">
    <div class="container">
        <div class="prdt-top">
            <div class="col-md-9 prdt-left">
                <?php if(!empty($products)): ?>
                    <div class="product-one">
                        <?php foreach($products as $product): ?>
                            <div class="col-md-4 product-left p-left" style="float: left">
                                <h4><?=$product['title_product'];?></h4>
                                <div class="product-main simpleCart_shelfItem" style="text-align: center">
                                    <a href="<?= PATH;?>/product/<?=$product['alias_product'];?>" class="mask"><img class="img-responsive zoom-img" style="height: 200px" src="images/<?=$product['img_product'];?>" alt="" /></a><br><h4><span class=" item_price">Цена: <?=$product['price_product'] * $currency['value_currency'];?><?=$currency['symbol'];?></span></h4>
                                    <div class="product-bottom">
                                        <h5>
                                            <a style="width: 200px" data-id="<?=$product['id'];?>" class="cart item_add" href="<?= PATH;?>cart/add?id=<?=$product['id'];?>">Добавить в корзину<i></i></a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <div class="clearfix"></div>
                    </div><br><br><br><br>
                <?php endif; ?>
            </div>
            <div class="col-md-3 at-single">
                <?php new \app\Helper\FilterHelper();?>
            </div>
            <div class="clearfix"> </div>