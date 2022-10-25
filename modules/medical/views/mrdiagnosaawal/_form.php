<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model app\models\Mrdiagnosaawal */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="mrdiagnosaawal-form">
<div class="x_panel">
    <div class="x_title">
        <h2>Diagnosa & Tindakan</h2>

        <div class="clearfix"></div>
    </div>
    <div class="x_content" style="display: block;">
        <br>
        <?php $form = ActiveForm::begin(); ?>

        <div class="row">
            <div class="col-md-4">
                <?php
                $dataPost=ArrayHelper::map(\app\models\Mrrekammedik::find()
                    ->asArray()->all(), 'rekammedik_id', 'anamnesa');
                echo $form->field($model, 'anamnesa')
                    // ->dropDownList(
                    //     $dataPost,
                    // );
                ?>
            </div>

            <div class="col-md-4">
                <?php
                $dataPost=ArrayHelper::map(\app\models\Mrrekammedik::find()
                    ->asArray()->all(), '', '');
                echo $form->field($model, 'kegawatan')
                    // ->dropDownList(
                    //     $dataPost,
                    // );
                ?>
            </div>

            <div class="col-md-4">
                <?php
                $dataPost=ArrayHelper::map(\app\models\doctor::find()
                    ->asArray()->all(), 'doctor_id', 'fullname');
                echo $form->field($model, 'dokter')
                    ->dropDownList(
                        $dataPost,
                    );
                ?>
            </div>

            <div class="col-md-4">
                <?php
                $dataPost=ArrayHelper::map(\app\models\Mrrekammedik::find()
                    ->asArray()->all(), '', '');
                echo $form->field($model, 'alasan_datang')
                    ->dropDownList(
                        $dataPost,
                    );
                ?>
            </div>

            <div class="col-md-4">
                <?php
                $dataPost=ArrayHelper::map(\app\models\Mrrekammedik::find()
                    ->asArray()->all(), '', '');
                echo $form->field($model, 'cara_masuk')
                    ->dropDownList(
                        $dataPost,
                    );
                ?>
            </div>

            <div class="col-md-4">
                <?php
                $dataPost=ArrayHelper::map(\app\models\Mrkasus::find()
                    ->asArray()->all(), 'kasus_id', 'nama_kasus');
                echo $form->field($model, 'kasus')
                    ->dropDownList(
                        $dataPost,
                    );
                ?>
            </div>
            </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>  

<div class="x_panel">
    <div class="x_title">
        <h2>Diagnosa</h2>

        <div class="clearfix"></div>
    </div>
    <div class="x_content" style="display: block;">
        <br>
        <?php $form = ActiveForm::begin(); ?>

        <div class="row">
        <div class="col-md-4">
                <?php
                $dataPost=ArrayHelper::map(\app\models\Mrdiagnosaawal::find()
                    ->asArray()->all(), 'ugddiagnosa_id', 'ugddiagnosa_id');
                echo $form->field($model, 'ugddiagnosa_id')
                    ->dropDownList(
                        $dataPost,
                    );
                ?>
        </div>

        <div class="col-md-4">
                <?php
                $dataPost=ArrayHelper::map(\app\models\Mrdiagnosaawal::find()
                    ->asArray()->all(), 'ugddiagnosa_id', 'keterangan');
                echo $form->field($model, 'keterangan')
                    ->dropDownList(
                        $dataPost,
                    );
                ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>  

<div class="x_panel">
    <div class="x_title">
        <h2>ICD</h2>

        <div class="clearfix"></div>
    </div>
    <div class="x_content" style="display: block;">
        <br>
        <?php $form = ActiveForm::begin(); ?>

        <div class="row">
        <div class="col-md-4">
                <?php
                $dataPost=ArrayHelper::map(\app\models\Mricd::find()
                    ->asArray()->all(), 'icd_kode', 'icd_kode');
                echo $form->field($model, 'icd')
                    // ->dropDownList(
                    //     $dataPost,
                    // );
                ?>
        </div>

        <div class="col-md-4">
                <?php
                $dataPost=ArrayHelper::map(\app\models\Mricd::find()
                    ->asArray()->all(), 'icd_kode', 'deskripsi');
                echo $form->field($model, 'deskripsi')
                    // ->dropDownList(
                    //     $dataPost,
                    // );
                ?>
        </div>

        <div class="col-md-4">
                <?php
                $dataPost=ArrayHelper::map(\app\models\Mrkasus::find()
                    ->asArray()->all(), 'kasus_id', 'nama_kasus');
                echo $form->field($model, 'kasus')
                    ->dropDownList(
                        $dataPost,
                    );
                ?>
        </div>
            </div>
            
        <?php ActiveForm::end(); ?>
    </div>
</div>  

<div class="x_panel">
    <div class="x_title">
        <h2>Tindakan</h2>

        <div class="clearfix"></div>
    </div>
    <div class="x_content" style="display: block;">
        <br>
        <?php $form = ActiveForm::begin(); ?>

        <div class="row">
        <div class="col-md-4">
                <?php
                $dataPost=ArrayHelper::map(\app\models\Mrtindakan::find()
                    ->asArray()->all(), 'tindakan_id', 'nama_tindakan');
                echo $form->field($model, 'tindak_lanjut')
                    ->dropDownList(
                        $dataPost,
                    );
                ?>
        </div>
            </div>

            <div class="ln_solid"></div>
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            
        <?php ActiveForm::end(); ?>
    </div>
</div>  

</div>
