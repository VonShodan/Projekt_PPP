<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Funkcja */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="funkcja-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nazwa')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
