<?php
/* Smarty version 3.1.29, created on 2018-12-14 16:51:20
  from "F:\website\ditoaCoder\ditoa\pc\public\html\menu.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c136f08d7f560_11109778',
  'file_dependency' => 
  array (
    '598ca1a5ac0c261d56269d7c1f39e6070f9e1e5c' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\public\\html\\menu.html',
      1 => 1544777480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c136f08d7f560_11109778 ($_smarty_tpl) {
?>
			<div class="contentLeftNav col-lg-2 row">
				<div class="contentLeftNavListTop col-lg-12">
					<div class="contentNavList col-md-12 row<?php echo $_smarty_tpl->tpl_vars['indexMenu']->value;?>
">
						<a href="?_f=index"><div class="contentNavListText"><img src="public/html/images/nav-image-a.png" alt="" class="navLogo" />首页</div></a>
					</div>
					<?php if (in_array('1',$_smarty_tpl->tpl_vars['menuOrg']->value)) {?>
					<div class="contentNavList col-md-12 row<?php echo $_smarty_tpl->tpl_vars['orgMenu']->value;?>
">
						<div class="contentNavListText"><img src="public/html/images/nav-image-b.png" alt="" class="navLogo" />DIT组织架构</div>
						<ul class="contentNavListMore">
							<?php if ($_smarty_tpl->tpl_vars['menuOrg']->value[0] == 1) {?>
							<li>
								<a href="">企业信息管理</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuOrg']->value[1] == 1) {?>
							<li class="active">
								<a href="">办事处管理</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuOrg']->value[2] == 1) {?>
							<li>
								<a href="">工作组管理</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuOrg']->value[3] == 1) {?>
							<li>
								<a href="">企业组织架构</a>
							</li>
							<?php }?>
						</ul>
					</div>
					<?php }?>
					<?php if (in_array('1',$_smarty_tpl->tpl_vars['menuHumanAffairs']->value)) {?>
					<div class="contentNavList col-md-12 row<?php echo $_smarty_tpl->tpl_vars['humanMenu']->value;?>
">
						<div class="contentNavListText"><img src="public/html/images/nav-image-c.png" alt="" class="navLogo" />人事管理</div>
						<ul class="contentNavListMore">
							<?php if ($_smarty_tpl->tpl_vars['menuHumanAffairs']->value[0] == 1) {?>
							<li>
								<a href="">企业资质证件</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuHumanAffairs']->value[1] == 1) {?>
							<li>
								<a href="">员工管理</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuHumanAffairs']->value[2] == 1) {?>
							<li>
								<a href="">员工档案管理</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuHumanAffairs']->value[3] == 1) {?>
							<li>
								<a href="">离职员工</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuHumanAffairs']->value[4] == 1) {?>
							<li>
								<a href="">转正考核</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuHumanAffairs']->value[5] == 1) {?>
							<li>
								<a href="">转正考核审批</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuHumanAffairs']->value[6] == 1) {?>
							<li>
								<a href="">离职申请</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuHumanAffairs']->value[7] == 1) {?>
							<li>
								<a href="">离职申请审批</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuHumanAffairs']->value[8] == 1) {?>
							<li>
								<a href="">企业规章制度</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuHumanAffairs']->value[9] == 1) {?>
							<li>
								<a href="">邮箱申请</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuHumanAffairs']->value[10] == 1) {?>
							<li>
								<a href="">邮箱审批</a>
							</li>
							<?php }?>
						</ul>
					</div>
					<?php }?>
					<?php if (in_array('1',$_smarty_tpl->tpl_vars['menuLeave']->value)) {?>
					<div class="contentNavList col-md-12 row<?php echo $_smarty_tpl->tpl_vars['leaveMenu']->value;?>
">
						<div class="contentNavListText"><img src="public/html/images/nav-image-d.png" alt="" class="navLogo" />请假管理</div>
						<ul class="contentNavListMore">
							<?php if ($_smarty_tpl->tpl_vars['menuLeave']->value[0] == 1) {?>
							<li>
								<a href="">申请假期</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuLeave']->value[1] == 1) {?>
							<li>
								<a href="">请假管理</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuLeave']->value[2] == 1) {?>
							<li>
								<a href="">假期审批</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuLeave']->value[3] == 1) {?>
							<li>
								<a href="">假期统计</a>
							</li>
							<?php }?>
						</ul>
					</div>
					<?php }?>
					<?php if (in_array('1',$_smarty_tpl->tpl_vars['menuBusinessTravel']->value)) {?>
					<div class="contentNavList col-md-12 row<?php echo $_smarty_tpl->tpl_vars['businessMenu']->value;?>
">
						<div class="contentNavListText"><img src="public/html/images/nav-image-e.png" alt="" class="navLogo" />出差管理</div>
						<ul class="contentNavListMore">
							<?php if ($_smarty_tpl->tpl_vars['menuBusinessTravel']->value[0] == 1) {?>
							<li>
								<a href="">出差申请</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuBusinessTravel']->value[1] == 1) {?>
							<li>
								<a href="">出差审批</a>
							</li>
							<?php }?>
						</ul>
					</div>
					<?php }?>
					<?php if (in_array('1',$_smarty_tpl->tpl_vars['menuCar']->value)) {?>
					<div class="contentNavList col-md-12 row<?php echo $_smarty_tpl->tpl_vars['carMenu']->value;?>
">
						<div class="contentNavListText"><img src="public/html/images/nav-image-f.png" alt="" class="navLogo" />车辆管理</div>
						<ul class="contentNavListMore">
							<?php if ($_smarty_tpl->tpl_vars['menuCar']->value[0] == 1) {?>
							<li>
								<a href="">车辆信息管理</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuCar']->value[1] == 1) {?>
							<li>
								<a href="">车辆行驶记录</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuCar']->value[2] == 1) {?>
							<li>
								<a href="">车辆行驶统计</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuCar']->value[3] == 1) {?>
							<li>
								<a href="">车辆维修管理</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuCar']->value[4] == 1) {?>
							<li>
								<a href="">车辆维修审批</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuCar']->value[5] == 1) {?>
							<li>
								<a href="">车辆维修费用管理</a>
							</li>
							<?php }?>
						</ul>
					</div>
					<?php }?>
					<?php if (in_array('1',$_smarty_tpl->tpl_vars['menuOfficeTool']->value)) {?>
					<div class="contentNavList col-md-12 row<?php echo $_smarty_tpl->tpl_vars['officeMenu']->value;?>
">
						<div class="contentNavListText"><img src="public/html/images/nav-image-g.png" alt="" class="navLogo" />办公备品管理</div>
						<ul class="contentNavListMore">
							<?php if ($_smarty_tpl->tpl_vars['menuOfficeTool']->value[0] == 1) {?>
							<li>
								<a href="">办公备品管理</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuOfficeTool']->value[1] == 1) {?>
							<li>
								<a href="">办公备品审批</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuOfficeTool']->value[2] == 1) {?>
							<li>
								<a href="">办公备品入库管理</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuOfficeTool']->value[3] == 1) {?>
							<li>
								<a href="">办公备品分配记录</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuOfficeTool']->value[4] == 1) {?>
							<li>
								<a href="">办公备品出库管理</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuOfficeTool']->value[5] == 1) {?>
							<li>
								<a href="">办公备品使用统计</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuOfficeTool']->value[6] == 1) {?>
							<li>
								<a href="">办公备品盘点</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuOfficeTool']->value[7] == 1) {?>
							<li>
								<a href="">办公备品调转部门</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuOfficeTool']->value[8] == 1) {?>
							<li>
								<a href="">调转部门审批</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuOfficeTool']->value[9] == 1) {?>
							<li>
								<a href="">办公备品统计</a>
							</li>
							<?php }?>
						</ul>
					</div>
					<?php }?>
					<?php if (in_array('1',$_smarty_tpl->tpl_vars['menuGeneralAffairs']->value)) {?>
					<div class="contentNavList col-md-12 row<?php echo $_smarty_tpl->tpl_vars['generalMenu']->value;?>
">
						<div class="contentNavListText"><img src="public/html/images/nav-image-h.png" alt="" class="navLogo" />综合事务管理</div>
						<ul class="contentNavListMore">
							<?php if ($_smarty_tpl->tpl_vars['menuGeneralAffairs']->value[0] == 1) {?>
							<li>
								<a href="">企业规章制度管理</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuGeneralAffairs']->value[1] == 1) {?>
							<li>
								<a href="">企业动态管理</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuGeneralAffairs']->value[2] == 1) {?>
							<li>
								<a href="">企业资质证件管理</a>
							</li>
							<?php }?>
						</ul>
					</div>
					<?php }?>
					<?php if (in_array('1',$_smarty_tpl->tpl_vars['menuSystem']->value)) {?>
					<div class="contentNavList col-md-12 row<?php echo $_smarty_tpl->tpl_vars['systemMenu']->value;?>
">
						<div class="contentNavListText"><img src="public/html/images/nav-image-j.png" alt="" class="navLogo" />系统运维管理</div>
						<ul class="contentNavListMore">
							<?php if ($_smarty_tpl->tpl_vars['menuSystem']->value[0] == 1) {?>
							<li>
								<a href="">系统角色权限设置</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuSystem']->value[1] == 1) {?>
							<li>
								<a href="">审批角色权限设置</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuSystem']->value[2] == 1) {?>
							<li>
								<a href="">自定义审批流程设置</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuSystem']->value[3] == 1) {?>
							<li>
								<a href="">默认审批流程设置</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuSystem']->value[4] == 1) {?>
							<li>
								<a href="">职务管理</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuSystem']->value[5] == 1) {?>
							<li>
								<a href="">请假类型管理</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuSystem']->value[6] == 1) {?>
							<li>
								<a href="">备品类别管理</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuSystem']->value[7] == 1) {?>
							<li>
								<a href="">备品名称管理</a>
							</li>
							<?php }?>
						</ul>
					</div>
					<?php }?>
					<?php if (in_array('1',$_smarty_tpl->tpl_vars['menuSignPower']->value)) {?>
					<div class="contentNavList col-md-12 row<?php echo $_smarty_tpl->tpl_vars['signMenu']->value;?>
">
						<div class="contentNavListText"><img src="public/html/images/nav-image-i.png" alt="" class="navLogo" />考勤管理</div>
						<ul class="contentNavListMore">
							<?php if ($_smarty_tpl->tpl_vars['menuSignPower']->value[0] == 1) {?>
							<li>
								<a href="">考勤时间管理</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuSignPower']->value[1] == 1) {?>
							<li>
								<a href="">打卡记录</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuSignPower']->value[2] == 1) {?>
							<li>
								<a href="">打卡统计</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuSignPower']->value[3] == 1) {?>
							<li>
								<a href="">每日打卡记录</a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menuSignPower']->value[4] == 1) {?>
							<li>
								<a href="">打卡时间</a>
							</li>
							<?php }?>
						</ul>
					</div>
					<?php }?>
					<div class="contentNavList col-md-12 row<?php echo $_smarty_tpl->tpl_vars['messageMenu']->value;?>
">
						<div class="contentNavListText"><img src="public/html/images/nav-image-i.png" alt="" class="navLogo" />系统消息</div>
						<ul class="contentNavListMore">
							<li>
								<a href="">系统消息</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="contentNavBottom col-lg-12">© 2019 大连国际货运有限公司<br />All Right Reserved</div>
			</div>
	<?php }
}
