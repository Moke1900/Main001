<?php
// 设置播放器所需的标头
header('Content-Type: video/x-flv');
header('Access-Control-Allow-Origin: *'); // 允许跨域访问
// 播放器所请求的直播URL
$urls = [
'流1' => 'http://live.dajiatui.com/live/00000001/00000001-0.flvhttps://tc-tct.douyucdn2.cn/dyliveflv3a/4728410rEXJ5a6ZB.flv',
'流2' => 'http://live.dajiatui.com/live/00000002/00000002-0.flv',
// ... 更多的斗鱼直播流URL
];
// 获取播放器请求的流
$streamKey = isset($_GET['stream']) ? $_GET['stream'] : '流1'; // 默认流
$url = $urls[$streamKey];
// 初始化cURL会话
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// 执行cURL会话
$response = curl_exec($ch);
// 输出内容到客户端
echo $response;
// 关闭cURL会话
curl_close($ch);
?>
