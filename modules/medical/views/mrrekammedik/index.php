<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\Mrrekammediksearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Medical Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- <div class="mrrekammedik-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create New Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    
</div> -->

<div class="col-lg-12 col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><i class="fa fa-graduation-cap" aria-hidden="true"></i> <?= Html::encode($this->title) ?></h3>
            <div class=card-options>
                <?= Html::a('<i class="fa fa-plus-circle"> Create</i>', ['create'], ['class' => 'btn btn-primary btn-sm']) ?>
            </div>
        </div>
        <div class="card-body pt-2">
            
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
            <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        //'dokterModel' => $dokterModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //* berelasi dengan rekam medik *//
            //'rekammedik_id',
            //'jenisctev.jenis_ctev',
            //'infonoso.infeksi_nosokomial',
            'kasus.nama_kasus',
            'statuskembali.nama_statuskembali',
            //'tunaKode.tuna_nama',
            'statuslengkap.nama_statuslengkap',
            'ugdlayanan.ugd_layanan',
            'alasandirujuk.alasan_dirujuk',
            'ugddiagnosa.tanggal_kontrol',
            'no_reg',
            //'anemnesa',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
            
        </div>
    </div>
</div>