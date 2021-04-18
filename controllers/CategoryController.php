<?php


namespace app\controllers;


use app\models\Category;
use yii\web\HttpException;

class CategoryController extends AppController
{
    public function actionIndex(): string
    {
        $categories = Category::find()->all();
        $this->setMeta("Blogname | Categories Blog", 'description', 'keywords');
        return $this->render('index', compact('categories'));
    }

    public function actionView($id): string
    {
        $category=Category::find()->where(['id'=>$id])->one();
if (empty($category)){
    throw new HttpException(404, 'Category not found');
}
$this->setMeta("Blogname | {$category->name}", 'description', 'keywords');
        return $this->render('view', compact('category'));
    }
}