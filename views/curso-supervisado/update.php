<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CursoSupervisado */

$this->title = 'Update Curso Supervisado: ' . ' ' . $model->id_curso;
$this->params['breadcrumbs'][] = ['label' => 'Curso Supervisados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_curso, 'url' => ['view', 'id' => $model->id_curso]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="curso-supervisado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
