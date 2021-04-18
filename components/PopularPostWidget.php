<?php


namespace app\components;


use app\models\Post;
use Yii;
use yii\base\Widget;

class PopularPostWidget extends Widget
{
    public function run(): string
    {
        $html = Yii::$app->cache->get('postPopular');
        if (!$html) {
            $posts = Post::find()->orderBy('viewed DESC')->limit(5)->all();
            $html = $this->render('popular_post', compact('posts'));
            Yii::$app->cache->set('postPopular', $html, 15);
        }
        return $html;
    }
}