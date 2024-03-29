<?php
/** @var yii\web\View $this */
/** @var string $content */

use yii\helpers\Html;
?>

<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title)?></title>
    <?= $this->registerMetaTag([
        "name"=> " viewport",
        'content' => 'width=device-width, initial-scale=1.0'
    ])?>
    <?php $this->head()?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="container">
        <?= $content?>
    </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

