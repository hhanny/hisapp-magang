<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model app\models\Mrdiagnosaawal */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
    .card-text {
        margin-bottom: 5px;
    }
</style>
<?php if ($model->regstts_id != \app\models\Registration::Active) :
    // print_r($model); exit;
    ?>
    <div class="row" style="margin-bottom: 5px;">
        <div class="col-md-12">
            <div class="alert alert-danger alert-dismissible fade show mb-0">
                <strong>Pasien telah checkout pada
                    tanggal <?= date('d-m-Y', strtotime($model->date_out)) . ' ' . date('H:i', strtotime($model->time_out)) . ' oleh petugas ' . $model->updatedBy->employee->person_name ?></strong>

            </div>
        </div>
    </div>
    <?php endif ?>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-primary-gradient"><h3 class="card-title text-white"><iclass="fafa-money">
                    </iclass=>Diagnosa Pasien : <?= $model->reg_num ?></h3>
                </div>
                <div class="card-body">
                    <h4 class="text-dark">
                        <strong><i class="fa fa-users"></i> <?= $model->mr_number . '/' . $model->patient->fullname 
                        . ' (' . $model->patient->gender_id . ')' ?>
                        </strong>
                    </h4>
                    <p>
                        <i class="fa fa-birthday-cake"></i> <?= $model->patient->birth_place . ', ' . date('d-m-Y', 
                        strtotime($model->patient->date_of_birth)) . ' (' . \app\components\AppLogic::Age($model->patient->date_of_birth) 
                        . ' tahun)' ?>
                    </p>
                    <p><i class="fa fa-address-book"></i> <?= $model->patient->fulladdress ?></p>
                    <p><i class="fa fa-phone"></i> <?= $model->patient->phone ?></p>
                    <p><i class="fa fa-address-card"></i> <?= $model->patient->identity_number ?></p>
                </div>
            </div>
        </div>
    </div>

        <?php $form = ActiveForm::begin([
            'id' => 'registration_id',
            'encodeErrorSummary' => false,
            'errorSummaryCssClass' => 'help-block'
        ]); ?>
    <?= $form->errorSummary($model, ['class'=>'alert alert-danger']) ?>

    <h4><p><b>Diagnosa & Tindakan</b></p></h4>
    <div class="row">
    <div class="col-md-4">
        <?php
        $dataPost=ArrayHelper::map(\app\models\Mrrekammedik::find()
            ->asArray()->all(), 'rekammedik_id', 'anemnesa');
                echo $form->field($model, 'anemnesa')
            ->dropDownList(
                $dataPost,
            );
        ?>
    </div>

    <div class="col-md-4">
        <?php
        $dataPost=ArrayHelper::map(\app\models\Mrrekammedik::find()
            ->asArray()->all(), '', '');
                echo $form->field($model, 'kegawatan')
            ->dropDownList(
                $dataPost,
            );
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

    <h4><p><b>Diagnosa</b></p></h4>
    <div class="row">
    <div class="col-md-4">
        <?php
        $dataPost=ArrayHelper::map(\app\models\Mrdiagnosaawal::find()
        ->asArray()->all(), 'ugddiagnosa_id', 'ugddiagnosa_id');
                echo $form->field($model, 'diagnosa') 
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
    </div>

    <h4><p><b>ICD</b></p></h4>
    <div class="row">
    <div class="col-md-4">
        <?php
        $dataPost=ArrayHelper::map(\app\models\Mricd::find()
            ->asArray()->all(), 'icd_kode', 'icd_kode');
                echo $form->field($model, 'icd')
            ->dropDownList(
                $dataPost,
            );
        ?>
    </div>

    <div class="col-md-4">
        <?php
        $dataPost=ArrayHelper::map(\app\models\Mricd::find()
        ->asArray()->all(), 'icd_kode', 'deskripsi');
            echo $form->field($model, 'deskripsi')
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

    <h4><p><b>Tindakan</b></p></h4>
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

    <div class="form-group">
        <?= Html::submitButton('<i class="fa fa-save"></i> ' . Yii::t('app', 'Save'), ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>