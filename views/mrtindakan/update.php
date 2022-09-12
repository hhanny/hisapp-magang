<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mrtindakan */

$this->title = 'Update Mrtindakan: ' . $model->tindakan_id;
$this->params['breadcrumbs'][] = ['label' => 'Mrtindakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tindakan_id, 'url' => ['view', 'id' => $model->tindakan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mrtindakan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
