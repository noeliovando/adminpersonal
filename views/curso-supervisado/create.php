<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CursoSupervisado */

$this->title = 'Create Curso Supervisado';
$this->params['breadcrumbs'][] = ['label' => 'Curso Supervisados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="curso-supervisado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
