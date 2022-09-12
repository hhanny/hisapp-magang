<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mrtindakan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mrtindakan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tindakan_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_tindakan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
