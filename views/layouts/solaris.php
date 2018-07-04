<?php
use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
	<?= $this->render('/layouts/_header') ?>
		
		<?php $this->beginBody() ?>
		
			<div id="content">	
				<div class="container">										
					<?= $content ?>					
				</div>
			</div>
		<?php $this->endBody() ?>
		
	<?= $this->render('/layouts/_footer') ?>
<?php $this->endPage() ?>