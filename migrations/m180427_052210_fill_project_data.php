<?php

use yii\db\Migration;

/**
 * Class m180427_052210_fill_project_data
 */
class m180427_052210_fill_project_data extends Migration
{
   /**
     * {@inheritdoc}
     */
    public function safeUp()
    {/*
		$tableOptions = null;
		
        $this->insert('project_users', 
		[ 			
			'user_id' => 4, 
			'project_id' => 2,	
			
        ], $tableOptions);
		
		
		 $this->insert('workers', 
		[ 
			'fullname' => 'Ломов Дмитрий Максимович', 
			'position' => 'Руководитель проекта', 
			'email' => 'tp@sumteh.ru', 			
			'phone' => '', 			
			'skype' => '', 			
			'icq' => '',	
			
        ], $tableOptions);
		*/
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        /*
        $this->truncateTable('project_users');
		$this->truncateTable('workers');
		*/
    }
}
