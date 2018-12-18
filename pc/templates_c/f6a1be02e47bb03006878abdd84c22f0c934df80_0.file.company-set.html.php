<?php
/* Smarty version 3.1.29, created on 2018-12-18 14:21:25
  from "F:\website\ditoaCoder\ditoa\pc\org\view\company-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c1891e5348e52_35182650',
  'file_dependency' => 
  array (
    'f6a1be02e47bb03006878abdd84c22f0c934df80' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\org\\view\\company-set.html',
      1 => 1545114080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/html/head.html' => 1,
    'file:public/html/menu.html' => 1,
  ),
),false)) {
function content_5c1891e5348e52_35182650 ($_smarty_tpl) {
?>
<!-- 
	# 企业详情编辑
	# Bowen
	# 2018-11-21
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
	<link rel="stylesheet" href="org/view/css/company-set.css" />
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
					<div class="contentRightNavTop"><span><a href="index.php?_f=index">首页</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span><a href="?_f=company&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&s_name=<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
">企业信息管理</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on">企业信息设置</span></div>
					<div class="contentRightNavBottom"><span class="name">企业信息设置</span></div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['i']->value['createTime'] != '') {?>
				<div class="contentRightNavRight pull-right clearfix">	
					<span class = "rightTxt">创建时间：<?php echo $_smarty_tpl->tpl_vars['i']->value['createTime'];?>
</span>
				</div>
				<?php }?>
			</div>
			<!--内容区导航end-->
			<!--内容区begin-->
			<div class="contentRightBox">
				<!-- 内容区 开始 -->
				<div class = "rightContent">
					<div class = "staffInfoForm contentForm clearfix">
						<form id="companyForm" method="post" class = "clearfix">
							<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
							<input type="hidden" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" />
							<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
							<input type="hidden" name="act" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
							<div class = "infoBox companyInfo">
								<p class = "addApplyTitle">企业信息</p>
								<div class = "formAllBox clearfix">
									<div class = "formBox w42">
										<div class = "form">
											<p class = "formTitle">企业中文名称<span>*</span></p>
											<input type="text" name = "cnName" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['cnName'];?>
" placeholder = "请输入企业名称" class = "formInput cnNameInput" autocomplete="off" />
										</div>
										<div class = "form">
											<p class = "formTitle">企业英文地址<span>*</span></p>
											<input type="text" name = "enAddress" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['enAddress'];?>
" placeholder = "请输入企业英文地址" class = "formInput enAddressInput" autocomplete="off" />
										</div>
									</div>
									<div class = "formBox w35">
										<div class = "form">
											<p class = "formTitle">企业英文名称<span>*</span></p>
											<input type="text" name = "enName" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['enName'];?>
" placeholder = "请输入企业英文名称" class = "formInput enNameInput" autocomplete="off" />
										</div>
										<div class = "form">
											<p class = "formTitle">企业办公地址<span>*</span></p>
											<input type="text" name = "cnOfficeAddress" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['cnOfficeAddress'];?>
" placeholder = "请输入企业办公地址" class = "formInput cnOfficeAddressInput" autocomplete="off" />
										</div>	
									</div>
									<div class = "formBox w23">
										<div class = "form">
											<p class = "formTitle">企业中文地址<span>*</span></p>
											<input type="text" name = "cnAddress" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['cnAddress'];?>
" placeholder = "请输入企业中文地址" class = "formInput cnAddressInput" autocomplete="off" />
										</div>
										<div class = "form">
											<p class = "formTitle">企业英文办公地址<span>*</span></p>
											<input type="text" name = "enOfficeAddress" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['enOfficeAddress'];?>
" placeholder = "请输入企业英文办公地址" class = "formInput enOfficeAddressInput" autocomplete="off" />
										</div>
									</div>
								</div>
							</div>
							<div class = "infoBox contactInfo">
								<p class = "addApplyTitle">联系信息</p>
								<div class = "formAllBox clearfix">
									<div class = "formBox w42">
										<div class = "form">
											<p class = "formTitle">邮编<span>*</span></p>
											<input type="text" name = "zipCode" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['zipCode'];?>
" placeholder = "请输入企业邮编" class = "formInput zipCodeInput" autocomplete="off" />
										</div>
									</div>
									<div class = "formBox w35">
										<div class = "form">
											<p class = "formTitle">电话<span>*</span></p>
											<input type="text" name = "phone" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['phone'];?>
" placeholder = "请输入企业电话" class = "formInput phoneInput" autocomplete="off" />
											<p class = "tips">如有多个，请使用“ ；”号隔开</p>
										</div>
									</div>
									<div class = "formBox w23">
										<div class = "form">
											<p class = "formTitle">传真<span>*</span></p>
											<input type="text" name = "fax" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['fax'];?>
" placeholder = "请输入企业传真号码" class = "formInput faxInput" autocomplete="off" />
											<p class = "tips">如有多个，请使用“ ；”号隔开</p>
										</div>
									</div>
								</div>
							</div>
							<div class = "infoBox openAccount">
								<p class = "addApplyTitle">人民币账户开户信息</p>
								<div class = "formAllBox clearfix">
									<div class = "formBox w42">
										<div class = "form">
											<p class = "formTitle">企业开户行<span>*</span></p>
											<input type="text" name = "cnBank" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['cnBank'];?>
" placeholder = "请输入企业开户行名称" class = "formInput cnBankInput" autocomplete="off" />
										</div>
										<div class = "form">
											<p class = "formTitle">开户行英文地址<span>*</span></p>
											<input type="text" name = "enBankAddress" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['enBankAddress'];?>
" placeholder = "请输入开户行英文地址" class = "formInput enBankAddressInput" autocomplete="off" />
										</div>
									</div>
									<div class = "formBox w35">
										<div class = "form">
											<p class = "formTitle">开户行英文名称<span>*</span></p>
											<input type="text" name = "enBank"  value="<?php echo $_smarty_tpl->tpl_vars['i']->value['enBank'];?>
" placeholder = "请输入开户行英文名称" class = "formInput enBankInput" autocomplete="off" />
										</div>
										<div class = "form">
											<p class = "formTitle">开户行账号<span>*</span></p>
											<input type="text" name = "bankAccount" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['bankAccount'];?>
" placeholder = "请输入开户行账号" class = "formInput bankAccountInput" autocomplete="off" />
										</div>
									</div>
									<div class = "formBox w23">
										<div class = "form">
											<p class = "formTitle">开户行地址<span>*</span></p>
											<input type="text" name = "cnBankAddress" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['cnBankAddress'];?>
" placeholder = "请输入开户行地址" class = "formInput cnBankAddressInput" autocomplete="off" />
										</div>
									</div>
								</div>
							</div>
							<div class = "infoBox openAccount">
								<p class = "addApplyTitle">日元账户开户信息</p>
								<div class = "formAllBox clearfix">
									<div class = "formBox w42">
										<div class = "form">
											<p class = "formTitle">企业开户行</p>
											<input type="text" name = "yenBank" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['yenBank'];?>
" placeholder = "请输入日元开户行名称" class = "formInput yenBankInput" autocomplete="off" />
										</div>
										<div class = "form">
											<p class = "formTitle">开户行英文地址</p>
											<input type="text" name = "yenEnBankAddress" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['yenEnBankAddress'];?>
" placeholder = "请输入日元开户行英文地址" class = "formInput yenEnBankAddressInput" autocomplete="off" />
										</div>
									</div>
									<div class = "formBox w35">
										<div class = "form">
											<p class = "formTitle">开户行英文名称</p>
											<input type="text" name = "yenEnBank"  value="<?php echo $_smarty_tpl->tpl_vars['i']->value['yenEnBank'];?>
" placeholder = "请输入日元开户行英文名称" class = "formInput yenEnBankInput" autocomplete="off" />
										</div>
										<div class = "form">
											<p class = "formTitle">swiftNo编码</p>
											<input type="text" name = "yenSwiftNo"  value="<?php echo $_smarty_tpl->tpl_vars['i']->value['yenSwiftNo'];?>
" placeholder = "请输入日元swiftNo编码" class = "formInput yenSwiftNoInput" autocomplete="off" />
										</div>
									</div>
									<div class = "formBox w23">
										<div class = "form">
											<p class = "formTitle">开户行地址</p>
											<input type="text" name = "yenBankAddress" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['yenBankAddress'];?>
" placeholder = "请输入日元开户行地址" class = "formInput yenBankAddressInput" autocomplete="off" />
										</div>
										<div class = "form">
											<p class = "formTitle">开户行账号</p>
											<input type="text" name = "yenBankAccount" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['yenBankAccount'];?>
" placeholder = "请输入日元开户行账号" class = "formInput yenBankAccountInput" autocomplete="off" />
										</div>
									</div>
								</div>
							</div>
							<div class = "infoBox openAccount">
								<p class = "addApplyTitle">美元账户开户信息</p>
								<div class = "formAllBox clearfix">
									<div class = "formBox w42">
										<div class = "form">
											<p class = "formTitle">企业开户行</p>
											<input type="text" name = "dollarBank" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['dollarBank'];?>
" placeholder = "请输入美元开户行名称" class = "formInput dollarBankInput" autocomplete="off" />
										</div>
										<div class = "form">
											<p class = "formTitle">开户行英文地址</p>
											<input type="text" name = "dollarEnBankAddress" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['dollarEnBankAddress'];?>
" placeholder = "请输入美元开户行英文地址" class = "formInput dollarEnBankAddressInput" autocomplete="off" />
										</div>
									</div>
									<div class = "formBox w35">
										<div class = "form">
											<p class = "formTitle">开户行英文名称</p>
											<input type="text" name = "dollarEnBank"  value="<?php echo $_smarty_tpl->tpl_vars['i']->value['dollarEnBank'];?>
" placeholder = "请输入美元开户行英文名称" class = "formInput dollarEnBankInput" autocomplete="off" />
										</div>
										<div class = "form">
											<p class = "formTitle">swiftNo编码</p>
											<input type="text" name = "dollarSwiftNo"  value="<?php echo $_smarty_tpl->tpl_vars['i']->value['dollarSwiftNo'];?>
" placeholder = "请输入美元swiftNo编码" class = "formInput dollarSwiftNoInput" autocomplete="off" />
										</div>
									</div>
									<div class = "formBox w23">
										<div class = "form">
											<p class = "formTitle">开户行地址</p>
											<input type="text" name = "dollarBankAddress" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['dollarBankAddress'];?>
" placeholder = "请输入美元开户行地址" class = "formInput dollarBankAddressInput" autocomplete="off" />
										</div>
										<div class = "form">
											<p class = "formTitle">开户行账号</p>
											<input type="text" name = "dollarBankAccount" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['dollarBankAccount'];?>
" placeholder = "请输入美元开户行账号" class = "formInput dollarBankAccountInput" autocomplete="off" />
										</div>
									</div>
								</div>
							</div>
							<div class = "infoBox businessScope">
								<p class = "addApplyTitle">企业经营范围信息</p>
								<div class = "formAllBox clearfix">
									<div class = "form">
										<p class = "formTitle">企业经营范围</p>
										<textarea name="business" placeholder="请输入" class = "formInput businessInput"><?php echo $_smarty_tpl->tpl_vars['i']->value['business'];?>
</textarea>
									</div>
									<div class = "form w300 mT30">
										<p class = "formTitle">企业成立日期<span>*</span></p>
										<input type="text" name = "createDate" placeholder="请选择企业成立日期" class = "formInput createDateForm dataInput datepicker" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['createDate'];?>
"/>
									</div>
								</div>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['action']->value == 'addSave') {?>
							<div class = "infoBox otherInfo">
								<p class = "addApplyTitle">其他信息</p>
								<div class = "otherAllbox">
									<div class = "otherForm clearfix">
										<div class = "otherFormBox titleForm w28 clearfix">
											<p>标题</p>
											<input type="text" name = "title[]" placeholder="请输入信息标题" class = "otherInput otherTitleInput" autocomplete="off"/>
										</div>
										<div class = "otherFormBox infoForm w33 clearfix">
											<p>信息内容</p>
											<input type="text" name = "content[]" placeholder="请输入内容" class = "otherInput otherContentInput" autocomplete="off"/>
										</div>
										<div class = "addBtn"></div>
									</div>
								</div>
							</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['action']->value == 'editSave') {?>
							<div class = "infoBox otherInfo">
								<p class = "addApplyTitle">其他信息</p>
								<?php
$_from = $_smarty_tpl->tpl_vars['others']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_others_0_saved_item = isset($_smarty_tpl->tpl_vars['o']) ? $_smarty_tpl->tpl_vars['o'] : false;
$_smarty_tpl->tpl_vars['o'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['o']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
$__foreach_others_0_saved_local_item = $_smarty_tpl->tpl_vars['o'];
?>
								<div class = "otherAllbox">
									<div class = "otherForm clearfix">
										<div class = "otherFormBox titleForm w28 clearfix">
											<p>标题</p>
											<input type="text" name = "title[]" value="<?php echo $_smarty_tpl->tpl_vars['o']->value['otherName'];?>
" placeholder="请输入信息标题" class = "otherInput otherTitleInput" autocomplete="off"/>
										</div>
										<div class = "otherFormBox infoForm w33 clearfix">
											<p>信息内容</p>
											<input type="text" name = "content[]" value="<?php echo $_smarty_tpl->tpl_vars['o']->value['otherContent'];?>
" placeholder="请输入内容" class = "otherInput otherContentInput" autocomplete="off"/>
										</div>
										<div class = "removeBtn"></div>
									</div>
								</div>
								<?php
$_smarty_tpl->tpl_vars['o'] = $__foreach_others_0_saved_local_item;
}
if ($__foreach_others_0_saved_item) {
$_smarty_tpl->tpl_vars['o'] = $__foreach_others_0_saved_item;
}
?>
								<div class = "otherAllbox">
									<div class = "otherForm clearfix">
										<div class = "otherFormBox titleForm w28 clearfix">
											<p>标题</p>
											<input type="text" name = "title[]" placeholder="请输入信息标题" class = "otherInput otherTitleInput" autocomplete="off"/>
										</div>
										<div class = "otherFormBox infoForm w33 clearfix">
											<p>信息内容</p>
											<input type="text" name = "content[]" placeholder="请输入内容" class = "otherInput otherContentInput" autocomplete="off"/>
										</div>
										<div class = "addBtn"></div>
									</div>
								</div>
							</div>
							<?php }?>

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
 type="text/javascript" src="org/view/js/company-set.js" ><?php echo '</script'; ?>
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
		
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
