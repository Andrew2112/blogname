<?php


use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>

<?php Modal::begin([
    'header' => '<h3>Напишите нам</h3>',
    'toggleButton' => [
        'label' => 'напишите нам',
        'tag' => 'button',
        'class' => 'btn btn-danger',
    ],
    'bodyOptions' => ['class' => 'modal-body'],
    'size' => "modal-lg",
    'footer' => '<button class="close" data-dismiss="modal">Закрыть</button>',
]); ?>
<div class="contact-details">
    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['data' => ['pjax' => false]],
        //'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "
          <div class='col-md-6 input-form' style='height: 75px;'>{input} {error}\n  </div>\n               
         ",
        ],
    ]) ?>

    <?= $form->field($model, 'name')->input('text', ['placeholder' => 'NAME'])->label(false)->hint(false); ?>

    <?= $form->field($model, 'email')->input('email', ['placeholder' => 'E-MAIL'])->label(false)->hint(false) ?>


    <?= $form->field($model, 'phone', ['enableAjaxValidation' => false])->input('text', ['placeholder' => 'PHONE'])->label(false) ?>

    <?= $form->field($model, 'city')->input('text', ['placeholder' => 'CITY'])->label(false); ?>


    <?= $form->field($model, 'message', [
        'template' => "
             <div class='col-md-12 input-form' >{input} {error}</div>\n
          "
    ])->textarea(['placeholder' => 'MESSAGE'])->label(false); ?>

    <?= $form->field($model, 'reCaptcha', ['template' => "
          <div class='col-md-6 input-form'>{input} {error}\n  </div>\n               
         "])->widget(
        \himiklab\yii2\recaptcha\ReCaptcha3::class,
        [
            'siteKey' => '6LeDZbEaAAAAAKHVncPq7ELHQmXRIoeGwY381CSj', // unnecessary is reCaptcha component was set up
            'action' => 'homepage',
        ]
    ) ?>
    <div class="form-group">
        <div class="col-md-12">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-default']) ?>
        </div>
    </div>
    <?php ActiveForm::end() ?>
</div>
<?php Modal::end(); ?>
<div class="contact-details">
    <div class="col-md-6 contact-map">
        <h4>FIND US HERE</h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d803187.8113675824!2d-120.11910914056458!3d38.15292455846902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C+USA!5e0!3m2!1sen!2sin!4v1423829283333"
                frameborder="0" style="border:0"></iframe>
    </div>
    <div class="col-md-6 company_address">
        <h4>GET IN TOUCH</h4>
        <p>500 Lorem Ipsum Dolor Sit,</p>
        <p>22-56-2-9 Sit Amet, Lorem,</p>
        <p>USA</p>
        <p>Phone:(00) 222 666 444</p>
        <p>Fax: (000) 123 456 78 0</p>
        <p>Email: <a href="mailto:info@example.com">info@mycompany.com</a></p>
        <p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>
    </div>
    <div class="clearfix"></div>
</div>
