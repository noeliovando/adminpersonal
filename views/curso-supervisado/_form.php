<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CursoSupervisado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="curso-supervisado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_curso')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'localidad')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'costo')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'trabajador')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'desde')->textInput() ?>

    <?= $form->field($model, 'hasta')->textInput() ?>

    <?= $form->field($model, 'horas')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'empresa')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'nacional')->textInput(['maxlength' => 25]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
