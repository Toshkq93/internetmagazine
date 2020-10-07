<div class="container">
    <div class="single">
        <div class="col-md-9 top-in-single">
            <div class="col-md-5 single-top">
                <?php if ($gallery): ?>
                <ul id="etalage">
                    <?php foreach ($gallery as $item): ?>
                    <li>
                            <img class="etalage_thumb_image img-responsive" src="/images/<?= $item['img_gallery1'];?>" alt="" >
                            <img class="etalage_source_image img-responsive" src="/images/<?= $item['img_gallery2'];?>" alt="" >
                    </li>
                    <?php endforeach;?>
                </ul>
                <?php else:?>
                    <img src="/images/<?= $prod['img_product'];?>" alt="">
                <?php endif;?>
            </div>
            <div class="col-md-7 single-top-in">
                <div class="single-para">
                <h4><?= $prod['title_product'];?></h4>
                    <p><?= $prod['content_product'];?></p>
                    <div class="star-on">
                        <ul>
                            <li><a href="#"><i> </i></a></li>
                            <li><a href="#"><i> </i></a></li>
                            <li><a href="#"><i> </i></a></li>
                            <li><a href="#"><i> </i></a></li>
                            <li><a href="#"><i> </i></a></li>
                        </ul>
                        <div class="review">
                            <a href="#"> 3 reviews </a>/
                            <a href="#">  Write a review</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <?php if (empty($prod['discount_product'])):?>
                <label  class="add-to" id="base-price" data-base="<?= round($prod['price_product'] / $currency['value_currency'],2);?>"><?= round($prod['price_product'] / $currency['value_currency'],2);?> <?= $currency['symbol'];?></label>

                    <?php else:?>

                    Старая цена:
                        <label  class="add-to"><strike><?= $prod['old_price'];?><?= $currency['symbol'];?></strike></label>
                    Новая цена:
                    <label  class="add-to"><?= $prod['result'];?><?= $currency['symbol'];?></label>
                    Скидка:<label  class="add-to"><?= $prod['discount_product'];?>%</label>

                    <?php endif;?>
                    <?php if ($mods): ?>
                    <div class="available">
                        <h6>Размеры :</h6>
                        <ul>
                            <li>
                                <select>
                                    <option>Выбрать размер</option>
                                    <?php foreach ($mods as $mod):?>
                                    <option data-title="<?= $mod['name_mod'];?>" data-price="<?= $mod['price_mod']/$currency['value_currency'];?>" value="<?= $mod['id'];?>"><?= $mod['name_mod'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </li>
                        </ul>
                    </div>
                    <?php endif;?>
                    <span style="color:#fa7455; font-size:1.4em; padding: 0 0 1em;">Количество:</span><br>
                    <div class="quantity">
                        <input type="number" size="4" value="1" name="quantity" min="1" step="1">
                    </div>
                    <a href="<?= PATH;?>/cart/add?id=<?= $prod['id'];?>" data-id="<?= $prod['id'];?>" class="cart item_add ">Добавить в корзину</a>

                </div>
            </div>
            <div class="clearfix"> </div>
            <!----- tabs-box ---->
            <div class="sap_tabs">
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                    <ul class="resp-tabs-list">
                        <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>Product Description</span></li>
                        <div class="clearfix"></div>
                    </ul>
                    <div class="resp-tabs-container">
                        <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Product Description</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                            <div class="facts">
                                <p><?= $prod['desc_product'];?></p>
                            </div>
                        </div>
                    </div><br><br>
                    <h4>С этим товаром также покупают:</h4>
                    <?php if ($related):?>
                        <?php foreach ($related as $item):?>
                            <div class="col-md-pull-3 top-in-single" style="float: left;padding-left: 20px">
                                <div class="pull-left product-left">
                                    <div class="product main simpleCart_shelfItem">
                                        <a href="<?= PATH;?>/product/<?= $item['alias_product'];?>"><img src="/images/<?= $item['img_product'];?>" alt=""></a>
                                    </div>
                                </div>
                                <div class="product bottom">
                                    <h3><a href="<?= PATH;?>/product/<?= $item['alias_product'];?>"></a></h3>
                                    <p></p>
                                    <h4>

                                    </h4>
                                </div>
                            </div>
                        <?php endforeach;?>
                    <?php endif;?>
                </div>
            </div>
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
    </div>


</div>