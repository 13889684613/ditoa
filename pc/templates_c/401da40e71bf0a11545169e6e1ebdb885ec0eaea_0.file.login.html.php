<?php
/* Smarty version 3.1.29, created on 2018-11-16 18:01:52
  from "F:\website\ditoaCoder\ditoa\pc\index\view\login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bee95908eb911_17694423',
  'file_dependency' => 
  array (
    '401da40e71bf0a11545169e6e1ebdb885ec0eaea' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\index\\view\\login.html',
      1 => 1542362279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bee95908eb911_17694423 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
</head>
<body>
	<form method="post">
		<input type="hidden" name="act" value="loginPost">
		用户名：<input type="text" name="usrName" placeholder="请填写您的手机号"><br />
		密码：<input type="password" name="usrPwd" placeholder="请填写登录密码"><br />
		<input type="checkbox" name="autoLogin" value="1" >自动登录<br />
		<input type="submit" value="登录">
	</form>
</body>
</html><?php }
}
