<?php
/**
 * 系统运维业务模块入口文件
*/
include_once 'public/library/oa.common.php';

//文件
$_page = $_GET['_f'];
if(empty($_page)){
	$_page = "index";
}
//引用程序文件
include_once SYSTEM_SOURCE.$_page.'.php';
//SMATRY引用模版文件
$smarty->display(SYSTEM_TEMPLATES.$_page.'.html');
?>