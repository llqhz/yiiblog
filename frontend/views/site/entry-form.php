<?php
/**
 * Created by PhpStorm.
 * User: ZQ
 * Date: 2018/11/14
 * Time: 15:05
 */

use yii\helpers\Html;

?>

<p>you have successfully enter the form page!</p>

<ul>
    <li>
        <label for="Name">Name: </label>
        <?= Html::encode($model->name) ?>
    </li>
    <li>
        <label for="Email">Email: </label>
        <?= Html::encode($model->email) ?>
    </li>
</ul>
