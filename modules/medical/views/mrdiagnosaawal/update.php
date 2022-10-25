<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mrdiagnosaawal */

$this->title = 'Update Mrdiagnosaawal: ' . $model->ugddiagnosa_id;
$this->params['breadcrumbs'][] = ['label' => 'Mrdiagnosaawals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ugddiagnosa_id, 'url' => ['view', 'id' => $model->ugddiagnosa_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mrdiagnosaawal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
