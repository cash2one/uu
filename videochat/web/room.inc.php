<?php

ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);


require_once(__DIR__.'/../app.inc');
define('VIEW_DIR', __DIR__ . '/../class/view/');

session_start();
$sid = session_id();

if (isset($_GET['rid']))
{
  $rid = intval($_GET['rid']);
}
else
{
  echo '您尚未登录。';
  die();
}
//$rid = isset($_GET['rid']) ? intval($_GET['rid']) : die();

$uid = $_SESSION['uid'];
$imgBase = AppConfig::get('imgBase');
$message = Msg::get($type=0);
//$sysmsg = 'sysmsg'; //Msg::get($type=1);
$version = AppConfig::get('version');

//for用户基本信息区
$user = array('nick'=>$_SESSION['nick'],
			  'face_id'=>$_SESSION['logo'],
			  'uid'=>$_SESSION['uid'],
			  'area'=>$_SESSION['area']);

function psc($s){
	echo htmlspecialchars($s);
}

function p($s){
	echo $s;
}
?>