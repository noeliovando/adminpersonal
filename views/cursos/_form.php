<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Cursos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cursos-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'nombre_curso')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'localidad')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'costo')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'trabajador')->textInput(['readonly' => true, 'value' => Yii::$app->user->identity->username]) ?>

    <?php //$form->field($model, 'desde')->textInput() ?>
    <?php
    echo $form->field($model, 'desde')->widget(DatePicker::className(),
        [
            'name' => 'desde',
            'type' => DatePicker::TYPE_COMPONENT_PREPEND,
            'value' => date('Y/m/d'),
            'readonly' => true,
            'options' => ['placeholder' => 'Seleccione una fecha ...'],
            'pluginOptions' => [
                'format' => 'yyyy/mm/dd',
                'todayHighlight' => true
            ]
        ]);?>

    <?php // $form->field($model, 'hasta')->textInput() ?>
    <?php
    echo $form->field($model, 'hasta')->widget(DatePicker::className(),
        [
            'name' => 'hasta',
            'type' => DatePicker::TYPE_COMPONENT_PREPEND,
            'value' => date('Y/m/d'),
            'readonly' => true,
            'options' => ['placeholder' => 'Seleccione una fecha ...'],
            'pluginOptions' => [
                'format' => 'yyyy/mm/dd',
                'todayHighlight' => true
            ]
        ]);?>

    <?= $form->field($model, 'horas')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'empresa')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'nacional')->dropDownList(['Nacional' => 'Nacional', 'Internacional' => 'Internacional']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>



</div>
