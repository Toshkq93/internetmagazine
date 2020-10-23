<div class="product">
    <?php if (!empty($prodCat)):?>
        <div class="pink">
            <?php foreach ($prodCat as $prod): ?>
                <div class="col-md-3 box-in-at">
                    <div class=" grid_box portfolio-wrapper">
                        <a href="<?= PATH;?>/product/<?= $prod['alias_product'];?>" > <img src="images/<?= $prod['img_product'];?>" class="img-responsive" alt="">
                    </div>
                    <!---->
                    <div class="grid_1 simpleCart_shelfItem">
                        <a href="#" class="cup item_add"><span class=" item_price" ><?= $prod['price_product'];?> <i> </i> </span></a>
                    </div>
                    <!---->
                </div>
            <?php endforeach;?>
            <div class="clearfix"></div>
            <div class="text-center">
                <?php if ($pagination->countPages > 1): ?>
                    <?= $pagination;?>
                <?php endif; ?>
            </div>
        </div>
    <?php else:?>
        <div class="text-center">Товаров не найдено</div>
    <?php endif;?>
</div>