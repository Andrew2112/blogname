<?php


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>


<?php $form = ActiveForm::begin([
    'id' => 'signup',
]) ?>
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'email') ?>
<?= $form->field($model, 'password')->passwordInput() ?>
<div class="form-group">
    <?= Html::submitButton('Signup', ['class' => 'btn btn-info']) ?>
</div>
<?php ActiveForm::end() ?>
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?169"></script>
<script type="text/javascript">
    VK.init({apiId: 7827707});
</script>

<!-- VK Widget -->
<div id="vk_auth"></div>
<script type="text/javascript">
    VK.Widgets.Auth("vk_auth", {"authUrl":"/site/login-vk"});
</script>
<?php
$js = <<<JS
let form=$('.signup');
form.on('beforeSubmit', function (){
    let data=form.serialize();
    $.ajax({
    url: form.attr('action'),
    type: form.attr('method'),
    data: data,
    success: function(res) {
      console.log(res);
      form[0].reset();
    },
    error: function (){
        alert('Ошибка');
    }
    });
    return false
});
JS;
//$this->registerJs($js)
?>
