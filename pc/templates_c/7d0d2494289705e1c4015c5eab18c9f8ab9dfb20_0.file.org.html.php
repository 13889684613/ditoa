<?php
/* Smarty version 3.1.29, created on 2018-12-19 14:00:07
  from "F:\website\ditoaCoder\ditoa\pc\org\view\org.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c19de6771f764_62911843',
  'file_dependency' => 
  array (
    '7d0d2494289705e1c4015c5eab18c9f8ab9dfb20' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\org\\view\\org.html',
      1 => 1545199205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/html/head.html' => 1,
    'file:public/html/menu.html' => 1,
  ),
),false)) {
function content_5c19de6771f764_62911843 ($_smarty_tpl) {
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
		<link rel="stylesheet" href="org/view/css/org.css" />
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
						<div class="contentRightNavTop"><span><a href="index.php?_f=index">首页</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on">企业组织架构</span></div>
						<div class="contentRightNavBottom"><span class="name">企业组织架构</span><span class="time"></span></div>
					</div>
				</div>
				<!--内容区导航end-->
				<!--内容区begin-->
				<div class="contentRightBox">
					<div class="contentRightContent clearfix">
						<!--树导航begin-->
						<div class="treeNavBox pull-left">
							<div class="treeNavBoxTitle">DIT组织架构</div>
							<div class="treeNavContent">
								<div class="treeNavContentBox">
									<?php
$_from = $_smarty_tpl->tpl_vars['offices']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_offices_0_saved_item = isset($_smarty_tpl->tpl_vars['o']) ? $_smarty_tpl->tpl_vars['o'] : false;
$_smarty_tpl->tpl_vars['o'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['o']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
$__foreach_offices_0_saved_local_item = $_smarty_tpl->tpl_vars['o'];
?>
									<div class="treeNavContentBoxPart<?php if ($_smarty_tpl->tpl_vars['officeId']->value == $_smarty_tpl->tpl_vars['o']->value['officeId']) {?> on<?php }?>">
										<span class="treeNavContentBoxPartImage<?php if ($_smarty_tpl->tpl_vars['officeId']->value == $_smarty_tpl->tpl_vars['o']->value['officeId']) {?> on<?php }?>"><?php echo $_smarty_tpl->tpl_vars['o']->value['officeName'];?>
 （<?php echo $_smarty_tpl->tpl_vars['o']->value['number'];?>
）</span>
										<ul>
											<?php
$_from = $_smarty_tpl->tpl_vars['o']->value['groups'];
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
											<a href="?_f=org&o=<?php echo $_smarty_tpl->tpl_vars['o']->value['officeId'];?>
&g=<?php echo $_smarty_tpl->tpl_vars['g']->value['groupId'];?>
">
												<li<?php if ($_smarty_tpl->tpl_vars['groupId']->value == $_smarty_tpl->tpl_vars['g']->value['groupId']) {?> class="active"<?php }?>> <?php echo $_smarty_tpl->tpl_vars['g']->value['groupName'];?>
 （<?php echo $_smarty_tpl->tpl_vars['g']->value['number'];?>
）</li>
											</a>
											<?php
$_smarty_tpl->tpl_vars['g'] = $__foreach_groups_1_saved_local_item;
}
if ($__foreach_groups_1_saved_item) {
$_smarty_tpl->tpl_vars['g'] = $__foreach_groups_1_saved_item;
}
?>
										</ul>
									</div>
									<?php
$_smarty_tpl->tpl_vars['o'] = $__foreach_offices_0_saved_local_item;
}
if ($__foreach_offices_0_saved_item) {
$_smarty_tpl->tpl_vars['o'] = $__foreach_offices_0_saved_item;
}
?>
								</div>
							</div>
						</div>
						<!--树导航end-->

						<div class="architectureContent pull-left">
							<!--检索begin-->
							<form method="get">
							<input type="hidden" name="_f" value="org">
							<input type="hidden" name="o" value="<?php echo $_smarty_tpl->tpl_vars['officeId']->value;?>
">
							<input type="hidden" name="g" value="<?php echo $_smarty_tpl->tpl_vars['groupId']->value;?>
">
							<div class="retrievalBox">
								<div class="retrievalInputBox clearfix">
									<div class="retrievalTxt pull-left">员工姓名：</div>
									<div class="retrievalInput pull-left"><input type="text" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" placeholder="搜索当前组织员工" />
										<a href="javascript:void(0);" onclick="document.getElementById('searchForm').submit();"><img src="org/view/images/search.jpg" class="search" alt="" /></a>
									</div>
								</div>
							</div>
							<!--检索end-->
							<!--表格begin-->
							<div class="clearfix tableBoxFather">
								<div class="tableBox clearfix">
									<table class="table1 table1Content">
										<tr style="height: 54px;">
											<th class="paddingLeft27" width="106"><span>员工姓名</span></th>
											<th width="152"><span>隶属公司</span></th>
											<th width="154"><span>职务</span></th>
											<th width="155"><span>座机</span></th>
											<th width="120"><span>手机号码</span></th>
											<th width="120"><span>电子邮箱</span></th>
											<th class="text-center" width="244"><span>状态</span></th>
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
										<tr<?php if ($_smarty_tpl->tpl_vars['i']->value%2 == 1) {?> class="backgroundFFF"<?php } else { ?>class="backgroundfb"<?php }?>>
											<td class="paddingLeft27"><span><?php echo $_smarty_tpl->tpl_vars['i']->value['staffName'];?>
</span></td>
											<td><span><?php echo $_smarty_tpl->tpl_vars['i']->value['company'];?>
</span></td>
											<td><span><?php echo $_smarty_tpl->tpl_vars['i']->value['post'];?>
</span></td>
											<td><span><?php echo $_smarty_tpl->tpl_vars['i']->value['phone'];?>
</span></td>
											<td><span><?php echo $_smarty_tpl->tpl_vars['i']->value['tel'];?>
</span></td>
											<td><span><?php echo $_smarty_tpl->tpl_vars['i']->value['email'];?>
</span></td>
											<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value['status'];?>
</td>
										</tr>
										<?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_2_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['i']->_loop) {
?>
										<tr class="backgroundFFF">
											<td colspan="7" rowspan="5">
												<?php if ($_smarty_tpl->tpl_vars['TIP']->value == 2) {?>
												<img src="org/view/images/choseImage.jpg" class="choseImage" alt="" />
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['TIP']->value == 1) {?>
												<img src="org/view/images/zwyg.jpg" class="choseImage" alt="" />
												<?php }?>
											</td>
										</tr>
										<?php
}
if ($__foreach_data_2_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_2_saved_item;
}
?>
										<tr></tr>
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
 type="text/javascript" src="public/html/js/plugin/oa.jquery.placeholder.min.js" ><?php echo '</script'; ?>
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
 type="text/javascript" src="org/view/js/org.js"><?php echo '</script'; ?>
>
	</body>

</html><?php }
}
