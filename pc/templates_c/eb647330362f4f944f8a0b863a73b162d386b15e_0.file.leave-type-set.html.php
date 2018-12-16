<?php
/* Smarty version 3.1.29, created on 2018-12-16 22:16:08
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/system/view/leave-type-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c165e28d20a10_67552358',
  'file_dependency' => 
  array (
    'eb647330362f4f944f8a0b863a73b162d386b15e' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/system/view/leave-type-set.html',
      1 => 1544969767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/html/head.html' => 1,
    'file:public/html/menu.html' => 1,
  ),
),false)) {
function content_5c165e28d20a10_67552358 ($_smarty_tpl) {
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
	<link rel="stylesheet" href="system/view/css/leave-type-set.css" />
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
					<div class="contentRightNavTop"><span><a href="index.php?_f=index">首页</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span><a href="?_f=leave-type&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&s_name=<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
">请假类型管理</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on">请假类型设置</span></div>
					<div class="contentRightNavBottom"><span class="name">请假类型设置</span></div>
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
							<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
							<input type="hidden" name="act" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
							<div class = "roleInfo">
								<p class = "addApplyTitle mB26">请填写请假类型信息</p>
								<div class = "roleUserInfo clearfix">
									<div class = "form userName clearfix">
										<p class = "formTitle">假期类型名称</p>
										<input type="text" name = "typeName" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['typeName'];?>
" placeholder = "请填写假期类型名称" class = "formInput nameInput" autocomplete="off"/>
									</div>
									<div class = "form setNum clearfix">
										<p class = "formTitle">假期天数</p>
										<input type="number" name = "day" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['dayNumber'];?>
" placeholder = "0" class = "formInput dayInput" autocomplete="off"/>天
									</div>
								</div>
								<div class = "roleUserInfo clearfix">
									<div class = "form setNum clearfix">		
										<p class = "formTitle">是否为年假</p>
										<div class = "checkBox clearfix">
											<div class = "checkBtn mRight50"<?php if ($_smarty_tpl->tpl_vars['i']->value['annualLeave'] == 1) {?> on<?php }?>>是</div>
											<div class = "checkBtn"<?php if ($_smarty_tpl->tpl_vars['i']->value['annualLeave'] == 0) {?> on<?php }?>>否</div>
										</div>
										<input type="hidden" name = "annualLeave" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['annualLeave'];?>
" class = "formInput annualForm"/>
										<span class="tipsIcon"><span class = "tips">如为年休假一年仅能休一次，以年为单位</span></span>
									</div>
									<div class = "form setNum clearfix">		
										<p class = "formTitle">是否需要上传附件</p>
										<div class = "checkBox clearfix">
											<div class = "checkBtn mRight50"<?php if ($_smarty_tpl->tpl_vars['i']->value['isAttach'] == 1) {?> on<?php }?>>是</div>
											<div class = "checkBtn"<?php if ($_smarty_tpl->tpl_vars['i']->value['isAttach'] == 0) {?> on<?php }?>>否</div>
										</div>
										<input type="hidden" name = "isAttach" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['isAttach'];?>
" class = "formInput attachForm"/>
									</div>
								</div>
								<div class = "roleUserInfo clearfix">
									<div class = "form setNum clearfix">		
										<p class = "formTitle">是否为固定天数假期</p>
										<div class = "checkBox clearfix">
											<div class = "checkBtn mRight50"<?php if ($_smarty_tpl->tpl_vars['i']->value['isSameSetting'] == 1) {?> on<?php }?>>是</div>
											<div class = "checkBtn"<?php if ($_smarty_tpl->tpl_vars['i']->value['isSameSetting'] == 0) {?> on<?php }?>>否</div>
										</div>
										<input type="hidden" name = "isSameSetting" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['isSameSetting'];?>
" class = "formInput sameForm"/>
										<span class="tipsIcon"><span class = "tips">固定天数假期针对某一员工可再调整</span></span>
									</div>
									<div class = "form setNum clearfix">		
										<p class = "formTitle">设置排序</p>
										<input type="number" name = "rank" value="<?php echo $_smarty_tpl->tpl_vars['rank']->value;?>
" placeholder = "0" class = "formInput rankInput" autocomplete="off"/>
										<span class="tipsIcon"><span class = "tips">数字越大，排序越靠前</span></span>
									</div>
								</div>
								<div class = "roleUserInfo clearfix">
									<div class = "form userName clearfix">
										<p class = "formTitle">假期说明</p>
										<textarea name="remark" placeholder="请填写假期说明" class="formInput modifyRemarkInput"><?php echo $_smarty_tpl->tpl_vars['i']->value['remark'];?>
</textarea>
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
 type="text/javascript" src="system/view/js/leave-type-set.js" ><?php echo '</script'; ?>
>

</body>
</html><?php }
}
