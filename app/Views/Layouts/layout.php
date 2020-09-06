<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Markito A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/my.css" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Markito Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
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
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>

<script src="/js/simpleCart.min.js"> </script>
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
        <a class="nav-link" href="#">Главная</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">О нас</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">Контакты</a>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Аккаунт</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <!--<form class="login" action="<?/*= APP;*/?>/user/login" method="post">
                <input type="text" name="user_email" placeholder="email">
                <input type="password" name="user_password" placeholder="password"><br><br>
                .button
                <input type="submit" value="Войти" style="float: left">
                <input type="submit" value="Регистрация" style="float: left">
            </form><br>-->
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
            <a href="#" class="dropdown-item">Регистрация</a>
            <a class="dropdown-item" href="#">Забыли пароль?</a>
        </div>
    </li>

</ul>
<div class="search-top">
<div class="search">
<form>
    <input type="text" value="Поиск" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Поиск ';}" >
    <input type="submit" value="" >
</form>
</div>
<div class="world">
<ul >

    <li><a href="#"><span> </span></a> </li>
    <li><select class="in-drop">
            <option>RU</option>
            <option>EN</option>
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
<li class="active grid"><a  href="#">Мода</a>
    <div class="megapanel">
        <div class="row">
            <div class="col1">
                <div class="h_nav">
                    <ul>
<li><a href="products.html">Акксесуары</a></li>
<li><a href="products.html">Сумки</a></li>
<li><a href="products.html">Кепки и шляпы</a></li>
<li><a href="products.html">Толстовки и кофты</a></li>
<li><a href="products.html">Куртки и пальто</a></li>
<li><a href="products.html">Джинсы</a></li>
<li><a href="products.html">Ювелирные изделия</a></li>
<li><a href="products.html">Джемперы и кардиганы</a></li>
<li><a href="products.html">Кожанные куртки</a></li>
<li><a href="products.html">Футболки с длинными рукавами</a></li>
<li><a href="products.html">Одежда для дома</a></li>
                    </ul>
                </div>
            </div>
            <div class="col1">
                <div class="h_nav">
                    <ul>
<li><a href="products.html">Рубашки</a></li>
<li><a href="products.html">Обувь, ботинки и кроссовки</a></li>
<li><a href="products.html">Шорты</a></li>
<li><a href="products.html">Костюмы и блейзеры</a></li>
<li><a href="products.html">Солнцезащитные очки</a></li>
<li><a href="products.html">спортивные штаны</a></li>
<li><a href="products.html">Купальники</a></li>
<li><a href="products.html">Брюки и брюки чинос</a></li>
<li><a href="products.html">Футболки</a></li>
<li><a href="products.html">Нижнее белье и носки</a></li>
<li><a href="products.html">Жилеты</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</li>
<li><a   href="#">Мебель и декор</a>
    <div class="megapanel">
        <div class="row">
            <div class="col1">
                <div class="h_nav">
                    <ul>
<li><a href="decor.html">Кровать</a></li>
<li><a href="decor.html">Сундук</a></li>
<li><a href="decor.html">Табурет и подставка</a></li>
<li><a href="decor.html">Стул и ковер</a></li>
<li><a href="decor.html">Занавес и брикс</a></li>
<li><a href="decor.html">Полка</a></li>
<li><a href="decor.html">Рабочий стол</a></li>
<li><a href="decor.html">Диван и Ансон</a></li>
<li><a href="decor.html">Скамья</a></li>
<li><a href="decor.html">Раковина</a></li>
<li><a href="decor.html">Лампа</a></li>
                    </ul>
                </div>
            </div>
            <div class="col1">
                <div class="h_nav">
                    <ul>
<li><a href="decor.html">Кресло</a></li>
<li><a href="decor.html">Скамья Рейдера</a></li>
<li><a href="decor.html">Ковер и стол</a></li>
<li><a href="decor.html">Шкаф и лампа</a></li>
<li><a href="decor.html">Автокресло</a></li>
<li><a href="decor.html">Кресло</a></li>
<li><a href="decor.html">Энсон</a></li>
<li><a href="decor.html">Карлстад</a></li>
<li><a href="decor.html">Камилла и гардероб</a></li>
<li><a href="decor.html">Колтон</a></li>
<li><a href="decor.html">Брикс</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div></li>
<li class="grid"><a  href="#">Моб. телефоны и планшеты</a>
    <div class="megapanel">
        <div class="row">
            <div class="col1">
                <div class="h_nav">
                    <ul>
<li><a href="mobile.html">Lenovo </a></li>
<li><a href="mobile.html">Motorola</a></li>
<li><a href="mobile.html">Samsung </a></li>
<li><a href="mobile.html">Htc Tab</a></li>
<li><a href="mobile.html">Dell & Compaq</a></li>
<li><a href="mobile.html">Asus</a></li>
<li><a href="mobile.html">Microsoft</a></li>
<li><a href="mobile.html">Moto E & Moto G</a></li>
<li><a href="mobile.html">Intex</a></li>
<li><a href="mobile.html">Hauwei Lumia</a></li>
                    </ul>
                </div>
            </div>
            <div class="col1">
                <div class="h_nav">
                    <ul>
<li><a href="mobile.html">Asus Zenfone 2</a></li>
<li><a href="mobile.html">Nikon & Sony</a></li>
<li><a href="mobile.html">Shorts</a></li>
<li><a href="mobile.html">Olymplus</a></li>
<li><a href="mobile.html">Sunglasses</a></li>
<li><a href="mobile.html">Samsung Nx</a></li>
<li><a href="mobile.html">Printers & Monitors</a></li>
<li><a href="mobile.html">Routers</a></li>
<li><a href="mobile.html">Data Cards</a></li>
<li><a href="mobile.html">Mouse & Keyboard</a></li>
<li><a href="mobile.html">Ink Cartridges</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</li>
</ul>
</div>
<div class="cart box_1">
<a href="checkout.html">
<h3> <div class="total">
        <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
    <img src="/images/cart.png" alt=""/></h3>
</a>
<p><a href="javascript" class="simpleCart_empty"><img src="/images/cart-c.png"  alt=""></a></p>
<div class="clearfix"> </div>
</div>

<div class="clearfix"> </div>
</div>
</div>
</div>
</div>
<div class="col-md-12">
    <?php if(isset($_SESSION['error'])): ?>
        <div class="alert alert-danger">
            <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
        </div>
    <?php endif; ?>
    <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success">
            <?php echo $_SESSION['success']; unset($_SESSION['success']);?>
        </div>
    <?php endif; ?>
</div>
<?= $content;?>
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

</body>
</html>