<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */

$this->title = 'Zatwierdź Zapis';
$this->params['breadcrumbs'][] = ['label' => 'Dyzury', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_dyzur, 'url' => ['view', 'id' => $model->ID_dyzur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dyzur-update">

    <h1><?= Html::encode($this->title) ?></h1>

     <?php $form = ActiveForm::begin(); ?>
		


<?= $form->field($model, 'ID_Pracownik')->hiddenInput(['value'=> Yii::$app->user->identity->id])->label(false); ?>
	<div class="form-group">
        <?= Html::submitButton('Zatwierdź', ['class' => 'btn btn-success']) ?>
    </div>
	
	 <?php ActiveForm::end(); ?>

</div>