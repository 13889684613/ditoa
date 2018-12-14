<?php
/* Smarty version 3.1.29, created on 2018-12-14 21:35:47
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/index/view/update-password.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c13b1b31852f0_56883318',
  'file_dependency' => 
  array (
    '34e5813f4e01c4f1b1382232d0f92665db5eaab5' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/index/view/update-password.html',
      1 => 1544794544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/html/head.html' => 1,
    'file:public/html/menu.html' => 1,
  ),
),false)) {
function content_5c13b1b31852f0_56883318 ($_smarty_tpl) {
?>
<!-- 
	# 出差申请
	# Bowen
	# 2018-11-19
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
	<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
	<link rel="stylesheet" href="public/html/css/oa.base.css" />
	<link rel="stylesheet" href="public/html/css/oa.bootstrap.min.css" />
	<link rel="stylesheet" href="public/html/css/plugin/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="public/html/css/oa.common.css" />
	<link rel="stylesheet" href="public/html/css/oa.jquery-ui.min.css" />
	<link rel="stylesheet" href="public/html/css/oa.jquery.multiselect.css" />
	<link rel="stylesheet" href="businessTravel/view/css/businessTravel-apply.css" />
</head>
<body>

	<!--头部 begin-->
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:public/html/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<!--头部 end-->

	<!--内容 begin-->
	<div class="container-fluid row">
		<!--内容区左侧导航 begin-->
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:public/html/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<!--内容区左侧导航end-->
		<!--内容区右侧begin-->
		<div class="contentRight col-lg-10 row">
			<!--内容区导航begin-->
			<div class="contentRightNav clearfix">
				<div class="contentRightNavLeft pull-left">
					<div class="contentRightNavTop"><span><a href="index.php?_f=index">首页</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on">修改密码</span></div>
					<div class="contentRightNavBottom"><span class="name">修改登录密码</span></div>
				</div>
			</div>
			<!--内容区导航end-->
			<!--内容区begin-->
			<div class="contentRightBox">
				<!-- 内容区 开始 -->
				<div class = "rightContent">
					<div class = "staffInfoForm contentForm clearfix">
						<form action="" class = "clearfix">
							<div class = "addApply clearfix">
								<p class = "addApplyTitle">密码设置</p>
								<!-- <a href="##" class = "goSeeStandard">查看差旅标准</a> -->
								<div class = "formsBox clearfix">
									<div class = "form w360">
										<p class = "formTitle">出差时间<span>*</span></p>
										<input type="text" placeholder="出差时间" name = "beginDate" class = "formInput startForm dataInput datepicker" style="vertical-align:middle;" autocomplete="off"/>
										<span style = "color: #aaa;">~</span>
										<input type="text" placeholder="出差时间" name = "overDate" class = "formInput endForm dataInput datepicker" style="vertical-align:middle;" autocomplete="off"/>
										<p class = "allDay">共计：<span>0</span>天</p>
									</div>
									<div class = "form">
										<p class = "formTitle">出差行程<span>*</span><span class="tipsIcon"><span class = "tips">请概要描述申请出差的行程安排</span></span></p>
										<input type="text" name = "trip" placeholder = "请输入" class = "formInput tripForm" autocomplete="off" />
									</div>
									<div class = "form mR0">
										<p class = "formTitle">工作接管人<span>*</span></p>
										<div class = "formInput formSelect">请选择工作接管人</div>
										<ul class = "formSelectList">
											<li class = "default">请选择工作接管人</li>
											<li>1</li>
											<li>2</li>
											<li>3</li>
										</ul>
										<input type="hidden" name = "receiverUsr" class = "receiverUsrForm"/>
									</div>
								</div>
							</div>
							<div class = "other clearfix">
								<p class = "addApplyTitle">其他</p>
								<div class = "formsBox clearfix">
									<div class = "form">
										<p class = "formTitle">出差目的地及事由<span>*</span></p>
										<textarea name="reason" placeholder="请输入出差目的地及事由" class = "formInput reasonInput"></textarea>
									</div>
									<div class = "form">
										<p class = "formTitle">备注</p>
										<textarea name="remark" placeholder="请输入" class = "formInput remarkInput"></textarea>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class = "formBtnsBox clearfix">
						<div class = "formBtn formBtnSave">提交</div>
						<div class = "formBtn formBtnCancel">取消</div>
					</div>
				</div>
				<!-- 内容区 结束 -->
			</div>
			<!--内容区end-->
		</div>
		<!--内容区右侧end-->
	</div>
	<!--内容 end-->

	<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.respond.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.jquery.placeholder.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/oa.common.js" ><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.jquery-ui.min.js" ><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/jquery.mCustomScrollbar.concat.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="businessTravel/view/js/businessTravel-apply.js" ><?php echo '</script'; ?>
>
</body>
</html><?php }
}
