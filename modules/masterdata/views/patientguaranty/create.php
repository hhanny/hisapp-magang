<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PatientGuaranty */

$this->title = Yii::t('app', 'Create Patient Guaranty');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Patient Guaranties'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-lg-12 col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><i class="fa fa-list" aria-hidden="true"></i> <?= Html::encode($this->title) ?></h3>
        </div>
        <div class="card-body pt-2">
            <?= $this->render('_form', [
                    'model' => $model
            ]) ?>
        </div>
    </div>
</div>