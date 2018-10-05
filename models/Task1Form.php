<?php
/**
 * Created by PhpStorm.
 * User: Полина
 * Date: 05.10.2018
 * Time: 19:57
 */

namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class Task1Form extends Model
{
    public $answer;
    public function attributeLabels()
    {
        return [
            'answer' => 'Ответ',
        ];
    }
    public function rules()
    {
        return [
            ['answer', 'required', 'message' => 'Нет ответа, хи-хи'],
            ['answer', 'integer'],
            ['answer', 'myRule']
        ];
    }
    public function myRule($attrs){
        if(!in_array($this->$attrs, ['1121'])){
            $this->addError($attrs, 'Хе-хе ошибка))');
        }
    }
}