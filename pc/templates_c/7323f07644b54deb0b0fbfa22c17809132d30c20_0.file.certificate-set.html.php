<?php
/* Smarty version 3.1.29, created on 2018-12-17 17:32:46
  from "F:\website\ditoaCoder\ditoa\pc\generalAffairs\view\certificate-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c176d3ea8a1a9_97325641',
  'file_dependency' => 
  array (
    '7323f07644b54deb0b0fbfa22c17809132d30c20' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\generalAffairs\\view\\certificate-set.html',
      1 => 1545039162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/html/head.html' => 1,
    'file:public/html/menu.html' => 1,
  ),
),false)) {
function content_5c176d3ea8a1a9_97325641 ($_smarty_tpl) {
?>
<!-- 
	# 企业资质证件
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
	<link rel="stylesheet" href="generalAffairs/view/css/certificate-set.css" />
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
					<div class="contentRightNavTop"><span><a href="index.php?_f=index">首页</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span><a href="?_f=certificate&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&s_name=<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
&s_company=<?php echo $_smarty_tpl->tpl_vars['s_company']->value;?>
">企业资质证件管理</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on">资质证件设置</span></div>
					<div class="contentRightNavBottom"><span class="name">企业资质证件设置</span></div>
				</div>
			</div>
			<!--内容区导航end-->
			<!--内容区begin-->
			<div class="contentRightBox">
				<!-- 内容区 开始 -->
				<div class = "rightContent">
					<div class = "staffInfoForm contentForm clearfix">
						<form id="cerForm" method="post" class = "clearfix" enctype="multipart/form-data">
							<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
							<input type="hidden" name="s_company" value="<?php echo $_smarty_tpl->tpl_vars['s_company']->value;?>
" />
							<input type="hidden" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" />
							<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
							<input type="hidden" name="act" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
							<div class = "roleInfo">
								<p class = "addApplyTitle mB26">资质证件信息</p>
								<div class = "roleUserInfo clearfix">
									<div class = "form userName clearfix">
										<p class = "formTitle">所属企业<span>*</span></p>
										<input type="text" unselectable="on" onfocus="this.blur()" readonly="readonly" class="choseInput choseInputBm companyInput" placeholder="请选择" name="company" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['companyId'];?>
" data-type='0' />
										<div class="retrievalsInputNavBox">
											<ul class="retrievalsInputNav">
												<li data-type = "0">请选择</li>
												<?php
$_from = $_smarty_tpl->tpl_vars['company']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_company_0_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$__foreach_company_0_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
												<li data-type = "<?php echo $_smarty_tpl->tpl_vars['c']->value['companyId'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['cnName'];?>
</li>
												<?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_company_0_saved_local_item;
}
if ($__foreach_company_0_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_company_0_saved_item;
}
?>
											</ul>
										</div>
									</div>
									<div class = "form userName clearfix">
										<p class = "formTitle">证件名称<span>*</span></p>
										<input type="text" name = "cerName" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['cerName'];?>
" placeholder = "请输入证件名称" class = "formInput nameInput" autocomplete="off"/>
									</div>
								</div>
								<div class = "roleUserInfo mT26 clearfix">
									<div class = "form userName clearfix">
										<p class = "formTitle">证件照片<span>*</span></p>
										<div class = "uploadFile">
											<div class = "uploadBtn">上传证件文件</div>
											<input type="file" name="photo[]" value = ' ' class = "uploadInput" />
										</div>
										<?php if ($_smarty_tpl->tpl_vars['i']->value['cerImg'] != '') {?>
										<div class = "showFileName"><a href="upload/file/cer/<?php echo $_smarty_tpl->tpl_vars['i']->value['cerImg'];?>
" target="_blank">查看已上传文件</a><span></span></div>
										<?php } else { ?>
										<div class = "showFileName">已选择：<span></span></div>
										<?php }?>
									</div>
									<div class = "form">
										<p class = "formTitle">证件到期日期<span>*</span></p>
										<input type="text" name = "overDate" placeholder="请选择证件到期日期" class = "formInput overDateForm dataInput datepicker" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['overDate'];?>
"/>
									</div>
								</div>
								<div class = "roleUserInfo mT26 clearfix">
									<div class = "form">
										<p class = "formTitle">备注</p>
										<textarea name="remark" placeholder="备注内容" class = "formInput remarkInput"><?php echo $_smarty_tpl->tpl_vars['i']->value['remark'];?>
</textarea>
									</div>
									<div class = "form setNum clearfix">
										<p class = "formTitle">设置排序<span>*</span></p>
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
 type="text/javascript" src="generalAffairs/view/js/certificate-set.js" ><?php echo '</script'; ?>
>

</body>
</html><?php }
}
