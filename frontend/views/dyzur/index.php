<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use frontend\models\Dyzur;
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

 
    
    
    <?php $dataProvider = new ActiveDataProvider([
    'query' => dyzur::find()->
                  where(['ID_Funkcja' =>  Yii::$app->user->identity->ID_Funkcja ]),
]); ?>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function($model){
				if($model->ID_Pracownik == NULL){
					return['class'=>'danger'];
				} else
					{
					return['class'=>'success'];
				}
				
			},
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_dyzur',
            'funkcja.Nazwa',
            'miejsce.Nazwa',
            'Od_kiedy',
            'Do_kiedy',
            'pracownik.username',

            ['class' => 'yii\grid\ActionColumn',
			'template' => '{myButton}',  // the default buttons + your custom button
                        'buttons' => [
                        'myButton' => function($url, $model, $key) {     // render your custom button
				return Html::a('Zapisz się', ['update', 'id' => $model->ID_dyzur], [
                                'class' => 'btn btn-primary btn-xs',
                                'data' => [
                                'confirm' => 'Potwierdź zapis na dyżur',
                                'method' => 'post',
                                          ],
        ]) ;
				}
			],
                                
                        'visibleButtons' => [
			'myButton' => function ($model, $key, $index) {
            return $model->ID_Pracownik==NULL;
         }
    ]
        ],
        ],
    ]); ?>
</div>
