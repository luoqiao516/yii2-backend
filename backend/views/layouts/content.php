<?php

use dmstr\widgets\Alert;

?>
<div class="content-wrapper">
    <section class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
    </section>
</div>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.0
    </div>
    <strong>
        Copyright &copy; 2014-<?= date('Y') ?> <a href="javascript:"><?= Yii::$app->name ?></a>.
    </strong>
    All rights
    reserved.
</footer>