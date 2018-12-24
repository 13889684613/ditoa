<?php
/* Smarty version 3.1.29, created on 2018-12-24 13:47:35
  from "F:\website\ditoaCoder\ditoa\pc\org\view\office-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c2072f75144f7_51636965',
  'file_dependency' => 
  array (
    '5a4b40fdb5acf5b2d062069958c03ba18e950d1c' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\org\\view\\office-set.html',
      1 => 1545630443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/html/head.html' => 1,
    'file:public/html/menu.html' => 1,
  ),
),false)) {
function content_5c2072f75144f7_51636965 ($_smarty_tpl) {
?>
<!-- 
	# 企业详情编辑
	# Bowen
	# 2018-11-21
-->
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
		<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
		<link rel="stylesheet" href="public/html/css/oa.base.css" />
		<link rel="stylesheet" href="public/html/css/oa.bootstrap.min.css" />
		<link rel="stylesheet" href="public/html/css/plugin/jquery.mCustomScrollbar.min.css" />
		<link rel="stylesheet" href="public/html/css/oa.common.css" />
		<link rel="stylesheet" href="public/html/css/oa.jquery-ui.min.css" />
		<link rel="stylesheet" href="public/html/css/oa.jquery.multiselect.css" />
		<link rel="stylesheet" href="org/view/css/office-set.css" />
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
						<div class="contentRightNavTop"><span><a href="index.php?_f=index">首页</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span><a href="?_f=office&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&s_name=<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
">办事处管理</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on"> 办事处设置</span></div>
						<div class="contentRightNavBottom"><span class="name">办事处设置</span></div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['i']->value['createTime'] != '') {?>
					<div class="contentRightNavRight pull-right clearfix">
						<span class="rightTxt">创建时间：<?php echo $_smarty_tpl->tpl_vars['i']->value['createTime'];?>
</span>
					</div>
					<?php }?>
				</div>
				<!--内容区导航end-->
				<!--内容区begin-->
				<div class="contentRightBox">
					<!-- 内容区 开始 -->
					<div class="rightContent">
						<div class="staffInfoForm contentForm clearfix">
							<form id="officeForm" method="post" class="clearfix">
								<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
								<input type="hidden" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" />
								<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
								<input type="hidden" name="act" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
								<div class="infoBox infoBoxOne">
									<p class="addApplyTitle">办事处信息</p>
									<div class="formAllBox clearfix">
										<div class="formBox w33">
											<div class="form">
												<p class="formTitle">部门编号<span>*</span></p>
												<input type="text" name="officeCode" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['officeCode'];?>
" placeholder="请输入部门编号" class="formInput officeCodeInputb" autocomplete="off" />
											</div>
											<div class="form">
												<p class="formTitle">传真<span>*</span></p>
												<input type="text" name="fax" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['fax'];?>
" placeholder="请输入传真" class="formInput faxInput" autocomplete="off" />
											</div>
											<div class="form setNum clearfix">
												<p class="formTitle">设置排序<span class="tipsIcon"><span class="tips" style="display: none;">数字越大，排序越靠前</span></span></p>
												<input type="number" name="rank" value="<?php echo $_smarty_tpl->tpl_vars['rank']->value;?>
" placeholder="0" class="formInput rankInput" autocomplete="off">
											</div>
										</div>
										<div class="formBox w33">
											<div class="form">
												<p class="formTitle">办事处名称<span>*</span></p>
												<input type="text" name="officeName" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['officeName'];?>
" placeholder="请输入办事处名称" class="formInput officeNameInput" autocomplete="off" />
											</div>
											
											<div class="form">
												<p class="formTitle">详细地址<span>*</span></p>
												<input name="address" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['address'];?>
" placeholder="请输入详细地址" class="formInput addressInput">
											</div>
										</div>
										<div class="formBox w33">
											<div class="form">
												<p class="formTitle">部门联系电话<span>*</span></p>
												<input type="text" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['phone'];?>
" placeholder="请输入部门联系电话" class="formInput phoneInput" autocomplete="off" />
											</div>
											<div class="form">
												<p class="formTitle">职能范围</p>
												<input name="function" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['function'];?>
" placeholder="请输入" class="formInput functionInput">
											</div>
										</div>
									</div>
								</div>
								<div class="infoBox">
									<p class="addApplyTitle">考勤设置</p>
									<div class="formAllBox clearfix">
										<div class="formBox w25">
											<div class="form">
												<p class="formTitle">上班时间<span>*</span></p>
												<input type="text" name="workBeginTime" value="<?php echo $_smarty_tpl->tpl_vars['workBeginTime']->value;?>
" class="formInput timeForm timeForms" autocomplete="off" style="vertical-align:middle;">
											</div>
											<div class="form clearfix">
												<div class="clearfix">
													<p class="formTitle">打卡地址<span>*</span></p>
													<input type="text" placeholder="选择地点" readonly name="overTime" class="formInput addressForm" autocomplete="off" style="vertical-align:middle;">
												</div>
												<!--<div class="foreAddress"></div>-->
												<div class="foreAddressInfo"><?php echo $_smarty_tpl->tpl_vars['i']->value['workAddress'];?>
</div>
												<input type="hidden" name="workAddress" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['workAddress'];?>
" /><!--打卡地址-->
												<input type="hidden" name="workCoordinate" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['workCoordinate'];?>
" /><!--打卡经纬度-->
											</div>
										</div>
										<div class="formBox w25">
											<div class="form">
												<p class="formTitle">下班时间<span>*</span></p>
												<input type="text" name="workOverTime" value="<?php echo $_smarty_tpl->tpl_vars['workOverTime']->value;?>
" class="formInput timeForm timeFormz" autocomplete="off" style="vertical-align:middle;">
											</div>
											<div class="form form192">
												<p class="formTitle">有效范围<span>*</span></p>
												<div class="formInput formSelect" id="formSelect">请选择有效范围</div>
												<ul class="formSelectList">
													<li class="default">请选择有效范围</li>
													<li data-type="100"<?php if ($_smarty_tpl->tpl_vars['i']->value['workRange'] == 100) {?> data-select="true"<?php }?>>100米</li>
													<li data-type="300"<?php if ($_smarty_tpl->tpl_vars['i']->value['workRange'] == 300) {?> data-select="true"<?php }?>>300米</li>
													<li data-type="500"<?php if ($_smarty_tpl->tpl_vars['i']->value['workRange'] == 500) {?> data-select="true"<?php }?>>500米</li>
													<li data-type="800"<?php if ($_smarty_tpl->tpl_vars['i']->value['workRange'] == 800) {?> data-select="true"<?php }?>>800米</li>
													<li data-type="1000"<?php if ($_smarty_tpl->tpl_vars['i']->value['workRange'] == 1000) {?> data-select="true"<?php }?>>1000米</li>
												</ul>
												<input type="hidden" name="workRange" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['workRange'];?>
" /><!--有效范围，仅传数字-->
											</div>
										</div>
										<div class="formBox w50">
											<div class="form w100">
												<p class="formTitle">工作日<span>*</span></p>
												<div class="workingDay w100 clearfix">
													<div class="workingDayBox<?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['workWeek']) || $_smarty_tpl->tpl_vars['i']->value['workWeek'] == '') {?> on<?php }?> pull-left">周一</div>
													<div class="workingDayBox<?php if (in_array('2',$_smarty_tpl->tpl_vars['i']->value['workWeek']) || $_smarty_tpl->tpl_vars['i']->value['workWeek'] == '') {?> on<?php }?> pull-left">周二</div>
													<div class="workingDayBox<?php if (in_array('3',$_smarty_tpl->tpl_vars['i']->value['workWeek']) || $_smarty_tpl->tpl_vars['i']->value['workWeek'] == '') {?> on<?php }?> pull-left">周三</div>
													<div class="workingDayBox<?php if (in_array('4',$_smarty_tpl->tpl_vars['i']->value['workWeek']) || $_smarty_tpl->tpl_vars['i']->value['workWeek'] == '') {?> on<?php }?> pull-left">周四</div>
													<div class="workingDayBox<?php if (in_array('5',$_smarty_tpl->tpl_vars['i']->value['workWeek']) || $_smarty_tpl->tpl_vars['i']->value['workWeek'] == '') {?> on<?php }?> pull-left">周五</div>
													<div class="workingDayBox<?php if (in_array('6',$_smarty_tpl->tpl_vars['i']->value['workWeek'])) {?> on<?php }?> pull-left">周六</div>
													<div class="workingDayBox<?php if (in_array('7',$_smarty_tpl->tpl_vars['i']->value['workWeek'])) {?> on<?php }?> pull-left">周日</div>
												</div>
											</div>
											<input type="hidden" name="week" value="1,2,3,4,5,6,7" /><!--工作日，周一到周日对应数字1-7-->
										</div>
									</div>
								</div>
								<?php if ($_smarty_tpl->tpl_vars['action']->value == 'addSave') {?>
								<div class="infoBox otherInfo">
									<p class="addApplyTitle">其他信息</p>
									<div class="otherAllbox">
										<div class="otherForm clearfix">
											<div class="otherFormBox titleForm w28 clearfix">
												<p>标题</p>
												<input type="text" name="title[]" placeholder="请输入信息标题" class="otherInput otherTitleInputb otherTitleInput" autocomplete="off" />
											</div>
											<div class="otherFormBox infoForm w33 clearfix">
												<p>信息内容</p>
												<input type="text" name="content[]" placeholder="请输入内容" class="otherInput otherTitleInputx otherContentInput" autocomplete="off" />
											</div>
											<div class="addBtn"></div>
										</div>
									</div>
								</div>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['action']->value == 'editSave') {?>
								<div class = "infoBox otherInfo">
									<p class = "addApplyTitle">其他信息</p>
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
									<div class = "otherAllbox">
										<div class = "otherForm clearfix">
											<div class = "otherFormBox titleForm w28 clearfix">
												<p>标题</p>
												<input type="text" name = "title[]" value="<?php echo $_smarty_tpl->tpl_vars['o']->value['otherName'];?>
" placeholder="请输入信息标题" class = "otherInput otherTitleInput" autocomplete="off"/>
											</div>
											<div class = "otherFormBox infoForm w33 clearfix">
												<p>信息内容</p>
												<input type="text" name = "content[]" value="<?php echo $_smarty_tpl->tpl_vars['o']->value['otherContent'];?>
" placeholder="请输入内容" class = "otherInput otherContentInput" autocomplete="off"/>
											</div>
											<div class = "removeBtn"></div>
										</div>
									</div>
									<?php
$_smarty_tpl->tpl_vars['o'] = $__foreach_others_0_saved_local_item;
}
if ($__foreach_others_0_saved_item) {
$_smarty_tpl->tpl_vars['o'] = $__foreach_others_0_saved_item;
}
?>
									<div class = "otherAllbox">
										<div class = "otherForm clearfix">
											<div class = "otherFormBox titleForm w28 clearfix">
												<p>标题</p>
												<input type="text" name = "title[]" placeholder="请输入信息标题" class = "otherInput otherTitleInput" autocomplete="off"/>
											</div>
											<div class = "otherFormBox infoForm w33 clearfix">
												<p>信息内容</p>
												<input type="text" name = "content[]" placeholder="请输入内容" class = "otherInput otherContentInput" autocomplete="off"/>
											</div>
											<div class = "addBtn"></div>
										</div>
									</div>
								</div>
								<?php }?>

							</form>
						</div>
						<div class="formBtnsBox clearfix">
							<div class="formBtn formBtnSave">保存</div>
							<div class="formBtn formBtnCancel">取消</div>
						</div>
					</div>
					<!-- 内容区 结束 -->
				</div>
				<!--内容区end-->
			</div>
			<!--内容区右侧end-->
		</div>
		<!--内容 end-->
		<!--地图开始-->
		<div class="map">
			<div class="mapMask"></div>
			<div class="containerBox">
				<div class="ant-modal-body">
					<div id="container"></div>
				</div>
				<div id="myPageTop">
					<table>
						<tr>
							<td>
								<label>请输入地址：</label>
							</td>
						</tr>
						<tr>
							<td>
								<input id="tipinput" />
							</td>
						</tr>
					</table>
				</div>
				<div class="addForm">
					<div class="addressName">
						地址名称：
						<input type="text" class="addressNameInput" />
					</div>
					<div class="addressInfo">
						地址名称：
						<span></span>
					</div>

					<div class="addFormBtnBox">
						<div class="addFormBtn addFormBtnL">关闭</div>
						<div class="addFormBtn addFormBtnR">提交</div>
					</div>
				</div>
			</div>
		</div>
		<!--地图结束-->
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.respond.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.jquery.placeholder.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/oa.common.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.jquery-ui.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.11&key=41c525dac4f369d457b111b56459bff8&plugin=AMap.Autocomplete,AMap.PlaceSearch,AMap.Scale,AMap.OverView,AMap.ToolBar"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="https://cache.amap.com/lbs/static/addToolbar.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/jquery.mCustomScrollbar.concat.min.js" ><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/jquery.form.min.js" ><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="org/view/js/office-set.js"><?php echo '</script'; ?>
>
	</body>

</html><?php }
}
