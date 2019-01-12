<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Miejsce */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="miejsce-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_Miejsce')->textInput() ?>

    <?= $form->field($model, 'Nazwa')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
