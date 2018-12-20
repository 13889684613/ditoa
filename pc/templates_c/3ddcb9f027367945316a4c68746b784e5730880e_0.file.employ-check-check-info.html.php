<?php
/* Smarty version 3.1.29, created on 2018-12-20 19:49:16
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/employ-check-check-info.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c1b81bca2f403_17191336',
  'file_dependency' => 
  array (
    '3ddcb9f027367945316a4c68746b784e5730880e' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/employ-check-check-info.html',
      1 => 1545306285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/html/head.html' => 1,
    'file:public/html/menu.html' => 1,
  ),
),false)) {
function content_5c1b81bca2f403_17191336 ($_smarty_tpl) {
?>
<!--
	作者：sxh
	时间：2018-11-28
	描述：转正考核
-->
<!DOCTYPE html>
<html>

	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
		<link rel="stylesheet" href="public/html/css/oa.base.css" />
		<link rel="stylesheet" href="public/html/css/oa.bootstrap.min.css" />
		<link rel="stylesheet" href="public/html/css/plugin/jquery.mCustomScrollbar.min.css" />
		<link rel="stylesheet" href="public/html/css/oa.common.css" />
		<link rel="stylesheet" href="humanAffairs/view/css/employ-check-info.css" />
	</head>

	<body>
		<!--头部 begin-->
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:public/html/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<!--头部 end-->

		<!--内容 begin-->
		<div class="container-fluid row">
			<!--内容区左侧导航 begin-->
			<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:public/html/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<!--内容区左侧导航end-->
			<!--内容区右侧begin-->
			<div class="contentRight col-lg-10 row">
				<!--内容区导航begin-->
				<div class="contentRightNav clearfix">
					<div class="contentRightNavLeft pull-left">
						<div class="contentRightNavTop"><span><a href="index.php?_f=index">首页</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span><a href="?_f=employ-check<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">转正考核</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on">转正考核详情</span></div>
						<div class="contentRightNavBottom"><span class="name">转正考核详情 &nbsp;&nbsp;-&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['i']->value['staffName'];?>
</span><span class="time">创建时间：<?php echo $_smarty_tpl->tpl_vars['i']->value['appraiseTime'];?>
</span></div>
					</div>
					<!--状态begin-->
					<div class="contentRightNavRight pull-right clearfix">
						<div class="contentRightNavRightTxt<?php echo $_smarty_tpl->tpl_vars['i']->value['statusClass'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['statusText'];?>
</div>
					</div>
					<!--状态end-->
				</div>
				<!--内容区导航end-->
				<!--内容区begin-->
				<div class="contentRightBox">
					<div class="contentRightContent">
						<!--离职申请详情内容 begin-->
						<div class="quitAppleContentBox">
							<div class="quitApplyPart1 margin-bottom-40">
								<div class="quitApplyPart1-image">
									<img src="<?php echo $_smarty_tpl->tpl_vars['i']->value['photo'];?>
" />
								</div>
								<div class="quitApplyMeaasge1">
									<div class="rowQuit">
										<div class="lable">申请人：</div>
										<div class="message"><?php echo $_smarty_tpl->tpl_vars['i']->value['staffName'];?>
</div>
									</div>
									<div class="rowQuit">
										<div class="lable">所属部门：</div>
										<div class="message"><?php echo $_smarty_tpl->tpl_vars['i']->value['office'];?>
</div>
									</div>
								</div>
								<div class="quitApplyMeaasge1 border-right-none">
									<div class="rowQuit">
										<div class="lable">试用期：</div>
										<div class="message"><?php echo $_smarty_tpl->tpl_vars['i']->value['try'];?>
</div>
									</div>
									<div class="rowQuit">
										<div class="lable">所属工作组：</div>
										<div class="message"><?php echo $_smarty_tpl->tpl_vars['i']->value['group'];?>
</div>
									</div>
								</div>
							</div>
							<div class="apply-step-box">
								<h1 class="titleTips">转正考核</h1>
								<div class="stepPart">
									<!--
                                    	作者：xhxhxh
                                    	时间：2018-11-20
                                    	描述：蓝色线的长度---0 19.5% 39.1% 58.7% 78.3% 100%
                                    -->
									<div class="stepActiveLine" style="width: <?php echo $_smarty_tpl->tpl_vars['i']->value['blueLineWidth'];?>
;"></div>
									<div class="stepNormalLine"></div>
									<?php
$_from = $_smarty_tpl->tpl_vars['process']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_process_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_process']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_process'] : false;
$__foreach_process_0_saved_item = isset($_smarty_tpl->tpl_vars['p']) ? $_smarty_tpl->tpl_vars['p'] : false;
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_process'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_process']->value['iteration']++;
$__foreach_process_0_saved_local_item = $_smarty_tpl->tpl_vars['p'];
?>
									<div class="<?php echo $_smarty_tpl->tpl_vars['p']->value['circleClass'];?>
position<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_process']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_process']->value['iteration'] : null);?>
"><!--完成圆-->
										<div class="stepContentBox">
											<div class="text1<?php echo $_smarty_tpl->tpl_vars['p']->value['fontColor'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['role'];?>
</div>
											<div class="text2"><?php echo $_smarty_tpl->tpl_vars['p']->value['staff'];?>
</div>
											<div class="text2"><?php echo $_smarty_tpl->tpl_vars['p']->value['result'];?>
</div>
											<div class="text2"><?php echo $_smarty_tpl->tpl_vars['p']->value['time'];?>
</div>
										</div>
									</div>
									<?php
$_smarty_tpl->tpl_vars['p'] = $__foreach_process_0_saved_local_item;
}
if ($__foreach_process_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_process'] = $__foreach_process_0_saved;
}
if ($__foreach_process_0_saved_item) {
$_smarty_tpl->tpl_vars['p'] = $__foreach_process_0_saved_item;
}
?>
									<div class="circleNormal position6">
										<div class="stepContentBox">
											<div class="text1">完成</div>
										</div>
									</div>
								</div>
							</div>
							<div class="official-assessment-out-box">
								<h1 class="official-assessment-navBox">
									<div<?php if ($_smarty_tpl->tpl_vars['i']->value['checkStatus'] == 2) {?> class="active"<?php }?>>考核结果</div>
									<div<?php if ($_smarty_tpl->tpl_vars['i']->value['checkStatus'] != 2) {?> class="active"<?php }?>>员工转正考核表</div>
								</h1>
							</div>

							<!--不再录用-->
							<div class="tabBox<?php if ($_smarty_tpl->tpl_vars['i']->value['checkStatus'] != 2) {?> displayNone"<?php }?>">
								<?php if ($_smarty_tpl->tpl_vars['i']->value['checkStatus'] == 0) {?>
								<div class="official-assessment-status">
									<img src="public/html/images/icon-extend.png"/>
									<div class="statusTips1">待审批</div>
									<div class="statusTips2"><?php echo $_smarty_tpl->tpl_vars['i']->value['staffName'];?>
 小伙伴儿，请耐心等待哦</div>
								</div>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['i']->value['checkStatus'] == 1) {?>
								<div class="official-assessment-status">
									<img src="public/html/images/icon-extend.png"/>
									<div class="statusTips1">审批中</div>
									<div class="statusTips2"><?php echo $_smarty_tpl->tpl_vars['i']->value['staffName'];?>
 小伙伴儿，正在审批中，请耐心等待哦</div>
								</div>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['i']->value['checkResult'] == 3) {?>
								<div class="official-assessment-status">
									<img src="humanAffairs/view/images/no.png"/>
									<div class="statusTips1">不再录用</div>
									<div class="statusTips2">很遗憾，<?php echo $_smarty_tpl->tpl_vars['i']->value['staffName'];?>
没有通过转正考核，将于<?php echo $_smarty_tpl->tpl_vars['i']->value['quitDate'];?>
离开DIT</div>
								</div>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['i']->value['checkResult'] == 2) {?>
								<div class="official-assessment-status">
									<img src="humanAffairs/view/images/ok.png"/>
									<div class="statusTips1">正式录用</div>
									<div class="statusTips2">恭喜 <?php echo $_smarty_tpl->tpl_vars['i']->value['staffName'];?>
  通过转正考核，欢迎加入DIT大家庭</div>
									<div class="statusTips2">“工作认真负责，欢迎你的加入”</div>
								</div>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['i']->value['checkResult'] == 1) {?>
								<div class="official-assessment-status">
									<img src="public/html/images/icon-extend.png"/>
									<div class="statusTips1">延长试用期</div>
									<div class="statusTips2"><?php echo $_smarty_tpl->tpl_vars['i']->value['staffName'];?>
  根据你试用期的表现，公司经再三考虑，决定延长试用期至<?php echo $_smarty_tpl->tpl_vars['i']->value['tryOverDate'];?>
</div>
									<div class="statusTips2">“请继续努力，加油！”</div>
								</div>
								<?php }?>
								<?php if (count($_smarty_tpl->tpl_vars['check']->value) > 0) {?>
								<div class="tableBox">
									
									<h1 class="tableTips">审批详情</h1>
									<table class="table1 table1Content">
										<tr style="height: 54px;">
											<th class="paddingLeft27 text-center" width="194"><span>审批级别</span></th>
											<th width="207"><span>审批角色</span></th>
											<th width="186"><span>审批状态</span></th>
											<th width="185"><span>审批意见</span></th>
											<th width="200"><span>审批人</span></th>
											<th class="" width="529"><span>审批时间</span></th>
										</tr>
										<?php
$_from = $_smarty_tpl->tpl_vars['check']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_check_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_check']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_check'] : false;
$__foreach_check_1_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_check'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_check']->value['iteration']++;
$__foreach_check_1_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
										<tr<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_check']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_check']->value['iteration'] : null)%2 == 1) {?> class="backgroundFFF"<?php }?>>
											<td class="text-center"><span><?php echo $_smarty_tpl->tpl_vars['c']->value['checkLevel'];?>
</span></td>
											<td><span><?php echo $_smarty_tpl->tpl_vars['c']->value['role'];?>
</span></td>
											<td><div class="apply-status apply-status-finished"><?php echo $_smarty_tpl->tpl_vars['c']->value['result'];?>
</div></td>
											<td class="opinion"><?php echo $_smarty_tpl->tpl_vars['c']->value['remark'];?>
</td>
											<td><span><?php echo $_smarty_tpl->tpl_vars['c']->value['checkUsr'];?>
</span></td>
											<td class=""><?php echo $_smarty_tpl->tpl_vars['c']->value['checkTime'];?>
</td>
										</tr>
										<?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_check_1_saved_local_item;
}
if ($__foreach_check_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_check'] = $__foreach_check_1_saved;
}
if ($__foreach_check_1_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_check_1_saved_item;
}
?>
									</table>
								</div>
								<?php }?>
							</div>
							
							<!--表-->
							<div class="official-assessment-box tabBox<?php if ($_smarty_tpl->tpl_vars['i']->value['checkStatus'] == 2) {?> displayNone"<?php }?>">
								<div class="official-inner">
									<div class="resultBox">
										<table>
											<tr>
												<td width="767" class="font24-td">考核结果： <?php echo $_smarty_tpl->tpl_vars['i']->value['scoreLevel'];?>
</td>
												<td class="font24-td" width="592">总得分： <span><?php echo $_smarty_tpl->tpl_vars['i']->value['score'];?>
</span> 分</td>
											</tr>
											<tr>
												<td class="font14-td">考核标准：A.136分以上&nbsp;&nbsp; B.136分-110分&nbsp;&nbsp;C.110分-84分&nbsp;&nbsp;D.84分以下</td>
												<td></td>
											</tr>
										</table>
									</div>
									<form class="scoreForm">
									<h1 class="official-assessment-h1">个人品德</h1>
									<div class="tableBox">
										<table class="official-assessment-choose-table">
											<thead>
												<th width="424" ><span class="left34">考核内容</span></th>
												<th width="195">优（10分）</th>
												<th width="195">良（8分）</th>
												<th width="195">中（6分）</th>
												<th width="193">可（4分）</th>
												<th width="195">差（2分）</th>
											</thead>
											<tbody>
												<tr>
													<td><span class="left34">人际关系</span></td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['rjgx'] == 10) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['rjgx'] == 8) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['rjgx'] == 6) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['rjgx'] == 4) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['rjgx'] == 2) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="2">
													</td>
												</tr>
												<tr>
													<td><span class="left34">协作性</span></td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['xzx'] == 10) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['xzx'] == 8) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['xzx'] == 6) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['xzx'] == 4) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['xzx'] == 2) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="2">
													</td>
												</tr>
												<tr>
													<td><span class="left34">个人修养</span></td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['grxy'] == 10) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['grxy'] == 8) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['grxy'] == 6) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['grxy'] == 4) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['grxy'] == 2) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="2">
													</td>
												</tr>
											</tbody>
										</table>
										<div class="totalScoreBox">
											<div class="totalScore">
												<span>得分：</span>
												<span class="score"><?php echo $_smarty_tpl->tpl_vars['i']->value['moralityScore'];?>
</span>
												<span>分</span>
											</div>
										</div>
									</div>
									
									<h1 class="official-assessment-h1">勤务态度</h1>
									<div class="tableBox">
										<table class="official-assessment-choose-table">
											<thead>
												<th width="424" ><span class="left34">考核内容</span></th>
												<th width="195">优（10分）</th>
												<th width="195">良（8分）</th>
												<th width="195">中（6分）</th>
												<th width="193">可（4分）</th>
												<th width="195">差（2分）</th>
											</thead>
											<tbody>
												<tr>
													<td><span class="left34">严格遵守工作制度，有效利用工作时间</span></td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['xiaolv'] == 10) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['xiaolv'] == 8) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['xiaolv'] == 6) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['xiaolv'] == 4) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['xiaolv'] == 2) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="2">
													</td>
												</tr>
												<tr>
													<td><span class="left34">对新工作持积极态度</span></td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['taidu'] == 10) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['taidu'] == 8) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['taidu'] == 6) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['taidu'] == 4) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['taidu'] == 2) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="2">
													</td>
												</tr>
												<tr>
													<td><span class="left34">忠于职守，坚守岗位</span></td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['zyzs'] == 10) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['zyzs'] == 8) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['zyzs'] == 6) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['zyzs'] == 4) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['zyzs'] == 2) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="2">
													</td>
												</tr>
											</tbody>
										</table>
										<div class="totalScoreBox">
											<div class="totalScore">
												<span>得分：</span>
												<span class="score"><?php echo $_smarty_tpl->tpl_vars['i']->value['attitudeScore'];?>
</span>
												<span>分</span>
											</div>
										</div>
									</div>

									<h1 class="official-assessment-h1">业务能力</h1>
									<div class="tableBox">
										<table class="official-assessment-choose-table">
											<thead>
												<th width="424" ><span class="left34">考核内容</span></th>
												<th width="195">优（10分）</th>
												<th width="195">良（8分）</th>
												<th width="195">中（6分）</th>
												<th width="193">可（4分）</th>
												<th width="195">差（2分）</th>
											</thead>
											<tbody>
												<tr>
													<td><span class="left34">以主人公精神与同事同心协力努力工作</span></td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['zrg'] == 10) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['zrg'] == 8) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['zrg'] == 6) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['zrg'] == 4) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['zrg'] == 2) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="2">
													</td>
												</tr>
												<tr>
													<td><span class="left34">正确认识工作目的，正确处理业务</span></td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['mudi'] == 10) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['mudi'] == 8) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['mudi'] == 6) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['mudi'] == 4) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['mudi'] == 2) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="2">
													</td>
												</tr>
												<tr>
													<td><span class="left34">不打乱工作秩序，不妨碍他人工作</span></td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['shunxu'] == 10) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['shunxu'] == 8) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['shunxu'] == 6) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['shunxu'] == 4) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['shunxu'] == 2) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="2">
													</td>
												</tr>
											</tbody>
										</table>
										<div class="totalScoreBox">
											<div class="totalScore">
												<span>得分：</span>
												<span class="score"><?php echo $_smarty_tpl->tpl_vars['i']->value['businessScore'];?>
</span>
												<span>分</span>
											</div>
										</div>
									</div>
									
									<h1 class="official-assessment-h1">工作效率</h1>
									<div class="tableBox">
										<table class="official-assessment-choose-table">
											<thead>
												<th width="424" ><span class="left34">考核内容</span></th>
												<th width="195">优（10分）</th>
												<th width="195">良（8分）</th>
												<th width="195">中（6分）</th>
												<th width="193">可（4分）</th>
												<th width="195">差（2分）</th>
											</thead>
											<tbody>
												<tr>
													<td><span class="left34">工作速度快，不误工期</span></td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['speed'] == 10) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['speed'] == 8) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['speed'] == 6) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['speed'] == 4) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['speed'] == 2) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="2">
													</td>
												</tr>
												<tr>
													<td><span class="left34">业务处置得当，经常保持良好成绩</span></td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['chengji'] == 10) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['chengji'] == 8) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['chengji'] == 6) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['chengji'] == 4) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['chengji'] == 2) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="2">
													</td>
												</tr>
												<tr>
													<td><span class="left34">工作方法合理，时间和经费的使用十分有效</span></td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['heli'] == 10) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['heli'] == 8) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['heli'] == 6) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['heli'] == 4) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['heli'] == 2) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="2">
													</td>
												</tr>
												<tr>
													<td><span class="left34">工作中没有半途而废，不了了之和造成后遗症的现象</span></td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['btef'] == 10) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['btef'] == 8) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['btef'] == 6) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['btef'] == 4) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['btef'] == 2) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="2">
													</td>
												</tr>
											</tbody>
										</table>
										<div class="totalScoreBox">
											<div class="totalScore">
												<span>得分：</span>
												<span class="score"><?php echo $_smarty_tpl->tpl_vars['i']->value['efficiencyScore'];?>
</span>
												<span>分</span>
											</div>
										</div>
									</div>

									<h1 class="official-assessment-h1">业绩</h1>
									<div class="tableBox">
										<table class="official-assessment-choose-table">
											<thead>
												<th width="424" ><span class="left34">考核内容</span></th>
												<th width="195">优（10分）</th>
												<th width="195">良（8分）</th>
												<th width="195">中（6分）</th>
												<th width="193">可（4分）</th>
												<th width="195">差（2分）</th>
											</thead>
											<tbody>
												<tr>
													<td><span class="left34">工作成果达到预期目的或计划要求</span></td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['yaoqiu'] == 10) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['yaoqiu'] == 8) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['yaoqiu'] == 6) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['yaoqiu'] == 4) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['yaoqiu'] == 2) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="2">
													</td>
												</tr>
												<tr>
													<td><span class="left34">工作总结和汇报准确真实</span></td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['zongjie'] == 10) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['zongjie'] == 8) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['zongjie'] == 6) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['zongjie'] == 4) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['zongjie'] == 2) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="2">
													</td>
												</tr>
												<tr>
													<td><span class="left34">工作中熟练程度和技能提高较快</span></td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['shulian'] == 10) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['shulian'] == 8) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['shulian'] == 6) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['shulian'] == 4) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment<?php if ($_smarty_tpl->tpl_vars['i']->value['shulian'] == 2) {?> radioBox-official-assessment-active<?php } else { ?> radioBox-official-assessment-normal<?php }?> middle-radioBox-official-assessment" data-score="2">
													</td>
												</tr>
											</tbody>
										</table>
										<div class="totalScoreBox">
											<div class="totalScore">
												<span>得分：</span>
												<span class="score"><?php echo $_smarty_tpl->tpl_vars['i']->value['achievementScore'];?>
</span>
												<span>分</span>
											</div>
										</div>
									</div>

									<h1 class="official-assessment-h1">考勤情况</h1>
									<div class="formBox-official-assessment">
										<table class="checkWorkTable">
											<tr>
												<td>
													<div class="number"><?php echo $_smarty_tpl->tpl_vars['i']->value['late'];?>
</div>
													<div class="numberTips">迟到（次）</div>
												</td>
												<td>
													<div class="number"><?php echo $_smarty_tpl->tpl_vars['i']->value['earlyRetreat'];?>
</div>
													<div class="numberTips">早退（次）</div>
												</td>
												<td>
													<div class="number"><?php echo $_smarty_tpl->tpl_vars['i']->value['sickLeave'];?>
</div>
													<div class="numberTips">病假（天）</div>
												</td>
												<td class="">
													<div class="number"><?php echo $_smarty_tpl->tpl_vars['i']->value['eventLeave'];?>
</div>
													<div class="numberTips">事假（天）</div>
												</td>
												<td class="borderRight0">
													<div class="number"><?php echo $_smarty_tpl->tpl_vars['i']->value['absenteeism'];?>
</div>
													<div class="numberTips">旷工（天）</div>
												</td>
											</tr>
										</table>
									</div>
									</form>
									
									
									
								</div>
								
							</div>
							<!--表结束-->
							
							
						</div>
						<!--离职申请详情内容 End-->
					</div>
				</div>
				<!--内容区end-->
			</div>
			<!--内容区右侧end-->
		</div>

		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/oa.common.js" ><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/jquery.mCustomScrollbar.concat.min.js" ><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.respond.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.jquery.placeholder.min.js" ><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="humanAffairs/view/js/employ-check-info.js" ><?php echo '</script'; ?>
>
		<!--<?php echo '<script'; ?>
 type="text/javascript" src="js/official-assessment.js" ><?php echo '</script'; ?>
>-->
	</body>

</html><?php }
}
