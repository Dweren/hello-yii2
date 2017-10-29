<?php

use yii\db\Schema;
use yii\db\Migration;

class m150825_162454_add_workers extends Migration
{
    public function up()
    {
        $this->createTable('workers', [
            'id' => Schema::TYPE_PK,
            'fio' => Schema::TYPE_STRING . ' NOT NULL',
            'room' => Schema::TYPE_STRING,
            'position' => Schema::TYPE_STRING,
            'chief_id' => Schema::TYPE_INTEGER,
        ]);
    }

    public function down()
    {
        $this->dropTable('workers');
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
