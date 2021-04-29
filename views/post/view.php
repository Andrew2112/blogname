<?php

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

?>
    <div class="single-grid">

        <?= \yii\helpers\Html::img("@web/{$post->image}") ?>
        <h2><?= $post->title ?></h2>
        <p><?= $post->text ?></p>
        <span>Tags: </span>
        <?php foreach ($post->tag as $item): ?>

            <span><a href="<?=\yii\helpers\Url::to(['tags/view', 'id'=>$item->id])?>"><?=$item->title?></a> </span>
        <?php endforeach; ?>

    </div>


<?php if (!empty($comments)): ?>


    <?php foreach ($comments as $comment): ?>
        <?php if ($comment->status): ?>
            <p>Последний комментарий:</p>
            <ul class="comment-list">
                <h5 class="post-author_head">Written by <?= $comment->user->name ?></h5>
                <li>
                    <?= \yii\helpers\Html::img('@web/images/avatar.png', ['alt' => 'avatar']) ?>

                    <div class="desc" id="desc">
                        <p> <?= $comment->text ?></p>

                    </div>
                    <div class="clearfix"></div>
                </li>
                <li>
                    <p><span class="small"><?= Yii::$app->formatter->asDate($comment->created_at, 'long') ?></span></p>
                </li>
            </ul>
            <p><a href="<?=\yii\helpers\Url::to(['post/post-comments', 'id'=>$post->id])?>">Читать все комментарии</a></p>
        <?php endif ?>
    <?php endforeach ?>

<?php endif ?>

<?php if (!Yii::$app->user->isGuest): ?>
    <div class="content-form">
        <h3>Leave a comment</h3>
        <?php Pjax::begin([
            // Опции Pjax
        ]); ?>
        <?php $form = ActiveForm::begin([
            'id' => 'comment',
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
        ])->textarea(['class' => 'form-control', 'placeholder' => "Message"]) ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
        <?php ActiveForm::end() ?>
        <?php Pjax::end(); ?>
    </div>
<?php else: ?>

    <p>Только <a href="<?= \yii\helpers\Url::to(['site/login']) ?>">зарегистрованные</a> пользователи могут оставлять
        Комментарии</p>
<?php endif ?>