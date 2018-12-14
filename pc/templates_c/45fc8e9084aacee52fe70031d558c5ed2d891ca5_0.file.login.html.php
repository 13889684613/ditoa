<?php
/* Smarty version 3.1.29, created on 2018-12-14 20:59:49
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/index/view/login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c13a945168f01_09706114',
  'file_dependency' => 
  array (
    '45fc8e9084aacee52fe70031d558c5ed2d891ca5' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/index/view/login.html',
      1 => 1544791776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c13a945168f01_09706114 ($_smarty_tpl) {
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
		<link rel="stylesheet" href="public/html/css/plugin/jquery.mCustomScrollbar.min.css" />
		<link rel="stylesheet" href="public/html/css/oa.jquery-ui.min.css" />
		<link rel="stylesheet" href="public/html/css/plugin/jquery.mCustomScrollbar.min.css" />
		<link rel="stylesheet" href="public/html/css/oa.common.css" />
		<link rel="stylesheet" href="index/view/css/login.css" />
	</head>

	<body>
		<!--头部begin-->
		<div class="header"></div>
		<!--头部end-->
		<!--内容begin-->
		<div class="content">
			<div class="contentBox">
				<div class="contentPart">
					<div class="loginTitle">OA 办公管理系统</div>
					<div class="loginContent">
						<form id="loginForm" method="post">
							<input type="hidden" name="act" value="loginPost">
							<div class="loginInput marginB40">
								<label>用户名</label>
								<input class="name" type="text" name="usrName" placeholder="请填写您的手机号"/>
								<div class="wrongText wrongTextName">请正确填写您的手机号</div>
							</div>
							<div class="loginInput">
								<label>密码</label>
								<input class="password" type="password" name="usrPwd" placeholder="请填写登录密码"/>
								<div class="wrongText wrongTextPassword">请填写登录密码</div>
							</div>
							<div class="loginFor">自动登录</div>
							<!--值为1时记住状态 为0否-->
							<input type="hidden" class="loginHide" name="autoLogin" value="0"/>
							<div class="submit">立即登录</div>
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
 type="text/javascript" src="public/html/js/plugin/oa.bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/jquery.mCustomScrollbar.concat.min.js" ><?php echo '</script'; ?>
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
 type="text/javascript" src="index/view/js/login.js" ><?php echo '</script'; ?>
>
	</body>

</html><?php }
}
