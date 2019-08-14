<?php
/**
 * Created by PhpStorm.
 * User: base
 * Date: 12.08.2019
 * Time: 21:11
 */

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= $this->title ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <div class="container">
        <ul class="nav nav-pills ">

            <li role="presentation" class="active"><?= Html::a('Главная','/') ?></li>
            <li role="presentation"><?= Html::a('Все статьи',['post/index']) ?></li>
            <li role="presentation"><?= Html::a('Статья',['post/show']) ?></li>
        </ul>
        <p>Выводим Block1</p>
        <?php if (isset($this->blocks['block1'])): ?>
            <?php echo $this->blocks['block1']; ?>
        <?php endif; ?>
        <?=$content ?>

    </div>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
