<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mrrekammedik */

$this->title = 'Update Medical Record: ' . $model->rekammedik_id;
$this->params['breadcrumbs'][] = ['label' => 'Mrrekammediks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rekammedik_id, 'url' => ['view', 'id' => $model->rekammedik_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mrrekammedik-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
