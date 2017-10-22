<?php

use yii\db\Migration;

class m171018_195555_callfordoctor extends Migration
{
    public function safeUp()
    {
        $this->createTable('callfordoctor', [
            'id' => $this->primaryKey(),
            'Name' => $this->string(255),
            'Subname' => $this->string(255),
            'Surname' => $this->string(255),
            'Description' => $this->text(),
            'Street' => $this->string(255),
            'Bilding' => $this->integer(),
            'apartment' => $this->integer(),
            'Passport_id' => $this->string(255),
            'MobilePhone' => $this->string(255),
            'HomePhone' => $this->string(255)->defaultValue('Null'),

        ]);

    }

    public function safeDown()
    {
        $this->dropTable('callfordoctor');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171018_195555_callfordoctor cannot be reverted.\n";

        return false;
    }
    */
}
