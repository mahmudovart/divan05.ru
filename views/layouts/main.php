<?php
use app\assets\AppAsset;
use yii\helpers\Html;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
 <html lang="<?= Yii::$app->language ?>">
 <head>
 	<meta charset="UTF-8">
 	<meta charset="<?= Yii::$app->charset ?>">
 	 <?= Html::csrfMetaTags() ?>
 	 <title><?= Html::encode($this->title) ?></title>
 	<?php $this->head() ?>
 </head>
 <body>
<?php $this->beginBody() ?>
 	<div class="container">
 		<div class="row">
 			<div class="col-md-4">
 				<div id="logo-head">
 				 
 					<div id="logo-img">
 						<img src="/images/sofa.png" style="width:130px; height: 100px" alt="">
 						 <span id="logo-b">
 						  <b>05.ru</b>
 					    </span>
 					</div>
 					

 				 
 				</div>
 			</div>
 			<div class="col-md-8">
 				 <div id="sleng-head">
 			
 					<h4>Мы делаем <b>качественно</b> & <b>выгодно</b></h4>
 					
 				</div>
 			</div>
 		</div>
 		<div class="row">
 			<div id="nav-bar"> 
 				<nav class="navbar navbar-default">
 					<div class="container-fluid">
 						<div class="navbar-header">
 							<a href="" class="navbar-brand">Divan05.ru</a>
 						
 						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-div-tog">
 							<span class="icon-bar"></span>
 							<span class="icon-bar"></span>
 							<span class="icon-bar"></span>
 						</button>
 						</div>
 						<div id="navbar-div-tog" class="navbar-collapse collapse">
 							<ul class="nav navbar-nav navbar-right">
 								<li><a href="">Галлерея</a></li>
 								<li><a href="">О нас</a></li>
 								<li><a href="">Товары</a></li>
 							</ul>
 						</div>
 					</div>
 				</nav>
 			</div>
 		</div>
 	</div>
<div class="container">
	 	<?=$content?>
</div>

<?php $this->endBody() ?>
 </body>
 </html> 
<?php $this->endPage() ?>