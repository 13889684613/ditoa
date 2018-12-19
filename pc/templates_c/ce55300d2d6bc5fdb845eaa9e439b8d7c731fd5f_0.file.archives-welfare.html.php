<?php
/* Smarty version 3.1.29, created on 2018-12-19 16:45:24
  from "F:\website\ditoaCoder\ditoa\pc\humanAffairs\view\archives-welfare.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c1a0524573549_00391440',
  'file_dependency' => 
  array (
    'ce55300d2d6bc5fdb845eaa9e439b8d7c731fd5f' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\humanAffairs\\view\\archives-welfare.html',
      1 => 1545209050,
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
function content_5c1a0524573549_00391440 ($_smarty_tpl) {
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
		<link rel="stylesheet" href="humanAffairs/view/css/archives-welfare.css" />
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
						<div class="contentRightNavTop"><span><a href="index.php?_f=index">首页</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span><a href="?_f=archives<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">员工档案</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on">员工档案详情</span></div>
						<div class="contentRightNavBottom"><span class="name">员工档案详情 &nbsp;&nbsp;-&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['a']->value['staffName'];?>
</span><span class="time">创建时间：<?php echo $_smarty_tpl->tpl_vars['a']->value['createTime'];?>
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
									<li class="active"><a href="human-affairs.php?_f=archives-welfare<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">社保与公积金</a></li>
									<li><a href="human-affairs.php?_f=archives-entry<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">入职信息</a></li>
									<li><a href="human-affairs.php?_f=archives-contract<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">合同信息</a></li>
									<li><a href="human-affairs.php?_f=archives-leave<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">假期信息</a></li>
									<li><a href="human-affairs.php?_f=archives-officeTool<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">备品分配</a></li>	
									<li><a href="human-affairs.php?_f=archives-file<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
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
										<span class="staff-text">养老保险编号：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['insuranceNo'];?>
</span>
									</li>
									<li>
										<span class="staff-text">社保帐户状态：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['insuranceStatus'];?>
</span>
									</li>
									<li>
										<span class="staff-text">末次社保缴纳日期：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['insuranceOverDate'];?>
</span>
									</li>
									
								</ul>
								
								<ul class="staff-ul2 staff-ul">
									<li>
										<span class="staff-text">公积金编号：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['fundNo'];?>
</span>
									</li>
									<li>
										<span class="staff-text">公积金帐户状态：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['fundStatus'];?>
</span>
									</li>
									<li>
										<span class="staff-text">末次公积金缴纳日期：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['fundOverDate'];?>
</span>
									</li>
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
