<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Post */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="post-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            // 'category_id',
            [
                'attribute' => 'category_id',
                'value' => $model->category->name,
            ],

            'title:html',
            'excerpt:html',
            'text:html',
            //'image',
            ['attribute' => 'image',
                'value' => "/{$model->image}",
                'format' => ['image', ['width' => 200]]
            ],
            [
                'attribute' => 'tag',

                'value' => function ($model) {

                    $tag = $model->getTag()->select('title')->asArray()->all();
                    if ($tag) {
                        foreach ($tag as $item) {
                            $arr[] = $item['title'];
                        }
                        return implode(', ', $arr);
                    }
                    return false;
                }

            ],
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
