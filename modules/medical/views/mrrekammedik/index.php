<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Mrrekammediksearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mrrekammediks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mrrekammedik-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Mrrekammedik', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'rekammedik_id',
            'jenisctev_id',
            'infonoso_id',
            'kasus_id',
            'statuskembali_id',
            //'tuna_kode',
            //'statuslengkap_id',
            //'ugdlayanan_id',
            //'alasandirujuk_id',
            //'ugddiagnosa_id',
            //'no_reg',
            //'anemnesa',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
