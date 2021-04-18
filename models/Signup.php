<?php


namespace app\models;


use yii\base\Model;

class Signup extends Model
{
    public $email;
    public $name;
    public $password;

    public function rules()
    {
        return [
            [['email', 'password', 'name'], 'required'],
            ['email', 'unique', 'targetClass' => User::class, 'message' => 'Этот логин уже занят'],
            ['email', 'email']
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'E-mail /Логин',
            'password' => 'Пароль',

        ];
    }

}