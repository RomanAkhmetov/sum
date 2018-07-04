<?php

use yii\db\Migration;

/**
 * Handles the creation of table `projects`.
 */
class m180426_120057_create_projects_table extends Migration
{
     /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	    $tableOptions = null;
 
        $this->createTable('projects', [
            
			'id' => $this->primaryKey(),
			'name' => $this->string()->notNull(), 
			'direction' => $this->string()->notNull(), 			
			'company_id' => $this->integer()->notNull(), 
			
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('projects');
    }
}
