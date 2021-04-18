<?php


namespace app\components;


use app\models\Post;
use Yii;
use yii\base\Widget;

class PostWidget extends Widget
{
    public function run(): string
    {
        $html = Yii::$app->cache->get('postMenu');
        if (!$html) {
            $posts = Post::find()->orderBy('created_at DESC')->limit(5)->all();
            $html = $this->render('post', compact('posts'));
            Yii::$app->cache->set('postMenu', $html, 15);
        }
        return $html;
    }
}