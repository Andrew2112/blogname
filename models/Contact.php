<?php


namespace app\models;


use yii\base\Model;

class Contact extends Model
{
    public $name;
    public $email;
    public $phone;
    public $city;
    public $message;

    public function rules()
    {
        return [
            [['email', 'phone', 'name', 'city', 'message'], 'required'],
            [['email'], 'email'],
            [['name', 'city'], 'string', 'min' => 3, 'max' => 255],
            [['message'], 'string', 'min' => 3],
            [['phone'], 'match', 'pattern' => '/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'E-mail ',
            'city' => 'Город',
            'phone' => 'Телефон',
            'message' => 'Сообщение',
        ];
    }

}