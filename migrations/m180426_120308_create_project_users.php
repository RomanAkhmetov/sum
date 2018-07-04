<?php

use yii\db\Migration;

/**
 * Class m180426_120308_create_project_users
 */
class m180426_120308_create_project_users extends Migration
{
     /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	    $tableOptions = null;
 
        $this->createTable('project_users', [
            
			'id' => $this->primaryKey(),
			'user_id' => $this->integer()->notNull(), 
			'project_id' => $this->integer()->notNull(),			
			
        ], $tableOptions);
		
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('project_users');
    }
}
