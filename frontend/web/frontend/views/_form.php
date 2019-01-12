<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dyzur */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dyzur-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_Funkcja')->textInput() ?>

    <?= $form->field($model, 'ID_Miejsce')->textInput() ?>

    <?= $form->field($model, 'Od_kiedy')->textInput() ?>

    <?= $form->field($model, 'Do_kiedy')->textInput() ?>

    <?= $form->field($model, 'ID_Pracownik')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
