<h3><a href="<?= \yii\helpers\Url::to(['tags/index'])?>">Tags</a></h3>
<?php if (!empty($tags)): ?>
    <ul>
        <?php foreach ($tags as $tag): ?>
        <li><a href="<?= \yii\helpers\Url::to(['tags/view', 'id' => $tag->id]) ?>">#<?= $tag->title ?></a>

        <?php endforeach; ?>
    </ul>
<?php endif; ?>