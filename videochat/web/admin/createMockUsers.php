<?php

require_once('../../app.inc');

ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);

$conn_data = AppConfig::get('db');
$dbh = new PDO($conn_data['dsn'], $conn_data['user'], $conn_data['password']);
$dbh->prepare("SET names utf8;")->execute();

$i = 1;
for ($i = 1; $i <= 3; ++$i) {
	do_work($i);
}

function do_work($uid) {
	$dbh = $GLOBALS["dbh"];
	$sex = '男';
	$occupation = '金刚';
	$nick = getRandName();
	$level = 1;
	$area = '中国';
	$face_id = User::getFace($occupation, $sex);
	$score = 0;
	$privilege = 1;
	$time = time();

	$query = "INSERT INTO user SET uid=:uid, nick=:nick, level=:level, area=:area, occupation=:occupation, face_id=:face_id, score=:score, privilege=:privilege, time=:time";
	$stmt = $dbh->prepare($query);
	$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
	$stmt->bindParam(':uid', $uid);
	$stmt->bindParam(':nick', $nick);
	$stmt->bindParam(':level', $level);
	$stmt->bindParam(':area', $area);
	$stmt->bindParam(':occupation', $occupation);
	$stmt->bindParam(':face_id', $face_id);
	$stmt->bindParam(':score', $score);
	$stmt->bindParam(':privilege', $privilege);
	$stmt->bindParam(':time', $time);
	$stmt->execute();
	print_r($dbh->errorInfo());
	echo '<br>';
	$tstr = implode(", ", array($uid, $nick, $level, $area, $occupation, $face_id, $score, $privilege, $time));
	echo $tstr . "<br><br>";
}

function getRandName()
{
	$charstr = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$len = strlen($charstr);
	$ret = "";
	$L = mt_rand(2,4);
	for ($i = 0; $i < $L; ++$i)
	{
		$ret .= $charstr[mt_rand(0, $len-1)];
	}
	return $ret;
}

?>