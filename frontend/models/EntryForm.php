<?php
/**
 * Created by PhpStorm.
 * User: ZQ
 * Date: 2018/11/14
 * Time: 14:53
 */

namespace app\models;


use yii\base\Model;

class EntryForm extends Model
{

    public $name;
    public $email;

    // 设定数据表的验证规则
    public function rules()
    {
        return [
          [['name','email'],'required'],
            ['email','email']
        ];
    }


}