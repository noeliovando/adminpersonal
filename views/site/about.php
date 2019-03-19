<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Sobre GODD';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <h2 align="center">Misión</h2>

                <p align="center">Descubrir e incorporar reservas de hidrocarburos, y generar planes óptimos de explotación de yacimientos,
                    mediante la ejecución de proyectos exploratorios, desarrollo de estudios integrados y evaluación de
                    tecnologías para la producción petrolera nacional.</p>

            </div>
            <div class="col-lg-6">
                <?php echo Html::img('@web/images/sismica.jpg', ['alt'=>'Gerencia de Operaciones del Dato'])?>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <?php echo Html::img('@web/images/mapa.png', ['alt'=>'Gerencia de Operaciones del Dato'])?>

            </div>
            <div class="col-lg-6">
                <h2 align="center">Visión</h2>

                <p align="center">Ser la organización especializada en la ejecución de proyectos exploratorios, desarrollo de estudios
                    integrados de yacimientos de hidrocarburos y aplicación de tecnologías de avanzada, reconocida
                    por su contribución al desarrollo de la industria Petrolera y al Plan Social de la Nación.</p>

            </div>

        </div>

    </div>


</div>
