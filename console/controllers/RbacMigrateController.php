<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;

/**
 * 初始化用户（user）、菜单（menu）及与 rbac 相关（auth_rule、auth_item、auth_item_child、auth_assignment）表的数据
 *
 * yii rbac-migrate
 *
 * Class RbacMigrateController
 * @package console\controllers
 */
class RbacMigrateController extends Controller
{
    public $init_sql_auth_item = <<<sql
INSERT INTO `auth_item` VALUES ('/admin/assignment/assign', '2', null, null, null, '1575855758', '1575855758');
INSERT INTO `auth_item` VALUES ('/admin/assignment/index', '2', null, null, null, '1575855758', '1575855758');
INSERT INTO `auth_item` VALUES ('/admin/assignment/revoke', '2', null, null, null, '1575855758', '1575855758');
INSERT INTO `auth_item` VALUES ('/admin/assignment/view', '2', null, null, null, '1575855758', '1575855758');
INSERT INTO `auth_item` VALUES ('/admin/menu/create', '2', null, null, null, '1575855774', '1575855774');
INSERT INTO `auth_item` VALUES ('/admin/menu/delete', '2', null, null, null, '1575855774', '1575855774');
INSERT INTO `auth_item` VALUES ('/admin/menu/index', '2', null, null, null, '1575855774', '1575855774');
INSERT INTO `auth_item` VALUES ('/admin/menu/update', '2', null, null, null, '1575855774', '1575855774');
INSERT INTO `auth_item` VALUES ('/admin/menu/view', '2', null, null, null, '1575855774', '1575855774');
INSERT INTO `auth_item` VALUES ('/admin/permission/assign', '2', null, null, null, '1575855797', '1575855797');
INSERT INTO `auth_item` VALUES ('/admin/permission/create', '2', null, null, null, '1575855797', '1575855797');
INSERT INTO `auth_item` VALUES ('/admin/permission/delete', '2', null, null, null, '1575855797', '1575855797');
INSERT INTO `auth_item` VALUES ('/admin/permission/index', '2', null, null, null, '1575855797', '1575855797');
INSERT INTO `auth_item` VALUES ('/admin/permission/remove', '2', null, null, null, '1575855797', '1575855797');
INSERT INTO `auth_item` VALUES ('/admin/permission/update', '2', null, null, null, '1575855797', '1575855797');
INSERT INTO `auth_item` VALUES ('/admin/permission/view', '2', null, null, null, '1575855797', '1575855797');
INSERT INTO `auth_item` VALUES ('/admin/role/assign', '2', null, null, null, '1575855805', '1575855805');
INSERT INTO `auth_item` VALUES ('/admin/role/create', '2', null, null, null, '1575855805', '1575855805');
INSERT INTO `auth_item` VALUES ('/admin/role/delete', '2', null, null, null, '1575855805', '1575855805');
INSERT INTO `auth_item` VALUES ('/admin/role/index', '2', null, null, null, '1575855805', '1575855805');
INSERT INTO `auth_item` VALUES ('/admin/role/remove', '2', null, null, null, '1575855805', '1575855805');
INSERT INTO `auth_item` VALUES ('/admin/role/update', '2', null, null, null, '1575855805', '1575855805');
INSERT INTO `auth_item` VALUES ('/admin/role/view', '2', null, null, null, '1575855805', '1575855805');
INSERT INTO `auth_item` VALUES ('/admin/route/assign', '2', null, null, null, '1575855811', '1575855811');
INSERT INTO `auth_item` VALUES ('/admin/route/create', '2', null, null, null, '1575855810', '1575855810');
INSERT INTO `auth_item` VALUES ('/admin/route/index', '2', null, null, null, '1575855810', '1575855810');
INSERT INTO `auth_item` VALUES ('/admin/route/refresh', '2', null, null, null, '1575855811', '1575855811');
INSERT INTO `auth_item` VALUES ('/admin/route/remove', '2', null, null, null, '1575855811', '1575855811');
INSERT INTO `auth_item` VALUES ('/admin/rule/create', '2', null, null, null, '1575855818', '1575855818');
INSERT INTO `auth_item` VALUES ('/admin/rule/delete', '2', null, null, null, '1575855818', '1575855818');
INSERT INTO `auth_item` VALUES ('/admin/rule/index', '2', null, null, null, '1575855818', '1575855818');
INSERT INTO `auth_item` VALUES ('/admin/rule/update', '2', null, null, null, '1575855818', '1575855818');
INSERT INTO `auth_item` VALUES ('/admin/rule/view', '2', null, null, null, '1575855818', '1575855818');
INSERT INTO `auth_item` VALUES ('/admin/user/*', '2', null, null, null, '1575855826', '1575855826');
INSERT INTO `auth_item` VALUES ('/admin/user/activate', '2', null, null, null, '1575855826', '1575855826');
INSERT INTO `auth_item` VALUES ('/admin/user/change-password', '2', null, null, null, '1575855826', '1575855826');
INSERT INTO `auth_item` VALUES ('/admin/user/delete', '2', null, null, null, '1575855826', '1575855826');
INSERT INTO `auth_item` VALUES ('/admin/user/index', '2', null, null, null, '1575626088', '1575626088');
INSERT INTO `auth_item` VALUES ('/admin/user/login', '2', null, null, null, '1575855826', '1575855826');
INSERT INTO `auth_item` VALUES ('/admin/user/logout', '2', null, null, null, '1575855826', '1575855826');
INSERT INTO `auth_item` VALUES ('/admin/user/request-password-reset', '2', null, null, null, '1575855826', '1575855826');
INSERT INTO `auth_item` VALUES ('/admin/user/reset-password', '2', null, null, null, '1575855826', '1575855826');
INSERT INTO `auth_item` VALUES ('/admin/user/signup', '2', null, null, null, '1575855826', '1575855826');
INSERT INTO `auth_item` VALUES ('/admin/user/view', '2', null, null, null, '1575855826', '1575855826');
INSERT INTO `auth_item` VALUES ('主管理员', '1', '主管理员拥有所有权限', null, null, '1575855430', '1575856024');
INSERT INTO `auth_item` VALUES ('权限管理', '2', '后台管理员用户管理、权限分配和角色管理、路由管理、后台菜单管理', null, null, '1575855595', '1575855595');
sql;

    public $init_sql_auth_item_child = <<<sql
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/assignment/assign');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/assignment/index');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/assignment/revoke');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/assignment/view');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/menu/create');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/menu/delete');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/menu/index');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/menu/update');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/menu/view');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/permission/assign');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/permission/create');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/permission/delete');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/permission/index');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/permission/remove');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/permission/update');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/permission/view');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/role/assign');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/role/create');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/role/delete');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/role/index');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/role/remove');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/role/update');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/role/view');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/route/assign');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/route/create');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/route/index');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/route/refresh');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/route/remove');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/rule/create');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/rule/delete');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/rule/index');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/rule/update');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/rule/view');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/user/*');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/user/activate');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/user/change-password');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/user/delete');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/user/index');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/user/login');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/user/logout');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/user/request-password-reset');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/user/reset-password');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/user/signup');
INSERT INTO `auth_item_child` VALUES ('权限管理', '/admin/user/view');
INSERT INTO `auth_item_child` VALUES ('主管理员', '权限管理');
sql;

    public $init_sql_auth_assignment = <<<sql
INSERT INTO `auth_assignment` VALUES ('主管理员', '1', '1575856124');
sql;

    public $init_sql_menu = <<<sql
INSERT INTO `menu` VALUES ('1', '权限管理', null, null, null, 0x7B2269636F6E223A2022736D696C652D6F227D);
INSERT INTO `menu` VALUES ('2', '后台用户', '1', '/admin/user/index', null, null);
INSERT INTO `menu` VALUES ('3', '权限分配', '1', '/admin/assignment/index', null, null);
INSERT INTO `menu` VALUES ('4', '角色管理', '1', '/admin/role/index', null, null);
INSERT INTO `menu` VALUES ('5', '权限管理', '1', '/admin/permission/index', null, null);
INSERT INTO `menu` VALUES ('6', '路由管理', '1', '/admin/route/index', null, null);
INSERT INTO `menu` VALUES ('7', '规则管理', '1', '/admin/rule/index', null, null);
INSERT INTO `menu` VALUES ('8', '菜单管理', '1', '/admin/menu/index', null, null);
sql;

    public $init_sql_user = <<<sql
INSERT INTO `user` VALUES
	(
		NULL,
		'admin',
		'gt5fhJCHAD7fNqOT3lh6TKlftp7ukEvS',
		'$2y$13$.LaTjBm8N7.N/Vo3HwcXhOh3eleP9MxrtOwrmaXj5r9MYYFNul02O',
		NULL,
		'admin@do-you-know.com',
		'10',
		'1573228800',
		'1573228800'
	);
sql;

    public function actionIndex()
    {
        echo 'table auth_item...' . PHP_EOL;
        Yii::$app->db->createCommand($this->init_sql_auth_item)->execute();

        echo 'table auth_item_child...' . PHP_EOL;
        Yii::$app->db->createCommand($this->init_sql_auth_item_child)->execute();

        echo 'table auth_assignment...' . PHP_EOL;
        Yii::$app->db->createCommand($this->init_sql_auth_assignment)->execute();

        echo 'table menu...' . PHP_EOL;
        Yii::$app->db->createCommand($this->init_sql_menu)->execute();

        echo 'table user...';
        Yii::$app->db->createCommand($this->init_sql_user)->execute();

        return 0;
    }
}