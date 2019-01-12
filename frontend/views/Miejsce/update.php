<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Miejsce */

$this->title = 'Update Miejsce: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Miejsces', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_Miejsce, 'url' => ['view', 'id' => $model->ID_Miejsce]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="miejsce-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
