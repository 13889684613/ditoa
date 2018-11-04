<?php
/* Smarty version 3.1.29, created on 2018-11-04 16:32:37
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/org/view/company-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bdeaea5a877f7_80010860',
  'file_dependency' => 
  array (
    '5d49d3d1dde74efee9695c31afdb8d05c3b01ad8' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/org/view/company-set.html',
      1 => 1541320353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bdeaea5a877f7_80010860 ($_smarty_tpl) {
?>
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

<form method="post">

	<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
	<input type="hidden" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" />
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
	<input type="hidden" name="act" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />

	企业信息：<br />
	<input type="text" name="cnName" placeholder="企业中文名称" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['cnName'];?>
" /><br />
	<input type="text" name="enName" placeholder="企业英文名称" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['enName'];?>
" /><br />
	<input type="text" name="cnAddress" placeholder="企业中文地址" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['cnAddress'];?>
" /><br />
	<input type="text" name="enAddress" placeholder="企业英文地址" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['enAddress'];?>
" /><br />
	<input type="text" name="cnOfficeAddress" placeholder="办公地址" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['cnOfficeAddress'];?>
" /><br />
	<input type="text" name="enOfficeAddress" placeholder="英文办公地址" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['enOfficeAddress'];?>
" /><br />

	联系信息：<br />
	<input type="text" name="zipCode" placeholder="邮编" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['zipCode'];?>
" /><br />
	<input type="text" name="phone" placeholder="电话" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['phone'];?>
" /><br />
	<input type="text" name="fax" placeholder="传真" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['fax'];?>
" /><br />

	人民币账户开户信息：<br />
	<input type="text" name="cnBank" placeholder="企业开户行" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['cnBank'];?>
" /><br />
	<input type="text" name="enBank" placeholder="开户行英文名称" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['enBank'];?>
" /><br />
	<input type="text" name="cnBankAddress" placeholder="开户行地址" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['cnBankAddress'];?>
" /><br />
	<input type="text" name="enBankAddress" placeholder="开户行英文地址" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['enBankAddress'];?>
" /><br />
	<input type="text" name="bankAccount" placeholder="开户行账号" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['bankAccount'];?>
" /><br />

	日元账户开户信息：<br />
	<input type="text" name="yenBank" placeholder="企业开户行" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['yenBank'];?>
" /><br />
	<input type="text" name="yenEnBank" placeholder="开户行英文名称" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['yenEnBank'];?>
" /><br />
	<input type="text" name="yenBankAddress" placeholder="开户行地址" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['yenBankAddress'];?>
" /><br />
	<input type="text" name="yenEnBankAddress" placeholder="开户行英文地址" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['yenEnBankAddress'];?>
" /><br />
	<input type="text" name="yenBankAccount" placeholder="开户行账号" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['yenBankAccount'];?>
" /><br />
	<input type="text" name="yenSwiftNo" placeholder="日元swiftNo编码" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['yenSwiftNo'];?>
" /><br />

	美元账户开户信息：<br />
	<input type="text" name="dollarBank" placeholder="企业开户行" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['dollarBank'];?>
" /><br />
	<input type="text" name="dollarEnBank" placeholder="开户行英文名称" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['dollarEnBank'];?>
" /><br />
	<input type="text" name="dollarBankAddress" placeholder="开户行地址" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['dollarBankAddress'];?>
" /><br />
	<input type="text" name="dollarEnBankAddress" placeholder="开户行英文地址" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['dollarEnBankAddress'];?>
" /><br />
	<input type="text" name="dollarBankAccount" placeholder="开户行账号" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['dollarBankAccount'];?>
" /><br />
	<input type="text" name="dollarSwiftNo" placeholder="日元swiftNo编码" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['dollarSwiftNo'];?>
" /><br />

	企业成立信息：<br />
	<input type="text" name="createDate" placeholder="成立日期" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['createDate'];?>
" /><br />
	<textarea name="business" placeholder="经营范围"><?php echo $_smarty_tpl->tpl_vars['i']->value['business'];?>
</textarea><br />

	其它信息：<br />
	<?php if ($_smarty_tpl->tpl_vars['action']->value == 'addSave') {?>
	<!-- 创建 begin -->
	<input type="text" name="title[]" placeholder="标题" value="" />
	<input type="text" name="content[]" placeholder="信息内容" value=""/><br />
	<input type="text" name="title[]" placeholder="标题" value=""/>
	<input type="text" name="content[]" placeholder="信息内容" value=""/><br />
	<!-- 创建 over -->
	<?php }?>

	<!-- 编辑 begin -->
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
	<input type="text" name="title[]" placeholder="标题" value="<?php echo $_smarty_tpl->tpl_vars['o']->value['otherName'];?>
" />
	<input type="text" name="content[]" placeholder="信息内容" value="<?php echo $_smarty_tpl->tpl_vars['o']->value['otherContent'];?>
"/><br />
	<?php
$_smarty_tpl->tpl_vars['o'] = $__foreach_others_0_saved_local_item;
}
if ($__foreach_others_0_saved_item) {
$_smarty_tpl->tpl_vars['o'] = $__foreach_others_0_saved_item;
}
?>
	<input type="text" name="title[]" placeholder="标题" value=""/>
	<input type="text" name="content[]" placeholder="信息内容" value=""/><br />
	<!-- 编辑 over -->

	<input type="submit" value="保存" />

</form><?php }
}
