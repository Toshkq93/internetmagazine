

<select class="in-drop">
    <option value="" class="label"><?= $currency['code'];?></option>
<?php foreach ($currencies as $k => $v):?>
    <?php if($k != $currency['code']): ?>
        <option value="<?=$k;?>"><?=$k;?></option>
    <?php endif; ?>
<?php endforeach;?>
</select>