<?php
/* Smarty version 3.1.29, created on 2018-12-13 14:31:48
  from "F:\website\ditoaCoder\ditoa\pc\system\view\check-role.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c11fcd48e5906_56424346',
  'file_dependency' => 
  array (
    '14a7d4ad7c802b8301f7599de2be5a645b80d01e' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\system\\view\\check-role.html',
      1 => 1541989828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c11fcd48e5906_56424346 ($_smarty_tpl) {
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
				<div><?php echo $_smarty_tpl->tpl_vars['i']->value['checkRoleName'];?>
</div>
				<div><?php echo $_smarty_tpl->tpl_vars['i']->value['createTime'];?>
</div>
				<div>
					<input id="rank<?php echo $_smarty_tpl->tpl_vars['i']->value['checkRoleId'];?>
" name="rank<?php echo $_smarty_tpl->tpl_vars['i']->value['checkRoleId'];?>
" class="m-wrap" type="text" size="5" style="width:30px;height: 9px;margin: 0;" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['rank'];?>
"/>
					<a href="javascript:void(0);" onclick="javascript:location.href='?_f=check-role&act=updateRank&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['checkRoleId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
&rank='+document.getElementById('rank<?php echo $_smarty_tpl->tpl_vars['i']->value['checkRoleId'];?>
').value;">保存</a>
				</div>
				<div>
					<a href="?_f=check-role&act=remove&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['checkRoleId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
">删除</a>
					<a href="?_f=check-role-set&act=edit&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['checkRoleId'];
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