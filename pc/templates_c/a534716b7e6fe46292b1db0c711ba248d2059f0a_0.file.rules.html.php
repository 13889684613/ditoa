<?php
/* Smarty version 3.1.29, created on 2018-12-22 21:39:58
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/generalAffairs/view/rules.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c1e3eae0bb0c5_62928962',
  'file_dependency' => 
  array (
    'a534716b7e6fe46292b1db0c711ba248d2059f0a' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/generalAffairs/view/rules.html',
      1 => 1545051960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/html/head.html' => 1,
    'file:public/html/menu.html' => 1,
  ),
),false)) {
function content_5c1e3eae0bb0c5_62928962 ($_smarty_tpl) {
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
		<link rel="stylesheet" href="generalAffairs/view/css/rules.css" />
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
						<div class="contentRightNavTop"><span><a href="index.php?_f=index">首页</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on">规章制度</span></div>
						<div class="contentRightNavBottom"><span class="name">企业规章制度</span><span class="time"></span></div>
					</div>
				</div>
				<!--内容区导航end-->
				<!--内容区begin-->
				<div class="contentRightBox">
					<div class="contentRightContent">
						<!--检索begin-->
						<form id="searchForm" name="searchForm" method="get">
							<input type="hidden" name="_f" value="rules">
							<div class="retrievalBox">
								<div class="retrievalTitle">快速检索</div>
								<div class="retrievalInputBox clearfix">
									<div class="retrievalTxt pull-left">制度名称</div>
									<div class="retrievalInput pull-left"><input type="text" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" placeholder="请填写制度名称" /></div>
									<div class="retrievaButtonBox pull-left clearfix">
										<div class="retrievaButton retrievaButtonL pull-left">
											<a href="javascript:void(0);" onclick="document.getElementById('searchForm').submit();">查询</a>
										</div>
										<div class="retrievaButton retrievaButtonR pull-left">清空</div>
									</div>
								</div>
							</div>
						</form>
						<!--检索end-->
						<!--新增 导出数据按钮 begin-->
						<div class="downloadAddButtonBox clearfix">
							<a href="?_f=rules-set&act=add"><div class="downloadAddButton downloadAddButtonL pull-left">新增</div></a>
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
$__foreach_data_0_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_data_0_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
									<tr<?php if ($_smarty_tpl->tpl_vars['i']->value%2 == 1) {?> class="backgroundFFF"<?php }?>>
										<td class="borderRight1">
											<div class="editBox center-block clearfix">
												<div class="editButton editButtonL pull-left text-center">
													<a href="?_f=rules-set&act=edit&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['rulesId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
"><img src="public/html/images/edit.jpg" alt="" /></a>
												</div>
												<div class="editButton editButtonR pull-left text-center">
													<a href="?_f=rules&act=remove&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['rulesId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
" onclick="return confirm('确认要删除？');"><img src="public/html/images/del.jpg" alt="" /></a>
												</div>
											</div>
										</td>
									</tr>
									<?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_0_saved_local_item;
}
if ($__foreach_data_0_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_0_saved_item;
}
?>
								</table>
							<div class="tableBox clearfix">
								<table class="table1 table1Content">
									<tr>
										<th width="70" class="paddingLeft12"><span>#</span></th>
										<th width="254"><span>规章制度</span></th>
										<th width="259"><span>创建时间</span></th>
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
$__foreach_data_1_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_data_1_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
									<tr class="backgroundFFF">
										<td class="paddingLeft12"><span><?php echo $_smarty_tpl->tpl_vars['i']->value['sn'];?>
</span></td>
										<td width="254"><span><a href="upload/file/rule/<?php echo $_smarty_tpl->tpl_vars['i']->value['attach'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</a></span></td>
										<td width="259"><span><?php echo $_smarty_tpl->tpl_vars['i']->value['createTime'];?>
</span></td>
										<td width="118" class="paddingLeft40">
											<span><input type="text" id="rank<?php echo $_smarty_tpl->tpl_vars['i']->value['rulesId'];?>
" name="rank<?php echo $_smarty_tpl->tpl_vars['i']->value['rulesId'];?>
" class="sortInput" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['rank'];?>
"/></span>
										</td>
										<td style="padding-left:10px;">
											<a href="javascript:void(0);" onclick="javascript:location.href='?_f=rules&act=updateRank&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['rulesId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
&rank='+document.getElementById('rank<?php echo $_smarty_tpl->tpl_vars['i']->value['rulesId'];?>
').value;"><span class="tableSureButton">确定</span></a>
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
 type="text/javascript" src="generalAffairs/view/js/rules.js"><?php echo '</script'; ?>
>
	</body>

</html><?php }
}
