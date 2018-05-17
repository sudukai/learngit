<?php
// +-----------------------------------------------------------
// + DWCSHOP v1.0.0
// + 版权所有 2018-2044 厦门舒瑶贸易有限公司,并保留所有权利.
// + Author: sudukai <sudukai@qq.com> 2018-05-16 $
// +-----------------------------------------------------------
// 检测环境
if(version_compare(PHP_VERSION,'5.6.0','<') || version_compare(PHP_VERSION,'7.2.5','>'))
{
    header("Content-type: text/html; charset=utf-8");
    die('Sorry,PHP version >=5.6.0 and <=7.2.5 !');
}
//检测安装
if(is_dir("install") && !file_exists("install/install.ok")){
	//安装入口
	header("Location:install/index.php");
	exit();
}
// 入口文件
// 定义目录
define('APP_PATH', __DIR__ . '/application/');
// 加载框架
require __DIR__ . '/thinkphp/start.php';