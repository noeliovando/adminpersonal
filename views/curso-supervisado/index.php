<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CursoSupervisadoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cursos de Equipo';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="curso-supervisado-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php //Html::a('Create Curso Supervisado', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_curso',
            'nombre_curso',
            'localidad',
            'costo',
            'trabajador',
             'desde',
             'hasta',
            // 'horas',
            // 'empresa',
            // 'nacional',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
