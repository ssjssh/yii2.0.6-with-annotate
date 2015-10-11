<?php

use jamband\schemadump\Migration;
use yii\db\Schema;

class m151011_005719_create_user extends Migration
{
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . "(255) NULL",
            'password' => Schema::TYPE_STRING . "(255) NULL",
            'auth_key' => Schema::TYPE_STRING . "(255) NULL",
            'username' => Schema::TYPE_STRING . "(255) NULL",
        ], $this->tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable("{{%user}}");
    }
}
