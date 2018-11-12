<?php header("Content-type:text/html;charset=utf-8");?>
<?php session_start();?>
<?php ob_start();?>
<!DOCTYPE html>
<?php

	// ini_set('display_errors',1);            //错误信息 
	// error_reporting(-1);                    //打印出所有的 错误信息 

	// ** 全局配置文件
	date_default_timezone_set('Asia/Shanghai');

	//include("oa.db.php");			 					//DB操作
	include("oa.function.php");		 					//常用函数库
	include("public/library/smarty/Smarty.class.php");  //smarty 核心文件
	include("oa.smarty.php");		                    //smarty 模板引擎配置文件
	
	/***数据库设置START***/
	
	$DB_HOST = '127.0.0.1';//主机名
	
	$DB_USER = 'root';//用户
	
	$DB_PWD = '123456';//密码
	
	$DB_NAME = 'ditoa';//数据库名称
	
	$dsn = array(
		'host'     => $DB_HOST, 
		'user'     => $DB_USER,
		'password' => $DB_PWD, 
		'database' => $DB_NAME   
	);

	/*获取当前正确时区时间*/
	$DB_TIME = 'PRC';

	define('PRFIX','dit_');//数据表前缀

	/***数据库设置END***/

	//项目名称
	define('OANAME','DIT-OA办公管理系统|');

	//备案版权
	define('COPYRIGHT','&copy; 2018 大连国际货运有限公司，All Right Reserved');
	
	//激活帐号模块HTML路径
	define('ACTIVATION_TEMPLATES','activation/view/');

	//激活帐号模块程序路径
	define('ACTIVATION_SOURCE','activation/controller/');

	//企业动态模块HTML路径
	define('NEWS_TEMPLATES','news/view/');

	//企业动态模块程序路径
	define('NEWS_SOURCE','news/controller/');

	//打卡考勤模块HTML路径
	define('SIGN_TEMPLATES','sign/view/');

	//打卡考勤模块程序路径
	define('SIGN_SOURCE','sign/controller/');
?>