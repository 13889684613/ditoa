<?php
/* Smarty version 3.1.29, created on 2018-12-24 18:11:23
  from "F:\website\ditoaCoder\ditoa\pc\humanAffairs\view\archives-file.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c20b0cb90d8c7_92519733',
  'file_dependency' => 
  array (
    '4c2e203daf9183c71d303d84621bcfeb09207d73' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\humanAffairs\\view\\archives-file.html',
      1 => 1545645416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/html/head.html' => 1,
    'file:public/html/menu.html' => 1,
    'file:public/html/archives.html' => 1,
  ),
),false)) {
function content_5c20b0cb90d8c7_92519733 ($_smarty_tpl) {
?>
<!--
	作者：sxh
	时间：2018-11-12
	描述：员工档案详情
-->
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
		<link rel="stylesheet" href="humanAffairs/view/css/archives-file.css" />
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
						<div class="contentRightNavTop"><span><a href="index.php?_f=index">首页</a></span>
							<?php if ($_smarty_tpl->tpl_vars['l']->value == 'm') {?>
							&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on">我的档案</span>
							<?php } elseif ($_smarty_tpl->tpl_vars['nav']->value == 'quit') {?>
							&nbsp;&nbsp;/&nbsp;&nbsp;<span><a href="?_f=quit-staff<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">离职员工</a></span>
							&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on">员工档案详情</span>
							<?php } else { ?>
							&nbsp;&nbsp;/&nbsp;&nbsp;<span><a href="?_f=archives<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">员工档案</a></span>
							&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on">员工档案详情</span>
							<?php }?>
						</div>
						<div class="contentRightNavBottom"><span class="name"><?php echo $_smarty_tpl->tpl_vars['a']->value['staffName'];?>
 档案</span><span class="time">创建时间：<?php echo $_smarty_tpl->tpl_vars['a']->value['createTime'];?>
</span></div>
					</div>
				</div>
				<!--内容区导航end-->
				<!--内容区begin-->
				<div class="contentRightBox">
					<div class="contentRightContent">
						<!--员工档案详情内容 begin-->
						<div class="quitAppleContentBox">
							<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:public/html/archives.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

							<div class = "staffManageNav">
								<ul class = "clearfix margin-bottom-25">
									<li><a href="human-affairs.php?_f=archives-info<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">员工基本资料</a></li>
									<li><a href="human-affairs.php?_f=archives-family<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">家庭主要成员</a></li>
									<li class = "width12"><a href="human-affairs.php?_f=archives-edu<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">教育与工作经历</a></li>
									<li><a href="human-affairs.php?_f=archives-welfare<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">社保与公积金</a></li>
									<li><a href="human-affairs.php?_f=archives-entry<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">入职信息</a></li>
									<li><a href="human-affairs.php?_f=archives-contract<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">合同信息</a></li>
									<li><a href="human-affairs.php?_f=archives-leave<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">假期信息</a></li>
									<!-- <li><a href="human-affairs.php?_f=archives-officetool<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">备品分配</a></li>	 -->
									<li class="active"><a href="human-affairs.php?_f=archives-file<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">资料上传</a></li>
									<?php if ($_smarty_tpl->tpl_vars['nav']->value == 'quit') {?>
									<li><a href="human-affairs.php?_f=archives-quit<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">离职信息</a></li>
									<?php }?>
								</ul>
							</div>
							
							<div></div>
							<div class="quitApplyPart1 margin-bottom-165">
								<ul class="staff-ul1 staff-ul">
									<li>
										<span class="staff-text">身份证正反面：</span>
										<span class="staff-info">
											<?php if ($_smarty_tpl->tpl_vars['i']->value['idFile'] == '') {?>
											未上传
											<?php } else { ?>
											<a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['idFile'];?>
" target="_blank"><img src="/public/html/images/upload_ok.png"/><?php echo $_smarty_tpl->tpl_vars['a']->value['staffName'];?>
-身份证文件</a>
											<?php }?>
										</span>
									</li>
									<li>
										<span class="staff-text">学历证书：</span>
										<span class="staff-info">
											<?php if ($_smarty_tpl->tpl_vars['i']->value['eduFile'] == '') {?>
											未上传
											<?php } else { ?>
											<a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['eduFile'];?>
" target="_blank"><img src="/public/html/images/upload_ok.png"/><?php echo $_smarty_tpl->tpl_vars['a']->value['staffName'];?>
-学历证书</a>
											<?php }?>
										</span>
									</li>
									<li>
										<span class="staff-text">户口本：</span>
										<span class="staff-info">
											<?php if ($_smarty_tpl->tpl_vars['i']->value['registerFile'] == '') {?>
											未上传
											<?php } else { ?>
											<a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['registerFile'];?>
" target="_blank"><img src="/public/html/images/upload_ok.png"/><?php echo $_smarty_tpl->tpl_vars['a']->value['staffName'];?>
-户口本</a>
											<?php }?>
										</span>
									</li>
									<li>
										<span class="staff-text">体检报告：</span>
										<span class="staff-info">
											<?php if ($_smarty_tpl->tpl_vars['i']->value['reportFile'] == '') {?>
											未上传
											<?php } else { ?>
											<a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['reportFile'];?>
" target="_blank"><img src="/public/html/images/upload_ok.png"/><?php echo $_smarty_tpl->tpl_vars['a']->value['staffName'];?>
-体检报告</a>
											<?php }?>
										</span>
									</li>
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
									<li>
										<span class="staff-text"><?php echo $_smarty_tpl->tpl_vars['o']->value['attachName'];?>
：</span>
										<span class="staff-info"><a href="<?php echo $_smarty_tpl->tpl_vars['o']->value['attachFile'];?>
" target="_blank"><img src="/public/html/images/upload_ok.png"/><?php echo $_smarty_tpl->tpl_vars['a']->value['staffName'];?>
-<?php echo $_smarty_tpl->tpl_vars['o']->value['attachName'];?>
</a></span>
									</li>
									<?php
$_smarty_tpl->tpl_vars['o'] = $__foreach_others_0_saved_local_item;
}
if ($__foreach_others_0_saved_item) {
$_smarty_tpl->tpl_vars['o'] = $__foreach_others_0_saved_item;
}
?>
								</ul>
							</div>
						</div>
						<!--离职申请详情内容 End-->
					</div>
				</div>
				<!--内容区end-->
			</div>
			<!--内容区右侧end-->
		</div>

		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.jquery.placeholder.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/jquery.mCustomScrollbar.concat.min.js" ><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.respond.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/oa.common.js" ><?php echo '</script'; ?>
>

	</body>

</html><?php }
}
