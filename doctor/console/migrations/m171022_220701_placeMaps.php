<?php

use yii\db\Migration;

class m171022_220701_placeMaps extends Migration
{
    public function safeUp()
    {
        $this->createTable('placeMaps', [
            'id' => $this->primaryKey(),
            'address' => $this->string(255),
            'name_of_setting' => $this->string(255),
        ]);

    }

    public function safeDown()
    {
        $this->dropTable('placeMaps');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171022_220701_placeMaps cannot be reverted.\n";

        return false;
    }
    */
}
