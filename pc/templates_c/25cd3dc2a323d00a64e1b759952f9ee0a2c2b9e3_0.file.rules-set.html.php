<?php
/* Smarty version 3.1.29, created on 2018-12-22 21:41:37
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/generalAffairs/view/rules-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c1e3f1116e685_25485437',
  'file_dependency' => 
  array (
    '25cd3dc2a323d00a64e1b759952f9ee0a2c2b9e3' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/generalAffairs/view/rules-set.html',
      1 => 1545221122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/html/head.html' => 1,
    'file:public/html/menu.html' => 1,
  ),
),false)) {
function content_5c1e3f1116e685_25485437 ($_smarty_tpl) {
?>
<!-- 
	# 企业规章制度
	# Bowen
	# 2018-11-23
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
	<link rel="stylesheet" href="generalAffairs/view/css/rules-set.css" />
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
					<div class="contentRightNavTop"><span><a href="index.php?_f=index">首页</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span><a href="?_f=rules&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&s_name=<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
">规章制度</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on">规章制度设置</span></div>
					<div class="contentRightNavBottom"><span class="name">规章制度设置</span></div>
				</div>
			</div>
			<!--内容区导航end-->
			<!--内容区begin-->
			<div class="contentRightBox">
				<!-- 内容区 开始 -->
				<div class = "rightContent">
					<div class = "staffInfoForm contentForm clearfix">
						<form id="rulesForm" method="post" class = "clearfix" enctype="multipart/form-data">
							<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
							<input type="hidden" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" />
							<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
							<input type="hidden" name="act" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
							<div class = "roleInfo">
								<p class = "addApplyTitle mB26">规章制度信息</p>
								<div class = "roleUserInfo clearfix">
									<div class = "form userName clearfix">
										<p class = "formTitle">制度名称</p>
										<input type="text" name = "title" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
" placeholder = "请输入制度名称" class = "formInput nameInput" autocomplete="off"/>
									</div>
									<div class = "form userName clearfix">
										<p class = "formTitle">制度文件</p>
										<div class = "uploadFile">
											<div class = "uploadBtn">上传文件</div>
											<input type="file" name="attach[]" value = ' ' class = "uploadInput" />
										</div>
										<?php if ($_smarty_tpl->tpl_vars['i']->value['attach'] != '') {?>
										<div class = "showFileName"><a href="upload/file/rule/<?php echo $_smarty_tpl->tpl_vars['i']->value['attach'];?>
" target="_blank">查看已上传文件</a><span></span></div>
										<?php } else { ?>
										<div class = "showFileName">已选择：<span></span></div>
										<?php }?>
									</div>
								</div>
								<div class = "roleUserInfo mT26 clearfix">
									<div class = "form setNum clearfix">
										<p class = "formTitle">设置排序</p>
										<input type="number" name = "rank" value="<?php echo $_smarty_tpl->tpl_vars['rank']->value;?>
" placeholder = "0" class = "formInput numInput" autocomplete="off"/>
										<span class="tipsIcon"><span class = "tips">数字越大，排序越靠前</span></span>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class = "formBtnsBox clearfix">
						<div class = "formBtn formBtnSave">保存</div>
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
 type="text/javascript" src="public/html/js/jquery.form.min.js" ><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="generalAffairs/view/js/rules-set.js" ><?php echo '</script'; ?>
>

</body>
</html><?php }
}
