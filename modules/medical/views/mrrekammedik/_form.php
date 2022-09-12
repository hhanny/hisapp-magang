<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model app\models\Mrrekammedik */
/* @var $form yii\widgets\ActiveForm */
?>
  
<div class="mrrekammedik-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    $dataPost=ArrayHelper::map(\app\models\Mrjenisctev::find()
        ->asArray()->all(), 'jenisctev_id', 'Jenisctev ID');
    echo $form->field($model, 'jenisctev_id')
        ->dropDownList(
            ['01'=>'clubfoot','02'=>'jari keriting']
        );
    ?> 

    <?= $form->field($model, 'infonoso_id')->textInput() ?>

    <?= $form->field($model, 'kasus_id')->textInput() ?>

    <?= $form->field($model, 'statuskembali_id')->textInput() ?>

    <?= $form->field($model, 'tuna_kode')->textInput(['maxlength' => true]) ?>
 
    <?= $form->field($model, 'statuslengkap_id')->textInput() ?>

    <?= $form->field($model, 'ugdlayanan_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alasandirujuk_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ugddiagnosa_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_reg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anemnesa')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
