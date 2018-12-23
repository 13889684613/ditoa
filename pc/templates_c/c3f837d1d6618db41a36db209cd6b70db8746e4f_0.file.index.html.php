<?php
/* Smarty version 3.1.29, created on 2018-12-23 22:38:17
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/index/view/index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c1f9dd95dc9a6_61798657',
  'file_dependency' => 
  array (
    'c3f837d1d6618db41a36db209cd6b70db8746e4f' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/index/view/index.html',
      1 => 1545575894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/html/head.html' => 1,
    'file:public/html/menu.html' => 1,
  ),
),false)) {
function content_5c1f9dd95dc9a6_61798657 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/public/library/smarty/plugins/modifier.date_format.php';
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
		<link rel="stylesheet" href="index/view/css/index.css" />
	</head>

	<body>
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:public/html/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		<!--内容 begin-->
		<div class="container-fluid row">
			<!--内容区左侧导航 begin-->
			<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:public/html/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<!--内容区左侧导航end-->
			<!--内容区右侧begin-->
			<div class="contentRight col-lg-10 row">
				<div class="contentRightInfo">
					<?php if ($_smarty_tpl->tpl_vars['messageContent']->value != '') {?>
					<div class="contentTic">
						系统消息：<?php echo $_smarty_tpl->tpl_vars['messageContent']->value;?>

						<img src="images/close-tic.png" alt="" />
					</div>
					<?php }?>
					<div class="contentHand clearfix">
						<div class="contentHandLeft pull-left"><img src="<?php echo $_smarty_tpl->tpl_vars['common_head']->value;?>
" alt="" /></div>
						<div class="contentHandRight pull-left">
							<div class="contentHandRightTop"><?php echo $_smarty_tpl->tpl_vars['common_staffName']->value;?>
 ，欢迎您回来，祝你开心每一天！</div>
							<div class="contentHandRightBottom"><?php echo $_smarty_tpl->tpl_vars['common_officeName']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['common_groupName']->value;?>
</div>
						</div>
					</div>
				</div>
				<!--内容区begin-->
				<div class="contentRightBox">
					<div class="contentRightContent">
						<!--快捷方式begin-->
						<div class="contentRightContentTitle">快捷方式</div>
						<div class="quickFunction clearfix">
							<a href="">
								<div class="quickFunctionBox pull-left">
									<div class="quickFunctionPart">
										<img src="index/view/images/index-icon-a.jpg" alt="" />假期申请
									</div>
								</div>
							</a>
							<a href="human-affairs.php?_f=archives-info&l=m">
								<div class="quickFunctionBox pull-left">
									<div class="quickFunctionPart">
										<img src="index/view/images/index-icon-b.jpg" alt="" />我的档案
									</div>
								</div>
							</a>
							<a href="human-affairs.php?_f=rules">
								<div class="quickFunctionBox pull-left">
									<div class="quickFunctionPart">
										<img src="index/view/images/index-icon-c.jpg" alt="" />企业规章制度
									</div>
								</div>
							</a>
							<a href="org.php?_f=org">
								<div class="quickFunctionBox pull-left">
									<div class="quickFunctionPart">
										<img src="index/view/images/index-icon-d.jpg" alt="" />组织架构
									</div>
								</div>
							</a>
							<a href="">
								<div class="quickFunctionBox pull-left marginRight0">
									<div class="quickFunctionPart">
										<img src="index/view/images/index-icon-e.jpg" alt="" />系统消息<?php if ($_smarty_tpl->tpl_vars['common_noRead']->value > 0) {?> <span class="quickFunctionPartNum"><?php echo $_smarty_tpl->tpl_vars['common_noRead']->value;?>
</span><?php }?>
									</div>
								</div>
							</a>
						</div>
						<!--快捷方式end-->
						<!--企业动态 企业活动 begin-->
						<div class="dynamicsActiveBox clearfix">
							<!--动态begin-->
							<div class="dynamicsActivePart pull-left">
								<div class="dynamicsActivePartTitle">企业动态 <a href="javascript:void(0);"><img src="index/view/images/right.png" alt="" /></a></div>
								<div class='ul'>
									<?php
$_from = $_smarty_tpl->tpl_vars['news']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_news_0_saved_item = isset($_smarty_tpl->tpl_vars['n']) ? $_smarty_tpl->tpl_vars['n'] : false;
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['n']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
$__foreach_news_0_saved_local_item = $_smarty_tpl->tpl_vars['n'];
?>
									<a href="general-affairs.php?_f=news-info&i=<?php echo $_smarty_tpl->tpl_vars['n']->value['newsId'];?>
">
										<div class="li clearfix">
											<div class="liL pull-left">
												<?php echo $_smarty_tpl->tpl_vars['n']->value['title'];?>

											</div>
											<div class="liR pull-right"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['n']->value['newsTime'],"%Y-%m-%d");?>
</div>
										</div>
									</a>
									<?php
$_smarty_tpl->tpl_vars['n'] = $__foreach_news_0_saved_local_item;
}
if ($__foreach_news_0_saved_item) {
$_smarty_tpl->tpl_vars['n'] = $__foreach_news_0_saved_item;
}
?>
								</div>
							</div>
							<!--动态end-->
							<!--活动begin-->
							<div class="dynamicsActivePart pull-right">
								<div class="dynamicsActivePartTitle">企业活动 <a href="javascript:void(0);"><img src="index/view/images/right.png" alt="" /></a></div>
								<div class='ul'>
									<?php
$_from = $_smarty_tpl->tpl_vars['actives']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_actives_1_saved_item = isset($_smarty_tpl->tpl_vars['a']) ? $_smarty_tpl->tpl_vars['a'] : false;
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['a']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
$__foreach_actives_1_saved_local_item = $_smarty_tpl->tpl_vars['a'];
?>
									<a href="general-affairs.php?_f=actives-info&i=<?php echo $_smarty_tpl->tpl_vars['a']->value['newsId'];?>
">
										<div class="li clearfix">
											<div class="liL pull-left">
												<?php echo $_smarty_tpl->tpl_vars['a']->value['title'];?>

											</div>
											<div class="liR pull-right"><?php echo $_smarty_tpl->tpl_vars['a']->value['newsTime'];?>
</div>
										</div>
									</a>
									<?php
$_smarty_tpl->tpl_vars['a'] = $__foreach_actives_1_saved_local_item;
}
if ($__foreach_actives_1_saved_item) {
$_smarty_tpl->tpl_vars['a'] = $__foreach_actives_1_saved_item;
}
?>
								</div>
							</div>
							<!--活动end-->
						</div>
						<!--企业动态 企业活动 end-->
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
 type="text/javascript" src="index/view/js/index.js" ><?php echo '</script'; ?>
>
	</body>

</html><?php }
}
