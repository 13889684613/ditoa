<?php
/* Smarty version 3.1.29, created on 2018-12-21 10:04:03
  from "F:\website\ditoaCoder\ditoa\pc\humanAffairs\view\archives-info.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c1c4a139dd204_21073132',
  'file_dependency' => 
  array (
    'be8d89f8d2a98bf4fbc67a6e26cea8d940f0791a' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\humanAffairs\\view\\archives-info.html',
      1 => 1545357361,
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
function content_5c1c4a139dd204_21073132 ($_smarty_tpl) {
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
		<link rel="stylesheet" href="humanAffairs/view/css/archives-info.css" />
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
									<li class="active"><a href="human-affairs.php?_f=archives-info<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
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
									<!-- <li><a href="human-affairs.php?_f=archives-officeTool<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">备品分配</a></li>	 -->
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
								<div class="quitApplyPart1-image">
									<?php if ($_smarty_tpl->tpl_vars['i']->value['photo'] != '') {?>
									<img src="upload/images/staff/head/<?php echo $_smarty_tpl->tpl_vars['i']->value['photo'];?>
" />
									<?php }?>
								</div>
								<ul class="staff-ul1 staff-ul">
									<li>
										<span class="staff-text">所属企业：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['company'];?>
</span>
									</li>
									<li>
										<span class="staff-text">所属工作组：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['group'];?>
</span>
									</li>
									<li>
										<span class="staff-text">真实姓名：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['staffName'];?>
</span>
									</li>
									<li>
										<span class="staff-text">身份证号：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['idNumber'];?>
</span>
									</li>
									<li>
										<span class="staff-text">手机号：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['tel'];?>
</span>
									</li>
									<li>
										<span class="staff-text">邮箱：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['email'];?>
</span>
									</li>
									<li>
										<span class="staff-text">毕业院校：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['school'];?>
</span>
									</li>
									<li>
										<span class="staff-text">专业：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['major'];?>
</span>
									</li>
									<li>
										<span class="staff-text">民族：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['nation'];?>
</span>
									</li>
									<li>
										<span class="staff-text">政治面貌：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['politicalType'];?>
</span>
									</li>
									<li>
										<span class="staff-text">身高：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['height'];?>
CM</span>
									</li>
									<li>
										<span class="staff-text">婚姻状况：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['marital'];?>
</span>
									</li>
									<li>
										<span class="staff-text">中国银行卡号：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['cnBankAccount'];?>
</span>
									</li>
									<li>
										<span class="staff-text">公交线路单程车费：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['busFee'];?>
</span>
									</li>
									<?php if ($_smarty_tpl->tpl_vars['otherPower']->value[0] == 1) {?>
									<li>
										<span class="staff-text">背景调查：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['background'];?>
</span>
									</li>
									<?php }?>
									
								</ul>
								
								<ul class="staff-ul2 staff-ul">
									<li>
										<span class="staff-text">所属部门：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['office'];?>
</span>
									</li>
									<li>
										<span class="staff-text">职务：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['post'];?>
</span>
									</li>
									<li>
										<span class="staff-text">性别：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['sex'];?>
</span>
									</li>
									<li>
										<span class="staff-text">出生日期：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['birthDate'];?>
&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['i']->value['lunar'];?>
</span>
									</li>
									<li>
										<span class="staff-text">座机号：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['phone'];?>
</span>
									</li>
									<li>
										<span class="staff-text">联系地址：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['address'];?>
</span>
									</li>
									<li>
										<span class="staff-text">学历：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['education'];?>
</span>
									</li>
									<li>
										<span class="staff-text">户口所在地：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['registerAddress'];?>
</span>
									</li>
									<li>
										<span class="staff-text">户口性质：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['registerNature'];?>
</span>
									</li>
									<li>
										<span class="staff-text">血型：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['bloods'];?>
</span>
									</li>
									<li>
										<span class="staff-text">体重：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['weight'];?>
KG</span>
									</li>
									<li>
										<span class="staff-text">首次参加工作时间：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['firstWorkDate'];?>
</span>
									</li>
									<li>
										<span class="staff-text">原单位解除合同日：</span>
										<span class="staff-info"><?php echo $_smarty_tpl->tpl_vars['i']->value['quitDate'];?>
</span>
									</li>
									<li>
										<span class="staff-text">微信激活：</span>
										<span class="staff-info">
										<?php echo $_smarty_tpl->tpl_vars['i']->value['wechat'];?>

										<?php if ($_smarty_tpl->tpl_vars['i']->value['activateTime'] != '') {?>
										（激活时间：<?php echo $_smarty_tpl->tpl_vars['i']->value['activateTime'];?>
）
										<?php }?>
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
