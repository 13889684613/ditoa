<?php header("Content-type:text/html;charset=utf-8");?>
<?php session_start();?>
<?php ob_start();?>
<?php

	// ini_set('display_errors',1);            //错误信息 
	// error_reporting(-1);                    //打印出所有的 错误信息 

	// ** 全局配置文件
	date_default_timezone_set('Asia/Shanghai');

	include("oa.db.php");			 			//DB操作	
	
	/***数据库设置START***/
	
	$DB_HOST = 'localhost:8889';//主机名
	
	$DB_USER = 'root';//用户
	
	$DB_PWD = '123';//密码
	
	$DB_NAME = 'ditoa';//数据库名称
	
	$dsn = array(
		'host'     => $DB_HOST, 
		'user'     => $DB_USER,
		'password' => $DB_PWD, 
		'database' => $DB_NAME   
	);

	$db = new DB($dsn,'mysql');

	define('PRFIX','dit_');//数据表前缀
	
	/***数据库设置END***/


?>