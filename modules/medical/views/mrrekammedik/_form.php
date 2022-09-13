<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Mrrekammedik;

/* @var $this yii\web\View */
/* @var $model app\models\Mrrekammedik */
/* @var $form yii\widgets\ActiveForm */
?>



<div class="mrrekammedik-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    $dataPost=ArrayHelper::map(\app\models\Mrjenisctev::find()
        ->asArray()->all(), 'jenisctev_id', 'jenis_ctev');
    echo $form->field($model, 'jenisctev_id')
        ->dropDownList(
            $dataPost,
            // ['jenisctev_id'=>'Jenisctev ID']
        );
    ?>
    
    <?php
    $dataPost=ArrayHelper::map(\app\models\Mrinfeksinosokomial::find()
        ->asArray()->all(), 'infonoso_id', 'infeksi_nosokomial');
    echo $form->field($model, 'infonoso_id')
        ->dropDownList(
            $dataPost,
            // ['infonoso_id'=>'Infonoso ID']
        );
    ?>

    <?php
        $dataPost=ArrayHelper::map(\app\models\Mrkasus::find()
            ->asArray()->all(), 'kasus_id', 'nama_kasus');
        echo $form->field($model, 'kasus_id')
            ->dropDownList(
                $dataPost,
                // ['kasus_id'=>'Kasus ID']
            );
    ?>

    <?php
        $dataPost=ArrayHelper::map(\app\models\Mrstatuskembali::find()
            ->asArray()->all(), 'statuskembali_id', 'nama_statuskembali');
        echo $form->field($model, 'statuskembali_id')
            ->dropDownList(
                $dataPost,
                // ['statuskembali_id'=>'Statuskembali ID']
            );
    ?>

    <?php
        $dataPost=ArrayHelper::map(\app\models\Mrdisabilitas::find()
            ->asArray()->all(), 'tuna_kode', 'tuna_nama');
        echo $form->field($model, 'tuna_kode')
            ->dropDownList(
                $dataPost,
                // ['tuna_kode'=>'Tuna Kode']
            );
    ?>

    <?php
        $dataPost=ArrayHelper::map(\app\models\Mrstatuslengkap::find()
            ->asArray()->all(), 'statuslengkap_id', 'nama_statuslengkap');
        echo $form->field($model, 'statuslengkap_id')
            ->dropDownList(
                $dataPost,
                // ['statuslengkap_id'=>'Statuslengkap ID']
            );
    ?>

    <?php
        $dataPost=ArrayHelper::map(\app\models\Mrugdlayanan::find()
            ->asArray()->all(), 'ugdlayanan_id', 'ugd_layanan');
        echo $form->field($model, 'ugdlayanan_id')
            ->dropDownList(
                $dataPost,
                // ['ugdlayanan_id'=>'Ugdlayanan ID']
            );
    ?>

    <?php
        $dataPost=ArrayHelper::map(\app\models\Mrugdalasandirujuk::find()
            ->asArray()->all(), 'alasandirujuk_id', 'alasan_dirujuk');
        echo $form->field($model, 'alasandirujuk_id')
            ->dropDownList(
                $dataPost,
                // ['alasandirujuk_id'=>'Alasandirujuk ID']
            );
    ?>

    <?php
        $dataPost=ArrayHelper::map(\app\models\Mrdiagnosaawal::find()
            ->asArray()->all(), 'ugddiagnosa_id', 'keterangan');
        echo $form->field($model, 'ugddiagnosa_id')
            ->dropDownList(
                $dataPost,
                // ['ugddiagnosa_id'=>'Ugddiagnosa ID']
            );
    ?>  

    <?= $form->field($model, 'no_reg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anemnesa')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
