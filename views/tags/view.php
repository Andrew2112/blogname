
<h2>Tag: <?= $tags->title ?></h2>

<div class="content-grid">
    <?php foreach ($tags->post as $item):?>
        <div class="content-grid-info">
            <?= yii\helpers\Html::img("@web/{$item->image}", ['alt' => 'post1']) ?>

            <div class="post-info">
                <h4><a href="<?=\yii\helpers\Url::to(['post/view', 'id'=>$item->id])?>"><?= $item->title?></a> <?=Yii::$app->formatter->asDate($item->created_at, 'long') ?> /
                    <a href="<?= \yii\helpers\Url::to(['category/index', 'id'=>$item->category_id])?>" class="category-link"><?= $item->category->name?></a></h4>
                <p><?= $item->excerpt?></p>
                <div class="read-more">
                    <a href="<?=\yii\helpers\Url::to(['post/view', 'id'=>$item->id])?>"><span></span>READ MORE</a>
                    <div class="div">
                        <span class="glyphicon glyphicon-eye-open"></span> <?= $item->viewed?>
                        <span class="glyphicon glyphicon-comment"></span>
                        <a href="<?=\yii\helpers\Url::to(['post/post-comments', 'id'=>$item->id])?>"> <?= $item->getComment()->where(['status'=>1])->count()?>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    <?php endforeach?>


</div>

<a href="<?= \yii\helpers\Url::to(['category/index']) ?>">Back to Categories Blog</a>
