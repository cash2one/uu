<?php
class TestController extends CController {
	public function actionIndex() {
		$this->render('index', array());
	}

	public function actionUserRank() {
		$userRank = new UserRank();
		echo $userRank->gen();
	}

	public function actionPropStatic() {
		$prop = new PropInfoStatic();
		$prop->gen();
		$file = $prop->getFile();
		$data = require ($file);
		echo '<pre>';
		var_dump($data);
	}

	public function actionCard() {
		$card = new CardNum();
		$type = 2;
		$num = 10;
		$res = $card->gen($type, $num);
		var_dump($res, $card->getError());
	}

	public function actionMem() {
		$key = 'num';
		$value = 9;
		$expire = 10;
		yii::app()->cache->set($key, $value, $expire);
		Yii::app()->cache->get($key);
		Yii::app()->cache->delete($key);
	}

}