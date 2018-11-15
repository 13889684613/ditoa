<?php
/* Smarty version 3.1.29, created on 2018-11-15 22:12:03
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/index/view/index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bed7eb35a0e50_03555031',
  'file_dependency' => 
  array (
    'c3f837d1d6618db41a36db209cd6b70db8746e4f' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/index/view/index.html',
      1 => 1542291122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bed7eb35a0e50_03555031 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
</head>
<body>
	<?php if ($_smarty_tpl->tpl_vars['messageContent']->value != '') {?>
	系统消息：<?php echo $_smarty_tpl->tpl_vars['messageContent']->value;?>

	<?php }?>
	友情提示：<?php echo $_smarty_tpl->tpl_vars['common_staffName']->value;?>
 ，欢迎您回来，祝你开心每一天！
	快捷方式：<a href="">请假申请</a>&nbsp;<a href="">我的档案</a>&nbsp;<a href="">企业规章制度</a><a href="">组织架构</a>&nbsp;<a href="">系统消息<?php if ($_smarty_tpl->tpl_vars['common_noRead']->value > 0) {?>（<?php echo $_smarty_tpl->tpl_vars['common_noRead']->value;?>
）<?php }?></a><br />
	企业动态：更多
	<table>
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
		<tr>
			<td><a href="general-affairs.php?_f=news-info&i=<?php echo $_smarty_tpl->tpl_vars['n']->value['newsId'];?>
"><?php echo $_smarty_tpl->tpl_vars['n']->value['title'];?>
</a></td>
			<td><?php echo $_smarty_tpl->tpl_vars['n']->value['newsTime'];?>
</td>
		</tr>
		<?php
$_smarty_tpl->tpl_vars['n'] = $__foreach_news_0_saved_local_item;
}
if ($__foreach_news_0_saved_item) {
$_smarty_tpl->tpl_vars['n'] = $__foreach_news_0_saved_item;
}
?>
	</table><br />
	企业活动：更多
	<table>
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
		<tr>
			<td><a href="general-affairs.php?_f=actives-info&i=<?php echo $_smarty_tpl->tpl_vars['a']->value['newsId'];?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value['title'];?>
</a></td>
			<td><?php echo $_smarty_tpl->tpl_vars['a']->value['newsTime'];?>
</td>
		</tr>
		<?php
$_smarty_tpl->tpl_vars['a'] = $__foreach_actives_1_saved_local_item;
}
if ($__foreach_actives_1_saved_item) {
$_smarty_tpl->tpl_vars['a'] = $__foreach_actives_1_saved_item;
}
?>
	</table>
</body>
</html><?php }
}
