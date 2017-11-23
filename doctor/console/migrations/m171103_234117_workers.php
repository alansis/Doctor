<?php

use yii\db\Migration;

class m171103_234117_workers extends Migration
{
   public function safeUp()
    {
        $this->createTable('workers', [
            'id' => $this->primaryKey()->notNull(),
            'department_id' => $this->integer(),
            'Name' => $this->string(255),
            'Subname' => $this->string(255),
            'Surname' => $this->string(255),
            'Passport_id' => $this->string(255),
            'Specialization' => $this->string(255),
            'Position' => $this->string(255),
            'user_id' => $this->integer(),
        ]);

        // creates index for column `department_id`

        $this->createIndex(
            'idx-workers-department_id',
            'workers',
            'department_id'
        );

        $this->createIndex(
            'idx-workers-user_id',
            'workers',
            'user_id'
        );
		
		$this->addForeignKey(
            'fk-workers-department_id',
            'workers',
            'department_id',
            'department',
            'id',
            'CASCADE'
        );

		$this->addForeignKey(
		    'fk-workers-user_id',
            'workers',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
	}
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-workers-department_id',
            'workers'
        );

        $this->dropForeignKey(
            'fk-workers-user_id',
            'workers'
        );

		$this->dropIndex(
            'idx-workers-department_id',
            'workers'
        );

        $this->dropIndex(
            'idx-workers-user_id',
            'workers'
        );

        $this->dropTable('workers');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171103_234117_workers cannot be reverted.\n";

        return false;
    }
    */
}
