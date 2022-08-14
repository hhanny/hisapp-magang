<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PatientRateGroup */

$this->title = Yii::t('app', 'Create Patient Rate Group');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Patient Rate Groups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-lg-12 col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><i class="fa fa-list" aria-hidden="true"></i> <?= Html::encode($this->title) ?></h3>
        </div>
        <div class="card-body pt-2">
            <?= $this->render('_form', [
                    'model' => $model,
                    'readonly' => false
            ]) ?>
        </div>
    </div>
</div>
