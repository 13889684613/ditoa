<?php
/* Smarty version 3.1.29, created on 2018-11-16 18:03:58
  from "F:\website\ditoaCoder\ditoa\pc\index\view\set-password.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bee960ee47ee0_88901755',
  'file_dependency' => 
  array (
    '5c130d587c91140b29b16b5b129e84c983c96c75' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\index\\view\\set-password.html',
      1 => 1542362279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bee960ee47ee0_88901755 ($_smarty_tpl) {
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
