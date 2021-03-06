<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DyzurSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dyzurs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dyzur-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dyzur', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_dyzur',
            'ID_Funkcja',
            'ID_Miejsce',
            'Od_kiedy',
            'Do_kiedy',
            //'ID_Pracownik',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
