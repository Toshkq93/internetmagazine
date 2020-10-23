<div class="container">
    <div class="check">
        <div class="col-md-3 cart-total">
            <div class="price-details">
                <span>Итог</span>
                <span class="total1"><?= round($_SESSION['cart.sum'], 2) . $_SESSION['cart.currency']['symbol'];?></span>
                <span>Скидка</span>
                <span class="total1">---</span>
                <div class="clearfix"></div>
            </div>
            <ul class="total_price">
                <li class="last_price"> <h4>Итог:</h4></li>
                <li class="last_price"><span><?= round($_SESSION['cart.sum'], 2). $_SESSION['cart.currency']['symbol'];?></span></li>
                <div class="clearfix"> </div>
            </ul>
            <div class="clearfix"></div><br>
            <?php if (!isset($_SESSION['user'])):?>
            <div class="total-item">
                <h3>OPTIONS</h3>
                <p><a href="<?= PATH;?>">Log In</a> to use accounts - linked coupons</p>
            </div>
            <?php else:?>
                <form action="<?= PATH;?>/order/save" method="post">
                        <label for="address">Примечание к заказу</label>
                        <textarea name="text" class="form-control"></textarea>
                    <button class="order_success">Оформить заказ</button>
                </form>
            <?php endif;?>
        </div>
        <div class="col-md-9 cart-items">
            <h1>Моя корзина (<?= $_SESSION['cart.qty'];?>)</h1>
            <?php if (!empty($_SESSION['cart'])):?>
            <?php foreach ($_SESSION['cart'] as $id => $product):?>
            <div class="cart-header">
                <a href="<?= PATH;?>/cart/delete?id=<?=$id ?>" style="float: left"><div class="close1" data-id="<?=$id;?>"> </div></a>
                <div class="cart-sec simpleCart_shelfItem">
                    <div class="cart-item cyc">
                        <img src="images/<?= $product['img'];?>" class="img-responsive" alt=""/>
                    </div>
                    <div class="cart-item-info">
                        <h3><a href="<?= PATH;?>/product/<?= $product['alias'];?>"><?= $product['title'];?>(XS R034)</a></h3>
                        <ul class="qty">
                            <li><p>Количество : <?= $product['qty'];?></p></li>
                        </ul>
                        <div class="delivery">
                            <p>Итоговая цена:</p>
                            <span><?= round($product['qty'] * $product['price'], 2) . $_SESSION['cart.currency']['symbol'];?></span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                </div>
            </div>
            <?php endforeach;?>
            <?php else:?>
            <div class="text-center">Корзина пуста</div>
            <?php endif;?>
        </div>


        <div class="clearfix"> </div>
    </div>
<!--    <div class="col-md-6 account-left">-->
<!--        <form method="post" action="cart/checkout" role="form" data-toggle="validator">-->
<!--            --><?php //if(!isset($_SESSION['user'])): ?>
<!--                <div class="form-group has-feedback">-->
<!--                    <label for="login">Login</label>-->
<!--                    <input type="text" name="login" class="form-control" id="login" placeholder="Login" value="--><?//= isset($_SESSION['form_data']['login']) ? $_SESSION['form_data']['login'] : '' ?><!--" required>-->
<!--                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>-->
<!--                </div>-->
<!--                <div class="form-group has-feedback">-->
<!--                    <label for="pasword">Password</label>-->
<!--                    <input type="password" name="password" class="form-control" id="pasword" placeholder="Password" value="--><?//= isset($_SESSION['form_data']['password']) ? $_SESSION['form_data']['password'] : '' ?><!--" data-minlength="6" data-error="Пароль должен включать не менее 6 символов" required>-->
<!--                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>-->
<!--                    <div class="help-block with-errors"></div>-->
<!--                </div>-->
<!--                <div class="form-group has-feedback">-->
<!--                    <label for="name">Имя</label>-->
<!--                    <input type="text" name="name" class="form-control" id="name" placeholder="Имя" value="--><?//= isset($_SESSION['form_data']['name']) ? $_SESSION['form_data']['name'] : '' ?><!--" required>-->
<!--                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>-->
<!--                </div>-->
<!--                <div class="form-group has-feedback">-->
<!--                    <label for="email">Email</label>-->
<!--                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="--><?//= isset($_SESSION['form_data']['email']) ? $_SESSION['form_data']['email'] : '' ?><!--" required>-->
<!--                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>-->
<!--                </div>-->
<!--                <div class="form-group has-feedback">-->
<!--                    <label for="address">Address</label>-->
<!--                    <input type="text" name="address" class="form-control" id="address" placeholder="Address" value="--><?//= isset($_SESSION['form_data']['address']) ? $_SESSION['form_data']['address'] : '' ?><!--" required>-->
<!--                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>-->
<!--                </div>-->
<!--            --><?php //endif; ?>
<!--            <div class="form-group">-->
<!--                <label for="address">Note</label>-->
<!--                <textarea name="note" class="form-control"></textarea>-->
<!--            </div>-->
<!--            <button type="submit" class="btn btn-default">Оформить</button>-->
<!--        </form>-->
<!--        --><?php //if(isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
<!--    </div>-->
</div>