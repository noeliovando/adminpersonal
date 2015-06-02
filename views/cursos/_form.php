<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cursos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cursos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_curso')->textInput() ?>

    <?= $form->field($model, 'nombre_curso')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'localidad')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'costo')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'trabajador')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'desde')->textInput() ?>

    <?= $form->field($model, 'hasta')->textInput() ?>

    <?= $form->field($model, 'horas')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'empresa')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'nacional')->textInput(['maxlength' => 50]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
