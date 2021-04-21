<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
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
                <?= Html::img('@web/images/logo.jpg', ['alt' => 'logo']) ?></a>
        </div>
        <!---start-top-nav---->
        <div class="top-menu">
            <div class="search">
                <form action="<?= \yii\helpers\Url::to(['post/search']) ?>" method="get">
                    <input type="text" placeholder="Search a post..." required="" name="q">
                    <input type="submit" value=""/>
                </form>
            </div>
            <span class="menu"> </span>
            <ul>
                <?php $url = $_SERVER["REQUEST_URI"]; ?>
                <li <?php if ($url == \yii\helpers\Url::home()) {
                    echo 'class="active"';
                } ?>><a href="<?= \yii\helpers\Url::home() ?>">HOME</a></li>
                <li <?php if ($url == \yii\helpers\Url::to(['about/index'])) {
                    echo 'class="active"';
                } ?>><a href="<?= \yii\helpers\Url::to(['about/index']) ?>">ABOUT</a></li>
                <li <?php if ($url == \yii\helpers\Url::to(['contact/index'])) {
                    echo 'class="active"';
                } ?>><a href="<?= \yii\helpers\Url::to(['contact/index']) ?>">CONTACT</a></li>

                <li>
                    <?php if (!Yii::$app->user->isGuest): ?>
                    <a href="<?= \yii\helpers\Url::to(['site/logout']) ?>">
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
                <li><a href="<?= \yii\helpers\Url::to(['/admin']) ?>">Админка</a></li>

            <?php endif; ?>


            </ul>
        </div>
        <div class="clearfix"></div>
        <!---//End-top-nav---->
    </div>
</div>
<!--/header-->
<div class="contact-content">
    <div class="container">

            <div class="contact-info">
                <?= Alert::widget() ?>
                <h2>CONTACT</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.Contrary to popular belief.</p>
            </div>
            <?= $content ?>
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



