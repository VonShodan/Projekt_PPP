<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Dyzur */

$this->title = 'Create Dyzur';
$this->params['breadcrumbs'][] = ['label' => 'Dyzurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dyzur-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
