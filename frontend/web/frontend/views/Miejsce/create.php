<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Miejsce */

$this->title = 'Create Miejsce';
$this->params['breadcrumbs'][] = ['label' => 'Miejsces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="miejsce-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
