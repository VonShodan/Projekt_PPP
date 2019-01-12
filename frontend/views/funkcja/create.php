<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Funkcja */

$this->title = 'Create Funkcja';
$this->params['breadcrumbs'][] = ['label' => 'Funkcjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="funkcja-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
