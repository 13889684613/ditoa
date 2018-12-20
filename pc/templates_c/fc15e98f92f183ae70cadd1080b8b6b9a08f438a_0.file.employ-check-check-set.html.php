<?php
/* Smarty version 3.1.29, created on 2018-12-20 19:58:56
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/employ-check-check-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c1b8400a06400_90500791',
  'file_dependency' => 
  array (
    'fc15e98f92f183ae70cadd1080b8b6b9a08f438a' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/employ-check-check-set.html',
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
function content_5c1b8400a06400_90500791 ($_smarty_tpl) {
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
		<link rel="stylesheet" href="public/html/css/oa.jquery-ui.min.css" />
		<link rel="stylesheet" href="public/html/css/plugin/jquery.mCustomScrollbar.min.css" />
		<link rel="stylesheet" href="public/html/css/oa.common.css" />
		<link rel="stylesheet" href="humanAffairs/view/css/employ-check-check-set.css" />
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
						<div class="contentRightNavTop"><span><a href="index.php?_f=index">首页</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span><a href="?_f=employ-check-check<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">转正考核审批</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on">转正考核审批详情</span></div>
						<div class="contentRightNavBottom"><span class="name">转正考核审批详情 &nbsp;&nbsp;-&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['i']->value['staffName'];?>
</span><span class="time">创建时间：<?php echo $_smarty_tpl->tpl_vars['i']->value['appraiseTime'];?>
</span></div>
					</div>
					<div class="buttonGroup2">
						<a><div class="button-refuse cursorPointer button-out" data-type="1">不再录用</div></a>
						<a><div class="button-extend cursorPointer button-extend" data-type="3">延长试用期</div></a>
						<a><div class="button-pass-quit cursorPointer button-regular" data-type="2">正式录用</div></a>
						<input type="hidden" name="result" id="assessmentType" value="" />
					</div>
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
							<div class="official-assessment-out-box">
								<h1 class="official-assessment-navBox">
									<div class="active">员工转正考核表</div>
									<div class="">考核结果</div>
								</h1>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['i']->value['checkStatus'] != 2) {?>
							<!--正式录用-->
							<div class="tabBox-regular displayNone">
								<div class="official-assessment-out-box margin-bottom-40">
									<div class="official-assessment-out-content">
										<form id="lyForm" class="official-assessment-regular-form">
											<input type="hidden" name="result" value="2" />
											<input type="hidden" name="act" value="checkPost" />
											<p class = "formTitle">录用情况（选填）</p>
											<textarea name="remark" class="official-assessment-regular" placeholder="请输入"></textarea>
											<p class="textareaTips">备注</p>
											<p class="textareaTips">1.被考核人迟到/早退3次及以上，病假5天及以上，事假2天及以上，旷工1天及以上不予转正。</p>
											<p class="textareaTips">2.考核分数低于84分不予转正。</p>
										</form>
									</div>
								</div>
								
								<div class="buttonGroup2-bottom">
									<div class="button-feedback-bottom button-submit-bottom button-submit-bottom-regular">提交</div>
									<div class="button-back-bottom">返回</div>
								</div>
							</div>	
							<!--正式录用结束-->
							
							<!--延长试用期-->
							<div class="tabBox-extend displayNone">
								<div class="official-assessment-out-box">
									<div class="official-assessment-out-content" style="">
										<form id="ycForm" class="official-assessment-extend-form">
										<input type="hidden" name="result" value="1" />
										<input type="hidden" name="act" value="checkPost" />
										<div class = "form">
											<p class = "formTitle">延长试用期</p>
											<input type="text" placeholder="开始时间" name = "beginDate" class = "formInput startForm dataInput datepicker width278 float-left" readonly/>
											<span class="timeMiddle">~</span>
											<input type="text" placeholder="结束时间" name = "overDate" class = "formInput endForm dataInput datepicker width278 float-left" readonly/>
										</div>
										</form>
	
									</div>
									
								</div>
								<div class="buttonGroup2-bottom">
									<div class="button-feedback-bottom button-submit-bottom button-submit-bottom-extend">提交</div>
									<div class="button-back-bottom">返回</div>
								</div>
							</div>
							<!--延长试用期结束-->
							
							<!--不再录用-->
							<div class="tabBox-out displayNone">
								<div class="official-assessment-out-box">
									<div class="official-assessment-out-content">
										<form id="bzForm" class="official-assessment-out-form">
											<input type="hidden" name="result" value="3" />
											<input type="hidden" name="act" value="checkPost" />
											<div class = "form">
												<p class = "formTitle">离职日期</p>
												<input type="text" name = "quitDate" placeholder = "设置离职时间" class="formInput width348 birthDateForm dataInput datepicker outForm" readonly/>
											</div>
										</form>
	
									</div>
									
								</div>
								<div class="buttonGroup2-bottom">
									<div class="button-feedback-bottom button-submit-bottom button-submit-bottom-out">提交</div>
									<div class="button-back-bottom">返回</div>
								</div>
							</div>
							<!--不再录用结束-->
							<?php }?>
							
							<!--表-->
							<div class="official-assessment-box tabBox-list">
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
												<span class="score scoreRed"><?php echo $_smarty_tpl->tpl_vars['i']->value['moralityScore'];?>
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
												<span class="score scoreRed"><?php echo $_smarty_tpl->tpl_vars['i']->value['attitudeScore'];?>
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
 type="text/javascript" src="public/html/js/plugin/oa.jquery-ui.min.js" ><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.jquery-ui.min.js" ><?php echo '</script'; ?>
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
 type="text/javascript" src="public/html/js/jquery.form.min.js" ><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="humanAffairs/view/js/employ-check-check-set.js" ><?php echo '</script'; ?>
>
	</body>

</html><?php }
}
