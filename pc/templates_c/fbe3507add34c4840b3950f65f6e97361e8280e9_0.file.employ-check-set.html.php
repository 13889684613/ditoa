<?php
/* Smarty version 3.1.29, created on 2018-12-20 19:48:27
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/employ-check-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c1b818b0e5457_99683997',
  'file_dependency' => 
  array (
    'fbe3507add34c4840b3950f65f6e97361e8280e9' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/employ-check-set.html',
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
function content_5c1b818b0e5457_99683997 ($_smarty_tpl) {
?>
<!--
	作者：sxh
	时间：2018-11-26
	描述：转正考核
-->
<!DOCTYPE html>
<html>

	<head>
		<title>转正考核</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
		<link rel="stylesheet" href="public/html/css/oa.base.css" />
		<link rel="stylesheet" href="public/html/css/oa.bootstrap.min.css" />
		<link rel="stylesheet" href="public/html/css/plugin/jquery.mCustomScrollbar.min.css" />
		<link rel="stylesheet" href="public/html/css/oa.common.css" />
		<link rel="stylesheet" href="humanAffairs/view/css/employ-check-set.css" />
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
">转正考核</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on">评价考核</span></div>
						<div class="contentRightNavBottom"><span class="name">评价考核</span></div>
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
							
							<div class="official-assessment-box">
								<div class="official-inner">
									<form id="checkForm" method="post" class="scoreForm">
									<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
									<input type="hidden" name="s_company" value="<?php echo $_smarty_tpl->tpl_vars['s_company']->value;?>
" />
									<input type="hidden" name="s_office" value="<?php echo $_smarty_tpl->tpl_vars['s_office']->value;?>
" />
									<input type="hidden" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" />
									<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
									<input type="hidden" name="s" value="<?php echo $_smarty_tpl->tpl_vars['s']->value;?>
" />
									<input type="hidden" name="act" value="save" />

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
													<input type="hidden" name="rjgx" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['rjgx'];?>
" class="scoreInput" />
													<td><span class="left34">人际关系</span></td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['rjgx'] == 10) {?> radioBox-official-assessment-active<?php }?>" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['rjgx'] == 8) {?> radioBox-official-assessment-active<?php }?>" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['rjgx'] == 6) {?> radioBox-official-assessment-active<?php }?>" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['rjgx'] == 4) {?> radioBox-official-assessment-active<?php }?>" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['rjgx'] == 2) {?> radioBox-official-assessment-active<?php }?>" data-score="2">
													</td>
												</tr>
												<tr>
													<input type="hidden" name="xzx" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['xzx'];?>
" class="scoreInput"  />
													<td><span class="left34">协作性</span></td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['xzx'] == 10) {?> radioBox-official-assessment-active<?php }?>" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment   radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['xzx'] == 8) {?> radioBox-official-assessment-active<?php }?>" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['xzx'] == 6) {?> radioBox-official-assessment-active<?php }?>" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['xzx'] == 4) {?> radioBox-official-assessment-active<?php }?>" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['xzx'] == 2) {?> radioBox-official-assessment-active<?php }?>" data-score="2">
													</td>
												</tr>
												<tr>
													<input type="hidden" name="grxy" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['grxy'];?>
" class="scoreInput"  />
													<td><span class="left34">个人修养</span></td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['grxy'] == 10) {?> radioBox-official-assessment-active<?php }?>" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['grxy'] == 8) {?> radioBox-official-assessment-active<?php }?>" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['grxy'] == 6) {?> radioBox-official-assessment-active<?php }?>" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['grxy'] == 4) {?> radioBox-official-assessment-active<?php }?>" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['grxy'] == 2) {?> radioBox-official-assessment-active<?php } else {
}?>" data-score="2">
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
													<input type="hidden" name="xiaolv" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['xiaolv'];?>
" class="scoreInput" />
													<td><span class="left34">严格遵守工作制度，有效利用工作时间</span></td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['xiaolv'] == 10) {?> radioBox-official-assessment-active<?php }?>" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['xiaolv'] == 8) {?> radioBox-official-assessment-active<?php }?>" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['xiaolv'] == 6) {?> radioBox-official-assessment-active<?php }?>" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['xiaolv'] == 4) {?> radioBox-official-assessment-active<?php }?>" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['xiaolv'] == 2) {?> radioBox-official-assessment-active<?php }?>" data-score="2">
													</td>
												</tr>
												<tr>
													<input type="hidden" name="taidu" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['taidu'];?>
" class="scoreInput"  />
													<td><span class="left34">对新工作持积极态度</span></td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['taidu'] == 10) {?> radioBox-official-assessment-active<?php }?>" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['taidu'] == 8) {?> radioBox-official-assessment-active<?php }?>" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['taidu'] == 6) {?> radioBox-official-assessment-active<?php }?>" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['taidu'] == 4) {?> radioBox-official-assessment-active<?php }?>" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['taidu'] == 2) {?> radioBox-official-assessment-active<?php }?>" data-score="2">
													</td>
												</tr>
												<tr>
													<input type="hidden" name="zyzs" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['zyzs'];?>
" class="scoreInput"  />
													<td><span class="left34">忠于职守，坚守岗位</span></td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['zyzs'] == 10) {?> radioBox-official-assessment-active<?php }?>" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['zyzs'] == 8) {?> radioBox-official-assessment-active<?php }?>" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['zyzs'] == 6) {?> radioBox-official-assessment-active<?php }?>" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['zyzs'] == 4) {?> radioBox-official-assessment-active<?php }?>" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['zyzs'] == 2) {?> radioBox-official-assessment-active<?php }?>" data-score="2">
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
													<input type="hidden" name="zrg" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['zrg'];?>
" class="scoreInput" />
													<td><span class="left34">以主人公精神与同事同心协力努力工作</span></td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['zrg'] == 10) {?> radioBox-official-assessment-active<?php }?>" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['zrg'] == 8) {?> radioBox-official-assessment-active<?php }?>" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['zrg'] == 6) {?> radioBox-official-assessment-active<?php }?>" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['zrg'] == 4) {?> radioBox-official-assessment-active<?php }?>" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['zrg'] == 2) {?> radioBox-official-assessment-active<?php }?>" data-score="2">
													</td>
												</tr>
												<tr>
													<input type="hidden" name="mudi" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['mudi'];?>
" class="scoreInput"  />
													<td><span class="left34">正确认识工作目的，正确处理业务</span></td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['mudi'] == 10) {?> radioBox-official-assessment-active<?php }?>" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['mudi'] == 8) {?> radioBox-official-assessment-active<?php }?>" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['mudi'] == 6) {?> radioBox-official-assessment-active<?php }?>" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['mudi'] == 4) {?> radioBox-official-assessment-active<?php }?>" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['mudi'] == 2) {?> radioBox-official-assessment-active<?php }?>" data-score="2">
													</td>
												</tr>
												<tr>
													<input type="hidden" name="shunxu" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['shunxu'];?>
" class="scoreInput"  />
													<td><span class="left34">不打乱工作秩序，不妨碍他人工作</span></td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['shunxu'] == 10) {?> radioBox-official-assessment-active<?php }?>" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['shunxu'] == 8) {?> radioBox-official-assessment-active<?php }?>" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['shunxu'] == 6) {?> radioBox-official-assessment-active<?php }?>" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['shunxu'] == 4) {?> radioBox-official-assessment-active<?php }?>" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['shunxu'] == 2) {?> radioBox-official-assessment-active<?php }?>" data-score="2">
													</td>
												</tr>
											</tbody>
										</table>
										<div class="totalScoreBox">
											<div class="totalScore">
												<span>得分：</span>
												<span class="score scoreRed"><?php echo $_smarty_tpl->tpl_vars['i']->value['businessScore'];?>
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
													<input type="hidden" name="speed" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['speed'];?>
" class="scoreInput" />
													<td><span class="left34">工作速度快，不误工期</span></td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['speed'] == 10) {?> radioBox-official-assessment-active<?php }?>" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['speed'] == 8) {?> radioBox-official-assessment-active<?php }?>" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['speed'] == 6) {?> radioBox-official-assessment-active<?php }?>" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['speed'] == 4) {?> radioBox-official-assessment-active<?php }?>" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['speed'] == 2) {?> radioBox-official-assessment-active<?php }?>" data-score="2">
													</td>
												</tr>
												<tr>
													<input type="hidden" name="chengji" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['chengji'];?>
" class="scoreInput"  />
													<td><span class="left34">业务处置得当，经常保持良好成绩</span></td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['chengji'] == 10) {?> radioBox-official-assessment-active<?php }?>" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['chengji'] == 8) {?> radioBox-official-assessment-active<?php }?>" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['chengji'] == 6) {?> radioBox-official-assessment-active<?php }?>" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['chengji'] == 4) {?> radioBox-official-assessment-active<?php }?>" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['chengji'] == 2) {?> radioBox-official-assessment-active<?php }?>" data-score="2">
													</td>
												</tr>
												<tr>
													<input type="hidden" name="heli" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['heli'];?>
" class="scoreInput"  />
													<td><span class="left34">工作方法合理，时间和经费的使用十分有效</span></td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['heli'] == 10) {?> radioBox-official-assessment-active<?php }?>" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['heli'] == 8) {?> radioBox-official-assessment-active<?php }?>" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['heli'] == 6) {?> radioBox-official-assessment-active<?php }?>" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['heli'] == 4) {?> radioBox-official-assessment-active<?php }?>" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['heli'] == 2) {?> radioBox-official-assessment-active<?php }?>" data-score="2">
													</td>
												</tr>
												<tr>
													<input type="hidden" name="btef" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['btef'];?>
" class="scoreInput" />
													<td><span class="left34">工作中没有半途而废，不了了之和造成后遗症的现象</span></td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['btef'] == 10) {?> radioBox-official-assessment-active<?php }?>" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['btef'] == 8) {?> radioBox-official-assessment-active<?php }?>" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['btef'] == 6) {?> radioBox-official-assessment-active<?php }?>" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['btef'] == 4) {?> radioBox-official-assessment-active<?php }?>" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['btef'] == 2) {?> radioBox-official-assessment-active<?php }?>" data-score="2">
													</td>
												</tr>
											</tbody>
										</table>
										<div class="totalScoreBox">
											<div class="totalScore">
												<span>得分：</span>
												<span class="score scoreRed"><?php echo $_smarty_tpl->tpl_vars['i']->value['efficiencyScore'];?>
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
													<input type="hidden" name="yaoqiu" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['yaoqiu'];?>
" class="scoreInput" />
													<td><span class="left34">工作成果达到预期目的或计划要求</span></td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['yaoqiu'] == 10) {?> radioBox-official-assessment-active<?php }?>" data-score="10"></div>
														
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['yaoqiu'] == 8) {?> radioBox-official-assessment-active<?php }?>" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['yaoqiu'] == 6) {?> radioBox-official-assessment-active<?php }?>" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['yaoqiu'] == 4) {?> radioBox-official-assessment-active<?php }?>" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['yaoqiu'] == 2) {?> radioBox-official-assessment-active<?php }?>" data-score="2">
													</td>
												</tr>
												<tr>
													<input type="hidden" name="zongjie" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['zongjie'];?>
" class="scoreInput" />
													<td><span class="left34">工作总结和汇报准确真实</span></td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['zongjie'] == 10) {?> radioBox-official-assessment-active<?php }?>" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['zongjie'] == 8) {?> radioBox-official-assessment-active<?php }?>" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['zongjie'] == 6) {?> radioBox-official-assessment-active<?php }?>" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['zongjie'] == 4) {?> radioBox-official-assessment-active<?php }?>" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['zongjie'] == 2) {?> radioBox-official-assessment-active<?php }?>" data-score="2">
													</td>
												</tr>
												<tr>
													<input type="hidden" name="shulian" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['shulian'];?>
" class="scoreInput"/>
													<td><span class="left34">工作中熟练程度和技能提高较快</span></td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['shulian'] == 10) {?> radioBox-official-assessment-active<?php }?>" data-score="10"></div>
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['shulian'] == 8) {?> radioBox-official-assessment-active<?php }?>" data-score="8">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['shulian'] == 6) {?> radioBox-official-assessment-active<?php }?>" data-score="6">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['shulian'] == 4) {?> radioBox-official-assessment-active<?php }?>" data-score="4">
													</td>
													<td>
														<div class="radioBox-official-assessment middle-radioBox-official-assessment  radioBox-official-assessment-normal<?php if ($_smarty_tpl->tpl_vars['i']->value['shulian'] == 2) {?> radioBox-official-assessment-active<?php }?>" data-score="2">
													</td>
												</tr>
											</tbody>
										</table>
										<div class="totalScoreBox">
											<div class="totalScore">
												<span>得分：</span>
												<span class="score scoreRed"><?php echo $_smarty_tpl->tpl_vars['i']->value['achievementScore'];?>
</span>
												<span>分</span>
											</div>
										</div>
									</div>
									
									<h1 class="official-assessment-h1">考勤情况</h1>
									<div class="formBox-official-assessment">
										
											<table class="table-official-assessment">
												<tr>
													<td width="430">
														<span>迟到</span>
														<input name="cidao" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['late'];?>
" placeholder="请输入" class="late inputPlaceholder" />
														<span>次</span>
													</td>
													<td width="430">
														<span>早退</span>
														<input name="zaotui" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['earlyRetreat'];?>
" placeholder="请输入" class="early inputPlaceholder" />
														<span>次</span>
													</td>
													<td width="430"></td>
												</tr>
												<tr>
													<td width="430">
														<span>病假</span>
														<input name="bingjia" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['sickLeave'];?>
" placeholder="请输入" class="sickLeave inputPlaceholder" />
														<span>天</span>
													</td>
													<td width="430">
														<span>事假</span>
														<input name="shijia" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['eventLeave'];?>
" placeholder="请输入" class="compassionateLeave inputPlaceholder" />
														<span>天</span>
													</td>
													<td>
														<span>旷工</span>
														<input name="kuanggong" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['absenteeism'];?>
" placeholder="请输入" class="absenteeism inputPlaceholder" />
														<span>天</span>
													</td>
												</tr>
											</table>
											<input type="hidden" name="zdf" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['score'];?>
" class="totalScoreValue" />
									</div>
									</form>
									
									<div class="totalScoreBox2">
										<div class="totalScore2">
											<span>总得分：</span>
											<span class="score2 scoreRed"><?php echo $_smarty_tpl->tpl_vars['i']->value['score'];?>
</span>
											<span>分</span>
										</div>
									</div>
									
									
								</div>
								
							</div>
							<div class="buttonGroup2-bottom">
								<div class="button-feedback-bottom button-submit-bottom">提交反馈</div>
								<div class="button-back-bottom">返回</div>
							</div>
							
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
 type="text/javascript" src="public/html/js/jquery.form.min.js" ><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="humanAffairs/view/js/employ-check-set.js" ><?php echo '</script'; ?>
>
	</body>

</html><?php }
}
