<?php foreach ($this->groups as $group_id => $group_item):?>
    <div class="single-bottom">
<h4><?= $group_item;?></h4>
        <ul>
            <?php foreach ($this->attrs[$group_id] as $attr_id => $attr_value):?>
                <li>
            <input type="checkbox" data-value="<?= $attr_value;?>" id="brand<?= $attr_id == 1 ? '' : $attr_id;?>" value="<?= $attr_id;?>">
                <label for="brand<?= $attr_id == 1 ? '' : $attr_id;?>"><span></span><?= $attr_value;?></label>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
<?php endforeach;?>