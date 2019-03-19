<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\mynavbar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                //'brandLabel' => Html::img('@web/images/logo2.png', ['alt'=>'Gerencia de Operaciones del Dato']),
                'brandLabel' => 'Gerencia de Operaciones del Dato',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-default navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Inicio', 'url' => ['/site/index']],
                    ['label' => 'Sobre GODD', 'url' => ['/site/about']],
                    ['label' => 'Mis Cursos', 'url' => ['/cursos'], 'visible' => !Yii::$app->user->isGuest &&Yii::$app->user->identity->rol>='1'],
                    ['label' => 'Cursos de Equipo', 'url' => ['/curso-supervisado'], 'visible' => !Yii::$app->user->isGuest &&Yii::$app->user->identity->rol>='3'],
                    ['label' => 'Trabajadores', 'url' => ['/user'], 'visible' => !Yii::$app->user->isGuest &&Yii::$app->user->identity->rol>='3'],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Iniciar Sesión', 'url' => ['/site/login']] :
                        ['label' => 'Bienvenid@ '. Yii::$app->user->identity->nombre, 'items' => [
                            '<li role="presentation" class="divider"></li>',
                            ['label' => 'Opciones de Perfil'],
                            ['label' => 'Mi Perfil', 'url' => ['/user/update?id='.Yii::$app->user->identity->username]],
                            '<li role="presentation" class="divider"></li>',
                            ['label' => 'Cerrar Sesión (' . Yii::$app->user->identity->username . ')',
                                'url' => ['/site/logout'],
                                'linkOptions' => ['data-method' => 'post']],
                        ]]

                ],
            ]);
            NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; PDVSA <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
