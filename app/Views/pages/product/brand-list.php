<option value=""></option>
<?php foreach ($brands as $brand): ?>
    <option value="<?= $brand->id ?>">
        <?= $brand->brand_name ?></option>
<?php endforeach ?>