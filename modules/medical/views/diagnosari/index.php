<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RegistrationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Diagnosa Rawat Inap';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="col-lg-12 col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><i class="fa fa-hospital-o" aria-hidden="true"></i> <?= Html::encode($this->title) ?></h3>

        </div>
        <div class="card-body pt-2">
        <div class="card-header">
            <ul class="nav nav-pills" id="profile-tab" role="tablist" style="overflow-x: auto;overlow-y: hidden;"></ul>
            <li class="nav-item"> 
                <a class="nav-link active" onclick="showdata('perawatan')" id="info-home-tab"  data-toggle="tab" href="javascript:void(0)" role="tab" aria-controls="info-home" aria-selected="true" data-nav="general"><i class="fa fa-wheelchair"></i>Perawatan</a> 
            </li> 
            <li class="nav-item"> 
                <a class="nav-link active" onclick="showdata('diagnostik')" id="info-home-tab"  data-toggle="tab" href="javascript:void(0)" role="tab" aria-controls="info-home" aria-selected="true" data-nav="general"><i class="fa fa-stethoscope"></i>Diagnostik</a> 
            </li>
            <li class="nav-item"> 
                <a class="nav-link active" onclick="showdata('dokter')" id="info-home-tab"  data-toggle="tab" href="javascript:void(0)" role="tab" aria-controls="info-home" aria-selected="true" data-nav="general"><i class="fa fa-user-md"></i>Dokter</a> 
            </li>
        </div>
        </div>
        </div>
</div>

