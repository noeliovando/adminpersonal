<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'cedula')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'extension')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'supervisor')->textInput(['readonly' => true, 'value' => Yii::$app->user->identity->username]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'apellido')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => 25]) ?>

    <?php //$form->field($model, 'division')->textInput(['maxlength' => 25]) ?>
    <?= $form->field($model, 'division')->dropDownList(['Junín' => 'Junín', 'Ayacucho' => 'Ayacucho', 'Carabobo' => 'Carabobo', 'Boyacá' => 'Boyacá']); ?>

    <?php // $form->field($model, 'proceso')->textInput(['maxlength' => 25]) ?>
    <?= $form->field($model, 'proceso')->dropDownList(['MAD' => 'MAD', 'SFT' => 'SFT', 'MC' => 'MC']); ?>

    <?php
    if(Yii::$app->user->identity->rol=='100')
        $form->field($model, 'rol')->textInput(['maxlength' => 25,'value' => Yii::$app->user->identity->rol]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
