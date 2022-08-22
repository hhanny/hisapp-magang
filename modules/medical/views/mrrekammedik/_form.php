<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mrrekammedik */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mrrekammedik-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jenisctev_id')->textInput(['maxlength' => true]) ?>

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
