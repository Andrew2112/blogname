<?php

use app\components\CommentWidget;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

$commentForm = new \app\models\CommentForm(); ?>
    <div class="single-grid">
        <h2><?= $post->title ?></h2>
        <p><?= $post->excerpt ?></p>
        <p><a href="<?= \yii\helpers\Url::to(['post/view', 'id' => $post->id]) ?>">Read post</a></p>

        <?= CommentWidget::widget([
            'id' => $post->id,
        ]); ?>


    </div>

        <?php Modal::begin([
            'header' => '<h3>Ваш комментарий</h3>',
            'toggleButton' => [
                'tag' => 'a',
                'type' => 'button',
                'class' => 'button-modal btn btn-success button-modal-post',
                'label' => 'Отзыв на пост',
            ],
            'footer' => '<button class="close" data-dismiss="modal">Закрыть</button>',

        ]); ?>

<?php if (!Yii::$app->user->isGuest): ?>
    <div class="content-form-modal">

        <?php Pjax::begin([
            // Опции Pjax
        ]); ?>
        <?php $form = ActiveForm::begin([
            'id' => 'comment-post',
            'action' => ['post/comment', 'id' => $post->id],
            'options' => [
                'class' => 'form-horizontal',
                'data' => ['pjax' => true],
            ],
        ]) ?>
        <?= $form->field($commentForm, 'comment',
            [
                'template' => "{input}\n
             <div class='col-md-12 input-form' style='margin-top: 15px;' > {error}</div>\n
          "
            ])->textarea(['class' => 'form-control', 'placeholder' => "Message", 'rows'=>'7']) ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
        <?php ActiveForm::end() ?>
        <?php Pjax::end(); ?>
    </div>
<?php else: ?>

    <p>Только <a href="<?= \yii\helpers\Url::to(['site/login']) ?>">зарегистрованные</a> пользователи могут
        оставлять
        Комментарии</p>
<?php endif ?>

<?php Modal::end(); ?>