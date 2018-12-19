<?php
/* Smarty version 3.1.29, created on 2018-12-19 15:05:02
  from "F:\website\ditoaCoder\ditoa\pc\humanAffairs\view\staff-information.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c19ed9ed4b507_20029982',
  'file_dependency' => 
  array (
    'c7b0edd75ec28af41d835e38cda232b487656b7b' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\humanAffairs\\view\\staff-information.html',
      1 => 1545201989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/html/head.html' => 1,
    'file:public/html/menu.html' => 1,
  ),
),false)) {
function content_5c19ed9ed4b507_20029982 ($_smarty_tpl) {
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
	<link rel="stylesheet" href="humanAffairs/view/css/staff-information.css" />
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
">员工管理</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on">员工基本资料</span></div>
					<div class="contentRightNavBottom"><span class="name">员工基本资料</span></div>
				</div>
			</div>
			<!--内容区导航end-->
			<!--内容区begin-->
			<div class="contentRightBox">
				<!-- 内容区 开始 -->
				<div class = "rightContent">
					<div class = "staffManageNav">
						<ul class = "clearfix">
							<li class = "active"><a href="human-affairs.php?_f=staff-information<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
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
							<?php }?>
						</ul>
					</div>
					<div class = "staffInfoForm clearfix" style="background-color: #f6f6fa;padding-bottom: 0;">
						<form id="staffForm" method="post">
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
							<input type="hidden" name="act" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
							<div class="clearfix" style="background-color: #fff;">
								<div class = "formBox formLeft">
									<div class = "formList">
										<div class = "form mbottom57">
											<p class = "formTitle">所属企业<span>*</span></p>
											<div class = "formInput formSelect">请选择所属企业</div>
											<ul class = "formSelectList">
												<li class = "default">请选择所属企业</li>
												<?php
$_from = $_smarty_tpl->tpl_vars['companys']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_companys_0_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$__foreach_companys_0_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
												<li data-type="<?php echo $_smarty_tpl->tpl_vars['c']->value['companyId'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['cnName'];?>
</li>
												<?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_companys_0_saved_local_item;
}
if ($__foreach_companys_0_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_companys_0_saved_item;
}
?>
											</ul>
											<input type="hidden" name = "company" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['companyId'];?>
" class = "companyIdForm"/>
										</div>
										<div class = "form">
											<p class = "formTitle">小组<span>*</span></p>
											<div class = "formInput formSelect">请选择所属小组</div>
											<ul class = "formSelectList">
												<li class = "default">请选择所属小组</li>
												<?php
$_from = $_smarty_tpl->tpl_vars['groups']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_groups_1_saved_item = isset($_smarty_tpl->tpl_vars['g']) ? $_smarty_tpl->tpl_vars['g'] : false;
$_smarty_tpl->tpl_vars['g'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['g']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
$__foreach_groups_1_saved_local_item = $_smarty_tpl->tpl_vars['g'];
?>
												<li data-type="<?php echo $_smarty_tpl->tpl_vars['g']->value['groupId'];?>
"><?php echo $_smarty_tpl->tpl_vars['g']->value['groupName'];?>
</li>
												<?php
$_smarty_tpl->tpl_vars['g'] = $__foreach_groups_1_saved_local_item;
}
if ($__foreach_groups_1_saved_item) {
$_smarty_tpl->tpl_vars['g'] = $__foreach_groups_1_saved_item;
}
?>
											</ul>
											<input type="hidden" name = "group" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['groupId'];?>
" class = "groupIdForm"/>
										</div>
										<div class = "form">
											<p class = "formTitle">真实姓名<span>*</span></p>
											<input type="text" name = "staffName" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['staffName'];?>
" placeholder = "请输入员工真实姓名" class = "formInput nameForm" autocomplete="off"/>
										</div>
										<div class = "form">
											<p class = "formTitle">身份证号<span>*</span></p>
											<input type="text" name = "idNumber"  value="<?php echo $_smarty_tpl->tpl_vars['i']->value['idNumber'];?>
" placeholder = "请输入身份证号" class = "formInput idForm" autocomplete="off"/>
										</div>
										<div class = "form">
											<p class = "formTitle">联系地址<span>*</span></p>
											<input type="text" name = "address" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['address'];?>
" placeholder = "请输入联系地址" class = "formInput addressForm" autocomplete="off"/>
										</div>
										<div class = "form">
											<p class = "formTitle">邮箱地址</p>
											<input type="text" name = "email" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['email'];?>
" placeholder = "请输入邮箱地址" class = "formInput emailForm" autocomplete="off"/>
										</div>
										<div class = "form">
											<p class = "formTitle">毕业专业<span>*</span></p>
											<input type="text" name = "major" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['major'];?>
" placeholder = "请输入毕业专业" class = "formInput majorForm" autocomplete="off"/>
										</div>

										<div class = "form">
											<p class = "formTitle">身高</p>
											<input type="text" name = "height" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['height'];?>
" placeholder = "请输入身高" class = "formInput heightForm" autocomplete="off"/>
										</div>

										<div class = "form">
											<p class = "formTitle">民族</p>
											<input type="text" name = "nation" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['nation'];?>
" placeholder = "请输入民族" class = "formInput nationForm" autocomplete="off"/>
										</div>

										<div class = "form">
											<p class = "formTitle">中国银行卡号</p>
											<input type="text" name = "cnBankAccount" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['cnBankAccount'];?>
" placeholder = "请输入中国银行卡号" class = "formInput cnBankAccountForm" autocomplete="off"/>
										</div>
										
										<div class = "form">
											<p class = "formTitle">备注</p>
											<textarea name="remark" placeholder="请输入" class = "formInput remarkInput"><?php echo $_smarty_tpl->tpl_vars['i']->value['remark'];?>
</textarea>
										</div>
									</div>
								</div>
								<div class = "formBox formCenter">
									<div class = "formList">
										<div class = "form mbottom57">
											<p class = "formTitle">部门名称<span>*</span></p>
											<div class = "formInput formSelect">请选择部门名称</div>
											<ul class = "formSelectList">
												<li class = "default">请选择部门名称</li>
												<?php
$_from = $_smarty_tpl->tpl_vars['offices']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_offices_2_saved_item = isset($_smarty_tpl->tpl_vars['o']) ? $_smarty_tpl->tpl_vars['o'] : false;
$_smarty_tpl->tpl_vars['o'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['o']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
$__foreach_offices_2_saved_local_item = $_smarty_tpl->tpl_vars['o'];
?>
												<li data-type="<?php echo $_smarty_tpl->tpl_vars['o']->value['officeId'];?>
"><?php echo $_smarty_tpl->tpl_vars['o']->value['officeName'];?>
</li>
												<?php
$_smarty_tpl->tpl_vars['o'] = $__foreach_offices_2_saved_local_item;
}
if ($__foreach_offices_2_saved_item) {
$_smarty_tpl->tpl_vars['o'] = $__foreach_offices_2_saved_item;
}
?>
											</ul>
											<input type="hidden" name = "office" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['officeId'];?>
" class = "officeIdForm"/>
										</div>
										<div class = "form">
											<p class = "formTitle">职务<span>*</span></p>
											<div class = "formInput formSelect">请选择职务</div>
											<ul class = "formSelectList">
												<li class = "default">请选择职务</li>
												<?php
$_from = $_smarty_tpl->tpl_vars['posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_posts_3_saved_item = isset($_smarty_tpl->tpl_vars['p']) ? $_smarty_tpl->tpl_vars['p'] : false;
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$__foreach_posts_3_saved_local_item = $_smarty_tpl->tpl_vars['p'];
?>
												<li data-type="<?php echo $_smarty_tpl->tpl_vars['p']->value['postId'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['postName'];?>
</li>
												<?php
$_smarty_tpl->tpl_vars['p'] = $__foreach_posts_3_saved_local_item;
}
if ($__foreach_posts_3_saved_item) {
$_smarty_tpl->tpl_vars['p'] = $__foreach_posts_3_saved_item;
}
?>
											</ul>
											<input type="hidden" name = "post" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['postId'];?>
" class = "sysRoleIdForm"/>
										</div>
										<div class = "form">
											<p class = "formTitle">性别<span>*</span></p>
											<div class = "checkBox clearfix">
												<?php
$_from = $_smarty_tpl->tpl_vars['sex']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_4_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_4_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_4_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
												<div data-type="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class = "checkBtn mRight50<?php if ($_smarty_tpl->tpl_vars['i']->value['sex'] == $_smarty_tpl->tpl_vars['key']->value) {?> on<?php }?>"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</div>
												<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_4_saved_local_item;
}
if ($__foreach_value_4_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_4_saved_item;
}
if ($__foreach_value_4_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_4_saved_key;
}
?>
											</div>
											<input type="hidden" name = "sex" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['sex'];?>
" class = "formInput sexForm"/>
										</div>
										<div class = "form">
											<p class = "formTitle">出生日期<span>*</span></p>
											<input type="text" name = "birthDate" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['birthDate'];?>
" placeholder = "请选择出生日期" class="formInput birthDateForm dataInput datepicker" autocomplete="off"/>
										</div>
										<div class = "form">
											<p class = "formTitle">毕业学校<span>*</span></p>
											<input type="text" name = "school" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['school'];?>
" placeholder = "请输入毕业学校" class = "formInput schoolForm" autocomplete="off"/>
										</div>
										<div class = "form">
											<p class = "formTitle">学历<span>*</span></p>
											<div class = "formInput formSelect">请选择学历</div>
											<ul class = "formSelectList">
												<li class = "default">请选择学历</li>
												<?php
$_from = $_smarty_tpl->tpl_vars['educations']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_5_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_5_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_5_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
												<li data-type="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
												<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_5_saved_local_item;
}
if ($__foreach_value_5_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_5_saved_item;
}
if ($__foreach_value_5_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_5_saved_key;
}
?>
											</ul>
											<input type="hidden" name = "education" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['education'];?>
" class = "educationForm"/>
										</div>
										<div class = "form">
											<p class = "formTitle">政治面貌</p>
											<div class = "formInput formSelect">请选择政治面貌</div>
											<ul class = "formSelectList">
												<li class = "default">请选择政治面貌</li>
												<?php
$_from = $_smarty_tpl->tpl_vars['politicals']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_6_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_6_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_6_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
												<li data-type="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
												<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_6_saved_local_item;
}
if ($__foreach_value_6_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_6_saved_item;
}
if ($__foreach_value_6_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_6_saved_key;
}
?>
											</ul>
											<input type="hidden" name = "politicalType" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['politicalType'];?>
" />
										</div>

										<div class = "form">
											<p class = "formTitle">体重</p>
											<input type="text" name = "weight" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['weight'];?>
" placeholder = "请输入体重" class = "formInput weightForm" autocomplete="off"/>
										</div>

										<div class = "form">
											<p class = "formTitle">婚姻状况</p>
											<div class = "checkBox clearfix">
												<?php
$_from = $_smarty_tpl->tpl_vars['maritals']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_7_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_7_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_7_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
												<div data-type="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class = "checkBtn mRight30<?php if ($_smarty_tpl->tpl_vars['i']->value['maritalStatus'] == $_smarty_tpl->tpl_vars['key']->value) {?> on<?php }?>"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</div>
												<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_7_saved_local_item;
}
if ($__foreach_value_7_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_7_saved_item;
}
if ($__foreach_value_7_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_7_saved_key;
}
?>
											</div>
											<input type="hidden" name = "marital" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['maritalStatus'];?>
" class = "formInput maritalStatusForm"/>
										</div>

										<div class = "form">
											<p class = "formTitle">原单位解除合同日</p>
											<input type="text" name = "quitDate" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['quitDate'];?>
" placeholder = "请选择原单位解除合同日" class = "formInput quitDateForm dataInput datepicker2" autocomplete="off"/>
										</div>

										<div class = "form">
											<p class = "formTitle">背景调查</p>
											<textarea name="background" placeholder="请输入" class = "formInput backgroundInput"><?php echo $_smarty_tpl->tpl_vars['i']->value['background'];?>
</textarea>
										</div>
									</div>
								</div>
								<div class = "formBox formRight">
									<div class = "formList">
										<div class = "form upload">
											<?php if ($_smarty_tpl->tpl_vars['i']->value['photo'] != '') {?>
											<img class="addImg" onclick="clickImg(this);" src="upload/images/staff/head/<?php echo $_smarty_tpl->tpl_vars['i']->value['photo'];?>
" />
											<?php } else { ?>
											<img class="addImg" onclick="clickImg(this);" src="humanAffairs/view/images/upload_bg.jpg" />
											<?php }?>
											<input name="photo" type="file" class="upload_input" onchange="change(this)"/>
											<div class="preBlock">
												<img class="preview" id="preview" alt="" name="pic" width="190" height="190" />
											</div>
											<img class="delete" onclick="deleteImg(this)" src="humanAffairs/view/images/delete.png"/>
										</div>
										<div class = "form">
											<p class = "formTitle">手机号<span>*</span></p>
											<input type="text" name = "tel" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['tel'];?>
" placeholder = "请输入手机号" class = "formInput telForm" autocomplete="off"/>
										</div>
										<div class = "form">
											<p class = "formTitle">座机 - 分机号</p>
											<div class = "formLandlineBox clearfix">
												<input type="text" placeholder = "座机" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['phone'];?>
" class = "formInput landLineInput" autocomplete="off"/>
												<span>--</span>
												<input type="text" name = "extensionNumber" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['extensionNumber'];?>
" placeholder = "分机号" class = "formInput extensionNumInput" autocomplete="off"/>
											</div>
										</div>
										<div class = "form">
											<p class = "formTitle">农历<span>*</span></p>
											<div class = "formInput formSelect">请选择月份</div>
											<ul class = "formSelectList">
												<li class = "default">请选择月份</li>
												<?php
$_from = $_smarty_tpl->tpl_vars['lunarMonths']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_8_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_8_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_8_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
												<li data-type="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
												<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_8_saved_local_item;
}
if ($__foreach_value_8_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_8_saved_item;
}
if ($__foreach_value_8_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_8_saved_key;
}
?>
											</ul>
											<input type="hidden" name = "lunarMonth" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['lunarMonth'];?>
" class = "lunarMonthForm"/>
											<div class = "formInput formSelect">请选择日期</div>
												<ul class = "formSelectList">
													<li class = "default">请选择日期</li>
													<?php
$_from = $_smarty_tpl->tpl_vars['lunarDays']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_9_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_9_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_9_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
													<li data-type="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
													<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_9_saved_local_item;
}
if ($__foreach_value_9_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_9_saved_item;
}
if ($__foreach_value_9_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_9_saved_key;
}
?>
												</ul>
												<input type="hidden" name = "lunarDay" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['lunarDay'];?>
" class = "lunarDayForm"/>
											</div>
											<input type="text" name = "lunarHour" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['lunarHour'];?>
" placeholder = "时" class = "formInput lunarHourForm" autocomplete="off"/>
											<input type="text" name = "lunarMinute" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['lunarMinute'];?>
" placeholder = "分" class = "formInput lunarMinuteForm" autocomplete="off"/>
										</div>

										<div class = "form">
											<p class = "formTitle">户口所在地<span>*</span></p>
											<input type="text" name = "registerAddress" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['registerAddress'];?>
" placeholder = "请输入户口所在地" class = "formInput registerAddressForm" autocomplete="off"/>
										</div>
										
										<div class = "form">
											<p class = "formTitle">户口性质<span>*</span></p>
											<div class = "checkBox clearfix">
												<?php
$_from = $_smarty_tpl->tpl_vars['registers']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_10_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_10_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_10_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
												<div data-type="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class = "checkBtn mRight50<?php if ($_smarty_tpl->tpl_vars['i']->value['registerNature'] == $_smarty_tpl->tpl_vars['key']->value) {?> on<?php }?>"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</div>
												<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_10_saved_local_item;
}
if ($__foreach_value_10_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_10_saved_item;
}
if ($__foreach_value_10_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_10_saved_key;
}
?>
											</div>
											<input type="hidden" name = "registerNature" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['registerNature'];?>
" class = "formInput registerNatureForm"/>
										</div>

										<div class = "form">
											<p class = "formTitle">血型</p>
											<div class = "checkBox clearfix">
												<?php
$_from = $_smarty_tpl->tpl_vars['bloods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_11_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_11_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_11_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
												<div data-type="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class = "checkBtn mRight30<?php if ($_smarty_tpl->tpl_vars['i']->value['blood'] == $_smarty_tpl->tpl_vars['key']->value) {?> on<?php }?>"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</div>
												<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_11_saved_local_item;
}
if ($__foreach_value_11_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_11_saved_item;
}
if ($__foreach_value_11_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_11_saved_key;
}
?>
											</div>
											<input type="hidden" name = "blood" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['blood'];?>
" class = "formInput bloodForm"/>
										</div>

										<div class = "form">
											<p class = "formTitle">公交线路单程车费（元）</p>
											<input type="text" name = "busFee" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['busFee'];?>
" placeholder = "请输入公交线路单程车费（元）" class = "formInput busFeeForm" autocomplete="off"/>
										</div>

										<div class = "form">
											<p class = "formTitle">首次参加工作时间</p>
											<input type="text" name = "firstWorkDate" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['firstWorkDate'];?>
" placeholder = "请选择首次参加工作时间" class = "formInput firstWorkDateForm dataInput datepicker1" autocomplete="off"/>
										</div>

										<input id="res" name="res" type="reset" style="display:none;"/>
									</div>
								</div>
							</div>		
						
							<div class = "modifyBox"<?php if ($_smarty_tpl->tpl_vars['action']->value != 'editSave') {?> style="display: none;"<?php }?>>
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
 type="text/javascript" src="humanAffairs/view/js/staff-information.js" ><?php echo '</script'; ?>
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
		$(".datepicker1").datepicker({
			inline: true,
			showOtherMonths: true,
			selectOtherMonths: true,
			changeMonth: true,
			changeYear: true,
			yearRange: "1950:2050",
			dateFormat: 'yy-mm-dd'
		});
		$(".datepicker2").datepicker({
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

	<?php echo '<script'; ?>
>
		//点击
		function clickImg(obj){
			$(obj).parent().find('.upload_input').click();
		}
		//删除
		function deleteImg(obj){
			$(obj).parent().find('input').val('');
			$(obj).parent().find('img.preview').attr("src","");
			//IE9以下
			$(obj).parent().find('img.preview').css("filter","");
			$(obj).hide();
			$(obj).parent().find('.addImg').show();
		}
		//选择图片
		function change(file) {
			//预览
			var pic = $(file).parent().find(".preview");
			//添加按钮
			var addImg = $(file).parent().find(".addImg");
			//删除按钮
			var deleteImg = $(file).parent().find(".delete");

			var ext=file.value.substring(file.value.lastIndexOf(".")+1).toLowerCase();

			// gif在IE浏览器暂时无法显示
			if(ext!='png'&&ext!='jpg'&&ext!='jpeg'){
				if (ext != '') {
					popAlert("请上传png或jpg格式照片"); 
				} 
				return;
			}
			//判断IE版本
			var isIE = navigator.userAgent.match(/MSIE/)!= null,
				isIE6 = navigator.userAgent.match(/MSIE 6.0/)!= null;
				isIE10 = navigator.userAgent.match(/MSIE 10.0/)!= null;
			if(isIE && !isIE10) {
				file.select();
				file.blur();
				var reallocalpath = document.selection.createRange().text;
				// IE6浏览器设置img的src为本地路径可以直接显示图片
				if (isIE6) {
					pic.attr("src",reallocalpath);
				}else{
					// 非IE6版本的IE由于安全问题直接设置img的src无法显示本地图片，但是可以通过滤镜来实现             
					pic.css("filter","progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='scale',src=\"" + reallocalpath + "\")");
					// 设置img的src为base64编码的透明图片 取消显示浏览器默认图片
					pic.attr('src','data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==');             
				}
				addImg.hide();
				deleteImg.show();
			}else {
				html5Reader(file,pic,addImg,deleteImg);
			}
		}
		//H5渲染
		function html5Reader(file,pic,addImg,deleteImg){
			var file = file.files[0];
			var reader = new FileReader();
			reader.readAsDataURL(file);
			reader.onload = function(e){
				pic.attr("src",this.result);
			}
			addImg.hide();
			deleteImg.show();
		}
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
