<div class="banner">
    <div class="container">
        <div class="wmuSlider example1">
            <div class="wmuSliderWrapper">
                <?php foreach ($salies as $sale):?>
                <article style="position: center; width: 100%; opacity: 0;">
                    <div class="banner-wrap">
                        <div class="banner-top">
                            <a href="single.html">
                                <div class="banner-top-in">
                                    <img src="/images/<?= $sale['img_sale'];?>" class="img-responsive" alt="">
                                </div></a>
                            <div class="cart-at grid_1 simpleCart_shelfItem">
                                <span class="item_price" ><strike><?= $sale['old_price_sale'];?> $ <i></i></strike> </span>
                                <div class="item_add"><span class="item_price" ><?= $sale['old_price_sale'] * $sale['discount_sale']/100;?> $ <i></i></span></div>
                                <div class="off">
                                    <label><?= $sale['discount_sale'];?>% off !</label>
                                    <p><?= $sale['description_sale'];?></p>
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
                                <a href="single.html" > <img src="/images/<?= $arrival['img_arrivals'];?>" class="img-responsive" alt="">
                                    <div class="zoom-icon">

                                        <ul class="in-by">
                                            <li><h5>sizes:</h5></li>
                                            <li><span>S</span></li>
                                            <li><span>XS</span></li>
                                            <li><span>M</span></li>
                                            <li><span> L</span></li>
                                            <li><span>XL</span></li>
                                            <li><span> XXL</span></li>
                                        </ul>


                                        <ul class="in-by-color">
                                            <li><h5>colors:</h5></li>
                                            <li><span > </span></li>
                                            <li><span class="color"> </span></li>
                                            <li><span class="color1"> </span></li>
                                            <li><span class="color2"> </span></li>
                                            <li><span class="color3"> </span></li>

                                        </ul>

                                    </div> </a>
                            </div>
                        
                            <div class="grid_1 simpleCart_shelfItem">
                                <a href="#" class="cup item_add"><span class=" item_price" ><?= $arrival['price_arrivals'];?> $ <i> </i> </span></a>
                            </div>

                        </div>
                    </div>
                    <?php endforeach;?>
                    <?php endif;?>
                    <div class="clearfix"> </div>
                </div>

            </div>

        </div>

        <!---->
        <div class="content-middle">
            <h2 class="middle">BEST SALES</h2>
            <div class="col-best">
                <div class="col-md-4">
                    <a href="single.html"><div class="col-in">
                            <div class="col-in-left">
                                <img src="/images/ni.jpg" class="img-responsive" alt="">
                            </div>
                    </a>
                    <div class="col-in-right grid_1 simpleCart_shelfItem">
                        <h5>fuel t-shirt  mod : 9509</h5>
                        <ul class="star">
                            <li><a href="#"><i> </i> </a> </li>
                            <li><a href="#"><i> </i> </a> </li>
                            <li><a href="#"><i> </i> </a> </li>
                            <li><i class="in-star"> </i>  </li>
                        </ul>
                        <!---->
                        <a href="#" class="item_add"><span class="white item_price" >123 $ <i> </i> </span></a>
                        <!---->
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4">
                <a href="single.html"><div class="col-in">
                        <div class="col-in-left">
                            <img src="/images/ni1.jpg" class="img-responsive" alt="">
                        </div>
                </a>
                <div class="col-in-right grid_1 simpleCart_shelfItem">
                    <h5>fuel t-shirt  mod : 9509</h5>
                    <ul class="star">
                        <li><i> </i>  </li>
                        <li><i> </i>  </li>
                        <li><i> </i>  </li>
                        <li><i class="in-star"> </i>  </li>
                    </ul>
                    <!---->
                    <a href="#" class="item_add"><span class="white item_price" >123 $ <i> </i> </span></a>
                    <!---->
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-4">
            <a href="single.html"><div class="col-in">
                    <div class="col-in-left">
                        <img src="/images/ni.jpg" class="img-responsive" alt="">
                    </div>
            </a>
            <div class="col-in-right grid_1 simpleCart_shelfItem">
                <h5>fuel t-shirt  mod : 9509</h5>
                <ul class="star">
                    <li><i> </i>  </li>
                    <li><i> </i>  </li>
                    <li><i> </i>  </li>
                    <li><i class="in-star"> </i>  </li>
                </ul>
                <!---->
                <a href="#" class="item_add"><span class="white item_price" >123 $ <i> </i> </span></a>
                <!---->
            </div>
            <div class="clearfix"> </div>
        </div>
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