<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$dropDown = array();
foreach($department as $value){
    $dropDown[$value->id] = $value->name;
}
?>
<div class="discipline-create col-lg-5">

    <h1>Створити</h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department')->dropDownList([ $dropDown ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>