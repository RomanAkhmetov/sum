<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tasks`.
 */
class m180427_050329_create_tasks_table extends Migration
{
      /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	    $tableOptions = null;
 
        $this->createTable('tasks', [
            
			'id' => $this->primaryKey(),
			'project_id' => $this->integer()->notNull(), 
			'task_title' => $this->string()->notNull(), 
			'task_description' => $this->string()->notNull(),
			
			'creator_user_id' => $this->integer()->notNull(), 
			'manager_teamuser_id' => $this->integer()->notNull(), 
			'worker_teamuser_id' => $this->integer(), 
			
			'creating_time' => $this->datetime(),
			'updating_time' => $this->datetime(),
			'closed_time' => $this->datetime(),
			'deadline_time' => $this->datetime(),
			
			'task_mark_speed' => $this->integer()->notNull(), //скорость решения задачи, отзыв
			'task_mark_completeness_answer' => $this->integer()->notNull(), //полнота и доступность предоставления информации, отзыв
			
			'files' => $this->string(), //файлы, прикреплённые к задаче
			
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tasks');
    }
}
