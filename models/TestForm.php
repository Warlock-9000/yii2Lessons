<?php
/**
 * Created by PhpStorm.
 * User: base
 * Date: 15.08.2019
 * Time: 16:06
 */

namespace app\models;
use yii\base\Model;


class TestForm extends Model
{
    public $name;
    public $email;
    public $text;

    public function attributeLabels()
    {
        return [
            'name'=>'Имя',
            'email'=>'E-mail',
            'text'=>'Текст сообщения',
        ];
    }

    public function rules()
    {
        return [
            [ ['name', 'email'], 'required' ],
            [ 'email', 'email' ],
            [ 'text', 'string', 'length' => [10,30] ],
            [ 'text', 'trim' ],
        ];
    }
}