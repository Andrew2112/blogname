
<div class="recent">
    <h3>RECENT POSTS</h3>
    <?= \app\components\PostWidget::widget()?>
</div>
<div class="recent">
    <h3>POPULAR POSTS</h3>
    <?= \app\components\PopularPostWidget::widget()?>
</div>
<div class="categories comments">
    <?= \app\components\CategoryWidget::widget()?>
</div>
<div class="recent">

    <?= \app\components\TagWidget::widget()?>
</div>

<div class="clearfix"></div>
