<?php
/* Smarty version 3.1.29, created on 2018-12-19 16:21:21
  from "F:\website\ditoaCoder\ditoa\pc\public\html\archives.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c19ff81dd5710_26518859',
  'file_dependency' => 
  array (
    '5f491aa3a3c2d828993973d41472f678bd0ed7d3' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\public\\html\\archives.html',
      1 => 1545207680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c19ff81dd5710_26518859 ($_smarty_tpl) {
?>
							<div class="apply-step-box margin-bottom-0">
								<h1 class="titleTips">员工档案</h1>
								<div class="stepPart">
									<!--
                                    	作者：xhxhxh
                                    	时间：2018-11-20
                                    	描述：蓝色线的长度---0 24.6% 49% 73.3% 100%
                                    -->
									<div class="stepActiveLine" style="width:<?php echo $_smarty_tpl->tpl_vars['a']->value['lineWidth'];?>
;"></div>
									<div class="stepNormalLine"></div>

									<div class="<?php echo $_smarty_tpl->tpl_vars['a']->value['tryClass'];?>
position1"><!--完成圆-->
										<div class="stepContentBox">
											<div class="text1 color5783f1">试用期</div>
											<div class="text2">
												<?php if ($_smarty_tpl->tpl_vars['a']->value['try'] != '') {?>
												<?php echo $_smarty_tpl->tpl_vars['a']->value['try'];?>

												<?php }?>
											</div>
										</div>
									</div>
									
									<div class="<?php echo $_smarty_tpl->tpl_vars['a']->value['turnClass'];?>
position2">
										<div class="stepContentBox">
											<div class="text1 color5783f1">转正</div>
											<div class="text2">
												<?php if (count($_smarty_tpl->tpl_vars['a']->value['turn']) > 0) {?>
												考核人：<?php echo $_smarty_tpl->tpl_vars['a']->value['turn'][2];?>
<br />
												考核时间：<?php echo $_smarty_tpl->tpl_vars['a']->value['turn'][1];?>
<br />
												考核结果：<?php echo $_smarty_tpl->tpl_vars['a']->value['turn'][0];?>

												<?php }?>
											</div>
										</div>
									</div>
									
									
									<div class="<?php echo $_smarty_tpl->tpl_vars['a']->value['contractClass'];?>
position3"><!--默认圆-->
										<div class="stepContentBox">
											<div class="text1 color5783f1">合同签订</div>
											<div class="text2">
											<?php if ($_smarty_tpl->tpl_vars['a']->value['contract'] != '') {?>
											<?php echo $_smarty_tpl->tpl_vars['a']->value['contract'];?>

											<?php }?>
											</div>
										</div>
									</div>
									
									<div class="<?php echo $_smarty_tpl->tpl_vars['a']->value['quitClass'];?>
position4">
										<div class="stepContentBox">
											<div class="text1 color5783f1">离职</div>
											<div class="text2">
											<?php if ($_smarty_tpl->tpl_vars['a']->value['quit'] != '') {?>
											<?php echo $_smarty_tpl->tpl_vars['a']->value['quit'];?>

											<?php }?>
											</div>
										</div>
									</div>
									
									<div class="<?php echo $_smarty_tpl->tpl_vars['a']->value['finishClass'];?>
position6">
										<div class="stepContentBox">
											<div class="text1">DIT与您一起成长</div>
										</div>
									</div>
								</div>
							</div><?php }
}
