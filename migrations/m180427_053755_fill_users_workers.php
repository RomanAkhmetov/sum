<?php

use yii\db\Migration;

/**
 * Class m180427_053755_fill_users_workers
 */
class m180427_053755_fill_users_workers extends Migration
{
   /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$tableOptions = null;
		
        $this->insert('project_users', 
		[ 			
			'user_id' => 4, 
			'project_id' => 2,	
			
        ], $tableOptions);
		
		
		 $this->insert('workers', 
		[
			'id' => 2,
			'fullname' => 'Ломов Дмитрий Максимович', 
			'position' => 'Руководитель проекта', 
			'email' => 'tp@sumteh.ru', 			
			'phone' => '', 			
			'skype' => '', 			
			'icq' => '',	
			
        ], $tableOptions);
		
		$this->insert('project_team', 
		[ 
			'project_id' => 2,
			'worker_id' =>  2,			
			
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        
        $this->truncateTable('project_users');
        $this->truncateTable('project_team');
		$this->truncateTable('workers');
    }
}
