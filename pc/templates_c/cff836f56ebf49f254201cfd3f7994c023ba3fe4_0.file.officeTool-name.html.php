<?php
/* Smarty version 3.1.29, created on 2018-12-18 10:34:09
  from "F:\website\ditoaCoder\ditoa\pc\system\view\officeTool-name.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c185ca1358681_57965394',
  'file_dependency' => 
  array (
    'cff836f56ebf49f254201cfd3f7994c023ba3fe4' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\system\\view\\officeTool-name.html',
      1 => 1545100443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/html/head.html' => 1,
    'file:public/html/menu.html' => 1,
  ),
),false)) {
function content_5c185ca1358681_57965394 ($_smarty_tpl) {
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
		<link rel="stylesheet" href="system/view/css/officeTool-name.css" />
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
						<div class="contentRightNavTop"><span><a href="index.php?_f=index">首页</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on">备品名称管理</span></div>
						<div class="contentRightNavBottom"><span class="name">备品名称管理</span><span class="time"></span></div>
					</div>
				</div>
				<!--内容区导航end-->
				<!--内容区begin-->
				<div class="contentRightBox">
					<div class="contentRightContent">
						<!--检索begin-->
						<form id="searchForm" name="searchForm" method="get">
							<input type="hidden" name="_f" value="officeTool-name">
							<div class="retrievalBox clearfix">
								<div class="retrievalTitle">快速检索</div>
								<div class="retrievalsForm">
									<form action="" method="get" class="clearfix">
										<input type="hidden" name="_f" value="checkProcess-custom">
										<div class="retrievalsInputBoxs clearfix pull-left">
											<div class="retrievalsInputContent">
												<div class="retrievalsInput">
													<label>备品类别</label>
													<input type="text" unselectable="on" onfocus="this.blur()" readonly="readonly" class="choseInput choseInputBm" placeholder="请选择" name="s_category" value="" data-type='0' />
													<div class="retrievalsInputNavBox">
														<ul class="retrievalsInputNav">
															<li data-type="0">请选择</li>
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
															<input type="hidden" class="selectVal" value="<?php echo $_smarty_tpl->tpl_vars['s_category']->value;?>
" />
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="retrievalInputBox clearfix">
											<div class="retrievalTxt pull-left">备品名称</div>
											<div class="retrievalsInput pull-left"><input type="text" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" placeholder="请填写类别名称" /></div>
											<div class="retrievaButtonBox pull-left clearfix">
												<div class="retrievaButton retrievaButtonL pull-left">
													<a href="javascript:void(0);" onclick="document.getElementById('searchForm').submit();">查询</a>
												</div>
												<div class="retrievaButton retrievaButtonR pull-left">清空</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</form>
						<!--检索end-->
						<!--新增 导出数据按钮 begin-->
						<div class="downloadAddButtonBox clearfix">
							<a href="?_f=officeTool-name-set&act=add">
								<div class="downloadAddButton downloadAddButtonL pull-left">新增</div>
							</a>
							<!-- <a href="">
								<div class="downloadAddButton downloadAddButtonR pull-left">导出数据</div>
							</a> -->
						</div>
						<!--新增 导出数据按钮 end-->
						<!--表格begin-->
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
$__foreach_data_1_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_data_1_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
								<tr<?php if ($_smarty_tpl->tpl_vars['i']->value%2 == 1) {?> class="backgroundFFF" <?php }?>>
									<td class="borderRight1">
										<div class="editBox center-block clearfix">
											<div class="editButton editButtonL pull-left text-center">
												<a href="?_f=officeTool-name-set&act=edit&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['nameId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
"><img src="public/html/images/edit.jpg" alt="" /></a>
											</div>
											<div class="editButton editButtonR pull-left text-center">
												<img src="public/html/images/del.jpg" alt="" />
												<input type="hidden" value="?_f=officeTool-name&act=remove&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['nameId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
">
											</div>
										</div>
									</td>
									</tr>
									<?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_1_saved_local_item;
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
										<th width="200"><span>备品类别</span></th>
										<th width="200"><span>备品名称</span></th>
										<th width="200"><span>备品编号</span></th>
										<th width="200"><span>生成编号否</span></th>
										<th width="118" colspan="2" class="paddingLeft40">
											<span class="sortText">排序<img src="system/view/images/tictable.png" alt="" /></span>
											<div class="sortTic">
												数字越大，排序越靠前
											</div>
										</th>
									</tr>
									<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_data_2_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_data_2_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
									<tr class="backgroundFFF">
										<td class="paddingLeft12"><span><?php echo $_smarty_tpl->tpl_vars['i']->value['sn'];?>
</span></td>
										<td width="200"><span><?php echo $_smarty_tpl->tpl_vars['i']->value['toolCategory'];?>
</span></td>
										<td width="200"><span><?php echo $_smarty_tpl->tpl_vars['i']->value['toolName'];?>
</span></td>
										<td width="200"><span><?php echo $_smarty_tpl->tpl_vars['i']->value['toolCode'];?>
</span></td>
										<td width="200"><span><?php echo $_smarty_tpl->tpl_vars['i']->value['isFixedAssets'];?>
</span></td>
										<td width="118" class="paddingLeft40">
											<span><input type="text" id="rank<?php echo $_smarty_tpl->tpl_vars['i']->value['nameId'];?>
" name="rank<?php echo $_smarty_tpl->tpl_vars['i']->value['nameId'];?>
" class="sortInput" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['rank'];?>
"/></span>
										</td>
										<td style="padding-left:10px;">
											<a href="javascript:void(0);" onclick="javascript:location.href='?_f=officeTool-name&act=updateRank&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['nameId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
&rank='+document.getElementById('rank<?php echo $_smarty_tpl->tpl_vars['i']->value['nameId'];?>
').value;"><span class="tableSureButton">确定</span></a>
										</td>
									</tr>
									<?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_2_saved_local_item;
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
 type="text/javascript" src="public/html/js/plugin/jquery.mCustomScrollbar.concat.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/oa.common.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/jquery.form.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="system/view/js/officeTool-name.js"><?php echo '</script'; ?>
>
	</body>

</html><?php }
}
