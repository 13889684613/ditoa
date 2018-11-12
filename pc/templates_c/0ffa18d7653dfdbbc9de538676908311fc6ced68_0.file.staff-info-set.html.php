<?php
/* Smarty version 3.1.29, created on 2018-11-12 21:45:31
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/staff-info-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5be983fb3c84b0_88993416',
  'file_dependency' => 
  array (
    '0ffa18d7653dfdbbc9de538676908311fc6ced68' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/staff-info-set.html',
      1 => 1542029489,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be983fb3c84b0_88993416 ($_smarty_tpl) {
?>
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

<form method="post">

	<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
	<input type="hidden" name="s_company" value="<?php echo $_smarty_tpl->tpl_vars['s_company']->value;?>
" />
	<input type="hidden" name="s_office" value="<?php echo $_smarty_tpl->tpl_vars['s_office']->value;?>
" />
	<input type="hidden" name="s_role" value="<?php echo $_smarty_tpl->tpl_vars['s_role']->value;?>
" />
	<input type="hidden" name="s_post" value="<?php echo $_smarty_tpl->tpl_vars['s_post']->value;?>
" />
	<input type="hidden" name="s_status" value="<?php echo $_smarty_tpl->tpl_vars['s_status']->value;?>
" />
	<input type="hidden" name="s_begintime" value="<?php echo $_smarty_tpl->tpl_vars['s_begintime']->value;?>
" />
	<input type="hidden" name="s_overtime" value="<?php echo $_smarty_tpl->tpl_vars['s_overtime']->value;?>
" />
	<input type="hidden" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" />
	<input type="hidden" name="s_idno" value="<?php echo $_smarty_tpl->tpl_vars['s_idno']->value;?>
" />
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
	<input type="hidden" name="act" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />

	<select name="company">
		<option value=""<?php if ($_smarty_tpl->tpl_vars['i']->value['companyId'] == 0) {?> selected=true<?php }?>>所属企业</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['companys']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_companys_0_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$__foreach_companys_0_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['companyId'];?>
"<?php if ($_smarty_tpl->tpl_vars['i']->value['companyId'] == $_smarty_tpl->tpl_vars['c']->value['companyId']) {?> selected=true<?php }?>><?php echo $_smarty_tpl->tpl_vars['c']->value['cnName'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_companys_0_saved_local_item;
}
if ($__foreach_companys_0_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_companys_0_saved_item;
}
?>
	</select>

	<select name="office">
		<option value=""<?php if ($_smarty_tpl->tpl_vars['i']->value['officeId'] == 0) {?> selected=true<?php }?>>所属部门</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['offices']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_offices_1_saved_item = isset($_smarty_tpl->tpl_vars['o']) ? $_smarty_tpl->tpl_vars['o'] : false;
$_smarty_tpl->tpl_vars['o'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['o']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
$__foreach_offices_1_saved_local_item = $_smarty_tpl->tpl_vars['o'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['o']->value['officeId'];?>
"<?php if ($_smarty_tpl->tpl_vars['i']->value['officeId'] == $_smarty_tpl->tpl_vars['o']->value['officeId']) {?> selected=true<?php }?>><?php echo $_smarty_tpl->tpl_vars['o']->value['officeName'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['o'] = $__foreach_offices_1_saved_local_item;
}
if ($__foreach_offices_1_saved_item) {
$_smarty_tpl->tpl_vars['o'] = $__foreach_offices_1_saved_item;
}
?>
	</select>

	<select name="group">
		<option value=""<?php if ($_smarty_tpl->tpl_vars['i']->value['groupId'] == 0) {?> selected=true<?php }?>>所属工作组</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['groups']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_groups_2_saved_item = isset($_smarty_tpl->tpl_vars['g']) ? $_smarty_tpl->tpl_vars['g'] : false;
$_smarty_tpl->tpl_vars['g'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['g']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
$__foreach_groups_2_saved_local_item = $_smarty_tpl->tpl_vars['g'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['g']->value['groupId'];?>
"<?php if ($_smarty_tpl->tpl_vars['i']->value['groupId'] == $_smarty_tpl->tpl_vars['g']->value['groupId']) {?> selected=true<?php }?>><?php echo $_smarty_tpl->tpl_vars['g']->value['groupName'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['g'] = $__foreach_groups_2_saved_local_item;
}
if ($__foreach_groups_2_saved_item) {
$_smarty_tpl->tpl_vars['g'] = $__foreach_groups_2_saved_item;
}
?>
	</select>

	<br />

	<input type="text" name="staffName" placeholder="真实姓名" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['staffName'];?>
" /><br />

	<select name="post">
		<option value=""<?php if ($_smarty_tpl->tpl_vars['i']->value['postId'] == 0) {?> selected=true<?php }?>>职务</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_posts_3_saved_item = isset($_smarty_tpl->tpl_vars['p']) ? $_smarty_tpl->tpl_vars['p'] : false;
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$__foreach_posts_3_saved_local_item = $_smarty_tpl->tpl_vars['p'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['postId'];?>
"<?php if ($_smarty_tpl->tpl_vars['i']->value['postId'] == $_smarty_tpl->tpl_vars['p']->value['postId']) {?> selected=true<?php }?>><?php echo $_smarty_tpl->tpl_vars['p']->value['postName'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['p'] = $__foreach_posts_3_saved_local_item;
}
if ($__foreach_posts_3_saved_item) {
$_smarty_tpl->tpl_vars['p'] = $__foreach_posts_3_saved_item;
}
?>
	</select>

	性别:
	<?php
$_from = $_smarty_tpl->tpl_vars['sex']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_4_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_4_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_4_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
	<input type="radio" name="sex" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['i']->value['sex'] == $_smarty_tpl->tpl_vars['key']->value) {?> checked="true"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>

	<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_4_saved_local_item;
}
if ($__foreach_value_4_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_4_saved_item;
}
if ($__foreach_value_4_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_4_saved_key;
}
?>
	<input type="text" name="idNumber" placeholder="身份证号" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['idNumber'];?>
" /><br />
	<?php if ($_smarty_tpl->tpl_vars['i']->value['photo'] != '') {?>
	<img src="/upload/images/staff/head/<?php echo $_smarty_tpl->tpl_vars['i']->value['photo'];?>
" />
	<input type="hidden" name="oldHead" value="/upload/images/staff/head/<?php echo $_smarty_tpl->tpl_vars['i']->value['photo'];?>
">
	<?php }?>
	<input type="file" name="photo" value="上传照片" /><br />
	<input type="text" name="birthDate" placeholder="出生日期" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['birthDate'];?>
" /><br />
	农历：
	<select name="lunarMonth">
		<option value="" value="">月份</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['lunarMonths']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_5_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_5_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_5_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['i']->value['lunarMonth'] == $_smarty_tpl->tpl_vars['value']->value) {?> selected="true"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
		<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_5_saved_local_item;
}
if ($__foreach_value_5_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_5_saved_item;
}
if ($__foreach_value_5_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_5_saved_key;
}
?>
	</select>
	<select name="lunarDay">
		<option value="" value="">日期</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['lunarDays']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_6_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_6_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_6_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['i']->value['lunarDay'] == $_smarty_tpl->tpl_vars['value']->value) {?> selected="true"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
		<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_6_saved_local_item;
}
if ($__foreach_value_6_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_6_saved_item;
}
if ($__foreach_value_6_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_6_saved_key;
}
?>
	</select>

	<input type="text" name="lunarHour" placeholder="时" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['lunarHour'];?>
" />

	<input type="text" name="lunarMinute" placeholder="分" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['lunarMinute'];?>
" /><br />

	<input type="text" name="tel" placeholder="手机号" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['tel'];?>
" /><br />

	<input type="text" name="phone" placeholder="座机号" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['phone'];?>
" />&nbsp;<input type="text" name="extensionNumber" placeholder="分机号" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['extensionNumber'];?>
" /><br />

	<input type="text" name="email" placeholder="邮箱地址" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['email'];?>
" /><br />

	<input type="text" name="address" placeholder="联系地址" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['address'];?>
" /><br />

	<input type="text" name="school" placeholder="毕业学校" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['school'];?>
" /><br />

	<select name="education">
		<option value="" value="">学历</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['educations']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_7_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_7_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_7_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['i']->value['education'] == $_smarty_tpl->tpl_vars['key']->value) {?> selected="true"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
		<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_7_saved_local_item;
}
if ($__foreach_value_7_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_7_saved_item;
}
if ($__foreach_value_7_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_7_saved_key;
}
?>
	</select>

	<input type="text" name="major" placeholder="所学专业" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['major'];?>
" /><br />

	<input type="text" name="registerAddress" placeholder="户口所在地" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['registerAddress'];?>
" /><br />

	户口性质：
	<?php
$_from = $_smarty_tpl->tpl_vars['registers']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_8_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_8_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_8_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
	<input type="radio" name="registerNature" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['i']->value['registerNature'] == $_smarty_tpl->tpl_vars['key']->value) {?> checked="true"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>

	<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_8_saved_local_item;
}
if ($__foreach_value_8_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_8_saved_item;
}
if ($__foreach_value_8_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_8_saved_key;
}
?>

	<select name="politicalType">
		<option value="" value="">政治面貌</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['politicals']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_9_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_9_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_9_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['i']->value['politicalType'] == $_smarty_tpl->tpl_vars['key']->value) {?> selected="true"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
		<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_9_saved_local_item;
}
if ($__foreach_value_9_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_9_saved_item;
}
if ($__foreach_value_9_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_9_saved_key;
}
?>
	</select>

	<input type="text" name="nation" placeholder="民族" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['nation'];?>
" /><br />

	<input type="text" name="height" placeholder="身高" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['height'];?>
" /><br />cm

	<input type="text" name="weight" placeholder="体重" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['weight'];?>
" /><br />kg

	血型：
	<?php
$_from = $_smarty_tpl->tpl_vars['bloods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_10_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_10_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_10_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
	<input type="radio" name="blood" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['i']->value['blood'] == $_smarty_tpl->tpl_vars['key']->value) {?> checked="true"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>

	<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_10_saved_local_item;
}
if ($__foreach_value_10_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_10_saved_item;
}
if ($__foreach_value_10_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_10_saved_key;
}
?>

	婚姻状况：
	<?php
$_from = $_smarty_tpl->tpl_vars['maritals']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_11_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_11_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_11_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
	<input type="radio" name="marital" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['i']->value['maritalStatus'] == $_smarty_tpl->tpl_vars['key']->value) {?> checked="true"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>

	<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_11_saved_local_item;
}
if ($__foreach_value_11_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_11_saved_item;
}
if ($__foreach_value_11_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_11_saved_key;
}
?>

	<input type="text" name="firstWorkDate" placeholder="首次参加工作时间" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['firstWorkDate'];?>
" /><br />

	<input type="text" name="quitDate" placeholder="原单位解除合同日" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['quitDate'];?>
" /><br />

	<input type="text" name="cnBankAccount" placeholder="中国银行卡号" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['cnBankAccount'];?>
" /><br />

	<input type="text" name="busFee" placeholder="公交线路单程车费" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['busFee'];?>
" /><br />

	背景调查：<textarea name="background"><?php echo $_smarty_tpl->tpl_vars['i']->value['background'];?>
</textarea>

	备注：<textarea name="remark"><?php echo $_smarty_tpl->tpl_vars['i']->value['remark'];?>
</textarea>

	<?php if ($_smarty_tpl->tpl_vars['action']->value == 'editSave') {?>
	修改资料备注：<textarea name="updateRemark" placeholder="请标明调整内容及原因"></textarea>
	<?php }?>

	<input type="submit" value="保存" />

</form><?php }
}
