<?php
require_once(__DIR__.'/../app.inc');
if (!AppConfig::get('debug')){
  //return;
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VideoChat</title>
</head>
<body>
	<div>
		<p><a href="http://oss.xianxiashijie.com/" target="_blank">管理后台</a></p>
		<p><a href="begin.php" target="_blank">用户登录页面</a></p>
		<p><a href="hall_other.php" target="_blank">主持人登录页面</a></p>
		<p><a href="http://chat.xianxiashijie.com/users.php" target="_blank">模拟主持人、管理员、用户登录页面</a></p>
	</div>
</body>
</html>