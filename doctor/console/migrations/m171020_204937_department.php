<?php

use yii\db\Migration;

class m171020_204937_department extends Migration
{
    public function safeUp()
    {
        $this->createTable('department', [
            'id' => $this->primaryKey()->notNull(),
            'title' => $this->string(255),
            'year' => $this->integer(),
            'count_of_personal' => $this->integer(),
            'institutions_id' => $this->integer(),
        ]);

        $this->createIndex(
            'idx-department-institutions_id',
            'department',
            'institutions_id'
        );

        $this->addForeignKey(
            'fk-workers-department_id',
            'workers',
            'department_id',
            'department',
            'id',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropTable('department');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171020_204937_department cannot be reverted.\n";

        return false;
    }
    */
}
