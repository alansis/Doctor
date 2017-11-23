<?php

use yii\db\Migration;

class m171104_130727_schedule extends Migration
{
    public function safeUp()
    {
        $this->createTable('schedule', [
            'id' => $this->primaryKey(),
            'date' => $this->date(),
            'time_start' => $this->time(),
            'time_end' => $this->time(),
            'doctor_id' => $this->integer()
        ]);

        $this->createIndex(
            'idx-schedule-doctor_id',
            'schedule',
            'doctor_id');

        $this->addForeignKey(
            'fk-schedule-doctor_id',
            'schedule',
            'doctor_id',
            'workers',
            'id',
            'CASCADE');
    }

    public function safeDown()
    {


        $this->dropForeignKey(
            'fk-schedule-doctor_id',
            'schedule');

        $this->dropIndex(
            'idx-schedule-doctor_id',
            'schedule');

        $this->dropTable('schedule');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171104_130727_schedule cannot be reverted.\n";

        return false;
    }
    */
}
