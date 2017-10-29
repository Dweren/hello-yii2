<?php

use yii\db\Schema;
use yii\db\Migration;

class m150814_185242_create_item_table extends Migration
{
    public function up()
    {
        $this->createTable('items', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'serial' => Schema::TYPE_STRING,
            'location' => Schema::TYPE_STRING,
            'inventory_number' => Schema::TYPE_STRING,
            'responsible_id' => Schema::TYPE_INTEGER,
        ]);
    }

    public function down()
    {
        $this->dropTable('items');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
