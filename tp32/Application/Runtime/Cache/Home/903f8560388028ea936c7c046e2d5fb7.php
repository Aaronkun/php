<?php if (!defined('THINK_PATH')) exit(); echo ($data1); ?>
<?php if($data2['sex'] ='男' ): ?>强大
    <?php else: ?> 弱小<?php endif; ?>
<hr>
<?php if(is_array($data3)): foreach($data3 as $key=>$v): echo ($v["name"]); ?>|<?php echo ($v["age"]); ?>|<?php echo ($v["sex"]); ?><br><?php endforeach; endif; ?>