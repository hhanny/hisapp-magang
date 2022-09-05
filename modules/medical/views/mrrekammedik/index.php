<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Mrrekammediksearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Medical Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mrrekammedik-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create New Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //* berelasi dengan rekam medik *//
            'rekammedik_id',
            //'jenisctev.jenis_ctev',
            //'infonoso.infeksi_nosokomial',
            //'kasus.nama_kasus',
            //'statuskembali.nama_statuskembali',
            //'tunaKode.tuna_nama',
            //'statuslengkap.nama_statuslengkap',
            //'ugdlayanan.ugd_layanan',
            //'alasandirujuk.alasan_dirujuk',
            //'ugddiagnosa.tanggal_kontrol',
            'no_reg',
            'anemnesa',

            



            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
