<?php
use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>

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
<body class="login">
	<?php $this->beginBody() ?>
		<div id="content">	
			<div class="login-left-column">
				<div class="enter-form">
					<h1 class="logo">Solaris</h1>
					<?= $content ?>	
					
					<a href="getaccess.php">Пройти регистрацию</a>
					<br>
					<a href="getpassword.php">Восстановить доступ</a>
				</div>
			</div>
			
			<div class="login-right-column login-photo">	
			</div>
			
		</div>
			
	<?php $this->endBody() ?>
		
<?= $this->render('/layouts/_footer') ?>
<?php $this->endPage() ?>