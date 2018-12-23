<?php
/* Smarty version 3.1.29, created on 2018-12-22 08:49:09
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/staff-family.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c1d8a05c43a22_15235206',
  'file_dependency' => 
  array (
    '54ca6b42d1d7c01d183ab99ac7637881a409bc8f' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/staff-family.html',
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
function content_5c1d8a05c43a22_15235206 ($_smarty_tpl) {
?>
<!-- 
	# 员工基本资料页面
	# Bowen
	# 2018-11-14 
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
	<link rel="stylesheet" href="humanAffairs/view/css/staff-family.css" />
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
">员工管理</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on">家庭主要成员</span></div>
					<div class="contentRightNavBottom"><span class="name">家庭主要成员设置</span></div>
				</div>
				<!--状态begin-->
				<!-- <div class="contentRightNavRight pull-right clearfix">
					<div class="contentRightNavRightTxt">审批中</div>
				</div> -->
				<!--状态end-->
			</div>
			<!--内容区导航end-->
			<!--内容区begin-->
			<div class="contentRightBox">
				<!-- 内容区 开始 -->
				<div class = "rightContent">
					<div class = "staffManageNav">
						<ul class = "clearfix">
							<li><a href="human-affairs.php?_f=staff-information&act=edit&<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">员工基本资料</a></li>
							<li><a href="human-affairs.php?_f=staff-entry<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">入职信息</a></li>
							<li class = "active"><a href="human-affairs.php?_f=staff-family<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
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
							<li><a href="human-affairs.php?_f=staff-account<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
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
						</ul>
					</div>
					<div class = "staffInfoForm staffFamilyForm clearfix" style="background-color: #f6f6fa;padding-bottom: 0;">
						<form id="familyFrom" method="post">
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
							<div class="clearfix" style="background-color: #fff">
								<div class = "staffFamilyContent clearfix">
									<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_data_0_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_data_0_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
									<div class = "staffFamilyInfo clearfix">
										<input type="hidden" name="familyId[]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['familyId'];?>
">
										<input type="text" name = "familyName[]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['familyName'];?>
" placeholder="姓名" class = "formInput familyNameForm" autocomplete="off"/>
										<div class = "form width80">
											<div class = "formInput formSelect">性别</div>
											<ul class = "formSelectList">
												<li class = "default">性别</li>
												<?php
$_from = $_smarty_tpl->tpl_vars['sexs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_1_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_1_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_1_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
												<li data-type="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['i']->value['sex']) {?> class="on"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
												<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_1_saved_local_item;
}
if ($__foreach_value_1_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_1_saved_item;
}
if ($__foreach_value_1_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_1_saved_key;
}
?>
											</ul>
											<input type="hidden" name = "sex[]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['sex'];?>
" class = "formInput sexForm"/>
										</div>
										<input type="text" name = "birthDate[]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['birthDate'];?>
" placeholder="请选择出生日期" class = "formInput birthDateForm dataInput datepicker" autocomplete="off"/>
										<input type="text" name = "relation[]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['relation'];?>
" placeholder="与本人关系" class = "formInput relationForm" autocomplete="off"/>
										<input type="text" name = "telphone[]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['telphone'];?>
" placeholder="联系电话" class = "formInput telphoneForm" autocomplete="off"/>
										<input type="text" name = "workUnit[]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['workUnit'];?>
" placeholder="工作单位" class = "formInput workUnitForm" autocomplete="off"/>
										<img src="public/html/images/input_add.png" alt="" class = "remove">
										<p class = "familyAge">年龄：<span>0</span></p>
									</div>
									<?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_0_saved_local_item;
}
if ($__foreach_data_0_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_0_saved_item;
}
?>
									<div class = "staffFamilyInfo clearfix">
										<input type="hidden" name="familyId[]" value="0">
										<input type="text" name = "familyName[]" placeholder="姓名" class = "formInput familyNameForm" autocomplete="off"/>
										<div class = "form width80">
											<div class = "formInput formSelect">性别</div>
											<ul class = "formSelectList">
												<li class = "default">性别</li>
												<?php
$_from = $_smarty_tpl->tpl_vars['sexs']->value;
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
												<li data-type="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
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
											</ul>
											<input type="hidden" name = "sex[]" class = "formInput sexForm"/>
										</div>
										<input type="text" name = "birthDate[]" placeholder="请选择出生日期" class = "formInput birthDateForm dataInput datepicker" autocomplete="off"/>
										<input type="text" name = "relation[]" placeholder="与本人关系" class = "formInput relationForm" autocomplete="off"/>
										<input type="text" name = "telphone[]" placeholder="联系电话" class = "formInput telphoneForm" autocomplete="off"/>
										<input type="text" name = "workUnit[]" placeholder="工作单位" class = "formInput workUnitForm" autocomplete="off"/>
										<img src="public/html/images/input_add.png" alt="" class = "add">
										<p class = "familyAge">年龄：<span>0</span></p>
									</div>
									
								</div>
							</div>
							
							<div class = "modifyBox"<?php if ($_smarty_tpl->tpl_vars['dataCount']->value == 0) {?> style="display: none;"<?php }?>>
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
 type="text/javascript" src="public/html/js/plugin/oa.jquery-ui.min.js" ><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/jquery.mCustomScrollbar.concat.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.jquery.multiselect.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/oa.common.js" ><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/jquery.form.min.js" ><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="humanAffairs/view/js/staff-family.js" ><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
>
		$(".datepicker").datepicker({
			inline: true,
			showOtherMonths: true,
			selectOtherMonths: true,
			changeMonth: true,
			changeYear: true,
			yearRange: "1950:2050",
			dateFormat: 'yy-mm-dd'
		});

		$(".datepickera").datepicker({
			inline: true,
			showOtherMonths: true,
			selectOtherMonths: true,
			changeMonth: true,
			changeYear: true,
			yearRange: "1950:2050",
			dateFormat: 'yy-mm-dd'
		});
		
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
