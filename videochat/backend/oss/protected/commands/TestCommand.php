<?php
class TestCommand extends CConsoleCommand{
	/*
	public function run($args){
		echo "TestCommand run\n";
		var_dump($args);
		/*
		$tb = new Black();
		$res = $tb->findAll();
		
		var_dump($res[0]->getAttributes());
		
	}*/
	
	/*
	public function actionHello($type){
		echo "hello action\n";
		var_dump($type);
	}*/
	
	public function actionHello($type, array $args){
		echo "hello action\n";
		var_dump($type, $args);
	}
	
	public function actionIndex(){
		echo "default action--index\n";
	}
}