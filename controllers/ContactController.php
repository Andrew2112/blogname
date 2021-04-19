<?php


namespace app\controllers;


use app\models\Contact;
use Yii;

class ContactController extends AppController
{
    public $layout = '_basic';

    public function actionIndex()
    {
        $model = new Contact();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Yii::$app->mailer->compose('views/letter', compact('model'))
                ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                ->setTo([Yii::$app->params['adminEmail']])
                ->setSubject('Письмо обратной связи')
                ->send();
            $model = new Contact();
        }

        return $this->render('index', compact('model'));
    }
}