<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\mrdiagnosaawalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mrdiagnosaawal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ugddiagnosa_id') ?>

    <?= $form->field($model, 'keterangan') ?>

    <?= $form->field($model, 'tanggal_kontrol') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
