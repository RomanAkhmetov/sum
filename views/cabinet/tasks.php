<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
?>

<div class="row">
	<div class="nine columns">
		<h1>Задачи</h1>
	</div>
	<div class="three columns addTaskBtn">
		<a class="button button-primary" href="/cabinet/create" >Создать задачу</a>
	</div>
</div>

<div class="row">			
	<div class="three columns widget quick-info">
		<h6>Непринятые</h6>
		<h1 class="orange">28</h1>
	</div>
	<div class="three columns widget quick-info">
		<h6>В работе</h6>
		<h1 class="blue">6</h1>
	</div>
	<div class="three columns widget quick-info">
		<h6>Просроченные</h6>
		<h1 class="red">2</h1>
	</div>
	<div class="three columns widget quick-info">
		<h6>Завершённые</h6>
		<h1 class="green">12</h1>
	</div>
</div>

<div class="row">
	<div class="twelve columns tasks">
	
		<table class="u-full-width">
		
			<thead>					
				<tr>												
				<th>№ заявки<a href="#"><i class="el el-filter"></i></a></th>
				<th>Суть<a href="#"><i class="el el-filter"></i></a></th>
				<th>Проект<a href="#"><i class="el el-filter"></i></a></th>
				<th>Ответственный<a href="#"><i class="el el-filter"></i></a></th>
				<th>Исполнитель<a href="#"><i class="el el-filter"></i></a></th>
				<th>Статус<a href="#"><i class="el el-filter"></i></a></th>
				</tr>
			</thead>
			
			<tbody>
				<?php foreach ($taskList as $task): ?>
				<tr class="">
					<td class="task-priority task-priority-red"><span><a href="#"><?=  $task->id?></a></span>
					<td class="task-desc"><span><a href="#"><?=  $task->task_title?></a></span>
					<td><span><?=  $task->project_id?></span>
					<td><span><a href="#"><?=  $task->manager_teamuser_id?></a></span>
					<td><span><a href="#"><?=  $task->worker_teamuser_id?></a></span>
					<td><div class="task-status"><span><a href="#">В работе</a></span></div>
				<?php endforeach ?>	
			</tbody>
					
		</table>
				
	</div>			
</div>