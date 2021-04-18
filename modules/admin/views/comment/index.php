<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Comment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'text:ntext',

            [
                'attribute' => 'user_id',
                'value' => function ($data) {
                    return $data->user->name;
                }
            ],

            [
                'attribute' => 'post_id',
                'value' => function ($data) {
                    return $data->post->title;
                }
            ],
           // 'status',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn',

                'buttons' => [
                    'view'=>function ( $url, $model, $key) {
if (!$model->isAllow()){
    return Html::a('Allow',Url::to(['comment/allow', 'id'=>$model->id]), ['class' => 'btn btn-success btn-xs']);}
},
                    'update' => function ($url, $model, $key) {
                        if ($model->isAllow()){
                            return Html::a('Disallow', Url::to(['comment/disallow', 'id'=>$model->id]), ['class' => 'btn btn-danger btn-xs']);
                        }

                    },

                ],
                'header' => 'Действия',
            ],
        ],
    ]); ?>


</div>
