<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m180426_105521_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	    $tableOptions = null;
 
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
			'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
			'email' => $this->string()->notNull()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
			
            'surname' => $this->string(),
            'middlename' => $this->string(),
            'name' => $this->string(),
            'birthdate' => $this->date(),
            'main_phone' => $this->string(),
			'mobile_phone' => $this->string(),
			
			'company_id' => $this->integer(),//id компании для привязки
			
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');
    }
}