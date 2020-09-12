<li class="grid"><a  href="<?= PATH;?>/category/<?= $category['alias_category'];?>"><?= $category['name_category'];?></a>
        <?php if (isset($category['childs'])):?>
        <div class="megapanel">
        <div class="row">
            <div class="col1">
                <div class="h_nav">
                    <ul>
                        <?= $this->getMenuHtml($category['childs']);?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        <?php endif;?>
    </li>