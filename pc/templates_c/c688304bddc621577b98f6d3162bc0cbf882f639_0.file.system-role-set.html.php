<?php
/* Smarty version 3.1.29, created on 2018-12-18 11:10:53
  from "F:\website\ditoaCoder\ditoa\pc\system\view\system-role-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c18653d4672b9_70082611',
  'file_dependency' => 
  array (
    'c688304bddc621577b98f6d3162bc0cbf882f639' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\system\\view\\system-role-set.html',
      1 => 1545102061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/html/head.html' => 1,
    'file:public/html/menu.html' => 1,
  ),
),false)) {
function content_5c18653d4672b9_70082611 ($_smarty_tpl) {
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
	<link rel="stylesheet" href="system/view/css/system-role-set.css" />
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
					<div class="contentRightNavTop"><span><a href="index.php?_f=index">首页</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span><a href="?_f=system-role&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&s_name=<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
">系统角色管理</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on">系统角色权限设置</span></div>
					<div class="contentRightNavBottom"><span class="name">系统角色权限设置</span></div>
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
								<p class = "addApplyTitle mB26">请填写系统角色信息</p>
								<div class = "roleUserInfo clearfix">
									<div class = "form userName clearfix">
										<p class = "formTitle">系统角色名称</p>
										<input type="text" name = "roleName" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['sysRoleName'];?>
" placeholder = "请输入" class = "formInput nameInput" autocomplete="off"/>
									</div>
									<div class = "form setNum clearfix">
										<p class = "formTitle">设置排序</p>
										<input type="number" name = "rank" value="<?php echo $_smarty_tpl->tpl_vars['rank']->value;?>
" placeholder = "0" class = "formInput numInput" autocomplete="off"/>
										<span class="tipsIcon"><span class = "tips">数字越大，排序越靠前</span></span>
									</div>
									
								</div>
								<div class = "roleUserInfo mT26 clearfix">
									<div class = "form setNum clearfix">		
										<p class = "formTitle mR40">默认角色</p>
										<div class = "checkBox pull-left mT10 clearfix">
											<div class = "checkBtn mRight50<?php if ($_smarty_tpl->tpl_vars['i']->value['isDefault'] == 1) {?> on<?php }?>" data-type="1">是</div>
											<div class = "checkBtn<?php if ($_smarty_tpl->tpl_vars['i']->value['isDefault'] == 0) {?> on<?php }?>" data-type="0">否</div>
										</div>
										<input type="hidden" name = "default" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['isDefault'];?>
" class = "formInput sexForm"/>
									</div>
								</div>
							</div>
							<div class = "roleSet clearfix">
								<p class = "addApplyTitle">系统角色权限设置</p>
								<!--树导航begin-->
								<div class="treeNavBox pull-left">
									<div class="treeNavBoxTitle">系统权限</div>
									<div class="treeNavContent">
										<div class="treeNavContentBox">
											<div class="treeNavContentBoxPart<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['orgPower'])) {?> on<?php }?>">
												<span class="treeNavContentBoxPartImageNew<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['orgPower'])) {?> on<?php }?>"><span<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['orgPower'])) {?> class="on"<?php }?> data-id="01"></span>DIT组织架构</span>
												<ul<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['orgPower'])) {?> class="on"<?php }?>>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['orgPower'][0] == 1) {?> class="on"<?php }?> data-id="02">企业信息管理</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['orgPower'][0];?>
" class="treeHidden" name="m1"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['orgPower'][1] == 1) {?> class="on"<?php }?> data-id="03">办事处管理</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['orgPower'][1];?>
" class="treeHidden" name="m2"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['orgPower'][2] == 1) {?> class="on"<?php }?> data-id="04">工作组管理</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['orgPower'][2];?>
" class="treeHidden" name="m3"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['orgPower'][3] == 1) {?> class="on"<?php }?> data-id="05">企业组织架构</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['orgPower'][3];?>
" class="treeHidden" name="m4"/>
												</ul>
											</div>
											<div class="treeNavContentBoxPart<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'])) {?> on<?php }?>">
												<span class="treeNavContentBoxPartImageNew<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'])) {?> on<?php }?>"><span<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'])) {?> class="on"<?php }?> data-id="06"></span>人事管理</span>
												<ul<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'])) {?> class="on"<?php }?>>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][0] == 1) {?> class="on"<?php }?> data-id="07">企业资质证件</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][0];?>
" class="treeHidden" name="m5"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][1] == 1) {?> class="on"<?php }?> data-id="08">员工管理</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][1];?>
" class="treeHidden" name="m6"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][2] == 1) {?> class="on"<?php }?> data-id="09">员工档案管理</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][2];?>
" class="treeHidden" name="m7"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][3] == 1) {?> class="on"<?php }?> data-id="10">离职员工</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][3];?>
" class="treeHidden" name="m8"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][4] == 1) {?> class="on"<?php }?> data-id="11">转正考核</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][4];?>
" class="treeHidden" name="m9"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][5] == 1) {?> class="on"<?php }?> data-id="12">转正考核审批</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][5];?>
" class="treeHidden" name="m10"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][6] == 1) {?> class="on"<?php }?> data-id="13">离职申请</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][6];?>
" class="treeHidden" name="m11"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][7] == 1) {?> class="on"<?php }?> data-id="14">离职申请审批</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][7];?>
" class="treeHidden" name="m12"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][8] == 1) {?> class="on"<?php }?> data-id="15">企业规章制度</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][8];?>
" class="treeHidden" name="m13"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][9] == 1) {?> class="on"<?php }?> data-id="16">邮箱申请</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][9];?>
" class="treeHidden" name="m14"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][10] == 1) {?> class="on"<?php }?> data-id="17">邮箱审批</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][10];?>
" class="treeHidden" name="m15"/>
												</ul>
											</div>
											<div class="treeNavContentBoxPart<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['leavePower'])) {?> on<?php }?>">
												<span class="treeNavContentBoxPartImageNew<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['leavePower'])) {?> on<?php }?>"><span<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['leavePower'])) {?> class="on"<?php }?> data-id="18"></span>请假管理</span>
												<ul<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['leavePower'])) {?> class="on"<?php }?>>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['leavePower'][0] == 1) {?> class="on"<?php }?> data-id="19">申请假期</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['leavePower'][0];?>
" class="treeHidden" name="m16"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['leavePower'][1] == 1) {?> class="on"<?php }?> data-id="20">请假管理</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['leavePower'][1];?>
" class="treeHidden" name="m17"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['leavePower'][2] == 1) {?> class="on"<?php }?> data-id="21">假期审批</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['leavePower'][2];?>
" class="treeHidden" name="m18"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['leavePower'][3] == 1) {?> class="on"<?php }?> data-id="22">假期统计</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['leavePower'][3];?>
" class="treeHidden" name="m19"/>
												</ul>
											</div>
											<div class="treeNavContentBoxPart<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['businessTravelPower'])) {?> on<?php }?>">
												<span class="treeNavContentBoxPartImageNew<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['businessTravelPower'])) {?> on<?php }?>"><span<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['businessTravelPower'])) {?> class="on"<?php }?> data-id="23"></span>出差管理</span>
												<ul<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['businessTravelPower'])) {?> class="on"<?php }?>>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['businessTravelPower'][0] == 1) {?> class="on"<?php }?> data-id="24">出差申请</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['businessTravelPower'][0];?>
" class="treeHidden" name="m20"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['businessTravelPower'][1] == 1) {?> class="on"<?php }?> data-id="25">出差审批</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['businessTravelPower'][1];?>
" class="treeHidden" name="m21"/>
												</ul>
											</div>
											<div class="treeNavContentBoxPart<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['carPower'])) {?> on<?php }?>">
												<span class="treeNavContentBoxPartImageNew<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['carPower'])) {?> on<?php }?>"><span<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['carPower'])) {?> class="on"<?php }?> data-id="26"></span>车辆管理</span>
												<ul<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['carPower'])) {?> class="on"<?php }?>>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['carPower'][0] == 1) {?> class="on"<?php }?> data-id="27">车辆信息管理</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['carPower'][0];?>
" class="treeHidden" name="m22"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['carPower'][1] == 1) {?> class="on"<?php }?> data-id="28">车辆行驶记录</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['carPower'][1];?>
" class="treeHidden" name="m23"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['carPower'][2] == 1) {?> class="on"<?php }?> data-id="29">车辆行驶统计</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['carPower'][2];?>
" class="treeHidden" name="m24"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['carPower'][3] == 1) {?> class="on"<?php }?> data-id="30">车辆维修管理</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['carPower'][3];?>
" class="treeHidden" name="m25"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['carPower'][4] == 1) {?> class="on"<?php }?> data-id="31">车辆维修审批</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['carPower'][4];?>
" class="treeHidden" name="m26"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['carPower'][5] == 1) {?> class="on"<?php }?> data-id="32">车辆维修费用管理</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['carPower'][5];?>
" class="treeHidden" name="m27"/>
												</ul>
											</div>
											<div class="treeNavContentBoxPart<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['officeToolPower'])) {?> on<?php }?>">
												<span class="treeNavContentBoxPartImageNew<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['officeToolPower'])) {?> on<?php }?>"><span<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['officeToolPower'])) {?> class="on"<?php }?> data-id="33"></span>办公备品管理</span>
												<ul<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['officeToolPower'])) {?> class="on"<?php }?>>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][0] == 1) {?> class="on"<?php }?> data-id="34">办公备品管理</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['officeToolPower'][0];?>
" class="treeHidden" name="m28"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][1] == 1) {?> class="on"<?php }?> data-id="35">办公备品审批</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['officeToolPower'][1];?>
" class="treeHidden" name="m29"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][2] == 1) {?> class="on"<?php }?> data-id="36">办公备品入库管理</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['officeToolPower'][2];?>
" class="treeHidden" name="m30"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][3] == 1) {?> class="on"<?php }?> data-id="37">办公备品分配记录</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['officeToolPower'][3];?>
" class="treeHidden" name="m31"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][4] == 1) {?> class="on"<?php }?> data-id="38">办公备品出库管理</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['officeToolPower'][4];?>
" class="treeHidden" name="m32"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][5] == 1) {?> class="on"<?php }?> data-id="39">办公备品使用统计</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['officeToolPower'][5];?>
" class="treeHidden" name="m33"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][6] == 1) {?> class="on"<?php }?> data-id="40">办公备品盘点</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['officeToolPower'][6];?>
" class="treeHidden" name="m34"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][7] == 1) {?> class="on"<?php }?> data-id="41">办公备品调转部门</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['officeToolPower'][7];?>
" class="treeHidden" name="m35"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][8] == 1) {?> class="on"<?php }?> data-id="42">调转部门审批</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['officeToolPower'][8];?>
" class="treeHidden" name="m36"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][9] == 1) {?> class="on"<?php }?> data-id="43">办公备品统计</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['officeToolPower'][9];?>
" class="treeHidden" name="m37"/>
												</ul>
											</div>
											<div class="treeNavContentBoxPart<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['generalAffairsPower'])) {?> on<?php }?>">
												<span class="treeNavContentBoxPartImageNew<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['generalAffairsPower'])) {?> on<?php }?>"><span<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['generalAffairsPower'])) {?> class="on"<?php }?> data-id="44"></span>综合事务管理</span>
												<ul<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['generalAffairsPower'])) {?> class="on"<?php }?>>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['generalAffairsPower'][0] == 1) {?> class="on"<?php }?> data-id="45">企业规章制度管理</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['generalAffairsPower'][0];?>
" class="treeHidden" name="m38"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['generalAffairsPower'][0] == 1) {?> class="on"<?php }?> data-id="46">企业动态管理</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['generalAffairsPower'][1];?>
" class="treeHidden" name="m39"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['generalAffairsPower'][0] == 1) {?> class="on"<?php }?> data-id="47">企业资质证件管理</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['generalAffairsPower'][2];?>
" class="treeHidden" name="m40"/>
												</ul>
											</div>
											<div class="treeNavContentBoxPart<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['systemPower'])) {?> on<?php }?>">
												<span class="treeNavContentBoxPartImageNew<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['systemPower'])) {?> on<?php }?>"><span<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['systemPower'])) {?> class="on"<?php }?> data-id="48"></span>系统运维管理</span>
												<ul<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['systemPower'])) {?> class="on"<?php }?>>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][0] == 1) {?> class="on"<?php }?> data-id="49">系统角色权限设置</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['systemPower'][0];?>
" class="treeHidden" name="m41"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][1] == 1) {?> class="on"<?php }?> data-id="50">审批角色权限设置</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['systemPower'][1];?>
" class="treeHidden" name="m42"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][2] == 1) {?> class="on"<?php }?> data-id="51">自定义审批流程设置</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['systemPower'][2];?>
" class="treeHidden" name="m43"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][3] == 1) {?> class="on"<?php }?> data-id="52">默认审批流程设置</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['systemPower'][3];?>
" class="treeHidden" name="m44"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][4] == 1) {?> class="on"<?php }?> data-id="53">职务管理</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['systemPower'][4];?>
" class="treeHidden" name="m45"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][5] == 1) {?> class="on"<?php }?> data-id="54">请假类型管理</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['systemPower'][5];?>
" class="treeHidden" name="m46"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][6] == 1) {?> class="on"<?php }?> data-id="55">备品类别管理</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['systemPower'][6];?>
" class="treeHidden" name="m47"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][7] == 1) {?> class="on"<?php }?> data-id="56">备品名称管理</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['systemPower'][7];?>
" class="treeHidden" name="m48"/>
												</ul>
											</div>
											<div class="treeNavContentBoxPart<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['signPower'])) {?> on<?php }?>">
												<span class="treeNavContentBoxPartImageNew<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['signPower'])) {?> on<?php }?>"><span<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['signPower'])) {?> class="on"<?php }?> data-id="57"></span>考勤管理</span>
												<ul<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['signPower'])) {?> class="on"<?php }?>>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['signPower'][0] == 1) {?> class="on"<?php }?> data-id="58">考勤时间管理</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['signPower'][0];?>
" class="treeHidden" name="m49"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['signPower'][1] == 1) {?> class="on"<?php }?> data-id="59">打卡记录</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['signPower'][1];?>
" class="treeHidden" name="m50"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['signPower'][2] == 1) {?> class="on"<?php }?> data-id="60">打卡统计</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['signPower'][2];?>
" class="treeHidden" name="m51"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['signPower'][3] == 1) {?> class="on"<?php }?> data-id="61">每日打卡记录</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['signPower'][3];?>
" class="treeHidden" name="m52"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['signPower'][4] == 1) {?> class="on"<?php }?> data-id="62">打卡时间</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['signPower'][4];?>
" class="treeHidden" name="m53"/>
												</ul>
											</div>
											<div class="treeNavContentBoxPart<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['otherPower'])) {?> on<?php }?>">
												<span class="treeNavContentBoxPartImageNew<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['otherPower'])) {?> on<?php }?>"><span<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['otherPower'])) {?> class="on"<?php }?> data-id="63"></span>其它权限</span>
												<ul<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['otherPower'])) {?> class="on"<?php }?>>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['otherPower'][0] == 1) {?> class="on"<?php }?> data-id="64">查看背景调查</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['otherPower'][0];?>
" class="treeHidden" name="m54"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['otherPower'][1] == 1) {?> class="on"<?php }?> data-id="65">合同信息</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['otherPower'][1];?>
" class="treeHidden" name="m55"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['otherPower'][2] == 1) {?> class="on"<?php }?> data-id="66">假期设置</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['otherPower'][2];?>
" class="treeHidden" name="m56"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['otherPower'][3] == 1) {?> class="on"<?php }?> data-id="67">账号设置</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['otherPower'][3];?>
" class="treeHidden" name="m57"/>
													<li<?php if ($_smarty_tpl->tpl_vars['i']->value['otherPower'][4] == 1) {?> class="on"<?php }?> data-id="68">编辑记录</li>
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['otherPower'][4];?>
" class="treeHidden" name="m58"/>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!--树导航end-->
								<!-- clone 树导航 start -->
								<div class="treeNavBoxClone pull-right">
									<div class="treeNavBoxTitleClone">已分配情况</div>

									<div class="treeNavContentClone"<?php if ($_smarty_tpl->tpl_vars['id']->value != 0) {?> style="display: block;"<?php }?>>
										<div class="treeNavContentBoxClone">
											<div class="treeNavContentBoxPartClone">
												<span class="treeNavContentBoxPartImageNewClone<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['orgPower'])) {?> on<?php }?>"<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['orgPower'])) {?> style="display: inline;"<?php }?>>
													<span class="cloneItem<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['orgPower'])) {?> on<?php }?>" data-id="01"<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['orgPower'])) {?> style="display: inline-block;"<?php }?>></span>DIT组织架构
												</span>
												<ul<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['orgPower'])) {?> class="on" style="display: block;"<?php }?>>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['orgPower'][0] == 1) {?> on<?php }?>" data-id="02"<?php if ($_smarty_tpl->tpl_vars['i']->value['orgPower'][0] == 1) {?> style="display: list-item;"<?php }?>>企业信息管理</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['orgPower'][1] == 1) {?> on<?php }?>" data-id="03"<?php if ($_smarty_tpl->tpl_vars['i']->value['orgPower'][1] == 1) {?> style="display: list-item;"<?php }?>>办事处管理</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['orgPower'][2] == 1) {?> on<?php }?>" data-id="04"<?php if ($_smarty_tpl->tpl_vars['i']->value['orgPower'][2] == 1) {?> style="display: list-item;"<?php }?>>工作组管理</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['orgPower'][3] == 1) {?> on<?php }?>" data-id="05"<?php if ($_smarty_tpl->tpl_vars['i']->value['orgPower'][3] == 1) {?> style="display: list-item;"<?php }?>>企业组织架构</li>
												</ul>
											</div>
											<div class="treeNavContentBoxPartClone">
												<span class="treeNavContentBoxPartImageNewClone<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'])) {?> on<?php }?>" <?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'])) {?> style="display: inline;"<?php }?>>
													<span class="cloneItem<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'])) {?> on<?php }?>" data-id="06"<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'])) {?> style="display: inline-block;"<?php }?>></span>人事管理
												</span>
												<ul<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'])) {?> class="on" style="display: block;"<?php }?>>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][0] == 1) {?> on<?php }?>" data-id="07"<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][0] == 1) {?> style="display: list-item;"<?php }?>>企业资质证件</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][1] == 1) {?> on<?php }?>" data-id="08"<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][1] == 1) {?> style="display: list-item;"<?php }?>>员工管理</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][2] == 1) {?> on<?php }?>" data-id="09"<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][2] == 1) {?> style="display: list-item;"<?php }?>>员工档案管理</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][3] == 1) {?> on<?php }?>" data-id="10"<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][3] == 1) {?> style="display: list-item;"<?php }?>>离职员工</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][4] == 1) {?> on<?php }?>" data-id="11"<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][4] == 1) {?> style="display: list-item;"<?php }?>>转正考核</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][5] == 1) {?> on<?php }?>" data-id="12"<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][5] == 1) {?> style="display: list-item;"<?php }?>>转正考核审批</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][6] == 1) {?> on<?php }?>" data-id="13"<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][6] == 1) {?> style="display: list-item;"<?php }?>>离职申请</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][7] == 1) {?> on<?php }?>" data-id="14"<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][7] == 1) {?> style="display: list-item;"<?php }?>>离职申请审批</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][8] == 1) {?> on<?php }?>" data-id="15"<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][8] == 1) {?> style="display: list-item;"<?php }?>>企业规章制度</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][9] == 1) {?> on<?php }?>" data-id="16"<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][9] == 1) {?> style="display: list-item;"<?php }?>>邮箱申请</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][10] == 1) {?> on<?php }?>" data-id="17"<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][10] == 1) {?> style="display: list-item;"<?php }?>>邮箱审批</li>
												</ul>
											</div>
											<div class="treeNavContentBoxPartClone">
												<span class="treeNavContentBoxPartImageNewClone<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['leavePower'])) {?> on<?php }?>"<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['leavePower'])) {?> style="display: inline;"<?php }?>>
													<span class="cloneItem<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['leavePower'])) {?> on<?php }?>" data-id="18"<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['leavePower'])) {?> style="display: inline-block;"<?php }?>></span>请假管理
												</span>
												<ul<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['leavePower'])) {?> class="on" style="display: block;"<?php }?>>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['leavePower'][0] == 1) {?> on<?php }?>" data-id="19"<?php if ($_smarty_tpl->tpl_vars['i']->value['leavePower'][0] == 1) {?> style="display: list-item;"<?php }?>>申请假期</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['leavePower'][1] == 1) {?> on<?php }?>" data-id="20"<?php if ($_smarty_tpl->tpl_vars['i']->value['leavePower'][1] == 1) {?> style="display: list-item;"<?php }?>>请假管理</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['leavePower'][2] == 1) {?> on<?php }?>" data-id="21"<?php if ($_smarty_tpl->tpl_vars['i']->value['leavePower'][2] == 1) {?> style="display: list-item;"<?php }?>>假期审批</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['leavePower'][3] == 1) {?> on<?php }?>" data-id="22"<?php if ($_smarty_tpl->tpl_vars['i']->value['leavePower'][3] == 1) {?> style="display: list-item;"<?php }?>>假期统计</li>
												</ul>
											</div>
											<div class="treeNavContentBoxPartClone">
												<span class="treeNavContentBoxPartImageNewClone<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['businessTravelPower'])) {?> on<?php }?>" <?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['businessTravelPower'])) {?> style="display: inline;"<?php }?>>
													<span class="cloneItem<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['businessTravelPower'])) {?> on<?php }?>" data-id="23"<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['businessTravelPower'])) {?> style="display: inline-block;"<?php }?>></span>出差管理
												</span>
												<ul<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['businessTravelPower'])) {?> class="on" style="display: block;"<?php }?>>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['businessTravelPower'][0] == 1) {?> on<?php }?>" data-id="24"<?php if ($_smarty_tpl->tpl_vars['i']->value['businessTravelPower'][0] == 1) {?> style="display: list-item;"<?php }?>>出差申请</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['businessTravelPower'][1] == 1) {?> on<?php }?>" data-id="25"<?php if ($_smarty_tpl->tpl_vars['i']->value['businessTravelPower'][1] == 1) {?> style="display: list-item;"<?php }?>>出差审批</li>
												</ul>
											</div>
												
											<div class="treeNavContentBoxPartClone">
												<span class="treeNavContentBoxPartImageNewClone<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['carPower'])) {?> on<?php }?>"<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['carPower'])) {?> style="display: inline;"<?php }?>>
													<span class="cloneItem<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['carPower'])) {?> on<?php }?>" data-id="26"<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['carPower'])) {?> style="display: inline-block;"<?php }?>></span>车辆管理
												</span>
												<ul<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['carPower'])) {?> class="on" style="display: block;"<?php }?>>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['carPower'][0] == 1) {?> on<?php }?>" data-id="27"<?php if ($_smarty_tpl->tpl_vars['i']->value['carPower'][0] == 1) {?> style="display: list-item;"<?php }?>>车辆信息管理</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['carPower'][1] == 1) {?> on<?php }?>" data-id="28"<?php if ($_smarty_tpl->tpl_vars['i']->value['carPower'][1] == 1) {?> style="display: list-item;"<?php }?>>车辆行驶记录</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['carPower'][2] == 1) {?> on<?php }?>" data-id="29"<?php if ($_smarty_tpl->tpl_vars['i']->value['carPower'][2] == 1) {?> style="display: list-item;"<?php }?>>车辆行驶统计</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['carPower'][3] == 1) {?> on<?php }?>" data-id="30"<?php if ($_smarty_tpl->tpl_vars['i']->value['carPower'][3] == 1) {?> style="display: list-item;"<?php }?>>车辆维修管理</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['carPower'][4] == 1) {?> on<?php }?>" data-id="31"<?php if ($_smarty_tpl->tpl_vars['i']->value['carPower'][4] == 1) {?> style="display: list-item;"<?php }?>>车辆维修审批</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['carPower'][5] == 1) {?> on<?php }?>" data-id="32"<?php if ($_smarty_tpl->tpl_vars['i']->value['carPower'][5] == 1) {?> style="display: list-item;"<?php }?>>车辆维修费用管理</li>
												</ul>
											</div>
											<div class="treeNavContentBoxPartClone">
												<span class="treeNavContentBoxPartImageNewClone<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['officeToolPower'])) {?> on<?php }?>"<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['officeToolPower'])) {?> style="display: inline;"<?php }?>>
													<span class="cloneItem<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['officeToolPower'])) {?> on<?php }?>" data-id="33"<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['officeToolPower'])) {?> style="display: inline-block;"<?php }?>></span>办公备品管理
												</span>
												<ul<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['officeToolPower'])) {?> class="on" style="display: block;"<?php }?>>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][0] == 1) {?> on<?php }?>" data-id="34"<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][0] == 1) {?> style="display: list-item;"<?php }?>>办公备品管理</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][1] == 1) {?> on<?php }?>" data-id="35"<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][1] == 1) {?> style="display: list-item;"<?php }?>>办公备品审批</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][2] == 1) {?> on<?php }?>" data-id="36"<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][2] == 1) {?> style="display: list-item;"<?php }?>>办公备品入库管理</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][3] == 1) {?> on<?php }?>" data-id="37"<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][3] == 1) {?> style="display: list-item;"<?php }?>>办公备品分配记录</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][4] == 1) {?> on<?php }?>" data-id="38"<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][4] == 1) {?> style="display: list-item;"<?php }?>>办公备品出库管理</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][5] == 1) {?> on<?php }?>" data-id="39"<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][5] == 1) {?> style="display: list-item;"<?php }?>>办公备品使用统计</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][6] == 1) {?> on<?php }?>" data-id="40"<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][6] == 1) {?> style="display: list-item;"<?php }?>>办公备品盘点</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][7] == 1) {?> on<?php }?>" data-id="41"<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][7] == 1) {?> style="display: list-item;"<?php }?>>办公备品调转部门</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][8] == 1) {?> on<?php }?>" data-id="42"<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][8] == 1) {?> style="display: list-item;"<?php }?>>调转部门审批</li>			
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][9] == 1) {?> on<?php }?>" data-id="43"<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][9] == 1) {?> style="display: list-item;"<?php }?>>办公备品统计</li>
												</ul>
											</div>
											<div class="treeNavContentBoxPartClone">
												<span class="treeNavContentBoxPartImageNewClone<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['generalAffairsPower'])) {?> on<?php }?>"<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['generalAffairsPower'])) {?> style="display: inline;"<?php }?>>
													<span class="cloneItem<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['generalAffairsPower'])) {?> on<?php }?>" data-id="44"<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['generalAffairsPower'])) {?> style="display: inline-block;"<?php }?>></span>综合事务管理
												</span>
												<ul<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['generalAffairsPower'])) {?> class="on" style="display: block;"<?php }?>>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['generalAffairsPower'][0] == 1) {?> on<?php }?>" data-id="45"<?php if ($_smarty_tpl->tpl_vars['i']->value['generalAffairsPower'][0] == 1) {?> style="display: list-item;"<?php }?>>企业规章制度管理</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['generalAffairsPower'][1] == 1) {?> on<?php }?>" data-id="46"<?php if ($_smarty_tpl->tpl_vars['i']->value['generalAffairsPower'][1] == 1) {?> style="display: list-item;"<?php }?>>企业动态管理</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['generalAffairsPower'][2] == 1) {?> on<?php }?>" data-id="47"<?php if ($_smarty_tpl->tpl_vars['i']->value['generalAffairsPower'][2] == 1) {?> style="display: list-item;"<?php }?>>企业资质证件管理</li>
												</ul>
											</div>
											<div class="treeNavContentBoxPartClone">
												<span class="treeNavContentBoxPartImageNewClone<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['systemPower'])) {?> on<?php }?>"<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['systemPower'])) {?> style="display: inline;"<?php }?>>
													<span class="cloneItem<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['systemPower'])) {?> on<?php }?>" data-id="48"<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['systemPower'])) {?> style="display: inline-block;"<?php }?>></span>系统运维管理
												</span>
												<ul<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['systemPower'])) {?> class="on" style="display: block;"<?php }?>>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][0] == 1) {?> on<?php }?>" data-id="49"<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][0] == 1) {?> style="display: list-item;"<?php }?>>系统角色权限设置</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][1] == 1) {?> on<?php }?>" data-id="50"<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][1] == 1) {?> style="display: list-item;"<?php }?>>审批角色权限设置</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][2] == 1) {?> on<?php }?>" data-id="51"<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][2] == 1) {?> style="display: list-item;"<?php }?>>自定义审批流程设置</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][3] == 1) {?> on<?php }?>" data-id="52"<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][3] == 1) {?> style="display: list-item;"<?php }?>>默认审批流程设置</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][4] == 1) {?> on<?php }?>" data-id="53"<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][4] == 1) {?> style="display: list-item;"<?php }?>>职务管理</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][5] == 1) {?> on<?php }?>" data-id="54"<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][5] == 1) {?> style="display: list-item;"<?php }?>>请假类型管理</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][6] == 1) {?> on<?php }?>" data-id="55"<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][6] == 1) {?> style="display: list-item;"<?php }?>>备品类别管理</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][7] == 1) {?> on<?php }?>" data-id="56"<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][7] == 1) {?> style="display: list-item;"<?php }?>>备品名称管理</li>
												</ul>
											</div>
											<div class="treeNavContentBoxPartClone">
												<span class="treeNavContentBoxPartImageNewClone<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['signPower'])) {?> on<?php }?>"<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['signPower'])) {?> style="display: inline;"<?php }?>>
													<span class="cloneItem<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['signPower'])) {?> on<?php }?>" data-id="57"<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['signPower'])) {?> style="display: inline-block;"<?php }?>></span>考勤管理
												</span>
												<ul<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['signPower'])) {?> class="on" style="display: block;"<?php }?>>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['signPower'][0] == 1) {?> on<?php }?>" data-id="58"<?php if ($_smarty_tpl->tpl_vars['i']->value['signPower'][0] == 1) {?> style="display: list-item;"<?php }?>>考勤时间管理</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['signPower'][1] == 1) {?> on<?php }?>" data-id="59"<?php if ($_smarty_tpl->tpl_vars['i']->value['signPower'][1] == 1) {?> style="display: list-item;"<?php }?>>打卡记录</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['signPower'][2] == 1) {?> on<?php }?>" data-id="60"<?php if ($_smarty_tpl->tpl_vars['i']->value['signPower'][2] == 1) {?> style="display: list-item;"<?php }?>>打卡统计</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['signPower'][3] == 1) {?> on<?php }?>" data-id="61"<?php if ($_smarty_tpl->tpl_vars['i']->value['signPower'][3] == 1) {?> style="display: list-item;"<?php }?>>每日打卡记录</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['signPower'][4] == 1) {?> on<?php }?>" data-id="62"<?php if ($_smarty_tpl->tpl_vars['i']->value['signPower'][4] == 1) {?> style="display: list-item;"<?php }?>>打卡时间</li>
												</ul>
											</div>
											<div class="treeNavContentBoxPartClone">
												<span class="treeNavContentBoxPartImageNewClone<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['otherPower'])) {?> on<?php }?>"<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['otherPower'])) {?> style="display: inline;"<?php }?>>
													<span class="cloneItem<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['otherPower'])) {?> on<?php }?>" data-id="63"<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['otherPower'])) {?> style="display: inline-block;"<?php }?>></span>其它权限
												</span>
												<ul<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['otherPower'])) {?> class="on" style="display: block;"<?php }?>>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['otherPower'][0] == 1) {?> on<?php }?>" data-id="64"<?php if ($_smarty_tpl->tpl_vars['i']->value['otherPower'][0] == 1) {?> style="display: list-item;"<?php }?>>查看背景调查</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['otherPower'][1] == 1) {?> on<?php }?>" data-id="65"<?php if ($_smarty_tpl->tpl_vars['i']->value['otherPower'][1] == 1) {?> style="display: list-item;"<?php }?>>合同信息</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['otherPower'][2] == 1) {?> on<?php }?>" data-id="66"<?php if ($_smarty_tpl->tpl_vars['i']->value['otherPower'][2] == 1) {?> style="display: list-item;"<?php }?>>假期设置</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['otherPower'][3] == 1) {?> on<?php }?>" data-id="67"<?php if ($_smarty_tpl->tpl_vars['i']->value['otherPower'][3] == 1) {?> style="display: list-item;"<?php }?>>账号设置</li>
													<li class="cloneItem<?php if ($_smarty_tpl->tpl_vars['i']->value['otherPower'][4] == 1) {?> on<?php }?>" data-id="68"<?php if ($_smarty_tpl->tpl_vars['i']->value['otherPower'][4] == 1) {?> style="display: list-item;"<?php }?>>编辑记录</li>
												</ul>
											</div>
										</div>	
									</div>
								</div>
								<!-- clone 树导航 end -->
								<div class = "centerPic"><img src="system/view/images/select_noSelect.png" alt=""></div>
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
 type="text/javascript" src="system/view/js/system-role-set.js" ><?php echo '</script'; ?>
>

</body>
</html><?php }
}
