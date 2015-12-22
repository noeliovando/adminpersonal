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
            <div class="col-lg-5">
                <h2>Misión</h2>

                <p>Descubrir e incorporar reservas de hidrocarburos, y generar planes óptimos de explotación de yacimientos,
                    mediante la ejecución de proyectos exploratorios, desarrollo de estudios integrados y evaluación de
                    tecnologías para la producción petrolera nacional.</p>

            </div>
            <div class="col-lg-5">
                <?php echo Html::img('@web/images/foto1.png', ['alt'=>'Gerencia de Operaciones del Dato'])?>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <?php echo Html::img('@web/images/foto2.png', ['alt'=>'Gerencia de Operaciones del Dato'])?>

            </div>
            <div class="col-lg-5">
                <h2>Visión</h2>

                <p>Ser la organización especializada en la ejecución de proyectos exploratorios, desarrollo de estudios
                    integrados de yacimientos de hidrocarburos y aplicación de tecnologías de avanzada, reconocida
                    por su contribución al desarrollo de la industria Petrolera y al Plan Social de la Nación.</p>

            </div>

        </div>

    </div>


</div>
