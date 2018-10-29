<?php
/* Smarty version 3.1.29, created on 2018-10-28 11:18:59
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/system/view/officeTool-name.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bd52aa34d2458_71618100',
  'file_dependency' => 
  array (
    '69eb81bb09871a91bbb8daf79cbb27ef57c14268' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/system/view/officeTool-name.html',
      1 => 1540696736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd52aa34d2458_71618100 ($_smarty_tpl) {
?>
<meta charset="utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

<table border="1">
	<tr>
		<td>#</td>
		<td>所属备品类别</td>
		<td>备品名称</td>
		<td>名称编号</td>
		<td>生成编号</td>
		<td>排序</td>
		<td>操作</td>
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
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['sn'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['toolCategory'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['toolName'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['toolCode'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['isFixedAssets'];?>
</td>
		<td>
			<input id="rank<?php echo $_smarty_tpl->tpl_vars['i']->value['nameId'];?>
" name="rank<?php echo $_smarty_tpl->tpl_vars['i']->value['nameId'];?>
" class="m-wrap" type="text" size="5" style="width:30px;height: 9px;margin: 0;" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['rank'];?>
"/><a href="javascript:void(0);" onclick="javascript:location.href='?_f=officeTool-name&act=updateRank&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['nameId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
&rank='+document.getElementById('rank<?php echo $_smarty_tpl->tpl_vars['i']->value['nameId'];?>
').value;">保存</a>
		</td>
		<td>
			<a href="?_f=officeTool-name&act=remove&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['nameId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
">删除</a>
			<a href="?_f=officeTool-name-set&act=edit&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['nameId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
">修改</a>
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
<div class="pagebox">
	<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

</div><?php }
}
