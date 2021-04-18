<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\widgets\Menu;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-167225345-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-167225345-1');
        </script>
        <!-- Yandex.Metrika counter -->
        <meta name="yandex-verification" content="3e8e4f32455ca396" />
        <script type="text/javascript" >
            (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
                m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(63048229, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
            });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/63048229" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
        <meta name="yandex-verification" content="3e8e4f32455ca396" />
        <meta charset="<?= Yii::$app->charset ?>">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="/favicon.ico" type="image/vnd.microsoft.icon">
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->


        <div class="site-navbar-wrap bg-white">
            <div class="site-navbar-top">
                <div class="container py-2">
                    <div class="row align-items-center">
                        <div class="col-6">

                            <a href="<?=Url::to(['contact/view'])?>"  class="p-2 pl-0"  ><span class="icon-envelope mr-2"></span>
                                <span class="d-none d-md-inline-block"  >emzt@bk.ru</span></a>
<!--                            <a href="--><?//= //Url::to(['contact/view'])?><!--" class="p-2 pl-0"> <span class="icon-envelope mr-2"></span>-->
                            <!--<span class="d-none d-md-inline-block"> energomeh@mail.ru</span></a>-->

                        </div>

                        <div class="col-6">
                            <div class="d-flex ml-auto">
                                <div class="d-flex align-items-center ml-auto mr-4">

                                    <span class="icon-phone mr-2"></span>
                                    <span class="d-none d-md-inline-block">+7-930-001-10-24 </span>
                                </div>

                                <div class="d-flex align-items-center">
                                    <span class="icon-phone mr-2"></span>
                                    <span class="d-none d-md-inline-block"> +7-904-644-06-87</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-navbar bg-light">
                <div class="container py-1">
                    <div class="row align-items-center">
                        <div class="col-2">
                            <h2 class="mb-0 site-logo"><a
                                    href="<?= Url::home() ?>"><?= Html::img('@web/images/label.png', ['alt' => 'Наш логотип', 'style' => "width: 100px"]) ?></a>
                            </h2>
                        </div>
                        <div class="col-10">
                            <nav class="site-navigation text-right" role="navigation">
                                <div class="container">
                                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                                                                                  class="site-menu-toggle js-menu-toggle text-black"><span
                                                class="icon-menu h3"></span></a></div>
                                    <?php echo Menu::widget([
                                        'items' => [
                                            // Important: you need to specify url as 'controller/action',
                                            // not just as 'controller' even if default action is used.
                                            ['label' => 'Главная', 'url' => ['/']],
                                            // 'Products' menu item will be selected as long as the route is 'product/index'
                                            ['label' => 'О нас', 'url' => ['about/index']],
                                            ['label' => 'Продукция', 'url' => ['product/index'], 'options' => ['class' => 'has-children'],
                                                'items' => [
                                                    ['label' => 'Запчасти ВВН, ВВШ', 'url' => ['category/view', 'id' => 1]],
                                                    ['label' => 'Запчасти ВВБ(М), ВВД(М)', 'url' => ['category/view', 'id' => 2]],
                                                    ['label' => 'Запчасти ВВБК', 'url' => ['category/view', 'id' => 3]],
                                                    ['label' => 'Запчасти ВВЭ', 'url' => ['category/view', 'id' => 5]],
                                                    ['label' => 'Запчасти КАГ-24, ВВГ-20', 'url' => ['category/view', 'id' => 4]],
                                                    ['label' => 'Запчасти КРУЭ ЯЭ, ЯЭГ, ЯГК', 'url' => ['category/view', 'id' => 6]],
                                                ],
                                            ],
                                            ['label' => 'Отзывы', 'url' => ['otzyv/index']],
                                            ['label' => 'Видео', 'url' => ['video/view']],
                                            ['label' => 'Контакты', 'url' => ['contact/view']],
                                        ],
                                        'activeCssClass' => 'active',
//                                        'firstItemCssClass' => 'fist-item',
//                                        'lastItemCssClass' => 'last-item',
                                        'options' => [

                                            'class' => 'site-menu js-clone-nav d-none d-lg-block',

                                        ],
                                    ]); ?>

                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?= $content; ?>

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 ">
                        <div class="row mb-5">
                            <div class="col-md-12"><h3 class="footer-heading mb-4">ООО "Энергомехзавод ремонт и сервис"</h3></div>
                            <div class="col-md-3">
                                <?php echo Menu::widget([
                                    'items' => [
                                        // Important: you need to specify url as 'controller/action',
                                        // not just as 'controller' even if default action is used.
                                        ['label' => 'Главная', 'url' => ['/']],
                                        // 'Products' menu item will be selected as long as the route is 'product/index'
                                        ['label' => 'О нас', 'url' => ['about/index']],
                                        ['label' => 'Продукция', 'url' => ['product/index']],

                                    ],
                                    'activeCssClass' => 'active',
//                                        'firstItemCssClass' => 'fist-item',
//                                        'lastItemCssClass' => 'last-item',
                                    'options' => [

                                        'class' => 'list-unstyled',

                                    ],
                                ]); ?>
                            </div>
                            <div class="col-md-3">
                                <?php echo Menu::widget([
                                    'items' => [
                                        ['label' => 'Отзывы', 'url' => ['otzyv/index']],
                                        ['label' => 'Видео', 'url' => ['video/view']],
                                        ['label' => 'Контакты', 'url' => ['contact/view']],
                                    ],
                                    'activeCssClass' => 'active',
//                                        'firstItemCssClass' => 'fist-item',
//                                        'lastItemCssClass' => 'last-item',
                                    'options' => [

                                        'class' => 'list-unstyled',

                                    ],
                                ]); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="row mb-5">
                            <div class="col-md-12"><h3 class="footer-heading mb-4">Наши контакты</h3></div>
                            <div class="col-md-6">
                                <p>Санкт-Петербург<br> ул. Невзоровой 9</p>
                            </div>
                            <div class="col-md-6">
                                Tel. +7-904-644-06-87 <br>
                                Tel. +7-930-001-10-24 <br>
                                <!--E-mail. energomeh@mail.ru <br>-->
                                E-mail. emzt@bk.ru <br>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="row pt-5 text-center">
                    <div class="col-md-12">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy; All Rights Reserved | This template is made with <i class="icon-heart-o"
                                                                                                 aria-hidden="true"></i>
                            by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>

                </div>
            </div>
        </footer>
    </div>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>