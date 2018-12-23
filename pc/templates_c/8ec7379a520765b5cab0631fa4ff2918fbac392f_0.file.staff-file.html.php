<?php
/* Smarty version 3.1.29, created on 2018-12-22 08:50:11
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/staff-file.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c1d8a436c1414_40445664',
  'file_dependency' => 
  array (
    '8ec7379a520765b5cab0631fa4ff2918fbac392f' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/staff-file.html',
      1 => 1545221122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/html/head.html' => 1,
    'file:public/html/menu.html' => 1,
  ),
),false)) {
function content_5c1d8a436c1414_40445664 ($_smarty_tpl) {
?>
<!-- 
	# 资料上传
	# Bowen
	# 2018-11-14 
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
	<link rel="stylesheet" href="public/html/css/plugin/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="public/html/css/oa.common.css" />
	<link rel="stylesheet" href="public/html/css/oa.jquery-ui.min.css" />
	<link rel="stylesheet" href="public/html/css/oa.jquery.multiselect.css" />
	<link rel="stylesheet" href="humanAffairs/view/css/staff-file.css" />
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
					<div class="contentRightNavTop"><span><a href="index.php?_f=index">首页</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span><a href="？_f=staff<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">员工管理</a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="on">资料上传</span></div>
					<div class="contentRightNavBottom"><span class="name">资料上传</span></div>
				</div>
			</div>
			<!--内容区导航end-->
			<!--内容区begin-->
			<div class="contentRightBox">
				<!-- 内容区 开始 -->
				<div class = "rightContent">
					<div class = "staffManageNav">
						<ul class = "clearfix">
							<li><a href="human-affairs.php?_f=staff-information&act=edit&<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">员工基本资料</a></li>
							<li><a href="human-affairs.php?_f=staff-entry<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">入职信息</a></li>
							<li><a href="human-affairs.php?_f=staff-family<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">家庭主要成员</a></li>
							<li class = "width12"><a href="human-affairs.php?_f=staff-education<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">教育与工作经历</a></li>
							<li><a href="human-affairs.php?_f=staff-welfare<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">社保与公积金</a></li>
							<li class="active"><a href="human-affairs.php?_f=staff-file<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">资料上传</a></li>
							<li><a href="human-affairs.php?_f=staff-quit<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">离职信息</a></li>
							<?php if ($_smarty_tpl->tpl_vars['otherPower']->value[1] == 1) {?>
							<li><a href="human-affairs.php?_f=staff-contract<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">合同信息</a></li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['otherPower']->value[2] == 1) {?>
							<li><a href="human-affairs.php?_f=staff-account<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">账号设置</a></li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['otherPower']->value[3] == 1) {?>
							<li><a href="human-affairs.php?_f=staff-leave<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">假期设置</a></li>		
							<?php }?>		
							<?php if ($_smarty_tpl->tpl_vars['otherPower']->value[4] == 1) {?>
							<li><a href="human-affairs.php?_f=staff-edit-log<?php echo $_smarty_tpl->tpl_vars['track']->value;?>
">编辑记录</a></li>
							<?php }?>		
						</ul>
					</div>
					<div class = "staffInfoForm staffDataForm clearfix" style="background-color: #f6f6fa;padding-bottom: 0;">
						<form id="fileFrom" method="post" enctype="multipart/form-data" >
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
							<input type="hidden" name="act" value="editSave" />
							<div class = "dataContent">
								<div class = "uploadBox clearfix">
									<div class = "uploadInfoBox">
										<p class = "uploadInfoTitle">身份证正反面<span>*</span></p>
										<p class = "uploadInfo">请上传身份证正反面清晰照片，格式为PDF文件形式</p>
									</div>
									<div class = "uploadBtnBox">
										<input type="file" class="inputFile" title=" " name = "staffFile[]"/> 
										<img src="public/html/images/upload_file_icon.png" alt="" />
										<p class = "uploadBtnTxt">上传身份证</p>
									</div>
									<?php if ($_smarty_tpl->tpl_vars['idFile']->value != '') {?>
									<div class = "showFileName" style="display:block;"><a href="upload/file/staff/<?php echo $_smarty_tpl->tpl_vars['idFile']->value;?>
" target="_blank">查看已上传文件</a><span></span></div>
									<?php } else { ?>
									<div class = "showFileName">已选择：<span></span></div>
									<?php }?>
								</div>
								<div class = "uploadBox clearfix">
									<div class = "uploadInfoBox">
										<p class = "uploadInfoTitle">学历证书<span>*</span></p>
										<p class = "uploadInfo">请上传学历证书正反面清晰照片，格式为PDF文件形式</p>
									</div>
									<div class = "uploadBtnBox">
										<input type="file" class="inputFile" title=" " name = "staffFile[]"/> 
										<img src="public/html/images/upload_file_icon.png" alt="" />
										<p class = "uploadBtnTxt">上传学历证书</p>
									</div>
									<?php if ($_smarty_tpl->tpl_vars['eduFile']->value != '') {?>
									<div class = "showFileName" style="display:block;"><a href="upload/file/staff/<?php echo $_smarty_tpl->tpl_vars['eduFile']->value;?>
" target="_blank">查看已上传文件</a><span></span></div>
									<?php } else { ?>
									<div class = "showFileName">已选择：<span></span></div>
									<?php }?>
								</div>
								<div class = "uploadBox clearfix">
									<div class = "uploadInfoBox">
										<p class = "uploadInfoTitle">户口本<span>*</span></p>
										<p class = "uploadInfo">请上传户口本所有页清晰照片，格式为PDF文件形式</p>
									</div>
									<div class = "uploadBtnBox">
										<input type="file" class="inputFile" title=" " name = "staffFile[]"/> 
										<img src="public/html/images/upload_file_icon.png" alt="" />
										<p class = "uploadBtnTxt">上传户口本</p>
									</div>
									<?php if ($_smarty_tpl->tpl_vars['registerFile']->value != '') {?>
									<div class = "showFileName" style="display:block;"><a href="upload/file/staff/<?php echo $_smarty_tpl->tpl_vars['registerFile']->value;?>
" target="_blank">查看已上传文件</a><span></span></div>
									<?php } else { ?>
									<div class = "showFileName">已选择：<span></span></div>
									<?php }?>
								</div>
								<div class = "uploadBox clearfix">
									<div class = "uploadInfoBox">
										<p class = "uploadInfoTitle">体检报告<span>*</span></p>
										<p class = "uploadInfo">请上传员工体检报告，格式为PDF文件形式</p>
									</div>
									<div class = "uploadBtnBox">
										<input type="file" class="inputFile" title=" " name = "staffFile[]"/> 
										<img src="public/html/images/upload_file_icon.png" alt="" />
										<p class = "uploadBtnTxt">上传体检报告</p>
									</div>
									<?php if ($_smarty_tpl->tpl_vars['reportFile']->value != '') {?>
									<div class = "showFileName" style="display:block;"><a href="upload/file/staff/<?php echo $_smarty_tpl->tpl_vars['reportFile']->value;?>
" target="_blank">查看已上传文件</a><span></span></div>
									<?php } else { ?>
									<div class = "showFileName">已选择：<span></span></div>
									<?php }?>
								</div>
								<div class = "uploadOtherInfoBox clearfix">
									<p class = "uploadInfoTitle">其他资质证件</p>
									<p class = "uploadInfo">请上传其他资质证件：如驾照等证件的清晰照片，格式为PDF文件形式，文件大小不超过200K，证件名称不能重复</p>
								</div>
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
								<div class = "uploadBox uploadOtherBox holdBox clearfix">
									<input type="hidden" name="otherId[]" value="<?php echo $_smarty_tpl->tpl_vars['o']->value['attachId'];?>
">
									<input type="text" placeholder="请输入证件名称" name="otherName[]" value="<?php echo $_smarty_tpl->tpl_vars['o']->value['attachName'];?>
" class = "setUploadFileTitle" autocomplete="off"/>
									<div class = "uploadBtnBox">
										<input type="file" class="inputFile noMust" title=" " name = "staffFile[]"/> 
										<img src="public/html/images/upload_file_icon.png" alt="" />
										<p class = "uploadBtnTxt">上传文件</p>
									</div>
									<div class = "remove"><img src="public/html/images/input_remove.png" alt=""></div>
									<div class = "showFileName" style="display:block;"><a href="upload/file/staff/<?php echo $_smarty_tpl->tpl_vars['o']->value['attachFile'];?>
" target="_blank">查看已上传文件</a><span></span></div>
								</div>
								<?php
$_smarty_tpl->tpl_vars['o'] = $__foreach_others_0_saved_local_item;
}
if ($__foreach_others_0_saved_item) {
$_smarty_tpl->tpl_vars['o'] = $__foreach_others_0_saved_item;
}
?>
								<div class = "uploadBox uploadOtherBox holdBox clearfix">
									<input type="hidden" name="otherId[]" value="0">
									<input type="text" placeholder="请输入证件名称" name="otherName[]" class = "setUploadFileTitle" autocomplete="off"/>
									<div class = "uploadBtnBox">
										<input type="file" class="inputFile noMust" title=" " name = "staffFile[]"/> 
										<img src="public/html/images/upload_file_icon.png" alt="" />
										<p class = "uploadBtnTxt">上传文件</p>
									</div>
									<div class = "add"><img src="public/html/images/input_add.png" alt=""></div>
									<div class = "showFileName">已选择：<span></span></div>
								</div>
							</div>
							<div class = "modifyBox"<?php if ($_smarty_tpl->tpl_vars['isSet']->value == 0) {?> style="display: none;"<?php }?>>
								<p class = "modifyTitle">修改备注信息</p>
								<div class = "form modifyForm">
									<p class = "formTitle">修改备注信息</p>
									<textarea name="updateRemark" placeholder="请标明调整内容及原因" class = "formInput modifyRemarkInput"></textarea>
								</div>
							</div>
						</form>
					</div>
					
					<div class = "formBtnsBox clearfix">
						<div class = "formBtn formBtnSave">保存</div>
						<div class = "formBtn formBtnCancel">取消</div>
					</div>
				</div>
				<!-- 内容区 结束 -->
			</div>
			<!--内容区end-->
		</div>
		<!--内容区右侧end-->
	</div>
	<!--内容 end-->

	<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.jquery.placeholder.min.js"><?php echo '</script'; ?>
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
 type="text/javascript" src="public/html/js/oa.common.js" ><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/oa.jquery-ui.min.js" ><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/plugin/jquery.mCustomScrollbar.concat.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="public/html/js/jquery.form.min.js" ><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="humanAffairs/view/js/staff-file.js" ><?php echo '</script'; ?>
>
</body>
</html><?php }
}
