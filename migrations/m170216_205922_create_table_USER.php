<?php

use yii\db\Migration;

class m170216_205922_create_table_USER extends Migration
{
    public function up()
    {
        $this->createTable('user', array(
            'id' => 'pk',
            'username' => 'varchar(50) DEFAULT NULL',
            'email' => 'varchar(255) DEFAULT NULL',
            'password' => 'varchar(512) DEFAULT NULL',
            'active' => 'int(1) NOT NULL DEFAULT 0'
        ));
    }

    public function down()
    {
        $this->dropTable('user');
    }
}