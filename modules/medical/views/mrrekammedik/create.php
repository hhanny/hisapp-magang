<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mrrekammedik */

$this->title = 'Create Mrrekammedik';
$this->params['breadcrumbs'][] = ['label' => 'Mrrekammediks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mrrekammedik-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
