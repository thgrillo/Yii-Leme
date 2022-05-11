<?php

use yii\bootstrap4\Html;

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?= $this->registerMetaTag(['name'=>'viewport', 'content'=> 'width=, initial-scale=1']) ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <div>
        <?= $content ?>
    </div>
<?php $this->endBody() ?> 
</body>
</html>

<?php $this->endPage() ?>