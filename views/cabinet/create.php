<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;

$this->title = 'Новая задача';
?>

<?php $form = ActiveForm::begin([
	'id' => 'create-form',
	'layout' => 'horizontal',
	'fieldConfig' => [
		'template' => "{input}",
		'options' => [
			'tag'=>'span'
		]
]
]); ?>

<?php
    echo $data;
?>

	<div class="sm-input">
		<?= $form->field($model, 'title')->textInput(['placeholder'=>'Заголовок'])->label(""); ?>    
	</div>

        <div class="sm-input">
		<?= $form->field($model, 'desc')->textInput(['placeholder'=>'Описание'])->label(""); ?>    
	</div>


<div class="sm-input">
    
</div>


 

	

	<div class="form-group">
		<div class="col-lg-offset-1 col-lg-11">
			<?= Html::submitButton('Создать', ['class' => 'button button-primary', 'name' => 'login-button']) ?>
		</div>
	</div>

<?php ActiveForm::end(); ?>