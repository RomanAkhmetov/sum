<?php

use yii\db\Migration;

/**
 * Class m180427_051509_fill_company_table
 */
class m180427_051509_fill_company_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$tableOptions = null;
		
		/*Добавляем три основные категории услуг/мероприятий*/
        $this->insert('companys', 
		[ 
			'id' => 2,
			'fullname' => 'Сумма Технологий', //Полное название
			'shortname' => 'Сумтех', //Краткое название
			'type' => 'ООО', //Организационно-правовая форма
			'legal_address' => '620078, Россия, г. Екатеринбург, ул. Комсомольская, д. 76, лит. А, этаж 1', //Юридический адрес
			'fact_address' => '620078, Россия, г. Екатеринбург, ул. Комсомольская, д. 76, лит. А, этаж 1', //Фактический адрес
			'ogrn' => 1036604391790, //ОГРН
			'inn' => 6672139614, //ИНН
			'kpp' => 667001001, //КПП
			'okpo' => 33908499, //ОКПО
			'director_full_name' => 'Рублевский Роман Владимирович', //Директор, ФИО
			'director_position' => 'Директор', //Директор, должность
			'checking_account' => 40702810116540010690, //Расчётный счёт
			'correspondent _account' => 30101810500000000674, //Корреспондентский счёт
			'bank' => 'Уральский Банк ОАО Сбербанк России', //Банк
			'bik' => 046577674, //БИК
			'corporate_email' => 'manager@sumteh.ru', //Корпоративный Email
			'corporate_phone' => '8 (343) 253-73-45', //Корпоративный телефон			
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->truncateTable('companys');
    }
}
