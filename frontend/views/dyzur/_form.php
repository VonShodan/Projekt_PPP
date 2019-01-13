<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\funkcja;
use frontend\models\Miejsce;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dyzur */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dyzur-form">

    <?php $form = ActiveForm::begin(); ?>

  
    
 
    <?= $form->field($model, 'ID_Funkcja')->dropDownList(
            ArrayHelper::map(funkcja::find()->all(), 'ID_Funkcja', 'Nazwa'),['[prompt'=>'Wybierz funkcje'])
            ?>
    <?= $form->field($model, 'ID_Miejsce')->dropDownList(
            ArrayHelper::map(Miejsce::find()->all(), 'ID_Miejsce', 'Nazwa'),['[prompt'=>'Wybierz miejsce'])
            ?>  
    

    <?= $form->field($model, 'Od_kiedy')->textInput() ?>

    <?= $form->field($model, 'Do_kiedy')->textInput() ?>

    <?= $form->field($model, 'ID_Pracownik')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
