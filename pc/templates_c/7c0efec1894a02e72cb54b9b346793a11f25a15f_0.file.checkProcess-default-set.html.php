<?php
/* Smarty version 3.1.29, created on 2018-12-23 12:18:28
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/system/view/checkProcess-default-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c1f0c94f204a0_86653357',
  'file_dependency' => 
  array (
    '7c0efec1894a02e72cb54b9b346793a11f25a15f' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/system/view/checkProcess-default-set.html',
      1 => 1545538705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/html/head.html' => 1,
    'file:public/html/menu.html' => 1,
  ),
),false)) {
function content_5c1f0c94f204a0_86653357 ($_smarty_tpl) {
?>
<!-- 
	# 创建通用审批流程
	# lfl
	# 2018-11-24
-->
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
		<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
		<link rel="stylesheet" href="public/html/css/oa.base.css" />
		<link rel="stylesheet" href="public/html/css/oa.bootstrap.min.css" />
		<link rel="stylesheet" href="public/html/css/plugin/jquery.mCustomScrollbar.min.css" />
		<link rel="stylesheet" href="public/html/css/oa.jquery-ui.min.css" />
		<link rel="stylesheet" href="public/html/css/oa.jquery.multiselect.css" />
		<link rel="stylesheet" href="public/html/css/oa.common.css" />
		<link rel="stylesheet" href="system/view/css/checkProcess-default-set.css" />
	</head>

	<body class="clearfix">
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
						<div class="contentRightNavTop"><span><a href="index.php?_f=index">首页</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span><a href="?_f=checkProcess-default&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;
echo $_smarty_tpl->tpl_vars['track']->value;?>
">通用审批流程管理</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on">通用审批流程设置</span></div>
						<div class="contentRightNavBottom"><span class="name">通用审批流程设置</span></div>
					</div>
				</div>
				<!--内容区导航end-->
				<!--内容区begin-->
				<div class="contentRightBox">
					<div class="contentRightContent">
						<form id="checkForm" method="post" class="clearfix">
						<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
						<input type="hidden" name="s_type" value="<?php echo $_smarty_tpl->tpl_vars['s_type']->value;?>
" />
						<input type="hidden" name="s_role" value="<?php echo $_smarty_tpl->tpl_vars['s_role']->value;?>
" />
						<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
						<input type="hidden" name="act" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
						<div class="retrievalBox">
							<div class="retrievalTitle">设置审批流程信息</div>
							<div class="retrievalsForm clearfix">
								<div class="retrievalsInputBoxs mediaWidthChange clearfix pull-left">
									<div class="retrievalsInputContent">
										<div class="retrievalsInput firstIn">
											<label class="lable_w">审批流程类别<span class="must">*</span></label>
											<input type="text" readonly="readonly" onfocus="this.blur()" class="choseInput choseInputLc" placeholder="请选择"  data-type='0' />
											<div class="retrievalsInputNavBox">
												<ul class="retrievalsInputNav">
													<li data-type='0'>请选择</li>
													<?php
$_from = $_smarty_tpl->tpl_vars['categorys']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_0_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_0_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
													<li data-type = "<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
													<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_local_item;
}
if ($__foreach_value_0_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_item;
}
if ($__foreach_value_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_0_saved_key;
}
?>
													<input type="hidden" name="category" class="selectVal" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['checkCategory'];?>
" />
												</ul>
											</div>
										</div>
										<div class="retrievalsInput  firstIn">
											<label class="lable_w">发起审批角色<span class="must">*</span></label>
											<input type="text" readonly="readonly" onfocus="this.blur()" class="choseInput choseInputJs" placeholder="请选择"  data-type='0' />
											<div class="retrievalsInputNavBox">
												<ul class="retrievalsInputNav">
													<li data-type='0'>请选择</li>
													<?php
$_from = $_smarty_tpl->tpl_vars['roles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_roles_1_saved_item = isset($_smarty_tpl->tpl_vars['r']) ? $_smarty_tpl->tpl_vars['r'] : false;
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$__foreach_roles_1_saved_local_item = $_smarty_tpl->tpl_vars['r'];
?>
													<li data-type='<?php echo $_smarty_tpl->tpl_vars['r']->value['checkRoleId'];?>
'><?php echo $_smarty_tpl->tpl_vars['r']->value['checkRoleName'];?>
</li>
													<?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_roles_1_saved_local_item;
}
if ($__foreach_roles_1_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_roles_1_saved_item;
}
?>
													<input type="hidden" name="beginRole" class="selectVal" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['beginRole'];?>
" />
												</ul>
											</div>
										</div>
										<div class="retrievalsInput clearfix">
											<div class="queryButton pull-left">确定</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="approvalInformationBox">
							<!--审批信息begin-->
							<div class="approval-informationBox">
								<div class="approval-information">
									<div class="approval-informationTitle">设置审批信息</div>
									<table class="Stable">
										<?php if ($_smarty_tpl->tpl_vars['action']->value == 'addSave') {?>
										<tr>
											<td width="84" class="td1 text-center">
												<span class="center-block">01</span>
											</td>
											<td class="td4" width="633">
												<div class="StableTd clearfix">
													<div class="StableTdL pull-left">所属角色<span class="must">*</span></div>
													<div class="StableTdR pull-left"><input type="text" data-type='0' onfocus="this.blur()" readonly="readonly" class="choseInput InputJs" placeholder="请选择"  />
														<div class="retrievalsInputNavBox">
															<ul class="retrievalsInputNav">
																<li data-type='0'>请选择</li>
																<?php
$_from = $_smarty_tpl->tpl_vars['roles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_roles_2_saved_item = isset($_smarty_tpl->tpl_vars['r']) ? $_smarty_tpl->tpl_vars['r'] : false;
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$__foreach_roles_2_saved_local_item = $_smarty_tpl->tpl_vars['r'];
?>
																<li data-type='<?php echo $_smarty_tpl->tpl_vars['r']->value['checkRoleId'];?>
'><?php echo $_smarty_tpl->tpl_vars['r']->value['checkRoleName'];?>
</li>
																<?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_roles_2_saved_local_item;
}
if ($__foreach_roles_2_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_roles_2_saved_item;
}
?>
																<input type="hidden" class="selectVal" name="role[]" value="" />
															</ul>
														</div>
													</div>
												</div>
											</td>
										</tr>
										<?php }?>
										<?php
$_from = $_smarty_tpl->tpl_vars['i']->value['process'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_process_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_process']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_process'] : false;
$__foreach_process_3_saved_item = isset($_smarty_tpl->tpl_vars['p']) ? $_smarty_tpl->tpl_vars['p'] : false;
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_process'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_process']->value['iteration']++;
$__foreach_process_3_saved_local_item = $_smarty_tpl->tpl_vars['p'];
?>
										<tr>
											<td width="84" class="td1 text-center">
												<span class="center-block"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_process']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_process']->value['iteration'] : null);?>
</span>
											</td>
											<td class="td4" width="633">
												<div class="StableTd clearfix">
													<div class="StableTdL pull-left">所属角色<span class="must">*</span></div>
													<div class="StableTdR pull-left"><input type="text" data-type='0' onfocus="this.blur()" readonly="readonly" class="choseInput InputJs" placeholder="请选择"/>
														<div class="retrievalsInputNavBox">
															<ul class="retrievalsInputNav">
																<li data-type='0'>请选择</li>
																<?php
$_from = $_smarty_tpl->tpl_vars['roles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_roles_4_saved_item = isset($_smarty_tpl->tpl_vars['r']) ? $_smarty_tpl->tpl_vars['r'] : false;
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$__foreach_roles_4_saved_local_item = $_smarty_tpl->tpl_vars['r'];
?>
																<li data-type='<?php echo $_smarty_tpl->tpl_vars['r']->value['checkRoleId'];?>
'><?php echo $_smarty_tpl->tpl_vars['r']->value['checkRoleName'];?>
</li>
																<?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_roles_4_saved_local_item;
}
if ($__foreach_roles_4_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_roles_4_saved_item;
}
?>
																<input type="hidden" name="role[]" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['roleId'];?>
"  class="selectVal" value="" />
															</ul>
														</div>
													</div>
												</div>
											</td>
										</tr>
										<?php
$_smarty_tpl->tpl_vars['p'] = $__foreach_process_3_saved_local_item;
}
if ($__foreach_process_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_process'] = $__foreach_process_3_saved;
}
if ($__foreach_process_3_saved_item) {
$_smarty_tpl->tpl_vars['p'] = $__foreach_process_3_saved_item;
}
?>
									</table>
								</div>
							</div>
							<!--审批信息end-->
							<div class="addInformationBox">
								<img src="system/view/images/sqBt.jpg" alt="" />
							</div>
							<div class="formBtnsBox clearfix">
								<div class="formBtn formBtnSave">提交审批流程</div>
								<div class="formBtn formBtnCancel">返回</div>
							</div>
						</div>
						</form>
					</div>
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
 type="text/javascript" src="public/html/js/plugin/jquery.mCustomScrollbar.concat.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.jquery-ui.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.jquery.multiselect.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.jquery.placeholder.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/oa.common.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/jquery.form.min.js" ><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="system/view/js/checkProcess-default-set.js"><?php echo '</script'; ?>
>
	</body>

</html><?php }
}
