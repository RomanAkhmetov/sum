<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Солярис - система счастья для наших клиентов';

?>

<?php $form = ActiveForm::begin([
	'id' => 'login-form',
        'type'=>'post',
	'layout' => 'horizontal',
	'fieldConfig' => [
		'template' => "{input}",
		'options' => [
			'tag'=>'span'
		]
]
]); ?>
	<div class="sm-input">
		<i class="el el-user"></i>
		<?= $form->field($model, 'username')->textInput()->label(""); ?>
	</div>
	
	<div class="sm-input">
		<i class="el el-key"></i>
		<?= $form->field($model, 'password')->passwordInput()->label("") ?>
	</div>
	

	<div class="form-group">
		<div class="col-lg-offset-1 col-lg-11">
			<?= Html::submitButton('Войти', ['class' => 'button button-primary', 'name' => 'login-button']) ?>
		</div>
	</div>

<?php ActiveForm::end(); ?>