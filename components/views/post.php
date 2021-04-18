<?php if (!empty($posts)):?>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li><a href="<?=\yii\helpers\Url::to(['post/view', 'id'=>$post->id])?>"><?= $post->title?> | <span class="small"><?= Yii::$app->formatter->asDate($post->created_at, 'long')?></span></a></li>
        <?php endforeach; ?>
    </ul>
<?php endif;?>
