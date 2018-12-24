<?php
/* Smarty version 3.1.29, created on 2018-12-24 16:08:22
  from "F:\website\ditoaCoder\ditoa\pc\humanAffairs\view\staff-education.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c2093f6c4ceb8_93921688',
  'file_dependency' => 
  array (
    'f39d4a3373ab17d2738c4803b579ae5e2fb29ef2' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\humanAffairs\\view\\staff-education.html',
      1 => 1545638900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/html/head.html' => 1,
    'file:public/html/menu.html' => 1,
  ),
),false)) {
function content_5c2093f6c4ceb8_93921688 ($_smarty_tpl) {
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
	<link rel="stylesheet" href="humanAffairs/view/css/staff-education.css" />
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
					<div class="contentRightNavTop"><span><a href="index.php?_f=index">首页</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span><a href="human-affairs.php?_f=staff<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">员工管理</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on">教育与工作经历</span></div>
					<div class="contentRightNavBottom"><span class="name"><?php echo $_smarty_tpl->tpl_vars['staffName']->value;?>
 - 教育与工作经历设置</span></div>
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
							<li><a href="human-affairs.php?_f=staff-family<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">家庭主要成员</a></li>
							<li class = "width12 active"><a href="human-affairs.php?_f=staff-education<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
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
						<form id="educationFrom" method="post">
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
										<input type="hidden" name="resumeId[]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['resumeId'];?>
">
										<input type="text" name = "beginDate[]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['beginDate'];?>
" placeholder="开始日期" class = "formInput startForm dataInput datepicker w150LeftMr12" autocomplete="off"/>
										<span class="leftLh42DisBlock">至</span>
										<input type="text" name = "overDate[]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['overDate'];?>
" placeholder="结束日期" class = "formInput endForm dataInput datepicker w150LeftMl12Mr14" autocomplete="off"/>
										<input type="text" name = "workUnit[]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['workUnit'];?>
" placeholder="单位名称" class = "formInput workUnitForm" autocomplete="off"/>
										<input type="text" name = "postName[]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['postName'];?>
" placeholder="职务" class = "formInput postNameForm w100LeftMr14" autocomplete="off"/>
										<input type="text" name = "remark[]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['remark'];?>
" placeholder="备注" class = "formInput remarkForm w200LeftMr14" autocomplete="off"/>
										<img src="public/html/images/input_remove.png" alt="" class = "remove">
									</div>
									<?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_0_saved_local_item;
}
if ($__foreach_data_0_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_0_saved_item;
}
?>
									<div class = "staffFamilyInfo clearfix">
										<input type="hidden" name="resumeId[]" value="0">
										<input type="text" name = "beginDate[]" placeholder="开始日期" class = "formInput startForm dataInput datepicker w150LeftMr12" autocomplete="off"/>
										<span class="leftLh42DisBlock">至</span>
										<input type="text" name = "overDate[]" placeholder="结束日期" class = "formInput endForm dataInput datepicker w150LeftMl12Mr14" autocomplete="off"/>
										<input type="text" name = "workUnit[]" placeholder="单位名称" class = "formInput workUnitForm" autocomplete="off"/>
										<input type="text" name = "postName[]" placeholder="职务" class = "formInput postNameForm w100LeftMr14" autocomplete="off"/>
										<input type="text" name = "remark[]" placeholder="备注" class = "formInput remarkForm w200LeftMr14" autocomplete="off"/>
										<img src="public/html/images/input_add.png" alt="" class = "add">
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
 type="text/javascript" src="humanAffairs/view/js/staff-education.js" ><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
>
		$( ".startForm" ).datepicker({
			inline: true,
			showOtherMonths: true,
			selectOtherMonths: true,
			changeMonth: true,
			changeYear: true,
			yearRange: "1950:2050",
			dateFormat: 'yy-mm-dd',
			changeMonth: true,
			onSelect: function( selectedDate ) {
				$(this).parent().find( ".endForm" ).datepicker( "option", "minDate", selectedDate );
			}
		});
		$( ".endForm" ).datepicker({
			inline: true,
			showOtherMonths: true,
			selectOtherMonths: true,
			changeMonth: true,
			changeYear: true,
			yearRange: "1950:2050",
			dateFormat: 'yy-mm-dd',
			onSelect: function( selectedDate ) {
				$(this).parent().find( ".startForm" ).datepicker( "option", "maxDate", selectedDate );
			}
		});
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
