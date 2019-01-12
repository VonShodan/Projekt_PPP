<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dyzur */

$this->title = 'Update Dyzur: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Dyzurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_dyzur, 'url' => ['view', 'id' => $model->ID_dyzur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dyzur-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
