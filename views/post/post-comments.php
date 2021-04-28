<?php

use app\components\CommentWidget; ?>
<div class="single-grid">
    <h2><?= $post->title ?></h2>
    <p><?= $post->excerpt ?></p>
    <p><a href="<?= \yii\helpers\Url::to(['post/view', 'id' => $post->id]) ?>">Read post</a></p>

    <?= CommentWidget::widget([
        'id' => $post->id,
    ]); ?>
</div>

