<div class="banner">
    <div class="container">
        <div class="wmuSlider example1">
            <div class="wmuSliderWrapper">
                <?php foreach ($salies as $sale):?>
                <article style="position: center; width: 100%; opacity: 0;">
                    <div class="banner-wrap">
                        <div class="banner-top">
                            <a href="<?= PATH;?>/product/<?= $sale['alias_product'];?>">
                                <div class="banner-top-in">
                                    <img src="/images/<?= $sale['img_product'];?>" class="img-responsive" alt="">
                                </div></a>
                            <div class="cart-at grid_1 simpleCart_shelfItem">
                                <span class="item_price" ><strike> <?= round($sale['price_product'] / $currency['value_currency'],2);?> <?= $currency['symbol'];?> <i></i></strike> </span>
                            <div>
                                <a class="item_add" data-id="<?= $sale['id'];?>" style="color: white;" href="<?= PATH;?>/cart/add?id=<?= $sale['id'];?>">
                                    <span class="item_price" ><?= round($sale['price_product'] / $currency['value_currency'],2) - round(($sale['price_product'] / $currency['value_currency']) * $sale['discount_product']/100, 2);?><?= $currency['symbol'];?><i></i>
                                    </span>
                                </a>
                            </div>



                                <div class="off">
                                    <label><?= $sale['discount_product'];?>% off !</label>
                                    <p><?= $sale['desc_product'];?></p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>

                        </div>

                        <div class="clearfix"> </div>
                    </div>
                </article>
                <?php endforeach;?>
            </div>
            <ul class="wmuSliderPagination">
                <li><a href="#" class="">0</a></li>
                <li><a href="#" class="">1</a></li>
            </ul>
        </div>
        <!---->
        <script src="/js/jquery.wmuSlider.js"></script>
        <script>
            $('.example1').wmuSlider({
                pagination : true,
                nav : false,
            });
        </script>

    </div>
</div>
<div class="content">
    <div class="container">
        <div class="content-top">
            <h2 class="new">NEW ARRIVALS</h2>
            <div class="pink">
                <!-- requried-jsfiles-for owl -->
                <link href="css/owl.carousel.css" rel="stylesheet">
                <script src="/js/owl.carousel.js"></script>
                <script>
                    $(document).ready(function() {
                        $("#owl-demo").owlCarousel({
                            items : 4,
                            lazyLoad : true,
                            autoPlay : true,
                            pagination : true,
                        });
                    });
                </script>
                <!-- //requried-jsfiles-for owl -->
                <div id="owl-demo" class="owl-carousel text-center">
                    <?php if(isset($arrivals)):?>
                    <?php foreach ($arrivals as $arrival):?>
                    <div class="item">
                        <div class=" box-in">
                            <div class=" grid_box">
                                <a href="<?= PATH;?>/product/<?= $arrival['alias_product'];?>" > <img src="/images/<?= $arrival['img_product'];?>" class="img-responsive" alt="">
                            </div>
                        
                            <div class="grid_1 simpleCart_shelfItem">
                                <a href="<?= PATH;?>/cart/add?id=<?= $arrival['id'];?>" data-id="<?= $arrival['id'];?>" class="cup item_add"><span class=" item_price" ><?= round($arrival['price_product'] / $currency['value_currency'], 2);?><?= $currency['symbol'];?> <i> </i> </span></a>
                            </div>

                        </div>
                    </div>
                    <?php endforeach;?>
                    <?php endif;?>
                    <div class="clearfix"> </div>
                </div>

            </div>

        </div>
        <div class="content-middle">
            <h2 class="middle">BEST SALES</h2>
            <?php if (isset($products)):?>
            <?php foreach ($products as $product):?>
            <div class="col-best">
                <div class="col-md-4">
                    <a href="<?= PATH;?>/product/<?= $product['alias_product'];?>"><div class="col-in">
                            <div class="col-in-left">
                                <img src="/images/<?= $product['img_product'];?>" class="img-responsive" alt="">
                            </div>
                    </a>
                    <div class="col-in-right grid_1 simpleCart_shelfItem">
                        <h5><?= $product['title_product'];?></h5>
                        <ul class="star">
                            <li><a href="#"><i> </i> </a> </li>
                            <li><a href="#"><i> </i> </a> </li>
                            <li><a href="#"><i> </i> </a> </li>
                            <li><i class="in-star"> </i>  </li>
                        </ul>
                        <!---->
                    <a href="<?= PATH;?>/cart/add?id=<?= $product['id'];?>" data-id="<?= $product['id'];?>" class="item_add"><span class="white item_price" ><?= round($product['price_product'] / $currency['value_currency'], 2);?><?= $currency['symbol'];?><i> </i> </span></a>
                        <!---->
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <?php endforeach;?>
            <?php endif;?>
        </div>
    <div class="clearfix"> </div>
</div>
<div class="content-bottom">


    <div class="col-md-8 latter">
        <h6>NEWSLETTER</h6>
        <p>sign up now to our newsletter discount! to get the Welcome discount</p>

        <div class="clearfix"> </div>
    </div>
    <div class="col-md-4 latter-right">

        <form>
            <div class="join">
                <input type="text" value="your email here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'your email here';}">
                <i> </i>
            </div>
            <input type="submit" value="join us">
        </form>

    </div>
    <div class="clearfix"> </div>
</div>