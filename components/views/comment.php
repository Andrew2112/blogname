<?php

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

$commentForm = new \app\models\CommentForm();
?>
<li>
    <hr>
    <h4 class='post-author_head'>Writen by: <?= $comment['user']['name'] ?></h4>
    <img src='/web/images/avatar.png' alt='avatar' style='width: 5%'>
    <?= $comment['text']; ?>
    <?= $comment['id']; ?>
    На: <?= $comment['parent_id']; ?>
    <p>
        <span class='small'><?= Yii::$app->formatter->asTime($comment['created_at'], 'php:H:m') ?> | <?= Yii::$app->formatter->asDate($comment['created_at'], 'php:d M Y') ?></span>
    </p>
    <div class="answer-block">
        <?php Modal::begin([
            'header' => '<h3>Ваш комментарий</h3>',
            'toggleButton' => [
                'tag' => 'a',
                'class' => 'button-modal',
                'label' => 'Ответить',
            ],
            'footer' => '<button class="close" data-dismiss="modal">Закрыть</button>',

        ]);

        if (!Yii::$app->user->isGuest): ?>
            <div class="content-form-modal">

                <?php Pjax::begin([
                    // Опции Pjax
                ]); ?>
                <?php $form = ActiveForm::begin([
                    'id' => 'comment',
                    'action' => ['post/comment', 'id' => $comment['post_id']],
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
                    ])->textarea(['class' => 'form-control', 'placeholder' => "Message", 'rows' => '7']) ?>
                <?= $form->field($commentForm, 'parent_id')->input('hidden', ['value' => $comment['id']])->label(false) ?>
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
        <?php if (isset($comment['children'])): ?>
            <span onclick="openComment([<?= $comment['id'] ?>])"
                  class="glyphicon glyphicon-comment comment-open"> <?= count($comment['children']) ?></span>
        <?php endif; ?>
    </div>

    <?php if (isset($comment['children'])): ?>

        <ul id="<?= $comment['id'] ?>">
            <?= $this->getMenuHtml($comment['children']); ?>

        </ul>

    <?php endif; ?>

</li>

<script>
    function openComment(options) {
        for (let i = 0; i < options.length; i++) {
            if ($('#' + options[i]).is(':hidden')) {
                $('#' + options[i]).show('slow');
            } else if ($('#' + options[i]).is(':visible')) {
                $('#' + options[i]).hide('slow');

            }
        }
        return false
    }
</script>