<?php
/**
 * Created by PhpStorm.
 * User: ZQ
 * Date: 2018/11/15
 * Time: 9:44
 */

namespace app\controllers;


use app\models\Country;
use yii\web\Controller;

class CountryController extends Controller
{
    public function index()
    {
        $query = Country::find();
    }

}