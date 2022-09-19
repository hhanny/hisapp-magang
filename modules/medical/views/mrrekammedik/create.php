<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model app\models\Mrrekammedik */
$this->title = 'Create New Medical Record';
$this->params['breadcrumbs'][] = ['label' => 'Mrrekammediks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- <div class="mrrekammedik-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    
</div> -->
<div class="col-lg-12 col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><i class="fa fa-graduation-cap" aria-hidden="true"></i> <?= Html::encode($this->title) ?></h3>
        </div>
        <div class="card-body pt-2">
            <h1><?= Html::encode($this->title) ?></h1>
            <?= $this->render('_form', [
                    'model' => $model,
            ]) ?>
        </div>
    </div>
</div>