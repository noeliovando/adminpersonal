<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CursoSupervisado */
/* @var $form ActiveForm */
?>
<div class="site-curso-supervisado-index">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'nombre_curso') ?>
        <?= $form->field($model, 'localidad') ?>
        <?= $form->field($model, 'costo') ?>
        <?= $form->field($model, 'trabajador') ?>
        <?= $form->field($model, 'desde') ?>
        <?= $form->field($model, 'hasta') ?>
        <?= $form->field($model, 'horas') ?>
        <?= $form->field($model, 'empresa') ?>
        <?= $form->field($model, 'nacional') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-curso-supervisado-index -->
