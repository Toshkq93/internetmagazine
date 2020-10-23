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
                <div class="single-bottom">
                    <h4>Brands</h4>
                    <ul>
                        <li>
                            <input type="checkbox"  id="brand" value="">
                            <label for="brand"><span></span> Contrary belief</label>
                        </li>
                        <li>
                            <input type="checkbox"  id="brand1" value="">
                            <label for="brand1"><span></span> Lorem Ipsum</label>
                        </li>
                        <li>
                            <input type="checkbox"  id="brand2" value="">
                            <label for="brand2"><span></span> Fusce feugiat</label>
                        </li>
                        <li>
                            <input type="checkbox"  id="brand3" value="">
                            <label for="brand3"><span></span> Contrary belief</label>
                        </li>
                        <li>
                            <input type="checkbox"  id="brand4" value="">
                            <label for="brand4"><span></span>Injected humour</label>
                        </li>
                    </ul>
                </div>
                <div class="single-bottom">
                    <h4>Colors</h4>
                    <ul>
                        <li>
                            <input type="checkbox"  id="color" value="">
                            <label for="color"><span></span> Red</label>
                        </li>
                        <li>
                            <input type="checkbox"  id="color1" value="">
                            <label for="color1"><span></span> Blue</label>
                        </li>
                        <li>
                            <input type="checkbox"  id="color2" value="">
                            <label for="color2"><span></span> Black</label>
                        </li>
                        <li>
                            <input type="checkbox"  id="color3" value="">
                            <label for="color3"><span></span> White</label>
                        </li>
                        <li>
                            <input type="checkbox"  id="color4" value="">
                            <label for="color4"><span></span>Green</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>