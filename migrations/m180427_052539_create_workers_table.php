<?php

use yii\db\Migration;

/**
 * Handles the creation of table `workers`.
 */
class m180427_052539_create_workers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('workers', [
            'id' => $this->primaryKey(),
			'fullname' => $this->string()->notNull(), 
			'position' => $this->string()->notNull(), 
			'email' => $this->string()->notNull(), 			
			'phone' => $this->string()->notNull(), 			
			'skype' => $this->string(), 			
			'icq' => $this->string(), 						
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('workers');
    }
}
