<?php


namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{
    public function debug($data)
    {
    echo '<pre>' . print_r($data, true) . '</pre>';
    }
    protected function setMeta($title=null, $description=null, $keywords=null){
        $this->view->title=$title;
        $this->view->registerMetaTag(['name'=>'keywords', 'content'=>$keywords]);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>$description]);
    }

}