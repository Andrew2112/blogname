<?php

namespace app\components;

use app\models\Category;
use Yii;


class CategoryWidget extends \yii\base\Widget
{
    public function run(): string
    {
        $html = Yii::$app->cache->get('catMenu');
        if (!$html) {
            $cats = Category::find()->orderBy('name')->all();
            $html = $this->render('category', compact('cats'));
            Yii::$app->cache->set('catMenu', $html, 15);
        }
        return $html;
    }
}