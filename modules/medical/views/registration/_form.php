<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\models\Registration */
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
            <div class="card-header bg-primary-gradient"><h3 class="card-title text-white"><i
                            class="fa fa-money"></i>
                    Diagnosa Pasien : <?= $model->reg_num ?></h3></div>
            <div class="card-body">
                <h4 class="text-dark">
                    <strong><i class="fa fa-users"></i> <?= $model->mr_number . '/' . $model->patient->fullname . ' (' . $model->patient->gender_id . ')' ?>
                    </strong>
                </h4>
                <p>
                    <i class="fa fa-birthday-cake"></i> <?= $model->patient->birth_place . ', ' . date('d-m-Y', strtotime($model->patient->date_of_birth)) . ' (' . \app\components\AppLogic::Age($model->patient->date_of_birth) . ' tahun)' ?>
                </p>
                <p><i class="fa fa-address-book"></i> <?= $model->patient->fulladdress ?></p>
                <p><i class="fa fa-phone"></i> <?= $model->patient->phone ?></p>
                <p><i class="fa fa-address-card"></i> <?= $model->patient->identity_number ?></p>
            </div>
        </div>
    </div>
</div>


<div class="registration-form">
<?php $form = ActiveForm::begin([
        'id' => 'registration_id',
        'encodeErrorSummary' => false,
        'errorSummaryCssClass' => 'help-block'
]); ?>
<?= $form->errorSummary($model, ['class'=>'alert alert-danger']) ?>


<div class="row">
    <div class="col-lg-4 col-md-12">
        <!-- <?= $form->field($model, 'registration_id')->textInput(['maxlength' => true, 'readonly' => $readonly]) ?> -->
        <?php
        $dataPost=ArrayHelper::map(\app\models\Mrrekammedik::find()
            ->asArray()->all(), 'rekammedik_id', 'anemnesa');
        echo $form->field($model, 'anemnesa')
            ->dropDownList(
                $dataPost,
            );
        ?>
    </div>
    
    <div class="col-lg-4 col-md-12">
        <!-- <?= $form->field($model, 'doctor_id')->textInput(['maxlength' => true]) ?> -->
        <?php
        $dataPost=ArrayHelper::map(\app\models\Mrjenisctev::find()
            ->asArray()->all(), 'jenisctev_id', 'jenis_ctev');
        echo $form->field($model, 'jenis_ctev')
            ->dropDownList(
                $dataPost,
            );
        ?>
    </div>

    <div class="col-lg-4 col-md-12">
        <!-- <?= $form->field($model, 'hospital_id')->textInput(['maxlength' => true]) ?> -->
        <?php
        $dataPost=ArrayHelper::map(\app\models\Mrtipetindakan::find()
            ->asArray()->all(), 'tipetindakan_id', 'tipe_tindakan');
        echo $form->field($model, 'tipe_tindakan')
            ->dropDownList(
                $dataPost,
            );
        ?>
    </div>
</div>

<h4><p><b>Diagnosa Utama</b></p></h4>
<div class="row">
    <div class="col-lg-4 col-md-12">
        <!-- <?= $form->field($model, 'registration_id')->textInput(['maxlength' => true, 'readonly' => $readonly]) ?> -->
        <?php
        $dataPost=ArrayHelper::map(\app\models\Mricd::find()
            ->asArray()->all(), 'icd_kode', 'icd_kode');
        echo $form->field($model, 'icd_1')
            ->dropDownList(
                $dataPost,
            );
        ?>
    </div>

    <div class="col-lg-4 col-md-12">
        <!-- <?= $form->field($model, 'doctor_id')->textInput(['maxlength' => true]) ?> -->
        <?php
        $dataPost=ArrayHelper::map(\app\models\Mricd::find()
            ->asArray()->all(), 'icd_kode', 'deskripsi');
        echo $form->field($model, 'deskripsi')
            ->dropDownList(
                $dataPost,
            );
        ?>
    </div>

    <div class="col-lg-4 col-md-12">
        <!-- <?= $form->field($model, 'hospital_id')->textInput(['maxlength' => true]) ?> -->
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

<h4><p><b>Diagnosa Ke-2</b></p></h4>
<div class="row">
    <div class="col-lg-4 col-md-12">
        <!-- <?= $form->field($model, 'registration_id')->textInput(['maxlength' => true, 'readonly' => $readonly]) ?> -->
        <?php
        $dataPost=ArrayHelper::map(\app\models\Mricd::find()
            ->asArray()->all(), 'icd_kode', 'icd_kode');
        echo $form->field($model, 'icd_2')
            ->dropDownList(
                $dataPost,
            );
        ?>
    </div>

    <div class="col-lg-4 col-md-12">
        <!-- <?= $form->field($model, 'doctor_id')->textInput(['maxlength' => true]) ?> -->
        <?php
        $dataPost=ArrayHelper::map(\app\models\Mricd::find()
            ->asArray()->all(), 'icd_kode', 'deskripsi');
        echo $form->field($model, 'deskripsi_2')
            ->dropDownList(
                $dataPost,
            );
        ?>
    </div>

    <div class="col-lg-4 col-md-12">
        <!-- <?= $form->field($model, 'hospital_id')->textInput(['maxlength' => true]) ?> -->
        <?php
        $dataPost=ArrayHelper::map(\app\models\Mrkasus::find()
            ->asArray()->all(), 'kasus_id', 'nama_kasus');
        echo $form->field($model, 'kasus_2')
            ->dropDownList(
                $dataPost,
            );
        ?>
    </div>
</div>

<h4><p><b>Diagnosa Ke-3</b></p></h4>
<div class="row">
    <div class="col-lg-4 col-md-12">
        <!-- <?= $form->field($model, 'registration_id')->textInput(['maxlength' => true, 'readonly' => $readonly]) ?> -->
        <?php
        $dataPost=ArrayHelper::map(\app\models\Mricd::find()
            ->asArray()->all(), 'icd_kode', 'icd_kode');
        echo $form->field($model, 'icd_3')
            ->dropDownList(
                $dataPost,
            );
        ?>
    </div>

    <div class="col-lg-4 col-md-12">
        <!-- <?= $form->field($model, 'doctor_id')->textInput(['maxlength' => true]) ?> -->
        <?php
        $dataPost=ArrayHelper::map(\app\models\Mricd::find()
            ->asArray()->all(), 'icd_kode', 'deskripsi');
        echo $form->field($model, 'deskripsi_3')
            ->dropDownList(
                $dataPost,
            );
        ?>
    </div>

    <div class="col-lg-4 col-md-12">
        <!-- <?= $form->field($model, 'hospital_id')->textInput(['maxlength' => true]) ?> -->
        <?php
        $dataPost=ArrayHelper::map(\app\models\Mrkasus::find()
            ->asArray()->all(), 'kasus_id', 'nama_kasus');
        echo $form->field($model, 'kasus_3')
            ->dropDownList(
                $dataPost,
            );
        ?>
    </div>
</div>

<h4><p><b>Tindakan</b></p></h4>
<div class="row">
    <div class="col-lg-4 col-md-12">
        <!-- <?= $form->field($model, 'registration_id')->textInput(['maxlength' => true, 'readonly' => $readonly]) ?> -->
        <?php
        $dataPost=ArrayHelper::map(\app\models\Mrtindakan::find()
            ->asArray()->all(), 'tindakan_id', 'nama_tindakan');
        echo $form->field($model, 'tindakan_1')
            ->dropDownList(
                $dataPost,
            );
        ?>
    </div>

    <div class="col-lg-4 col-md-12">
        <!-- <?= $form->field($model, 'doctor_id')->textInput(['maxlength' => true]) ?> -->
        <?php
        $dataPost=ArrayHelper::map(\app\models\Mrtindakan::find()
            ->asArray()->all(), 'tindakan_id', 'nama_tindakan');
        echo $form->field($model, 'tindakan_2')
            ->dropDownList(
                $dataPost,
            );
        ?>
    </div>

    <div class="col-lg-4 col-md-12">
        <!-- <?= $form->field($model, 'hospital_id')->textInput(['maxlength' => true]) ?> -->
        <?php
        $dataPost=ArrayHelper::map(\app\models\Mrtindakan::find()
            ->asArray()->all(), 'tindakan_id', 'nama_tindakan');
        echo $form->field($model, 'tindakan_3')
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
