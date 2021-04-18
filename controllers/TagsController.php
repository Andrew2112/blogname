<?php

namespace app\controllers;

use app\models\Tag;
use yii\web\NotFoundHttpException;

class TagsController extends \app\controllers\AppController
{
    public function actionIndex()
    {
        $tags=Tag::find()->with('post')->all();
        return $this->render('index', compact('tags'));
    }
    /**
     * Displays a single Tag model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $tags=Tag::findOne($id);
        return $this->render('view', [
            'tags' => $tags,
        ]);
    }
}
