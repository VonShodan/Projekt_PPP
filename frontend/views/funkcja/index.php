<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\FunkcjaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Funkcjas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="funkcja-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Funkcja', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Nazwa',
            'ID_Funkcja',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
