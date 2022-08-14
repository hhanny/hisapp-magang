<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RegistrationStatus */

$this->title = Yii::t('app', 'Update Registration Status: {name}', [
        'name' => $model->regstts_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Registration Statuses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->regstts_id, 'url' => ['view', 'id' => $model->regstts_id]];
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
