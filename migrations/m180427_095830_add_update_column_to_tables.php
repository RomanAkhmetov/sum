<?php

use yii\db\Migration;

/**
 * Class m180427_095830_add_update_column_to_tables
 */
class m180427_095830_add_update_column_to_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		
		$this->addColumn('companys', 'created_at', $this->datetime());
		$this->addColumn('companys', 'updated_at', $this->datetime());
		
		$this->addColumn('projects', 'created_at', $this->datetime());
		$this->addColumn('projects', 'updated_at', $this->datetime());
		
		$this->addColumn('project_team', 'created_at', $this->datetime());
		$this->addColumn('project_team', 'updated_at', $this->datetime());
		
		$this->addColumn('project_users', 'created_at', $this->datetime());
		$this->addColumn('project_users', 'updated_at', $this->datetime());
		
		$this->addColumn('tasks', 'created_at', $this->datetime());
		$this->addColumn('tasks', 'updated_at', $this->datetime());
		
		$this->addColumn('workers', 'created_at', $this->datetime());
		$this->addColumn('workers', 'updated_at', $this->datetime());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('companys', 'created_at');
		$this->dropColumn('companys', 'updated_at');

		$this->dropColumn('projects', 'created_at');
		$this->dropColumn('projects', 'updated_at');

		$this->dropColumn('project_team', 'created_at');
		$this->dropColumn('project_team', 'updated_at');

		$this->dropColumn('project_users', 'created_at');
		$this->dropColumn('project_users', 'updated_at');

		$this->dropColumn('tasks', 'created_at');
		$this->dropColumn('tasks', 'updated_at');

		$this->dropColumn('workers', 'created_at');
		$this->dropColumn('workers', 'updated_at');
    }   
}
