<?php
/* Smarty version 3.1.29, created on 2018-12-18 10:34:10
  from "F:\website\ditoaCoder\ditoa\pc\system\view\officeTool-name-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c185ca287f180_54135156',
  'file_dependency' => 
  array (
    'be5e97af9261b34d58bd8610ae9a6b2d29ac7daf' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\system\\view\\officeTool-name-set.html',
      1 => 1545098615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/html/head.html' => 1,
    'file:public/html/menu.html' => 1,
  ),
),false)) {
function content_5c185ca287f180_54135156 ($_smarty_tpl) {
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
	<link rel="stylesheet" href="system/view/css/officeTool-name-set.css" />
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
					<div class="contentRightNavTop"><span><a href="index.php?_f=index">首页</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span><a href="?_f=officeTool-name-set&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&s_name=<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
&s_category=<?php echo $_smarty_tpl->tpl_vars['s_category']->value;?>
">备品名称管理</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on">备品名称设置</span></div>
					<div class="contentRightNavBottom"><span class="name">备品名称设置</span></div>
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
							<input type="hidden" name="s_category" value="<?php echo $_smarty_tpl->tpl_vars['s_category']->value;?>
" />
							<input type="hidden" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" />
							<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
							<input type="hidden" name="act" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
							<div class = "roleInfo">
								<p class = "addApplyTitle mB26">备品名称信息</p>
								<div class = "roleUserInfo clearfix">
									<div class = "form setNum clearfix">
										<p class = "formTitle">备品编号</p>
										<input type="text" name = "toolCode" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['toolCode'];?>
" placeholder = "请填写备品编号" class = "formInput codeInput" autocomplete="off"/>
									</div>
									<div class = "form userName clearfix">
										<p class = "formTitle">备品名称</p>
										<input type="text" name = "toolName" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['toolName'];?>
" placeholder = "请填写备品名称" class = "formInput nameInput" autocomplete="off"/>
									</div>
								</div>
								<div class = "roleUserInfo mT26 clearfix">
									<div class = "retrievalsInput pull-left mR40 clearfix">
										<label class="lable_w">备品类别</label>		
										<!-- <p class = "formTitle">备品类别</p> -->
										<input type="text" unselectable="on" onfocus="this.blur()" readonly="readonly" class="choseInput choseInputBm categoryForm" placeholder="请选择" name="category" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['categoryId'];?>
" data-type='0' />
										<div class="retrievalsInputNavBox">
											<ul class="retrievalsInputNav">
												<li data-type = "0">请选择</li>
												<?php
$_from = $_smarty_tpl->tpl_vars['categorys']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_categorys_0_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$__foreach_categorys_0_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
												<li data-type='<?php echo $_smarty_tpl->tpl_vars['c']->value['categoryId'];?>
'><?php echo $_smarty_tpl->tpl_vars['c']->value['categoryName'];?>
</li>
												<?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_categorys_0_saved_local_item;
}
if ($__foreach_categorys_0_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_categorys_0_saved_item;
}
?>
												<input type="hidden" class="selectVal" value="" autocomplete="off">
											</ul>
										</div>
									</div>
									<div class = "form setNum clearfix">		
										<p class = "formTitle">生成备品编号</p>
										<div class = "checkBox pull-left mT10 clearfix">
											<div class = "checkBtn mRight50"<?php if ($_smarty_tpl->tpl_vars['i']->value['isFixedAssets'] == 1) {?> on<?php }?> data-type="1">是</div>
											<div class = "checkBtn"<?php if ($_smarty_tpl->tpl_vars['i']->value['isFixedAssets'] == 0) {?> on<?php }?> data-tyoe="0">否</div>
										</div>
										<input type="hidden" name = "createNumber" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['isFixedAssets'];?>
" class = "formInput createForm"/>
									</div>
								</div>
								<div class = "roleUserInfo clearfix">
									<div class = "form setNum clearfix">		
										<p class = "formTitle">设置排序</p>
										<input type="number" name = "rank" value="<?php echo $_smarty_tpl->tpl_vars['rank']->value;?>
" placeholder = "0" class = "formInput rankInput" autocomplete="off"/>
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
 type="text/javascript" src="system/view/js/officeTool-name-set.js" ><?php echo '</script'; ?>
>

</body>
</html><?php }
}
