<?php

use yii\db\Migration;

class m171021_132814_institutions extends Migration
{
    public function safeUp()
    {
        $this->createTable('institutions', [
         'id' => $this->primaryKey()->notNull(),
         'Name' => $this->string(255),
            'Street' => $this->string(255),
            'Bilding' => $this->integer(),
            'apartment' => $this->integer(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('institutions');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171021_132814_institutions cannot be reverted.\n";

        return false;
    }
    */
}
