<?php
/* Smarty version 3.1.29, created on 2018-10-28 08:53:48
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/system/view/system-role.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bd5089cdce1a7_44442547',
  'file_dependency' => 
  array (
    '31b7e567cae4937bef4cc64e31c4f28d1d4c6c7b' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/system/view/system-role.html',
      1 => 1540445221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd5089cdce1a7_44442547 ($_smarty_tpl) {
?>
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

		<ul>
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
			<li>
				<div><?php echo $_smarty_tpl->tpl_vars['i']->value['sn'];?>
</div>
				<div><?php echo $_smarty_tpl->tpl_vars['i']->value['sysRoleName'];?>
</div>
				<div><?php echo $_smarty_tpl->tpl_vars['i']->value['createTime'];?>
</div>
				<div>
					<input id="rank<?php echo $_smarty_tpl->tpl_vars['i']->value['sysRoleId'];?>
" name="rank<?php echo $_smarty_tpl->tpl_vars['i']->value['sysRoleId'];?>
" class="m-wrap" type="text" size="5" style="width:30px;height: 9px;margin: 0;" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['rank'];?>
"/>
					<a href="javascript:void(0);" onclick="javascript:location.href='?_f=system-role&act=updateRank&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['sysRoleId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
&rank='+document.getElementById('rank<?php echo $_smarty_tpl->tpl_vars['i']->value['sysRoleId'];?>
').value;">保存</a>
				</div>
				<div>
					<a href="?_f=system-role&act=remove&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['sysRoleId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
">删除</a>
					<a href="?_f=system-role-set&act=edit&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['sysRoleId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
">修改</a>
				</div>
			</li>
			<?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_0_saved_local_item;
}
if ($__foreach_data_0_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_0_saved_item;
}
?>
			
		</ul>
		<div class="pagebox">
			<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

		</div>
	</div>
<?php }
}
