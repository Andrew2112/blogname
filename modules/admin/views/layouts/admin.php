<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;

AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE HTML>
<html lang="<?= Yii::$app->language ?>">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?= Yii::$app->charset ?>">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta name="keywords" content="Personal Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"
    />
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>

    <!---->

</head>
<body>
<?php $this->beginBody() ?>
<!---header---->
<div class="header">
    <div class="container">
        <div class="logo">
            <a href="<?= \yii\helpers\Url::home() ?>">
                <?= Html::img('@web/images/logo.jpg', ['alt' => 'logo']) ?>
        </div>
        <!---start-top-nav---->
        <div class="top-menu">

            <span class="menu"> </span>
            <ul>
                <li>
                    <a href="<?=\yii\helpers\Url::home()?>" target="_blank">На сайт</a>
                </li>
                <?php $url = $_SERVER["REQUEST_URI"]; ?>
                <li <?php if ($url == \yii\helpers\Url::to(['/admin/category/index'])) {
                    echo 'class="active"';
                } ?>>
                    <a href="<?= \yii\helpers\Url::to(['/admin/category/index']) ?>">Category</a>
                </li>
                <li <?php if ($url == \yii\helpers\Url::to(['/admin/post/index']) || $url == \yii\helpers\Url::to(['/admin'])) {
                    echo 'class="active"';
                } ?>>
                    <a href="<?= \yii\helpers\Url::to(['/admin/post/index']) ?>">Post</a>
                </li>
                <li <?php if ($url == \yii\helpers\Url::to(['/admin/comment/index']) || $url == \yii\helpers\Url::to(['/admin'])) {
                    echo 'class="active"';
                } ?>>
                    <a href="<?= \yii\helpers\Url::to(['/admin/comment/index']) ?>">Comment</a>
                </li>
                <li <?php if ($url == \yii\helpers\Url::to(['/admin/tag/index']) || $url == \yii\helpers\Url::to(['/admin'])) {
                    echo 'class="active"';
                } ?>>
                    <a href="<?= \yii\helpers\Url::to(['/admin/tag/index']) ?>">Tag</a>
                </li>

                    <?php if (!Yii::$app->user->isGuest): ?>
                    <a href="<?= \yii\helpers\Url::to(['/site/logout']) ?>">
                        <?= Yii::$app->user->identity['name'] ?> (Выход)
                    </a>
                </li>
            <?php else: ?>
                <li>
                    <a href="<?= \yii\helpers\Url::to(['site/login']) ?>">
                        Вход
                    </a>
                </li>

                <li>
                    <a href="<?= \yii\helpers\Url::to(['site/signup']) ?>">
                        Регистрация
                    </a>

                </li>
                <li><a href="<?=\yii\helpers\Url::to(['/admin'])?>">Админка</a></li>
            <?php endif; ?>
                <div class="clearfix"></div>
            </ul>
        </div>
        <div class="clearfix"></div>
        <!---//End-top-nav---->
    </div>
</div>
<!--/header-->
<div class="content">
    <div class="container">
        <div class="content-grids">
            <div class="col-md-12">
                <?= $content ?>

            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!---->
<div class="footer">
    <div class="container">
        <p>Copyrights © 2015 Blog All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

