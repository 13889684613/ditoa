<?php
/* Smarty version 3.1.29, created on 2018-12-02 15:04:55
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/archives-info.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c0384178b18e0_11584498',
  'file_dependency' => 
  array (
    'e644ca394fdfee16d730787b19241dc886bf23ae' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/archives-info.html',
      1 => 1543734271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0384178b18e0_11584498 ($_smarty_tpl) {
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
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />

	<div style="margin-bottom: 30px;">
		<?php echo $_smarty_tpl->tpl_vars['i']->value['staffName'];?>
&nbsp;&nbsp;创建时间：<?php echo $_smarty_tpl->tpl_vars['i']->value['createTime'];?>

	</div>

	<div style="margin-bottom: 30px;">
		试用期：
		<?php if ($_smarty_tpl->tpl_vars['i']->value['try'] != '') {?>
		<?php echo $_smarty_tpl->tpl_vars['i']->value['try'];?>

		<?php }?>
		<br />
		转正：
		<?php if (count($_smarty_tpl->tpl_vars['i']->value['turn']) > 0) {?>
		考核人：<?php echo $_smarty_tpl->tpl_vars['i']->value['turn'][2];?>
<br />
		考核时间：<?php echo $_smarty_tpl->tpl_vars['i']->value['turn'][1];?>
<br />
		考核结果：<?php echo $_smarty_tpl->tpl_vars['i']->value['turn'][0];?>

		<?php }?>
		<br />
		合同签订：
		<?php if ($_smarty_tpl->tpl_vars['i']->value['contract'] != '') {?>
		<?php echo $_smarty_tpl->tpl_vars['i']->value['contract'];?>

		<?php }?>
		<br />
		离职：
		<?php if ($_smarty_tpl->tpl_vars['i']->value['quit'] != '') {?>
		<?php echo $_smarty_tpl->tpl_vars['i']->value['quit'];?>

		<?php }?>
		<br />
		DTI与您一起成长
	</div>

	<div style="line-height:25px;">

		员工基本资料：<br />

		<?php if ($_smarty_tpl->tpl_vars['i']->value['photo'] != '') {?>
		<img src="upload/images/staff/head/<?php echo $_smarty_tpl->tpl_vars['i']->value['photo'];?>
" />
		<br />
		<?php }?>

		所属企业：<?php echo $_smarty_tpl->tpl_vars['i']->value['company'];?>
&nbsp;&nbsp;&nbsp;&nbsp;所属部门：<?php echo $_smarty_tpl->tpl_vars['i']->value['office'];?>
&nbsp;&nbsp;&nbsp;&nbsp;所属工作组：<?php echo $_smarty_tpl->tpl_vars['i']->value['group'];?>
<br />
		真实姓名：<?php echo $_smarty_tpl->tpl_vars['i']->value['staffName'];?>
&nbsp;&nbsp;&nbsp;&nbsp;性别：<?php echo $_smarty_tpl->tpl_vars['i']->value['sex'];?>
&nbsp;&nbsp;&nbsp;&nbsp;职务：<?php echo $_smarty_tpl->tpl_vars['i']->value['post'];?>
<br />
		身份证号：<?php echo $_smarty_tpl->tpl_vars['i']->value['idNumber'];?>
&nbsp;&nbsp;&nbsp;&nbsp;出生日期：<?php echo $_smarty_tpl->tpl_vars['i']->value['birthDate'];?>
&nbsp;&nbsp;&nbsp;&nbsp;农历：<?php echo $_smarty_tpl->tpl_vars['i']->value['lunar'];?>
<br />
		手机号：<?php echo $_smarty_tpl->tpl_vars['i']->value['tel'];?>
&nbsp;&nbsp;&nbsp;&nbsp;座机号：<?php echo $_smarty_tpl->tpl_vars['i']->value['phone'];?>
&nbsp;&nbsp;&nbsp;&nbsp;邮箱：<?php echo $_smarty_tpl->tpl_vars['i']->value['email'];?>
<br />
		联系地址：<?php echo $_smarty_tpl->tpl_vars['i']->value['address'];?>
&nbsp;&nbsp;&nbsp;&nbsp;毕业学校：<?php echo $_smarty_tpl->tpl_vars['i']->value['school'];?>
&nbsp;&nbsp;&nbsp;&nbsp;学历：<?php echo $_smarty_tpl->tpl_vars['i']->value['education'];?>
<br />
		所学专业：<?php echo $_smarty_tpl->tpl_vars['i']->value['major'];?>
&nbsp;&nbsp;&nbsp;&nbsp;户口所在地：<?php echo $_smarty_tpl->tpl_vars['i']->value['registerAddress'];?>
&nbsp;&nbsp;&nbsp;&nbsp;户口性质：<?php echo $_smarty_tpl->tpl_vars['i']->value['registerNature'];?>
<br />
		政治面貌：<?php echo $_smarty_tpl->tpl_vars['i']->value['politicalType'];?>
&nbsp;&nbsp;&nbsp;&nbsp;民族：<?php echo $_smarty_tpl->tpl_vars['i']->value['nation'];?>
&nbsp;&nbsp;&nbsp;&nbsp;身高：<?php echo $_smarty_tpl->tpl_vars['i']->value['height'];?>
cm<br />
		体重：<?php echo $_smarty_tpl->tpl_vars['i']->value['weight'];?>
KG&nbsp;&nbsp;&nbsp;&nbsp;血型：<?php echo $_smarty_tpl->tpl_vars['i']->value['bloods'];?>
&nbsp;&nbsp;&nbsp;&nbsp;婚姻状况：<?php echo $_smarty_tpl->tpl_vars['i']->value['marital'];?>
<br />
		首次参加工作时间：<?php echo $_smarty_tpl->tpl_vars['i']->value['firstWorkDate'];?>
&nbsp;&nbsp;&nbsp;&nbsp;原单位解除合同日：<?php echo $_smarty_tpl->tpl_vars['i']->value['quitDate'];?>
&nbsp;&nbsp;&nbsp;&nbsp;中国银行卡号：<?php echo $_smarty_tpl->tpl_vars['i']->value['cnBankAccount'];?>
<br />
		公交线路单程车费：<?php echo $_smarty_tpl->tpl_vars['i']->value['busFee'];?>
&nbsp;&nbsp;&nbsp;&nbsp;
		<?php if ($_smarty_tpl->tpl_vars['otherPower']->value[0] == 1) {?>
		背景调查：<?php echo $_smarty_tpl->tpl_vars['i']->value['background'];?>
&nbsp;&nbsp;&nbsp;&nbsp;
		<?php }?>
		<br />
		微信激活：<?php echo $_smarty_tpl->tpl_vars['i']->value['wechat'];?>

		<?php if ($_smarty_tpl->tpl_vars['i']->value['wechatActivate'] == 1) {?>
		&nbsp;&nbsp;&nbsp;&nbsp;激活时间：<?php echo $_smarty_tpl->tpl_vars['i']->value['activateTime'];?>

		<?php }?>


	</div>


</form><?php }
}
