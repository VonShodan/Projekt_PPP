<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dyzur */

$this->title = $model->ID_dyzur;
$this->params['breadcrumbs'][] = ['label' => 'Dyzurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dyzur-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_dyzur], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_dyzur], [
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
            'ID_dyzur',
            'funkcja.Nazwa',
            'miejsce.Nazwa',
            'Od_kiedy',
            'Do_kiedy',
            'pracownik.username',
        ],
    ]) ?>

</div>
