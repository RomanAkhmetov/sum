<?php

use yii\db\Migration;

/**
 * Class m180426_120418_create_project_team
 */
class m180426_120418_create_project_team extends Migration
{
      /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	    $tableOptions = null;
 
        $this->createTable('project_team', [
            
			'id' => $this->primaryKey(),			
			'project_id' => $this->integer()->notNull(),
			'worker_id' =>  $this->integer()->notNull(),			
			
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('project_team');
    }
}
