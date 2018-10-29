<?php
/* Smarty version 3.1.29, created on 2018-10-25 19:19:10
  from "F:\website\ditoa\pc\system\view\system-role-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bd1a6ae9e39a7_71042353',
  'file_dependency' => 
  array (
    '378b5387ec52b1e3e660906fd44df83c3a976b66' => 
    array (
      0 => 'F:\\website\\ditoa\\pc\\system\\view\\system-role-set.html',
      1 => 1540466343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd1a6ae9e39a7_71042353 ($_smarty_tpl) {
?>
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

<form method="post">
<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
<input type="hidden" name="s_roleName" value="<?php echo $_smarty_tpl->tpl_vars['s_roleName']->value;?>
" />
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
<input type="hidden" name="act" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
<input type="text" name="roleName" placeholder="系统角色名称" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['sysRoleName'];?>
" /><br />
<input type="text" name="rank" value="<?php echo $_smarty_tpl->tpl_vars['rank']->value;?>
" placeholder="排序" /><br />

<input type="checkbox" name="m1" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['orgPower'][0] == 1) {?> checked<?php }?>>企业信息管理<br />
<input type="checkbox" name="m2" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['orgPower'][1] == 1) {?> checked<?php }?>>办事处<br />
<input type="checkbox" name="m3" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['orgPower'][2] == 1) {?> checked<?php }?>>工作组<br />
<input type="checkbox" name="m4" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['orgPower'][3] == 1) {?> checked<?php }?>>企业组织架构<br /><br />

<input type="checkbox" name="m5" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][0] == 1) {?> checked<?php }?>>企业资质证件<br />
<input type="checkbox" name="m6" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][1] == 1) {?> checked<?php }?>>员工管理<br />
<input type="checkbox" name="m7" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][2] == 1) {?> checked<?php }?>>员工档案管理<br />
<input type="checkbox" name="m8" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][3] == 1) {?> checked<?php }?>>离职员工<br />
<input type="checkbox" name="m9" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][4] == 1) {?> checked<?php }?>>转正考核<br />
<input type="checkbox" name="m10" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][5] == 1) {?> checked<?php }?>>转正考核审批<br />
<input type="checkbox" name="m11" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][6] == 1) {?> checked<?php }?>>离职申请<br />
<input type="checkbox" name="m12" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][7] == 1) {?> checked<?php }?>>离职申请审批<br />
<input type="checkbox" name="m13" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][8] == 1) {?> checked<?php }?>>企业规章制度<br />
<input type="checkbox" name="m14" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][9] == 1) {?> checked<?php }?>>邮箱申请<br />
<input type="checkbox" name="m15" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['humanAffairsPower'][10] == 1) {?> checked<?php }?>>邮箱审批<br /><br />

<input type="checkbox" name="m16" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['leavePower'][0] == 1) {?> checked<?php }?>>申请假期<br />
<input type="checkbox" name="m17" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['leavePower'][1] == 1) {?> checked<?php }?>>请假管理<br />
<input type="checkbox" name="m18" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['leavePower'][2] == 1) {?> checked<?php }?>>假期审批<br />
<input type="checkbox" name="m19" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['leavePower'][3] == 1) {?> checked<?php }?>>假期统计<br /><br />

<input type="checkbox" name="m20" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['businessTravelPower'][0] == 1) {?> checked<?php }?>>出差申请<br />
<input type="checkbox" name="m21" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['businessTravelPower'][1] == 1) {?> checked<?php }?>>出差审批<br /><br />

<input type="checkbox" name="m22" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['carPower'][0] == 1) {?> checked<?php }?>>车辆信息管理<br />
<input type="checkbox" name="m23" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['carPower'][1] == 1) {?> checked<?php }?>>车辆行驶记录<br />
<input type="checkbox" name="m24" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['carPower'][2] == 1) {?> checked<?php }?>>车辆行驶统计<br />
<input type="checkbox" name="m25" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['carPower'][3] == 1) {?> checked<?php }?>>车辆维修管理<br />
<input type="checkbox" name="m26" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['carPower'][4] == 1) {?> checked<?php }?>>车辆维修审批<br />
<input type="checkbox" name="m27" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['carPower'][5] == 1) {?> checked<?php }?>>车辆维修费用管理<br /><br />

<input type="checkbox" name="m28" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][0] == 1) {?> checked<?php }?>>办公备品管理<br />
<input type="checkbox" name="m29" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][1] == 1) {?> checked<?php }?>>办公备品审批<br />
<input type="checkbox" name="m30" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][2] == 1) {?> checked<?php }?>>办公备品入库管理<br />
<input type="checkbox" name="m31" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][3] == 1) {?> checked<?php }?>>办公备品分配记录<br />
<input type="checkbox" name="m32" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][4] == 1) {?> checked<?php }?>>办公备品出库管理<br />
<input type="checkbox" name="m33" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][5] == 1) {?> checked<?php }?>>办公备品使用统计<br />
<input type="checkbox" name="m34" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][6] == 1) {?> checked<?php }?>>办公备品盘点<br />
<input type="checkbox" name="m35" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][7] == 1) {?> checked<?php }?>>办公备品调转部门<br />
<input type="checkbox" name="m36" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][8] == 1) {?> checked<?php }?>>调转部门审批<br />
<input type="checkbox" name="m37" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['officeToolPower'][9] == 1) {?> checked<?php }?>>办公备品统计<br /><br />

<input type="checkbox" name="m38" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['generalAffairsPower'][0] == 1) {?> checked<?php }?>>企业规章制度管理<br />
<input type="checkbox" name="m39" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['generalAffairsPower'][1] == 1) {?> checked<?php }?>>企业动态管理<br />
<input type="checkbox" name="m40" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['generalAffairsPower'][2] == 1) {?> checked<?php }?>>企业资质证件管理<br /><br />

<input type="checkbox" name="m41" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][0] == 1) {?> checked<?php }?>>系统角色权限设置<br />
<input type="checkbox" name="m42" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][1] == 1) {?> checked<?php }?>>审批角色权限设置<br />
<input type="checkbox" name="m43" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][2] == 1) {?> checked<?php }?>>自定义审批流程设置<br />
<input type="checkbox" name="m44" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][3] == 1) {?> checked<?php }?>>默认审批流程设置<br />
<input type="checkbox" name="m45" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][4] == 1) {?> checked<?php }?>>职务管理<br />
<input type="checkbox" name="m46" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][5] == 1) {?> checked<?php }?>>请假类型管理<br />
<input type="checkbox" name="m47" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][6] == 1) {?> checked<?php }?>>备品类别管理<br />
<input type="checkbox" name="m48" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['systemPower'][7] == 1) {?> checked<?php }?>>备品名称管理<br /><br />

<input type="checkbox" name="m49" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['signPower'][0] == 1) {?> checked<?php }?>>考勤时间管理<br />
<input type="checkbox" name="m50" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['signPower'][1] == 1) {?> checked<?php }?>>打卡记录<br />
<input type="checkbox" name="m51" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['signPower'][2] == 1) {?> checked<?php }?>>打卡统计<br />
<input type="checkbox" name="m52" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['signPower'][3] == 1) {?> checked<?php }?>>每日打卡记录<br />
<input type="checkbox" name="m53" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['signPower'][4] == 1) {?> checked<?php }?>>打卡时间<br /><br />

<input type="submit" value="保存" />
</form>
<?php }
}
