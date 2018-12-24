<?php
/* Smarty version 3.1.29, created on 2018-12-24 18:18:03
  from "F:\website\ditoaCoder\ditoa\pc\humanAffairs\view\certificate.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c20b25bd75975_77224193',
  'file_dependency' => 
  array (
    '9b92a85d484571c601c4c3745fc39a8613d01ae2' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\humanAffairs\\view\\certificate.html',
      1 => 1545646681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/html/head.html' => 1,
    'file:public/html/menu.html' => 1,
  ),
),false)) {
function content_5c20b25bd75975_77224193 ($_smarty_tpl) {
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
		<link rel="stylesheet" href="public/html/css/oa.common.css" />
		<link rel="stylesheet" href="humanAffairs/view/css/certificate.css" />
		<style type="text/css">
			.editBox{
				width: 40px;
				}
		</style>
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
						<div class="contentRightNavTop"><span><a href="index.php?_f=index">首页</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on">企业资质证件</span></div>
						<div class="contentRightNavBottom"><span class="name">企业资质证件</span><span class="time"></span></div>
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
								<form id="searchForm" method="get" class="clearfix">
									<input type="hidden" name="_f" value="certificate">
									<div class="retrievalsInputBoxs clearfix pull-left">
										<div class="retrievalsInputContent">
											<div class="retrievalsInput">
												<label>所属企业</label>
												<input type="text"  unselectable="on" onfocus="this.blur()" readonly="readonly" class="choseInput choseInputQy" placeholder="请选择" data-type='0' />
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
"<?php if ($_smarty_tpl->tpl_vars['c']->value['companyId'] == $_smarty_tpl->tpl_vars['s_company']->value) {?> data-select="true"<?php }?>><?php echo $_smarty_tpl->tpl_vars['c']->value['cnName'];?>
</li>
													<?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_company_0_saved_local_item;
}
if ($__foreach_company_0_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_company_0_saved_item;
}
?>
													<input type="hidden" class="selectVal" name="s_company" value="<?php echo $_smarty_tpl->tpl_vars['s_company']->value;?>
" autocomplete="off" data-type="1">
												</ul>
											</div>
											</div>
										</div>
									</div>
									<div class="retrievalsInputBoxs clearfix pull-left">
										<div class="retrievalsInputContent">
											<div class="retrievalsInput">
												<label>证件名称</label>
												<input type="text" class="choseInputName" placeholder="请输入证件名称" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" data-type='0' />
											</div>
										</div>
									</div>
									<!--查询清空begin-->
									<div class="retrievalsInput clearfix pull-left">
										<a href="javascript:void(0);" onclick="document.getElementById('searchForm').submit();"><div class="queryButton pull-left">查询</div></a>
										<div class="clearButton pull-left">清空</div>
									</div>
									<!--查询清空end-->
								</form>
							</div>
						</div>
						<!--检索end-->
						<div class="clearfix tableBoxFather">
							<table class="table1 table1Fixed">
									<tr>
										<th width='133' class="text-center borderRight1"><span>操作</span></th>
									</tr>
									<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_data_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_data']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_data'] : false;
$__foreach_data_1_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_data'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_data']->value['iteration']++;
$__foreach_data_1_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
									<tr<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_data']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_data']->value['iteration'] : null)%2 == 1) {?> class="backgroundFFF"<?php }?>>
										<td class="borderRight1">
											<div class="editBox center-block clearfix">
												<div class="editButton editButtonZ pull-left text-center">
													<a href="upload/file/cer/<?php echo $_smarty_tpl->tpl_vars['i']->value['cerImg'];?>
" target="_blank"><img src="public/html/images/bj.jpg" alt="" /></a>
												</div>
											</div>
										</td>
									</tr>
									<?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_1_saved_local_item;
}
if ($__foreach_data_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_data'] = $__foreach_data_1_saved;
}
if ($__foreach_data_1_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_1_saved_item;
}
?>
								</table>
							<div class="tableBox clearfix">
								<table class="table1 table1Content">
									<tr>
										<th width="70" class="paddingLeft12"><span>#</span></th>
										<th width="260"><span>企业名称</span></th>
										<th width="200"><span>证件名称</span></th>
										<th width="500"><span>创建时间</span></th>
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
									<tr<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_data']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_data']->value['iteration'] : null)%2 == 1) {?> class="backgroundFFF"<?php }?>>
										<td class="paddingLeft12"><span><?php echo $_smarty_tpl->tpl_vars['i']->value['sn'];?>
</span></td>
										<td><span><?php echo $_smarty_tpl->tpl_vars['i']->value['company'];?>
</span></td>
										<td><span><?php echo $_smarty_tpl->tpl_vars['i']->value['cerName'];?>
</span></td>	
										<td><span><?php echo $_smarty_tpl->tpl_vars['i']->value['createTime'];?>
</span></td>
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
 type="text/javascript" src="public/html/js/plugin/jquery.mCustomScrollbar.concat.min.js" ><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/oa.common.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/jquery.form.min.js" ><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="generalAffairs/view/js/certificate.js"><?php echo '</script'; ?>
>
	</body>

</html><?php }
}
