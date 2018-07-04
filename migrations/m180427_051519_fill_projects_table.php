<?php

use yii\db\Migration;

/**
 * Class m180427_051519_fill_projects_table
 */
class m180427_051519_fill_projects_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$tableOptions = null;
		
		/*Добавляем три основные категории услуг/мероприятий*/
        $this->insert('projects', 
		[ 
			'id' => 2,
			'name' => 'Личный кабинет клиента', 
			'direction' => 'Разработка', 			
			'company_id' => 2, 
			
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->truncateTable('projects');
    }
}
