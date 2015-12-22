<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CursoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cursos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'asc' => ['desde' => SORT_ASC, 'hasta' => SORT_ASC],
    ]); ?>

    <?= $form->field($model, 'id_curso') ?>

    <?= $form->field($model, 'nombre_curso') ?>

    <?= $form->field($model, 'localidad') ?>

    <?= $form->field($model, 'costo') ?>

    <?= $form->field($model, 'trabajador') ?>

    <?= $form->field($model, 'desde') ?>

    <?= $form->field($model, 'hasta') ?>

    <?php // echo $form->field($model, 'horas') ?>

    <?php // echo $form->field($model, 'empresa') ?>

    <?php // echo $form->field($model, 'nacional') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
