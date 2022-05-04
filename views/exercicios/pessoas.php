<?php
use yii\widgets\LinkPager;
?>

<h1>Pessoas</h1>
<hr>

<ul>
    <?php foreach($pessoas as $pessoa) : ?>
    <li class="mt-4"><?=$pessoa->nome . ' - ' . $pessoa->email ?></li>
    <small><?=$pessoa->idade ?> </small>
    <?php endforeach ?> 
</ul>


<?= LinkPager::widget(['pagination' => $pagination]); ?>