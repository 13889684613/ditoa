<?php
/* Smarty version 3.1.29, created on 2018-12-20 14:16:23
  from "F:\website\ditoaCoder\ditoa\pc\humanAffairs\view\archives.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c1b33b71fc6a9_29991204',
  'file_dependency' => 
  array (
    'f884303bb9bda2b07ba76fe68b3f107089ecbfe0' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\humanAffairs\\view\\archives.html',
      1 => 1545286581,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/html/head.html' => 1,
    'file:public/html/menu.html' => 1,
  ),
),false)) {
function content_5c1b33b71fc6a9_29991204 ($_smarty_tpl) {
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
		<link rel="stylesheet" href="humanAffairs/view/css/archives.css" />
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
						<div class="contentRightNavTop"><span><a href="index.php?_f=index">首页</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on">员工档案</span></div>
						<div class="contentRightNavBottom"><span class="name">员工档案</span><span class="time"></span></div>
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
									<input type="hidden" name="_f" value="archives">
									<div class="retrievalsInputBoxs retrievalsInputBoxsStar clearfix pull-left">
										<div class="retrievalsInputContent">
											<div class="retrievalsInput">
												<label>所属企业</label>
												<input type="text"  unselectable="on" onfocus="this.blur()" readonly="readonly" class="choseInput choseInputQy" placeholder="请选择" value="" data-type='0' />
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
														<li data-type="<?php echo $_smarty_tpl->tpl_vars['c']->value['companyId'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['cnName'];?>
</li>
														<?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_company_0_saved_local_item;
}
if ($__foreach_company_0_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_company_0_saved_item;
}
?>
														<input type="hidden" class="selectVal" value="<?php echo $_smarty_tpl->tpl_vars['s_company']->value;?>
" autocomplete="off" data-type="1">
													</ul>
												</div>
											</div>
											<div class="retrievalsInput">
												<label>真实姓名</label>
												<input type="text" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" placeholder="请输入" class="choseInputName" data-type='0' />
											</div>
										</div>
									</div>
									<div class="retrievalsInputBoxs clearfix pull-left">
										<div class="retrievalsInputContent">
											<div class="retrievalsInput">
												<label>所属部门</label>
												<input type="text" unselectable="on" onfocus="this.blur()" readonly="readonly" class="choseInput choseInputBm" placeholder="请选择" value="" data-type='0' />
												<div class="retrievalsInputNavBox">
													<ul class="retrievalsInputNav">
														<li data-type = "0">请选择</li>
														<?php
$_from = $_smarty_tpl->tpl_vars['office']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_office_1_saved_item = isset($_smarty_tpl->tpl_vars['o']) ? $_smarty_tpl->tpl_vars['o'] : false;
$_smarty_tpl->tpl_vars['o'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['o']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
$__foreach_office_1_saved_local_item = $_smarty_tpl->tpl_vars['o'];
?>
														<li data-type="<?php echo $_smarty_tpl->tpl_vars['o']->value['officeId'];?>
"><?php echo $_smarty_tpl->tpl_vars['o']->value['officeName'];?>
</li>
														<?php
$_smarty_tpl->tpl_vars['o'] = $__foreach_office_1_saved_local_item;
}
if ($__foreach_office_1_saved_item) {
$_smarty_tpl->tpl_vars['o'] = $__foreach_office_1_saved_item;
}
?>
														<input type="hidden" class="selectVal" value="<?php echo $_smarty_tpl->tpl_vars['s_office']->value;?>
" autocomplete="off" data-type="1">
													</ul>
												</div>
											</div>
											<div class="retrievalsInput retrievalsInputTime">
												<label>合同时间</label>
												<input type="text" class="datepicker startForm" placeholder="到期开始日期" name="s_begintime" value="<?php echo $_smarty_tpl->tpl_vars['s_begintime']->value;?>
" data-type='0' />
												<input type="text"  class="datepicker endForm" placeholder="到期截止日期" name="s_overtime" value="<?php echo $_smarty_tpl->tpl_vars['s_overtime']->value;?>
" data-type='0' />
											</div>
										</div>
									</div>
									<div class="retrievalsInputBoxs retrievalsInputBoxsEnd clearfix pull-left">
										<div class="retrievalsInputContent">
											<div class="retrievalsInput">
												<label>员工职务</label>
												<input type="text" unselectable="on" onfocus="this.blur()" readonly="readonly" class="choseInput choseInputZw" placeholder="请选择" value="" data-type='0' />
												<div class="retrievalsInputNavBox">
													<ul class="retrievalsInputNav">
														<li data-type = "0">请选择</li>
														<?php
$_from = $_smarty_tpl->tpl_vars['post']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_post_2_saved_item = isset($_smarty_tpl->tpl_vars['p']) ? $_smarty_tpl->tpl_vars['p'] : false;
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$__foreach_post_2_saved_local_item = $_smarty_tpl->tpl_vars['p'];
?>
														<li data-type="<?php echo $_smarty_tpl->tpl_vars['p']->value['postId'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['postName'];?>
</li>
														<?php
$_smarty_tpl->tpl_vars['p'] = $__foreach_post_2_saved_local_item;
}
if ($__foreach_post_2_saved_item) {
$_smarty_tpl->tpl_vars['p'] = $__foreach_post_2_saved_item;
}
?>
														<input type="hidden" class="selectVal" value="<?php echo $_smarty_tpl->tpl_vars['s_post']->value;?>
" autocomplete="off" data-type="1">
													</ul>
												</div>
											</div>
											<div class="retrievalsInput">
												<label>状态</label>
												<input type="text" unselectable="on" onfocus="this.blur()" readonly="readonly" class="choseInput choseInputZt" placeholder="请选择" value="" data-type='0' />
												<div class="retrievalsInputNavBox">
													<ul class="retrievalsInputNav">
														<li data-type = "0">请选择</li>
														<?php
$_from = $_smarty_tpl->tpl_vars['status']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_3_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_3_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_3_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
														<li data-type="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
														<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_3_saved_local_item;
}
if ($__foreach_value_3_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_3_saved_item;
}
if ($__foreach_value_3_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_3_saved_key;
}
?>
														<input type="hidden" class="selectVal" value="<?php echo $_smarty_tpl->tpl_vars['s_status']->value;?>
" autocomplete="off" data-type="1">
													</ul>
												</div>
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
						<!--表格begin-->
						<div class="clearfix tableBoxFather">
							<table class="table1 table1Fixed">
								<tr>
									<th width='77' class="text-center borderRight1"><span>操作</span></th>
								</tr>
								<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_data_4_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_data_4_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
								<tr<?php if ($_smarty_tpl->tpl_vars['i']->value%2 == 1) {?> class="backgroundFFF"<?php }?>}>
									<td class="borderRight1">
										<div class="editBox center-block clearfix">
											<div class="editButton editButtonL pull-left text-center">
												<a href="?_f=archives-info&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['staffId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
"><img src="public/html/images/bj.jpg" /></a>
											</div>
										</div>
									</td>
								</tr>
								<?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_4_saved_local_item;
}
if ($__foreach_data_4_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_4_saved_item;
}
?>
							</table>
							<div class="tableBox clearfix">
								<table class="table1 table1Content">
									<tr>
										<th width="70" class="paddingLeft12"><span>#</span></th>
										<th width="98"><span>真实姓名</span></th>
										<th width="217"><span>所属企业</span></th>
										<th width="83" class=""><span>所属部门</span></th>
										<th width="120" class=""><span>职务</span></th>
										<th width="174" class=""><span>身份证号</span></th>
										<th width="102" class=""><span>入职时间</span></th>
										<th width="120" class=""><span>手机号码</span></th>
										<th width="120" class=""><span>邮箱</span></th>
										<th width="184" class=""><span>合同期间</span></th>
										<th width="94" class="text-center"><span>状态</span></th>
									</tr>
									<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_data_5_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_data_5_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
									<tr class="backgroundFFF">
										<td class="paddingLeft12"><span><?php echo $_smarty_tpl->tpl_vars['i']->value['sn'];?>
</span></td>
										<td><span><?php echo $_smarty_tpl->tpl_vars['i']->value['staffName'];?>
</span></td>
										<td><span><?php echo $_smarty_tpl->tpl_vars['i']->value['company'];?>
</span></td>
										<td class=""><span><?php echo $_smarty_tpl->tpl_vars['i']->value['office'];?>
</span></td>
										<td class=""><span><?php echo $_smarty_tpl->tpl_vars['i']->value['post'];?>
</span></td>
										<td class=""><span><?php echo $_smarty_tpl->tpl_vars['i']->value['idNumber'];?>
</span></td>
										<td class=""><span><?php echo $_smarty_tpl->tpl_vars['i']->value['joinDate'];?>
</span></td>
										<td class=""><span><?php echo $_smarty_tpl->tpl_vars['i']->value['tel'];?>
</span></td>
										<td class=""><span><?php echo $_smarty_tpl->tpl_vars['i']->value['email'];?>
</span></td>
										<td class=""><span><?php echo $_smarty_tpl->tpl_vars['i']->value['contract'];?>
</span></td>
										<!--正常class normal-->
										<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value['status'];?>
</td>
									</tr>
									<?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_5_saved_local_item;
}
if ($__foreach_data_5_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_5_saved_item;
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
 type="text/javascript" src="humanAffairs/view/js/archives.js"><?php echo '</script'; ?>
>
	</body>

</html><?php }
}
