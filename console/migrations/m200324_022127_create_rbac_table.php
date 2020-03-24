<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rbac}}`.
 */
class m200324_022127_create_rbac_table extends Migration
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

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = <<<sql
create table `auth_rule`
(
   `name`                 varchar(64) not null,
   `data`                 blob,
   `created_at`           integer,
   `updated_at`           integer,
    primary key (`name`)
) engine InnoDB;

create table `auth_item`
(
   `name`                 varchar(64) not null,
   `type`                 smallint not null,
   `description`          text,
   `rule_name`            varchar(64),
   `data`                 blob,
   `created_at`           integer,
   `updated_at`           integer,
   primary key (`name`),
   foreign key (`rule_name`) references `auth_rule` (`name`) on delete set null on update cascade,
   key `type` (`type`)
) engine InnoDB;

create table `auth_item_child`
(
   `parent`               varchar(64) not null,
   `child`                varchar(64) not null,
   primary key (`parent`, `child`),
   foreign key (`parent`) references `auth_item` (`name`) on delete cascade on update cascade,
   foreign key (`child`) references `auth_item` (`name`) on delete cascade on update cascade
) engine InnoDB;

create table `auth_assignment`
(
   `item_name`            varchar(64) not null,
   `user_id`              varchar(64) not null,
   `created_at`           integer,
   primary key (`item_name`, `user_id`),
   foreign key (`item_name`) references `auth_item` (`name`) on delete cascade on update cascade,
   key `auth_assignment_user_id_idx` (`user_id`)
) engine InnoDB;
sql;
        $this->execute($sql);
        $this->execute($this->init_sql_auth_item);
        $this->execute($this->init_sql_auth_item_child);
        $this->execute($this->init_sql_auth_assignment);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return false;
    }
}
