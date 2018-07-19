<?php echo $data1; ?>
<hr />
<?= $data1; ?>

<hr />
<?php if ($data2['sex'] == '男') : ?>
强大
<?php else: ?>
需要保护
<?php endif; ?>

<hr />
<?php foreach ($data3 as $temp) : ?>
    <?= $temp['name']; ?>___
    <?= $temp['age']; ?>___
    <?= $temp['sex']; ?>
	<br />
<?php endforeach; ?>
