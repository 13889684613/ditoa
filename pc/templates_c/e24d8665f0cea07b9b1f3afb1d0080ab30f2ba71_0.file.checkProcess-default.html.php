<?php
/* Smarty version 3.1.29, created on 2018-12-24 20:31:41
  from "F:\website\ditoaCoder\ditoa\pc\system\view\checkProcess-default.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c20d1ad7bfbc3_14612947',
  'file_dependency' => 
  array (
    'e24d8665f0cea07b9b1f3afb1d0080ab30f2ba71' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\system\\view\\checkProcess-default.html',
      1 => 1545654694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/html/head.html' => 1,
    'file:public/html/menu.html' => 1,
  ),
),false)) {
function content_5c20d1ad7bfbc3_14612947 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>

	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
		<link rel="stylesheet" href="public/html/css/oa.base.css" />
		<link rel="stylesheet" href="public/html/css/oa.bootstrap.min.css" />
		<link rel="stylesheet" href="public/html/css/plugin/jquery.mCustomScrollbar.min.css" />
		<link rel="stylesheet" href="public/html/css/oa.jquery-ui.min.css" />
		<link rel="stylesheet" href="public/html/css/oa.jquery.multiselect.css" />
		<link rel="stylesheet" href="public/html/css/oa.common.css" />
		<link rel="stylesheet" href="system/view/css/checkProcess-default.css" />
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
						<div class="contentRightNavTop"><span><a href="index.php?_f=index">首页</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on">默认审批流程</span></div>
						<div class="contentRightNavBottom"><span class="name">默认审批流程</span><span class="time"></span></div>
					</div>
				</div>
				<!--内容区导航end-->
				<!--内容区begin-->
				<div class="contentRightBox">
					<div class="contentRightContent">
						<!--检索begin-->
						<div class="retrievalBox">
							<div class="retrievalTitle">快速检索</div>
							<div class="retrievalsForm">
								<form action="" method="get" class="clearfix">
									<input type="hidden" name="_f" value="checkProcess-default">
									<div class="retrievalsInputBoxs clearfix pull-left">
										<div class="retrievalsInputContent">
											<div class="retrievalsInput">
												<label>类别</label>
												<input type="text" unselectable="on" onfocus="this.blur()" readonly="readonly" class="choseInput choseInputBm" placeholder="请选择" data-type='0' />
												<div class="retrievalsInputNavBox">
													<ul class="retrievalsInputNav">
														<li data-type = "0">请选择</li>
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
"<?php if ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['s_type']->value) {?> data-select="true"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
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
														<input type="hidden" name="s_type" value="<?php echo $_smarty_tpl->tpl_vars['s_type']->value;?>
" class="selectVal" />
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="retrievalsInputBoxs clearfix pull-left">
										<div class="retrievalsInputContent">
											<div class="retrievalsInput">
												<label>角色</label>
												<input type="text" unselectable="on" onfocus="this.blur()" readonly="readonly" class="choseInput choseInputXz" placeholder="请选择" data-type='0' />
												<div class="retrievalsInputNavBox">
													<ul class="retrievalsInputNav">
														<li data-type = "0">请选择</li>
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
'<?php if ($_smarty_tpl->tpl_vars['r']->value['checkRoleId'] == $_smarty_tpl->tpl_vars['s_role']->value) {?> data-select="true"<?php }?>><?php echo $_smarty_tpl->tpl_vars['r']->value['checkRoleName'];?>
</li>
														<?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_roles_1_saved_local_item;
}
if ($__foreach_roles_1_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_roles_1_saved_item;
}
?>
														<input type="hidden" name="s_role" value="<?php echo $_smarty_tpl->tpl_vars['s_role']->value;?>
" class="selectVal" />
													</ul>
												</div>
											</div>
										</div>
									</div>
									<!--查询清空begin-->
									<div class="retrievalsInput clearfix pull-left">
										<div class="queryButton pull-left">查询</div>
										<div class="clearButton pull-left">清空</div>
									</div>
									<!--查询清空end-->
								</form>
							</div>
						</div>
						<!--检索end-->
						<!--新增 导出数据按钮 begin-->
						<div class="downloadAddButtonBox clearfix">
							<a href="?_f=checkProcess-default-set&act=add"><div class="downloadAddButton downloadAddButtonL pull-left">新增</div></a>
							<!-- <a href="">
								<div class="downloadAddButton downloadAddButtonR pull-left">导出数据</div>
							</a> -->
						</div>
						<!--新增 导出数据按钮 end-->
						<!--表格begin-->
						<div class="clearfix tableBoxFather">
							<table class="table1 table1Fixed">
								<tr>
									<th width='145' class="text-center borderRight1"><span>操作</span></th>
								</tr>
								<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_data_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_data']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_data'] : false;
$__foreach_data_2_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_data'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_data']->value['iteration']++;
$__foreach_data_2_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
								<tr<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_data']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_data']->value['iteration'] : null)%2 == 1) {?> class="backgroundFFF"<?php }?>}>
									<td class="borderRight1">
										<div class="editBox center-block clearfix">
											<?php if ($_smarty_tpl->tpl_vars['i']->value['isOpt']) {?>
											<div class="editButton editButtonL borderRight pull-left text-center">
												<a href="?_f=checkProcess-default-set&act=edit&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['defaultCheckProcessId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
"><img src="public/html/images/edit.jpg" alt="" /></a>
											</div>
											<div class="editButton editButtonR pull-left text-center">
												<img src="public/html/images/del.jpg" alt="" />
												<input type="hidden" value="?_f=checkProcess-default&act=remove&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['defaultCheckProcessId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
"/>
											</div>
											<?php } else { ?>
											已应用
											<?php }?>
										</div>
									</td>
								</tr>
								<?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_2_saved_local_item;
}
if ($__foreach_data_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_data'] = $__foreach_data_2_saved;
}
if ($__foreach_data_2_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_2_saved_item;
}
?>
							</table>
							<div class="tableBox clearfix">
								<table class="table1 table1Content">
									<tr>
										<th width="78" class="paddingLeft12"><span>#</span></th>
										<th width="100"><span>类别</span></th>
										<th width="100"><span>级别</span></th>
										<th width="203" class=""><span>审批流程</span></th>
										<th width="300"><span>创建时间</span></th>
									</tr>
									<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_data_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_data']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_data'] : false;
$__foreach_data_3_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_data'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_data']->value['iteration']++;
$__foreach_data_3_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
									<tr<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_data']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_data']->value['iteration'] : null)%2 == 1) {?> class="backgroundFFF"<?php }?>}>
										<td class="paddingLeft12"><span><?php echo $_smarty_tpl->tpl_vars['i']->value['sn'];?>
</span></td>
										<td><span><?php echo $_smarty_tpl->tpl_vars['i']->value['checkCategory'];?>
</span></td>
										<td><span><?php echo $_smarty_tpl->tpl_vars['i']->value['checkLevel'];?>
级</span></td>
										<td class=""><span><?php echo $_smarty_tpl->tpl_vars['i']->value['checkProcess'];?>
</span></td>
										<td><span><?php echo $_smarty_tpl->tpl_vars['i']->value['createTime'];?>
</span></td>
									</tr>
									<?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_3_saved_local_item;
}
if ($__foreach_data_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_data'] = $__foreach_data_3_saved;
}
if ($__foreach_data_3_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_3_saved_item;
}
?>
								</table>
							</div>
						</div>
						<!--表格end-->
						<!--分页begin-->
						<div class="page clearfix">
							<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

						</div>
						<!--分页end-->
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
 type="text/javascript" src="public/html/js/plugin/oa.jquery.placeholder.min.js"><?php echo '</script'; ?>
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
 type="text/javascript" src="public/html/js/oa.common.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/jquery.form.min.js" ><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="system/view/js/checkProcess-default.js"><?php echo '</script'; ?>
>
	</body>

</html><?php }
}
