<?php


namespace app\components;


use app\models\Post;
use app\models\Tag;
use Yii;
use yii\base\Widget;

class TagWidget extends Widget
{
    public function run(): string
    {
        $html = Yii::$app->cache->get('tagMenu');
        if (!$html) {
            $tags = Tag::find()->orderBy('id')->limit(5)->all();
            $html = $this->render('tag', compact('tags'));
            Yii::$app->cache->set('tagMenu', $html, 15);
        }
        return $html;
    }
}