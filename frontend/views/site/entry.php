<?php
/**
 * Created by PhpStorm.
 * User: ZQ
 * Date: 2018/11/14
 * Time: 15:52
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<div class="row">
    <div class="col-sm-6">
        <?php $form = ActiveForm::begin([
            'id' => 'entry-form',
            'options' => [
                    'class' => 'form-horizontal'  // form class
            ],
            'fieldConfig' => [
                        'labelOptions' => [
                                'class' => 'col-sm-2 control-label'
                        ],
                'template' => '
                        {label}
                        <div class="col-sm-10">
                            {input}
                            {error}
                        </div>',
                ]
        ]); ?>

        <?= $form->field($model,'name')->label('用户名') ?>

        <?= $form->field($model,'email')->label('邮箱') ?>


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <?= Html::submitButton('submit',['class'=>'btn btn-primary ']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>

</div>

