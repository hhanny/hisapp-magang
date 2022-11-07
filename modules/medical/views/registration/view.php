<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
use app\components\BillingLogic;
use app\components\Formatter;
use app\models\UnitGroup;

/* @var $this yii\web\View */
/* @var $model app\models\Registration */

$this->title = $model->registration_id;
$this->params['breadcrumbs'][] = ['label' => 'Registrations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="registration-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->registration_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->registration_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'registration_id',
            'doctor_id',
            'regref_id',
            'guaranty_id',
            'rate_id',
            'regstts_id',
            'hospital_id',
            'picrel_id',
            'unit_id',
            'regsource_id',
            'emergency_id',
            'reason_id',
            'reg_num',
            'patient_id',
            'mr_number',
            'date_in',
            'date_out',
            'time_in',
            'time_out',
            'is_new_patient:boolean',
            'is_new_unit:boolean',
            'is_inpatient:boolean',
            'emergency_escort',
            'gl_letter_num',
            'sender_name',
            'pic_name',
            'pic_phone',
            'pic_address',
            'created_by',
            'created_time',
            'updated_by',
            'updated_time',
            'is_deleted:boolean',
            'deleted_by',
            'deleted_time',
            'icd_kode',
        ],
    ]) ?>

</div>