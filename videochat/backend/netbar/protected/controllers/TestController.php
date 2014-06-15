<?php
class TestController extends Controller {
	
	public function actionIndex() {
		$this->testCarVlidate();
	}
	
	protected function testGenCarNum() {
		$obj = New CardNum();
		$type = 3;
		$num = 3;
		$obj->gen($type, $num);
	}
	
	protected function testCarVlidate(){
		$cardNum = '3925105836055491';
		$obj = new CardNum();
		$res = $obj->validate($cardNum);
		
		var_dump($res);
	}
}