<option value=""></option>
<?php foreach ($units as $unit): ?>
    <option value="<?= $unit->id ?>">
        <?= $unit->unit_name ?></option>
<?php endforeach ?>