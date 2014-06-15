<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>视频聊天室</title>
<link href="css/style_new_chat.css?v=<?php echo $version;?>" rel="stylesheet" type="text/css" />
<style>
.bqpic{ width: 50px; height: 50px;}
.warning{ color: red; }
.warning2{ color: red; font-weight: bold;}
</style>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/swfobject.js"></script>

<script type="text/javascript">
var cfg = {Max_Chat_Lines: 100, imgBase: 'http://img.xianxiashijie.com', sip: '192.168.206.132', vswf:'0.88'};

function createSWF(swf, placehoder, flashvars, attributes){
	var swfVersionStr = "11.1.0";
	var xiSwfUrlStr = "playerProductInstall.swf";
	var params = {};
	params.wmode = "transparent";
	params.quality = "high";
	params.allowscriptaccess = "sameDomain";
	attributes.id = placehoder;
	attributes.name = placehoder;
	attributes.align = "middle";
	swfobject.embedSWF(swf+".swf?v="+cfg.vswf, placehoder, "250", "200", swfVersionStr, xiSwfUrlStr, flashvars, params, attributes);

}
</script>
</head>

<body>
<div class="flash" id="video1">载入中...</div>
<div class="flash" id="video2">载入中...</div>
<div class="flash" id="video3">载入中...</div>

<script type="text/javascript">
	createSWF('PublishLive', 'video1', {sip: cfg.sip, appname: 'room_1', width:250}, {});
	createSWF('MediaPlayer', 'video2', {sip: cfg.sip, appname: 'room_1v', width:250}, {});
	createSWF('roomVideo', 'video3', {sip: cfg.sip, appname: 'room_t', width:250}, {});
</script>

</body>
