<?php

use yii\db\Migration;

class m171103_231501_blog extends Migration
{
   public function safeUp()
    {
	$this->createTable('news', [
            'id' => $this->primaryKey()->notNull(),
            'title' => $this->string(255),
            'content' => $this->text(),
			'author' => $this->string(255)
        ]);

    }

    public function safeDown()
    {
		
		$this->dropTable('news');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171103_231501_blog cannot be reverted.\n";

        return false;
    }
    */
}
