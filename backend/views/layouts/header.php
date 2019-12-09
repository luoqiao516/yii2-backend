<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="javascript:" class="nav-link"><?= Yii::$app->user->identity->username ?></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <?= Html::a(
                        '注销',
                        ['/site/logout'],
                        ['data-method' => 'post']
                    ) ?>
                </li>
            </ul>
        </div>
    </nav>
</header>
