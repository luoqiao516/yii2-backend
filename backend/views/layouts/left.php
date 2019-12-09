<?php

use mdm\admin\components\MenuHelper;

$callback = function ($menu) {
    $data = json_decode($menu['data'], true);
    return [
        'label' => $menu['name'],
        'url' => [$menu['route']],
        'icon' => isset($data['icon']) ? $data['icon'] : 'circle-o',
        'visible' => isset($data['visible']) ? $data['visible'] : 'false',
        'items' => $menu['children']
    ];
};
?>

<aside class="main-sidebar">
    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => MenuHelper::getAssignedMenu(Yii::$app->user->id, null, $callback),
            ]
        ) ?>
    </section>
</aside>
