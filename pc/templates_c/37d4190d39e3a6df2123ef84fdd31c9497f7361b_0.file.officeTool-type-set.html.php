<?php
/* Smarty version 3.1.29, created on 2018-12-17 09:39:25
  from "F:\website\ditoaCoder\ditoa\pc\system\view\officeTool-type-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c16fe4d2a9c14_21147531',
  'file_dependency' => 
  array (
    '37d4190d39e3a6df2123ef84fdd31c9497f7361b' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\system\\view\\officeTool-type-set.html',
      1 => 1545008745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/html/head.html' => 1,
    'file:public/html/menu.html' => 1,
  ),
),false)) {
function content_5c16fe4d2a9c14_21147531 ($_smarty_tpl) {
?>
<!-- 
	# 新增系统角色
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
	<link rel="stylesheet" href="system/view/css/officeTool-type-set.css" />
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
					<div class="contentRightNavTop"><span><a href="index.php?_f=index">首页</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span><a href="?_f=officeTool-type&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&s_name=<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
&s_code=<?php echo $_smarty_tpl->tpl_vars['s_code']->value;?>
">备品类别管理</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on">备品类别设置</span></div>
					<div class="contentRightNavBottom"><span class="name">备品类别设置</span></div>
				</div>
			</div>
			<!--内容区导航end-->
			<!--内容区begin-->
			<div class="contentRightBox">
				<!-- 内容区 开始 -->
				<div class = "rightContent">
					<div class = "staffInfoForm contentForm clearfix">
						<form id="setForm" method="post" class = "clearfix">
							<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
							<input type="hidden" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" />
							<input type="hidden" name="s_code" value="<?php echo $_smarty_tpl->tpl_vars['s_code']->value;?>
" />
							<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
							<input type="hidden" name="act" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
							<div class = "roleInfo">
								<p class = "addApplyTitle mB26">请填写备品类别信息</p>
								<div class = "roleUserInfo clearfix">
									<div class = "form userName clearfix">
										<p class = "formTitle">备品类别名称</p>
										<input type="text" name = "categoryName" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['categoryName'];?>
" placeholder = "请填写备品类别名称" class = "formInput nameInput" autocomplete="off"/>
									</div>
									<div class = "form userName clearfix">
										<p class = "formTitle">备品类别编号</p>
										<input type="text" name = "categoryCode" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['categoryCode'];?>
" placeholder = "请填写备品类别编号" class = "formInput codeInput" autocomplete="off"/>
									</div>
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
 type="text/javascript" src="system/view/js/officeTool-type-set.js" ><?php echo '</script'; ?>
>

</body>
</html><?php }
}