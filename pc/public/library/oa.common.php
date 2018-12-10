<?php header("Content-type:text/html;charset=utf-8");?>
<?php session_start();?>
<?php ob_start();?>
<!DOCTYPE html>
<?php

	// ini_set('display_errors',1);            //错误信息 
	// error_reporting(-1);                    //打印出所有的 错误信息 

	// ** 全局配置文件
	date_default_timezone_set('Asia/Shanghai');

	include("oa.db.php");			 					//DB操作
	include("oa.function.php");		 					//常用函数库
	include("oa.static.php");							//静态数据
	include('oa.library.php');							//常用DB操作
	include("public/library/smarty/Smarty.class.php");  //smarty 核心文件
	include("oa.smarty.php");		                    //smarty 模板引擎配置文件
	
	/***数据库设置START***/
	
	$DB_HOST = 'localhost';//主机名
	
	$DB_USER = 'root';//用户
	
	$DB_PWD = '123456';//密码
	
	$DB_NAME = 'ditoa';//数据库名称
	
	$dsn = array(
		'host'     => $DB_HOST, 
		'user'     => $DB_USER,
		'password' => $DB_PWD, 
		'database' => $DB_NAME   
	);

	$db = new DB($dsn,'mysql');

	/*获取当前正确时区时间*/
	$DB_TIME = 'PRC';

	define('PRFIX','dit_');//数据表前缀
	
	/***数据库设置END***/

	//公共文件路径
	define('PUBLICPATH','public/library/');

	//项目名称
	define('OANAME','DIT-OA办公管理系统|');

	//备案版权
	define('COPYRIGHT','&copy; 2018 大连国际货运有限公司，All Right Reserved');

	//登录-设置初始密码-首页-更改密码模块HTML路径
	define('INDEX_TEMPLATES','index/view/');

	//登录-设置初始密码-首页-更改密码模块程序路径
	define('INDEX_SOURCE','index/controller/');
	
	//DIT组织架构业务模块HTML路径
	define('ORG_TEMPLATES','org/view/');

	//DIT组织架构业务模块程序路径
	define('ORG_SOURCE','org/controller/');

	//人事管理业务模块HTML路径
	define('HUMANAFFAIRS_TEMPLATES','humanAffairs/view/');

	//人事管理业务模块程序路径
	define('HUMANAFFAIRS_SOURCE','humanAffairs/controller/');

	//请假业务模块HTML路径
	define('LEAVEL_TEMPLATES','leave/view/');

	//请假业务模块程序路径
	define('LEAVEL_SOURCE','leave/controller/');

	//出差业务模块HTML路径
	define('BUSINESSTRAVEL_TEMPLATES','businessTravel/view/');

	//出差业务模块程序路径
	define('BUSINESSTRAVEL_SOURCE','businessTravel/controller/');

	//车辆业务模块HTML路径
	define('CAR_TEMPLATES','car/view/');

	//车辆业务模块程序路径
	define('CAR_SOURCE','car/controller/');

	//办公备品业务模块HTML路径
	define('OFFICETOOL_TEMPLATES','officeTool/view/');

	//办公备品业务模块程序路径
	define('OFFICETOOL_SOURCE','officeTool/controller/');

	//综合事务业务模块HTML路径
	define('GENERALAFFAIRS_TEMPLATES','generalAffairs/view/');

	//综合事务业务模块程序路径
	define('GENERALAFFAIRS_SOURCE','generalAffairs/controller/');

	//系统运维业务模块HTML路径
	define('SYSTEM_TEMPLATES','system/view/');

	//系统运维业务模块程序路径
	define('SYSTEM_SOURCE','system/controller/');

	//考勤业务模块HTML路径
	define('SIGN_TEMPLATES','sign/view/');

	//考勤业务模块程序路径
	define('SIGN_SOURCE','sign/controller/');

	//系统消息业务模块HTML路径
	define('MESSAGE_TEMPLATES','message/view/');

	//系统消息业务模块程序路径
	define('MESSAGE_SOURCE','message/controller/');

	//异常提示，用于所有程序报错
	define('ERRORTIPS','网络异常，请稍候再试！');

	//用户身份验证文件
	if(!strstr($_SERVER["QUERY_STRING"],'login')){
		include("oa.safe.php");								
	}

?>