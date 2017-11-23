<?php

use yii\db\Migration;

class m171103_233810_department extends Migration
{
 public function safeUp()
    {
        $this->createTable('department', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'year' => $this->integer(),
            'count_of_personal' => $this->integer(),
        ]);
		
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
        echo "m171103_233810_department cannot be reverted.\n";

        return false;
    }
    */
}
