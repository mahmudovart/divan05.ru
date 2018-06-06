<?php
namespace app\controllers;
use yii\web\Controller;

class MainController extends Controller
{		
	public function actionIndex(){
		$this->view->title = "divan05.ru";
		return $this->render('index');
	}
}
?>