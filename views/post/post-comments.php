<div class="single-grid">
    <h2><?=$post->title?></h2>
    <p><?=mb_strcut($post->text, 0,200)?>...</p>
    <p><a href="<?=\yii\helpers\Url::to(['post/view', 'id'=>$post->id])?>">Read post</a></p>
</div>
<?php if (!empty($comments)): ?>
    <?php foreach ($comments as $comment): ?>

        <?php if ($comment->status): ?>
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
        <?php endif ?>
    <?php endforeach ?>
<?php endif ?>
