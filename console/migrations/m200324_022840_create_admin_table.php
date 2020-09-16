<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%admin}}`.
 */
class m200324_022840_create_admin_table extends Migration
{
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
		'\$2y\$10\$nOcM\.0O9BzATnI54iHzyjetQIMI5ilMjMnjXBiG2BUNxHvMsjRI2K',
		NULL,
		'admin@do-you-know.com',
		'10',
		'1573228800',
		'1573228800'
	);
sql;

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = <<<sql
create table `menu`
(
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(128),
    `parent` int(11),
    `route` varchar(256),
    `order` int(11),
    `data`   blob,
    foreign key (`parent`) references `menu`(`id`)  ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table `user`
(
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` varchar(32) NOT NULL,
    `auth_key` varchar(32) NOT NULL,
    `password_hash` varchar(256) NOT NULL,
    `password_reset_token` varchar(256),
    `email` varchar(256) NOT NULL,
    `status` integer not null default 10,
    `created_at` integer not null,
    `updated_at` integer not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
sql;
        $this->execute($sql);
        $this->execute($this->init_sql_menu);
        $this->execute($this->init_sql_user);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return false;
    }
}
