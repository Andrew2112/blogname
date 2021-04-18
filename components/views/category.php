<h3><a href="<?= \yii\helpers\Url::to(['category/index'])?>">CATEGORIES</a></h3>
<?php if (!empty($cats)): ?>
    <ul>
        <?php foreach ($cats as $cat): ?>
            <li><a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $cat->id]) ?>"><?= $cat->name ?>
                    | <?= $cat->getPost()->count() ?></a></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>