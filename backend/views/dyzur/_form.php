<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\funkcja;
use frontend\models\Miejsce;
use common\models\User;
use dosamigos\datepicker\DatePicker;

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
    

     <?= $form->field($model, 'Od_kiedy')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'startDate'=>'0d'
        ]
]);?>
    
    <?= $form->field($model, 'Do_kiedy')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'startDate'=>'+1d'
        ]
]);?>
    
    
     <?= $form->field($model, 'ID_Pracownik')->dropDownList(
            ArrayHelper::map(user::find()->all(), 'id', 'username'),['[prompt'=>'Wybierz uzytkownika'])
            ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
