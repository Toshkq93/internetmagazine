<!DOCTYPE html>
<html>
<head>
    <base href="/">
<title>Markito A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/js/jquery-2.2.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/"></script>
<!--theme-style-->
<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/my.css" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Markito Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script type="text/javascript" src="/js/move-top.js"></script>
<script type="text/javascript" src="/js/easing.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
$(".scroll").click(function(event){
event.preventDefault();
$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
});
});
</script>
<!-- start menu -->
<link href="/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>

<script src="/js/simpleCart.min.js"> </script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Amaranth:400,700' rel='stylesheet' type='text/css'>
    <!--//fonts-->
    <script type="text/javascript" src="/js/move-top.js"></script>
    <script type="text/javascript" src="/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start menu -->
    <link href="/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="/js/megamenu.js"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
    <link rel="stylesheet" href="/css/etalage.css">
    <script src="/js/jquery.etalage.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            var defaults = {
                  containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
             };
            */

            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
    <script>
        jQuery(document).ready(function($){

            $('#etalage').etalage({
                thumb_image_width: 300,
                thumb_image_height: 400,
                source_image_width: 900,
                source_image_height: 1200,
                show_hint: true,
                click_callback: function(image_anchor, instance_id){
                    alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
                }
            });

        });
    </script>
</head>
<body>
<!--header-->
<div class="header" >
<div class="top-header" >
<div class="container">
<ul class="top-head" >
<div class="header-para">
<ul class="social-in">
<li><a href="#"><i> </i></a></li>
<li><a href="#"><i class="ic"> </i></a></li>
<li><a href="#"><i class="ic1"> </i></a></li>

</ul>
</div>

<ul class="header-in">
    <li class="nav-item active">
        <a class="nav-link" href="<?= PATH;?>">Главная</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= PATH;?>/about">О нас</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= PATH;?>/contacts">Контакты</a>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Аккаунт</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <?php if (isset($_SESSION['user'])): ?>
                <a href="<?= PATH;?>/kabinet">Добро пожаловать, <?= $_SESSION['user']['user_name'];?></a><br>
                <?php if ($_SESSION['user']['is_admin']): ?>
                    <a href="<?= ADMIN;?>">Вход в админскую часть</a><br>
                <?php endif; ?>
                <a href="<?= PATH;?>/cabinet">Личный кабинет</a><br>
                <a href="<?= PATH;?>/logout">Выход</a>
    <?php else:?>
            <form class="form-horizontal" method="post" action="<?= PATH;?>/login">
                <span class="heading">Вход</span>
                <div class="form-group">
                    <input type="email" class="form-control" id="inputEmail" name="user_email" placeholder="E-mail">
                    <i class="fa fa-user"></i>
                </div>
                <div class="form-group help">
                    <input type="password" name="user_password" class="form-control" id="inputPassword" placeholder="Password">
                    <i class="fa fa-lock"></i>
                    <a href="#" class="fa fa-question-circle"></a>
                </div>
                <div class="form-group">
                    <div class="main-checkbox">
                        <input type="checkbox" value="none" id="checkbox1" name="check"/>
                        <label for="checkbox1"></label>
                    </div>
                    <span class="text">Запомнить</span>
                    <button type="submit" class="btn btn-default">ВХОД</button>
                </div>
            </form>
            <a href="<?= PATH;?>/registr" class="dropdown-item">Регистрация</a>
            <a class="dropdown-item" href="#">Забыли пароль?</a>
    <?php endif;?>
        </div>
    </li>

</ul>

<div class="search-top">
<div class="search">
<form method="get" action="<?= PATH;?>/search">
    <input type="text" value="Поиск" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Поиск ';}" name="query">
    <input type="submit" value="" >
</form>
</div>
<div class="world">
<!--<ul >
    <li>
        <select class="in-drop">
            <option>RU</option>
            <option>EN</option>
        </select>
    </li>
</ul>-->
<ul>
    <li><a href="#"><span> </span></a> </li>
    <li>
            <select id="currency" class="in-drop">
                <?php new \app\Helper\CurrencyHelper();?>
            </select>
    </li>
</ul>
</div>

<div class="clearfix"> </div>
</div>

<div class="clearfix"> </div>

</div>
</div>

</div>

<!---->

<div class="header-top">
<div class="container">
<div class="head-top">
<div class="logo">
<a href="<?= PATH;?>"><img src="/images/logo.png" alt="" ></a>
</div>
<div class="top-nav">
<ul class="megamenu skyblue">
    <?php new \app\Helper\MenuHelper();?>
</ul>
</div>
<div class="cart box_1">
    <a href="<?= PATH;?>/cart/show" onclick="getCart(); return false;">
        <h3>
            <div class="total">
                <img src="/images/cart.png" alt=""/>
                <?php if (!empty($_SESSION['cart'])):?>
                    <span class="simpleCartTotal"><?= round($_SESSION['cart.sum'], 2) . $_SESSION['cart.currency']['symbol'];?></span>
                <?php else:?>
                    <span class="simpleCartTotal">Пустая корзина</span>
                <?php endif;?>
            </div>
        </h3>
    </a>
    <div class="clearfix"> </div>
</div>

<div class="clearfix"> </div>
</div>
</div>
</div>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if(isset($_SESSION['error'])): ?>
                    <div class="alert alert-danger">
                        <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                    </div>
                <?php endif; ?>
                <?php if(isset($_SESSION['success'])): ?>
                    <div class="alert alert-success">
                        <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?=$content;?>
</div>

<!--footer-->
<div class="footer">
<div class="container">
<div class="col-md-3 footer-left">
<a href="index.html"><img src="/images/logo.png" alt=""></a>
<p class="footer-class">© 2015 Markito All Rights Reserved | Template by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>
<div class="col-md-2 footer-middle">
<ul>
<li><a href="404.html">about us</a> </li>
<li><a href="contact.html">   contact us</a></li>
<li ><a href="products.html" >  our stores</a></li>
</ul>
</div>
<div class="col-md-4 footer-left-in">
<ul class="term">
<li><a href="#">terms and conditions</a> </li>
<li><a href="#">  markito in the press</a></li>
<li ><a href="#" >  testimonials</a></li>
</ul>
<ul class="term">
<li><a href="#">join us</a> </li>
<li><a href="#">  markito videos</a></li>

</ul>
<div class="clearfix"> </div>
</div>
<div class="col-md-3 footer-right">
<h5>WE SUPPORT</h5>
<ul>
<li><a href="#"><i> </i></a> </li>
<li><a href="#"><i class="we"> </i></a></li>
<li ><a href="#" ><i class="we-in"> </i></a></li>
<li ><a href="#" ><i class="we-at"> </i></a></li>
<li ><a href="#" ><i class="we-at-at"> </i></a></li>
</ul>
</div>
<div class="clearfix"> </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
/*
var defaults = {
containerID: 'toTop', // fading element id
containerHoverID: 'toTopHover', // fading element hover id
scrollSpeed: 1200,
easingType: 'linear'
};
*/

$().UItoTop({ easingType: 'easeOutQuart' });

});
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</div>
<!-- Modal -->
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Корзина</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>
                <a href="<?= PATH;?>/cart/view" type="button" class="btn btn-primary">Оформить заказ</a>
                <button type="button" class="btn btn-danger" onclick="clearCart()">Очистить корзину</button>
            </div>
        </div>
    </div>
</div>
<script src="/js/my.js"></script>
<script>
let path = '<?= PATH ?>';
    course = '<?= $currency['value_currency'] ?>';
    symbol = '<?= $currency['symbol'] ?>';
</script>
</body>
</html>