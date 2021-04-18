<?php if (!empty($posts)):?>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li><a href="<?=\yii\helpers\Url::to(['post/view', 'id'=>$post->id])?>"><?= $post->title?> | <span class="small"><span class="glyphicon glyphicon-eye-open"></span> <?= $post->viewed?></span></a></li>
        <?php endforeach; ?>
    </ul>
<?php endif;?>
