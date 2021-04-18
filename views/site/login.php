<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Вход';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>


    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',

    ]); ?>


    <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput() ?>

    <div class="form-group">
        <div class="col-md-offset-3 col-md-9">
            <?= Html::submitButton('Вход', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>


</div>
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?169"></script>
<script type="text/javascript">
    VK.init({apiId: 7827707});
</script>

<!-- VK Widget -->
<div id="vk_auth"></div>
<script type="text/javascript">
    VK.Widgets.Auth("vk_auth", {"authUrl":"/site/login-vk"});
</script>