<?php
/* Smarty version 3.1.29, created on 2018-11-15 21:36:22
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/index/view/login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bed7656e1b5c8_86240422',
  'file_dependency' => 
  array (
    '45fc8e9084aacee52fe70031d558c5ed2d891ca5' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/index/view/login.html',
      1 => 1542194247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bed7656e1b5c8_86240422 ($_smarty_tpl) {
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
