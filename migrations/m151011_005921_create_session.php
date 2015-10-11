<?php

use jamband\schemadump\Migration;
use yii\db\Schema;

class m151011_005921_create_session extends Migration
{
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        $this->createTable('{{%session}}', [
            'id' => Schema::TYPE_STRING . "(40) NOT NULL",
            'expire' => Schema::TYPE_INTEGER . "(11) NULL",
            'data' => Schema::TYPE_BINARY . " NULL",
            'PRIMARY KEY (id)',
        ], $this->tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%session}}');
    }

}
