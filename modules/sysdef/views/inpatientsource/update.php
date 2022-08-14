<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RegInpatientSource */

$this->title = Yii::t('app', 'Update Reg Inpatient Source: {name}', [
        'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Reg Inpatient Sources'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->regsource_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="col-lg-12 col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><i class="fa fa-list" aria-hidden="true"></i> <?= Html::encode($this->title) ?></h3>
        </div>
        <div class="card-body pt-2">
            <?= $this->render('_form', [
                    'model' => $model,
                    'readonly' => true
            ]) ?>
        </div>
    </div>
</div>