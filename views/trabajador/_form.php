<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Trabajador */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trabajador-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'indicador')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'cedula')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'extension')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'supervisor')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'apellido')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'pass')->passwordInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'division')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'proceso')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'rol')->textInput(['maxlength' => 15]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
