<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Funkcja */

$this->title = 'Update Funkcja: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Funkcjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_Funkcja, 'url' => ['view', 'id' => $model->ID_Funkcja]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="funkcja-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
