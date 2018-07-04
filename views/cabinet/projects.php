<?php
/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Проекты';
?>
<div class="row">
	<div class="twelve columns">
		<h1><?= Html::encode($this->title) ?></h1>
	</div>
</div>
<?php
	//var_dump($projectList);
	$counter = 0;
?>
<?php foreach ($projectList as $item): ?>

	<?php $counter++; ?>
	<?php if($counter==1){ ?>
		<div class="row">
	<?php }?>
	
		<div class="four columns one-project">
			<h5><a href="/cabinet/project?pid=<?php echo $item->id ?>"><?php echo $item->name ?></a></h5>
			<p class="desc"><?php echo $item->direction ?></p>
			<div class="project-details">
				
				<div class="project-widget col-left">
					<a href="#" class="a-tooltip">
						<i class="el el-bell red"></i>
						<div class="tooltip"><?php echo $item->company_id ?></div>
						<div class="a-tooltip-div">Уведомления</div>
					</a>
				</div>				
				<div class="project-widget col-middle">
					<a href="documents.php" class="a-tooltip">
						<i class="el el-file green"></i>
						<div class="tooltip"><?php echo $item->company_id ?></div>
						<div class="a-tooltip-div">Документы</div>
					</a>
				</div>
				<div class="project-widget col-right">
					<a href="tasks.php" class="a-tooltip">
						<i class="el el-tasks blue"></i>
						<div class="a-tooltip-div">Задачи</div>
					</a>
				</div>
				
			</div>				
		</div>
	<?php if($counter==3){ ?>
		</div>
	<?php $counter=0; }?>
<?php endforeach ?>