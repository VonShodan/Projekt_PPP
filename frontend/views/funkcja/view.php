<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Funkcja */

$this->title = $model->ID_Funkcja;
$this->params['breadcrumbs'][] = ['label' => 'Funkcjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="funkcja-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_Funkcja], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_Funkcja], [
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
            'Nazwa',
            'ID_Funkcja',
        ],
    ]) ?>

</div>
