<?php
/* Smarty version 3.1.29, created on 2018-11-15 21:48:52
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/index/view/set-password.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bed7944d56cc5_99187247',
  'file_dependency' => 
  array (
    '95d77d26f502357827f251d63079bfbb0e88074e' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/index/view/set-password.html',
      1 => 1542289731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bed7944d56cc5_99187247 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
</head>
<body>
	<form method="post">
		<input type="hidden" name="act" value="setPost">
		设置密码：<input type="password" name="pwd" placeholder="请设置密码"><br />
		确认密码：<input type="password" name="enterPwd" placeholder="请再输入密码"><br />
		<input type="submit" value="保存">
	</form>
</body>
</html><?php }
}
