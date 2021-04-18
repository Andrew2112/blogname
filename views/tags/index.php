<h2>Tags Blog</h2>
<ul>
    <?php foreach ($tags as $item):?>
        <li>
            <h4><a href="<?= \yii\helpers\Url::to(['tags/view', 'id'=>$item->id])?>"><?=$item->title?></a></h4>
            <?php foreach ($item->post as $value):?>
                <h5><a href="<?= \yii\helpers\Url::to(['post/view', 'id'=>$value->id])?>"><?=$value->title?></a></h5>
            <?php endforeach?>
        </li>
    <?php endforeach?>
</ul>

