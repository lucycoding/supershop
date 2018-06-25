<?php
header("content-type:text/html;charset=utf-8");

// 两种模式 默认生产（线上）、开发调试模式
define("APP_DEBUG", true);
//define("APP_DEBUG", false);

//项目根目录
define('ROOT_URL', '/supershop/index');
//前台url
define('HOME_URL', '/supershop/Home');
//后台url
define('ADMIN_URL', '/supershop/Admin/index');

//静态资源目录
define('PUBLIC_URL', '/supershop/Public/');

// 目录安全文件
define('BUILD_DIR_SECURE',true);
define('DIR_SECURE_FILENAME', 'default.html');
define('DIR_SECURE_CONTENT', 'deney Access!');

// 项目名称
define('WEB_NAME', '时尚网店');
// 项目域名
define('WEB_URL', 'http://10.0.0.188/supershop/');
// 消息推送服务器（接收）
define('MSG_SOCKET_URL', 'http://10.0.0.188:2120');
// 消息推送服务器（推送）
define('MSG_SOCKET_SEND_URL', 'http://10.0.0.188:2121');
// 游戏外链
define('GAME_URL', 'http://10.0.0.188:8787');
// 服务器监测
define('SERVER_VMSTAT_URL', 'http://10.0.0.188:55555');

include('../ThinkPHP/ThinkPHP.php');