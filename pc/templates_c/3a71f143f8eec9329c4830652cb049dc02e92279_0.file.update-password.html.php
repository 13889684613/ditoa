<?php
/* Smarty version 3.1.29, created on 2018-11-16 18:15:21
  from "F:\website\ditoaCoder\ditoa\pc\index\view\update-password.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bee98b97d2642_37315178',
  'file_dependency' => 
  array (
    '3a71f143f8eec9329c4830652cb049dc02e92279' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\index\\view\\update-password.html',
      1 => 1542363039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bee98b97d2642_37315178 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
</head>
<body>
	<form method="post">
		<input type="hidden" name="act" value="updatePost">
		<input type="password" name="oldPwd" placeholder="原密码"><br />
		<input type="password" name="newPwd" placeholder="新密码"><br />
		<input type="password" name="enterPwd" placeholder="确认新密码"><br />
		<input type="submit" value="保存">
	</form>
</body>
</html><?php }
}
