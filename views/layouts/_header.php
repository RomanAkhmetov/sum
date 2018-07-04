<?php
use yii\helpers\Html;
use app\assets\AppAsset;
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="<?= Yii::$app->charset ?>">
  <?= Html::csrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">
 
  <?php $this->head() ?>
</head>
<body>

<div id="header">
	<div class="container">
		<div class="row">
			<div class="one column">
				<a href="/" class="logo"><h4>Solaris</h4></a>
			</div>
			<div class="eleven columns user-navigation">
				
				<?php
					 
					$menuItems = [
						['label' => 'Око', 'url' => ['/site/index']],
						['label' => 'Проекты', 'url' => ['/cabinet/projects']],						
						['label' => 'Задачи', 'url' => ['/cabinet/tasks']],						
					];
					 
					if (Yii::$app->user->isGuest) 
					{
						$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
						$menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];			
					}					
					else 
					{
						$menuItems[] = [
							'label' => 'Выйти '.Yii::$app->user->identity->username,
							'url' => ['/site/logout'],							
							'template' => Html::beginForm(['/site/logout'], 'post'). Html::submitButton('Logout (' . Yii::$app->user->identity->username . ')',['class' => 'button button-primary']).Html::endForm()
							
						];
						
					}
					
					 
					echo \yii\widgets\Menu::widget([
						'options' => [
							'id'=>'navigation',					
						],
						'items' => $menuItems,
					]);
					 
					
				?>				
			</div>			
		</div>
	</div>
</div>