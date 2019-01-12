<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DyzurSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dyzur-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_dyzur') ?>

    <?= $form->field($model, 'ID_Funkcja') ?>

    <?= $form->field($model, 'ID_Miejsce') ?>

    <?= $form->field($model, 'Od_kiedy') ?>

    <?= $form->field($model, 'Do_kiedy') ?>

    <?php // echo $form->field($model, 'ID_Pracownik') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
