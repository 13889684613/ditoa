<?php
/* Smarty version 3.1.29, created on 2018-12-19 09:50:07
  from "F:\website\ditoaCoder\ditoa\pc\humanAffairs\view\staff-account.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c19a3cf148d65_04893653',
  'file_dependency' => 
  array (
    'f5e0cbcb65c6be4458630acf5a266495f9cef04a' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\humanAffairs\\view\\staff-account.html',
      1 => 1545184202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/html/head.html' => 1,
    'file:public/html/menu.html' => 1,
  ),
),false)) {
function content_5c19a3cf148d65_04893653 ($_smarty_tpl) {
?>
<!-- 
	# 员工基本资料页面
	# Bowen
	# 2018-11-12 
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
	<link rel="stylesheet" href="humanAffairs/view/css/staff-account.css" />
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
					<div class="contentRightNavTop"><span><a href="index.php?_f=index">首页</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span><a href="？_f=staff<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">员工管理</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on">账号设置</span></div>
					<div class="contentRightNavBottom"><span class="name">账号设置</span></div>
				</div>
			</div>
			<!--内容区导航end-->
			<!--内容区begin-->
			<div class="contentRightBox">
				<!-- 内容区 开始 -->
				<div class = "rightContent">
					<div class = "staffManageNav">
						<ul class = "clearfix">
							<li><a href="human-affairs.php?_f=staff-information<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">员工基本资料</a></li>
							<?php if ($_smarty_tpl->tpl_vars['id']->value != 0) {?>
							<li><a href="human-affairs.php?_f=staff-entry<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">入职信息</a></li>
							<li><a href="human-affairs.php?_f=staff-family<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">家庭主要成员</a></li>
							<li class = "width12"><a href="human-affairs.php?_f=staff-education<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">教育与工作经历</a></li>
							<li><a href="human-affairs.php?_f=staff-welfare<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">社保与公积金</a></li>
							<li><a href="human-affairs.php?_f=staff-file<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">资料上传</a></li>
							<li><a href="human-affairs.php?_f=staff-quit<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">离职信息</a></li>
							<?php if ($_smarty_tpl->tpl_vars['otherPower']->value[1] == 1) {?>
							<li><a href="human-affairs.php?_f=staff-contract<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">合同信息</a></li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['otherPower']->value[2] == 1) {?>
							<li class = "active"><a href="human-affairs.php?_f=staff-account<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">账号设置</a></li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['otherPower']->value[3] == 1) {?>
							<li><a href="human-affairs.php?_f=staff-leave<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">假期设置</a></li>		
							<?php }?>		
							<?php if ($_smarty_tpl->tpl_vars['otherPower']->value[4] == 1) {?>
							<li><a href="human-affairs.php?_f=staff-edit-log<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">编辑记录</a></li>
							<?php }?>
							<?php }?>
						</ul>
					</div>
					<div class = "staffInfoForm clearfix" style="background-color: #f6f6fa;padding-bottom: 0;">
						<form id="accountForm" method="post">
							<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
							<input type="hidden" name="s_company" value="<?php echo $_smarty_tpl->tpl_vars['s_company']->value;?>
" />
							<input type="hidden" name="s_office" value="<?php echo $_smarty_tpl->tpl_vars['s_office']->value;?>
" />
							<input type="hidden" name="s_role" value="<?php echo $_smarty_tpl->tpl_vars['s_role']->value;?>
" />
							<input type="hidden" name="s_post" value="<?php echo $_smarty_tpl->tpl_vars['s_post']->value;?>
" />
							<input type="hidden" name="s_status" value="<?php echo $_smarty_tpl->tpl_vars['s_status']->value;?>
" />
							<input type="hidden" name="s_begintime" value="<?php echo $_smarty_tpl->tpl_vars['s_begintime']->value;?>
" />
							<input type="hidden" name="s_overtime" value="<?php echo $_smarty_tpl->tpl_vars['s_overtime']->value;?>
" />
							<input type="hidden" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" />
							<input type="hidden" name="s_idno" value="<?php echo $_smarty_tpl->tpl_vars['s_idno']->value;?>
" />
							<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
							<input type="hidden" name="act" value="editSave" />
							<div class="clearfix" style="background-color: #fff;">
								<div class = "formBox formLeft">
									<div class = "formList">
										<div class = "form mbottom57">
											<p class = "formTitle">系统角色<span>*</span></p>
											<div class = "formInput formSelect"><?php echo $_smarty_tpl->tpl_vars['i']->value['sysRoleName'];?>
</div>
											<ul class = "formSelectList">
												<li class = "default">请选择系统角色</li>
												<?php
$_from = $_smarty_tpl->tpl_vars['sysRoles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_sysRoles_0_saved_item = isset($_smarty_tpl->tpl_vars['s']) ? $_smarty_tpl->tpl_vars['s'] : false;
$_smarty_tpl->tpl_vars['s'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['s']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
$__foreach_sysRoles_0_saved_local_item = $_smarty_tpl->tpl_vars['s'];
?>
												<li data-type="<?php echo $_smarty_tpl->tpl_vars['s']->value['sysRoleId'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['sysRoleName'];?>
</li>
												<?php
$_smarty_tpl->tpl_vars['s'] = $__foreach_sysRoles_0_saved_local_item;
}
if ($__foreach_sysRoles_0_saved_item) {
$_smarty_tpl->tpl_vars['s'] = $__foreach_sysRoles_0_saved_item;
}
?>
											</ul>
											<input type="hidden" name = "sysRole" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['sysRoleId'];?>
" class = "companyIdForm"/>
										</div>
									</div>
								</div>
								<div class = "formBox formCenter">
									<div class = "formList">
										<div class = "form mbottom57">
											<p class = "formTitle">审批角色<span>*</span></p>
											<div class = "formInput formSelect"><?php echo $_smarty_tpl->tpl_vars['i']->value['checkRoleName'];?>
</div>
											<ul class = "formSelectList">
												<li class = "default">请选择审批角色</li>
												<?php
$_from = $_smarty_tpl->tpl_vars['checkRoles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_checkRoles_1_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$__foreach_checkRoles_1_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
												<li data-type="<?php echo $_smarty_tpl->tpl_vars['c']->value['checkRoleId'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['checkRoleName'];?>
</li>
												<?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_checkRoles_1_saved_local_item;
}
if ($__foreach_checkRoles_1_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_checkRoles_1_saved_item;
}
?>
											</ul>
											<input type="hidden" name = "checkRole" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['checkRoleId'];?>
" class = "officeIdForm"/>
										</div>
									</div>
								</div>
								<div class = "formBox formRight">
									<div class = "formList">
										<div class = "form mbottom57">
											<p class = "formTitle">帐号状态<span>*</span></p>
											<div class = "checkBox clearfix">
												<?php
$_from = $_smarty_tpl->tpl_vars['status']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_2_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_2_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_2_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
												<div data-type="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class = "checkBtn mRight50<?php if ($_smarty_tpl->tpl_vars['i']->value['status'] == $_smarty_tpl->tpl_vars['key']->value) {?> on<?php }?>"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</div>
												<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_2_saved_local_item;
}
if ($__foreach_value_2_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_2_saved_item;
}
if ($__foreach_value_2_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_2_saved_key;
}
?>
											</div>
											<input type="hidden" name = "status" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['status'];?>
" class = "formInput sexForm"/>
										</div>
										<input id="res" name="res" type="reset" style="display:none;"/>
									</div>
								</div>
							</div>
						
							<div class = "modifyBox"<?php if ($_smarty_tpl->tpl_vars['isSet']->value == 0) {?> style="display: none;"<?php }?>>
								<p class = "modifyTitle">修改备注信息</p>
								<div class = "form modifyForm">
									<p class = "formTitle">修改备注信息</p>
									<textarea name="updateRemark" placeholder="请标明调整内容及原因" class = "formInput modifyRemarkInput"></textarea>
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
 type="text/javascript" src="public/html/js/plugin/oa.jquery.multiselect.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/jquery.form.min.js" ><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="humanAffairs/view/js/staff-account.js" ><?php echo '</script'; ?>
>
</body>
</html><?php }
}
