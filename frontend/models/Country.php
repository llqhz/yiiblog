<?php
/**
 * Created by PhpStorm.
 * User: ZQ
 * Date: 2018/11/15
 * Time: 9:40
 */

namespace app\models;


use yii\db\ActiveRecord;

class Country extends ActiveRecord
{
    public static function tableName()
    {
        return 'country';
    }
}