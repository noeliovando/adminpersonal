<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CursoSupervisado */

$this->title = $model->nombre_curso;
$this->params['breadcrumbs'][] = ['label' => 'Curso Supervisados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="curso-supervisado-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id_curso',
            'nombre_curso',
            'localidad',
            'costo',
            'trabajador',
            'desde',
            'hasta',
            'horas',
            'empresa',
            'nacional',
        ],
    ]) ?>

</div>
