<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mrrekammedik */

$this->title = $model->rekammedik_id;
$this->params['breadcrumbs'][] = ['label' => 'Mrrekammediks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mrrekammedik-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->rekammedik_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->rekammedik_id], [
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
            'rekammedik_id',
            'jenisctev_id',
            'infonoso_id',
            'kasus_id',
            'statuskembali_id',
            'tuna_kode',
            'statuslengkap_id',
            'ugdlayanan_id',
            'alasandirujuk_id',
            'ugddiagnosa_id',
            'no_reg',
            'anemnesa',
        ],
    ]) ?>

</div>
