<?php
/* Smarty version 3.1.29, created on 2018-12-22 09:18:11
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/index/view/set-password.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c1d90d30a33e3_37663174',
  'file_dependency' => 
  array (
    '95d77d26f502357827f251d63079bfbb0e88074e' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/index/view/set-password.html',
      1 => 1544791776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1d90d30a33e3_37663174 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>

	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
		<link rel="stylesheet" href="public/html/css/oa.base.css" />
		<link rel="stylesheet" href="public/html/css/oa.bootstrap.min.css" />
		<link rel="stylesheet" href="public/html/css/oa.common.css" />
		<link rel="stylesheet" href="index/view/css/set-password.css" />
	</head>

	<body>
		<!--头部begin-->
		<div class="header"></div>
		<!--头部end-->
		<!--内容begin-->
		<div class="content">
			<div class="contentBox">
				<div class="contentPart">
					<div class="loginTitle">密码设置</div>
					<div class="loginContent">
						<form id="pwdForm" method="post">
							<input type="hidden" name="act" value="setPost">
							<div class="loginInput marginB40">
								<label>设置密码</label>
								<input class="name" type="password" name="pwd" placeholder="请设置密码"/>
								<div class="passwordTic">密码为至少为6位，至少包含数字和字母两种形式</div>
								<div class="wrongText wrongTextName"></div>
							</div>
							<div class="loginInput">
								<label>确认密码</label>
								<input class="password" type="password" name="enterPwd" placeholder="请再次输入密码"/>
								<div class="wrongText wrongTextPassword"></div>
							</div>
							<div class="buttonBox clearfix">
								<div class="button buttonSure pull-left">保存</div>
								<a href="index.php?_f=login"><div class="button buttonReturn pull-right">返回</div></a>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="copyright"><?php echo $_smarty_tpl->tpl_vars['COPYRIGHT']->value;?>
</div>
		</div>
		<!--内容end-->
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.jquery-1.11.3.min.js" ><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.jquery.placeholder.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.respond.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/jquery.mCustomScrollbar.concat.min.js" ><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.jquery.placeholder.min.js" ><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/oa.common.js" ><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/jquery.form.min.js" ><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="index/view/js/set-password.js" ><?php echo '</script'; ?>
>
	</body>
</html><?php }
}
