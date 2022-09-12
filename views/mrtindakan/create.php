<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mrtindakan */

$this->title = 'Create Mrtindakan';
$this->params['breadcrumbs'][] = ['label' => 'Mrtindakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mrtindakan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
