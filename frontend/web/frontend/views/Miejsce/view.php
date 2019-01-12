<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Miejsce */

$this->title = $model->ID_Miejsce;
$this->params['breadcrumbs'][] = ['label' => 'Miejsces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="miejsce-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_Miejsce], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_Miejsce], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID_Miejsce',
            'Nazwa',
        ],
    ]) ?>

</div>
