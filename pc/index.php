<?php
/**
 * 登录-设置初始密码-首页-更改密码模块入口文件
*/
include_once 'public/library/oa.common.php';

//文件
$_page = $_GET['_f'];
if(empty($_page)){
	$_page = "login";
}
//引用程序文件
include_once INDEX_SOURCE.$_page.'.php';
//SMATRY引用模版文件
$smarty->display(INDEX_TEMPLATES.$_page.'.html');
?>