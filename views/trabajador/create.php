<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Trabajador */

$this->title = 'Create Trabajador';
$this->params['breadcrumbs'][] = ['label' => 'Trabajadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trabajador-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
