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
    <title>Main</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<h1>Basic layouts</h1>
<?=$content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
