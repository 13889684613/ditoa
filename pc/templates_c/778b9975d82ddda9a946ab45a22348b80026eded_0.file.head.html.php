<?php
/* Smarty version 3.1.29, created on 2018-12-14 21:02:47
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/public/html/head.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c13a9f7199430_11617449',
  'file_dependency' => 
  array (
    '778b9975d82ddda9a946ab45a22348b80026eded' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/public/html/head.html',
      1 => 1544791776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c13a9f7199430_11617449 ($_smarty_tpl) {
?>
		<!--头部 begin-->
		<div class="header clearfix">
			<!--左侧logo  begin-->
			<div class="headerLogoLeft pull-left"><img src="public/html/images/logo.png" alt="" /></div>
			<!--左侧logo  end-->
			<!--右侧信息 begin-->
			<div class="headerInfo pull-right clearfix">
				<div class="headerInfoImages pull-left">
					<img src="public/html/images/newMessage.png" alt="" />
					<?php if ($_smarty_tpl->tpl_vars['common_noRead']->value > 0) {?>
					<a href=""><img src="public/html/images/new-message.jpg" alt="" class="newMessage" /></a>
					<?php }?>
				</div>
				<div class="headerHandName pull-left clearfix">
					<!--头像begin-->
					<div class="headerHand pull-left"><img src="<?php echo $_smarty_tpl->tpl_vars['common_head']->value;?>
" /><div class="headMask"></div></div>
					<!--头像end-->
					<!--姓名begin-->
					<div class="headerNameInfo pull-left">
						<div class="headerNameText"><?php echo $_smarty_tpl->tpl_vars['common_staffName']->value;?>
</div>
						<div class="headerhoner"><?php echo $_smarty_tpl->tpl_vars['common_officeName']->value;?>
</div>
					</div>
					<!--姓名end-->
					<div class="headerMore pull-left">
						<img src="public/html/images/header-down.jpg" alt="" />
					</div>
					<!--设置密码begin-->
					<div class="headerSet">
						<ul>
							<li><a href="index.php?_f=update-password">修改密码</a></li>
							<li><a href="?act=quitPost&<?php echo $_smarty_tpl->tpl_vars['QUERY_STRING']->value;?>
">退出登录</a></li>
						</ul>
					</div>
					<!--设置密码end-->
				</div>
			</div>
			<!--右侧信息 end-->
		</div>
		<!--头部 end--><?php }
}
