<?php

use yii\db\Migration;

/**
 * Handles the creation of table `company`.
 */
class m180426_112834_create_company_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	    $tableOptions = null;
 
        $this->createTable('companys', [
            
			'id' => $this->primaryKey(),
			'fullname' => $this->string(), //Полное название
			'shortname' => $this->string(), //Краткое название
			'type' => $this->string(), //Организационно-правовая форма
			'legal_address' => $this->string(), //Юридический адрес
			'fact_address' => $this->string(), //Фактический адрес
			'ogrn' => $this->string(), //ОГРН
			'inn' => $this->string(), //ИНН
			'kpp' => $this->string(), //КПП
			'okpo' => $this->string(), //ОКПО
			'director_full_name' => $this->string(), //Директор, ФИО
			'director_position' => $this->string(), //Директор, должность
			'checking_account' => $this->string(), //Расчётный счёт
			'correspondent _account' => $this->string(), //Корреспондентский счёт
			'bank' => $this->string(), //Банк
			'bik' => $this->string(), //БИК
			'corporate_email' => $this->string(), //Корпоративный Email
			'corporate_phone' => $this->string(), //Корпоративный телефон
			
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('companys');
    }
}
