<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
?>

<?php foreach ($projectList as $item): ?>
	<?php $this->title = $item->name." [".$item->direction."]"; ?>
	<div class="row">
		<div class="twelve columns">
			<h1><?= Html::encode($this->title) ?></h1>
		</div>
	</div>


	<div class="row">			
		<div class="twelve columns taskDetails">
			<div class="row">
				<div class="six columns">
					<div class="helpBox2">
						<h5>Информация по проекту</h5>
						<p><b>Документы</b></p>
						<table class="u-full-width">
							<tr>
							<td class="taskFiles"><i class="el el-file"></i>
							<td><a href=""> Договор №067/14 от 28.04.2017г., DOCX</a>
							<tr>
							<td class="taskFiles"><i class="el el-file"></i>
							<td><a href=""> Приложение №1 к договору №067/14 от 29.04.2017г., DOCX</a>
							<tr>
							<td class="taskFiles"><i class="el el-file"></i>
							<td><a href=""> Приложение №2 к договору №067/14 от 19.06.2017г., DOCX</a>
						</table>
					</div>
				</div>
				<div class="six columns">
					<div class="helpBox2">
						<h5>Команда вашего проекта</h5>
						
						<?php foreach ($workersList as $worker): ?>
							
							<p><b><?php echo $worker->position?></b></p>
							<p><?php echo $worker->fullname?></p>
							
							<? if(!empty($worker->email)): ?>	
							<p>Email: <a href="mailto:<?= $worker->email?>"><?=  $worker->email?></a></p>
							<? endif; ?>							
							<? if(!empty($worker->phone)): ?>	
							<p>Телефон: <a href="mailto:<?= $worker->phone?>"><?=  $worker->phone?></a></p>
							<? endif; ?>
							<? if(!empty($worker->skype)): ?>	
							<p>Skype: <a href="mailto:<?= $worker->skype?>"><?=  $worker->skype?></a></p>
							<? endif; ?>
							<? if(!empty($worker->icq)): ?>	
							<p>ICQ: <a href="mailto:<?= $worker->icq?>"><?=  $worker->icq?></a></p>
							<? endif; ?>
								
							
						<?php endforeach ?>							
						 
					</div>
				</div>
			</div>					
		</div>				
	</div>
	
<?php endforeach ?>