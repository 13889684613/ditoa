<?php
/* Smarty version 3.1.29, created on 2018-12-11 13:20:33
  from "F:\website\ditoaCoder\ditoa\pc\humanAffairs\view\employ-check-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c0f49210bf938_07249024',
  'file_dependency' => 
  array (
    'a4a94e651cdcaa0f0052242944176444235868fa' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\humanAffairs\\view\\employ-check-set.html',
      1 => 1544505472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0f49210bf938_07249024 ($_smarty_tpl) {
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
	<input type="hidden" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" />
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
	<input type="hidden" name="s" value="<?php echo $_smarty_tpl->tpl_vars['s']->value;?>
" />
	<input type="hidden" name="act" value="save" />

	申请人照片：<img src="<?php echo $_smarty_tpl->tpl_vars['i']->value['photo'];?>
" /><br />
	申请人：<?php echo $_smarty_tpl->tpl_vars['i']->value['staffName'];?>
<br />
	试用期：<?php echo $_smarty_tpl->tpl_vars['i']->value['try'];?>
<br />
	所属部门：<?php echo $_smarty_tpl->tpl_vars['i']->value['office'];?>
<br />
	所属工作组：<?php echo $_smarty_tpl->tpl_vars['i']->value['group'];?>
<br /><br />

	个人品德<br />
	<table border="1">
		<tr>
			<td>考核内容</td>
			<td>优（10分）</td>
			<td>良（8分）</td>
			<td>中（6分）</td>
			<td>可（4分）</td>
			<td>差（2分）</td>
		</tr>
		<tr>
			<td>人际关系</td>
			<td><input type="radio" name="rjgx" value="10" <?php if ($_smarty_tpl->tpl_vars['i']->value['rjgx'] == 10) {?>checked=true<?php }?> /></td>
			<td><input type="radio" name="rjgx" value="8" <?php if ($_smarty_tpl->tpl_vars['i']->value['rjgx'] == 8) {?>checked=true<?php }?> /></td>
			<td><input type="radio" name="rjgx" value="6" <?php if ($_smarty_tpl->tpl_vars['i']->value['rjgx'] == 6) {?>checked=true<?php }?> /></td>
			<td><input type="radio" name="rjgx" value="4" <?php if ($_smarty_tpl->tpl_vars['i']->value['rjgx'] == 4) {?>checked=true<?php }?> /></td>
			<td><input type="radio" name="rjgx" value="2" <?php if ($_smarty_tpl->tpl_vars['i']->value['rjgx'] == 2) {?>checked=true<?php }?> /></td>
		</tr>
		<tr>
			<td>协作性</td>
			<td><input type="radio" name="xzx" value="10" <?php if ($_smarty_tpl->tpl_vars['i']->value['xzx'] == 10) {?>checked=true<?php }?> /></td>
			<td><input type="radio" name="xzx" value="8" <?php if ($_smarty_tpl->tpl_vars['i']->value['xzx'] == 8) {?>checked=true<?php }?> /></td>
			<td><input type="radio" name="xzx" value="6" <?php if ($_smarty_tpl->tpl_vars['i']->value['xzx'] == 6) {?>checked=true<?php }?> /></td>
			<td><input type="radio" name="xzx" value="4" <?php if ($_smarty_tpl->tpl_vars['i']->value['xzx'] == 4) {?>checked=true<?php }?> /></td>
			<td><input type="radio" name="xzx" value="2" <?php if ($_smarty_tpl->tpl_vars['i']->value['xzx'] == 2) {?>checked=true<?php }?> /></td>
		</tr>
		<tr>
			<td>个人修养</td>
			<td><input type="radio" name="grxy" value="10" <?php if ($_smarty_tpl->tpl_vars['i']->value['grxy'] == 10) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="grxy" value="8" <?php if ($_smarty_tpl->tpl_vars['i']->value['grxy'] == 8) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="grxy" value="6" <?php if ($_smarty_tpl->tpl_vars['i']->value['grxy'] == 6) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="grxy" value="4" <?php if ($_smarty_tpl->tpl_vars['i']->value['grxy'] == 4) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="grxy" value="2" <?php if ($_smarty_tpl->tpl_vars['i']->value['grxy'] == 2) {?>checked=true<?php }?>/></td>
		</tr>
	</table>
	<div style="text-align:right;">得分： <?php echo $_smarty_tpl->tpl_vars['i']->value['moralityScore'];?>
 分<input type="hidden" name="score_pd" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['moralityScore'];?>
" /></div>
	<br /><br />
	勤务态度<br />
	<table border="1">
		<tr>
			<td>考核内容</td>
			<td>优（10分）</td>
			<td>良（8分）</td>
			<td>中（6分）</td>
			<td>可（4分）</td>
			<td>差（2分）</td>
		</tr>
		<tr>
			<td>严格遵守工作制度，有效利用工作时间</td>
			<td><input type="radio" name="xiaolv" value="10" <?php if ($_smarty_tpl->tpl_vars['i']->value['xiaolv'] == 10) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="xiaolv" value="8" <?php if ($_smarty_tpl->tpl_vars['i']->value['xiaolv'] == 8) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="xiaolv" value="6" <?php if ($_smarty_tpl->tpl_vars['i']->value['xiaolv'] == 6) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="xiaolv" value="4" <?php if ($_smarty_tpl->tpl_vars['i']->value['xiaolv'] == 4) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="xiaolv" value="2" <?php if ($_smarty_tpl->tpl_vars['i']->value['xiaolv'] == 2) {?>checked=true<?php }?>/></td>
		</tr>
		<tr>
			<td>对新工作持积极态度</td>
			<td><input type="radio" name="taidu" value="10" <?php if ($_smarty_tpl->tpl_vars['i']->value['taidu'] == 10) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="taidu" value="8" <?php if ($_smarty_tpl->tpl_vars['i']->value['taidu'] == 8) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="taidu" value="6" <?php if ($_smarty_tpl->tpl_vars['i']->value['taidu'] == 6) {?>checked=true<?php }?> /></td>
			<td><input type="radio" name="taidu" value="4" <?php if ($_smarty_tpl->tpl_vars['i']->value['taidu'] == 4) {?>checked=true<?php }?> /></td>
			<td><input type="radio" name="taidu" value="2" <?php if ($_smarty_tpl->tpl_vars['i']->value['taidu'] == 2) {?>checked=true<?php }?> /></td>
		</tr>
		<tr>
			<td>忠于职守，坚守岗位</td>
			<td><input type="radio" name="zyzs" value="10" <?php if ($_smarty_tpl->tpl_vars['i']->value['zyzs'] == 10) {?>checked=true<?php }?> /></td>
			<td><input type="radio" name="zyzs" value="8" <?php if ($_smarty_tpl->tpl_vars['i']->value['zyzs'] == 8) {?>checked=true<?php }?> /></td>
			<td><input type="radio" name="zyzs" value="6" <?php if ($_smarty_tpl->tpl_vars['i']->value['zyzs'] == 6) {?>checked=true<?php }?> /></td>
			<td><input type="radio" name="zyzs" value="4" <?php if ($_smarty_tpl->tpl_vars['i']->value['zyzs'] == 4) {?>checked=true<?php }?> /></td>
			<td><input type="radio" name="zyzs" value="2" <?php if ($_smarty_tpl->tpl_vars['i']->value['zyzs'] == 2) {?>checked=true<?php }?> /></td>
		</tr>
	</table>
	<div style="text-align:right;">得分：  <?php echo $_smarty_tpl->tpl_vars['i']->value['attitudeScore'];?>
 分<input type="hidden" name="score_td" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['attitudeScore'];?>
" /></div>
	<br /><br />
	业务能力<br />
	<table border="1">
		<tr>
			<td>考核内容</td>
			<td>优（10分）</td>
			<td>良（8分）</td>
			<td>中（6分）</td>
			<td>可（4分）</td>
			<td>差（2分）</td>
		</tr>
		<tr>
			<td>以主人公精神与同事同心协力努力工作</td>
			<td><input type="radio" name="zrg" value="10" <?php if ($_smarty_tpl->tpl_vars['i']->value['zrg'] == 10) {?>checked=true<?php }?> /></td>
			<td><input type="radio" name="zrg" value="8" <?php if ($_smarty_tpl->tpl_vars['i']->value['zrg'] == 8) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="zrg" value="6" <?php if ($_smarty_tpl->tpl_vars['i']->value['zrg'] == 6) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="zrg" value="4" <?php if ($_smarty_tpl->tpl_vars['i']->value['zrg'] == 4) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="zrg" value="2" <?php if ($_smarty_tpl->tpl_vars['i']->value['zrg'] == 2) {?>checked=true<?php }?>/></td>
		</tr>
		<tr>
			<td>正确认识工作目的，正确处理业务</td>
			<td><input type="radio" name="mudi" value="10" <?php if ($_smarty_tpl->tpl_vars['i']->value['mudi'] == 10) {?>checked=true<?php }?> /></td>
			<td><input type="radio" name="mudi" value="8" <?php if ($_smarty_tpl->tpl_vars['i']->value['mudi'] == 8) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="mudi" value="6" <?php if ($_smarty_tpl->tpl_vars['i']->value['mudi'] == 6) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="mudi" value="4" <?php if ($_smarty_tpl->tpl_vars['i']->value['mudi'] == 4) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="mudi" value="2" <?php if ($_smarty_tpl->tpl_vars['i']->value['mudi'] == 2) {?>checked=true<?php }?>/></td>
		</tr>
		<tr>
			<td>不打乱工作秩序，不妨碍他人工作</td>
			<td><input type="radio" name="shunxu" value="10" <?php if ($_smarty_tpl->tpl_vars['i']->value['shunxu'] == 10) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="shunxu" value="8" <?php if ($_smarty_tpl->tpl_vars['i']->value['shunxu'] == 8) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="shunxu" value="6" <?php if ($_smarty_tpl->tpl_vars['i']->value['shunxu'] == 6) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="shunxu" value="4" <?php if ($_smarty_tpl->tpl_vars['i']->value['shunxu'] == 4) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="shunxu" value="2" <?php if ($_smarty_tpl->tpl_vars['i']->value['shunxu'] == 2) {?>checked=true<?php }?>/></td>
		</tr>
	</table><div style="text-align:right;">得分： <?php echo $_smarty_tpl->tpl_vars['i']->value['businessScore'];?>
 分<input type="hidden" name="score_nl" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['businessScore'];?>
" /></div>
	
	<br /><br />
	工作效率<br />
	<table border="1">
		<tr>
			<td>考核内容</td>
			<td>优（10分）</td>
			<td>良（8分）</td>
			<td>中（6分）</td>
			<td>可（4分）</td>
			<td>差（2分）</td>
		</tr>
		<tr>
			<td>工作速度快，不误工期</td>
			<td><input type="radio" name="speed" value="10" <?php if ($_smarty_tpl->tpl_vars['i']->value['speed'] == 10) {?>checked=true<?php }?> /></td>
			<td><input type="radio" name="speed" value="8" <?php if ($_smarty_tpl->tpl_vars['i']->value['speed'] == 8) {?>checked=true<?php }?> /></td>
			<td><input type="radio" name="speed" value="6" <?php if ($_smarty_tpl->tpl_vars['i']->value['speed'] == 6) {?>checked=true<?php }?> /></td>
			<td><input type="radio" name="speed" value="4" <?php if ($_smarty_tpl->tpl_vars['i']->value['speed'] == 4) {?>checked=true<?php }?> /></td>
			<td><input type="radio" name="speed" value="2" <?php if ($_smarty_tpl->tpl_vars['i']->value['speed'] == 2) {?>checked=true<?php }?> /></td>
		</tr>
		<tr>
			<td>业务处置得当，经常保持良好成绩</td>
			<td><input type="radio" name="chengji" value="10" <?php if ($_smarty_tpl->tpl_vars['i']->value['chengji'] == 10) {?>checked=true<?php }?> /></td>
			<td><input type="radio" name="chengji" value="8"  <?php if ($_smarty_tpl->tpl_vars['i']->value['chengji'] == 8) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="chengji" value="6"  <?php if ($_smarty_tpl->tpl_vars['i']->value['chengji'] == 6) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="chengji" value="4"  <?php if ($_smarty_tpl->tpl_vars['i']->value['chengji'] == 4) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="chengji" value="2"  <?php if ($_smarty_tpl->tpl_vars['i']->value['chengji'] == 2) {?>checked=true<?php }?>/></td>
		</tr>
		<tr>
			<td>工作方法合理，时间和经费的使用十分有效</td>
			<td><input type="radio" name="heli" value="10" <?php if ($_smarty_tpl->tpl_vars['i']->value['heli'] == 10) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="heli" value="8" <?php if ($_smarty_tpl->tpl_vars['i']->value['heli'] == 8) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="heli" value="6" <?php if ($_smarty_tpl->tpl_vars['i']->value['heli'] == 6) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="heli" value="4" <?php if ($_smarty_tpl->tpl_vars['i']->value['heli'] == 4) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="heli" value="2" <?php if ($_smarty_tpl->tpl_vars['i']->value['heli'] == 2) {?>checked=true<?php }?> /></td>
		</tr>
		<tr>
			<td>工作中没有半途而废，不了了之和造成后遗症的现象</td>
			<td><input type="radio" name="btef" value="10" <?php if ($_smarty_tpl->tpl_vars['i']->value['btef'] == 10) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="btef" value="8" <?php if ($_smarty_tpl->tpl_vars['i']->value['btef'] == 8) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="btef" value="6" <?php if ($_smarty_tpl->tpl_vars['i']->value['btef'] == 6) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="btef" value="4" <?php if ($_smarty_tpl->tpl_vars['i']->value['btef'] == 4) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="btef" value="2" <?php if ($_smarty_tpl->tpl_vars['i']->value['btef'] == 2) {?>checked=true<?php }?>/></td>
		</tr>
	</table>
	<div style="text-align:right;">得分： <?php echo $_smarty_tpl->tpl_vars['i']->value['efficiencyScore'];?>
 分<input type="hidden" name="score_xl" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['efficiencyScore'];?>
" /></div>
	<br /><br />
	业绩<br />
	<table border="1">
		<tr>
			<td>考核内容</td>
			<td>优（10分）</td>
			<td>良（8分）</td>
			<td>中（6分）</td>
			<td>可（4分）</td>
			<td>差（2分）</td>
		</tr>
		<tr>
			<td>工作成果达到预期目的或计划要求</td>
			<td><input type="radio" name="yaoqiu" value="10" <?php if ($_smarty_tpl->tpl_vars['i']->value['zongjie'] == 10) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="yaoqiu" value="8" <?php if ($_smarty_tpl->tpl_vars['i']->value['zongjie'] == 8) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="yaoqiu" value="6" <?php if ($_smarty_tpl->tpl_vars['i']->value['zongjie'] == 6) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="yaoqiu" value="4" <?php if ($_smarty_tpl->tpl_vars['i']->value['zongjie'] == 4) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="yaoqiu" value="2" <?php if ($_smarty_tpl->tpl_vars['i']->value['zongjie'] == 2) {?>checked=true<?php }?>/></td>
		</tr>
		<tr>
			<td>工作总结和汇报准确真实</td>
			<td><input type="radio" name="zongjie" value="10" <?php if ($_smarty_tpl->tpl_vars['i']->value['zongjie'] == 10) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="zongjie" value="8" <?php if ($_smarty_tpl->tpl_vars['i']->value['zongjie'] == 8) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="zongjie" value="6" <?php if ($_smarty_tpl->tpl_vars['i']->value['zongjie'] == 6) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="zongjie" value="4" <?php if ($_smarty_tpl->tpl_vars['i']->value['zongjie'] == 4) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="zongjie" value="2"<?php if ($_smarty_tpl->tpl_vars['i']->value['zongjie'] == 2) {?>checked=true<?php }?> /></td>
		</tr>
		<tr>
			<td>工作中熟练程度和技能提高较快</td>
			<td><input type="radio" name="shulian" value="10" <?php if ($_smarty_tpl->tpl_vars['i']->value['shulian'] == 10) {?>checked=true<?php }?> /></td>
			<td><input type="radio" name="shulian" value="8" <?php if ($_smarty_tpl->tpl_vars['i']->value['shulian'] == 8) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="shulian" value="6" <?php if ($_smarty_tpl->tpl_vars['i']->value['shulian'] == 6) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="shulian" value="4" <?php if ($_smarty_tpl->tpl_vars['i']->value['shulian'] == 4) {?>checked=true<?php }?>/></td>
			<td><input type="radio" name="shulian" value="2" <?php if ($_smarty_tpl->tpl_vars['i']->value['shulian'] == 2) {?>checked=true<?php }?>/></td>
		</tr>
	</table>
	<div style="text-align:right;">得分： <?php echo $_smarty_tpl->tpl_vars['i']->value['achievementScore'];?>
 分<input type="hidden" name="score_yj" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['achievementScore'];?>
" /></div>
	<br /><br />
	考勤情况：<br />
	迟到：<input type="text" name="cidao" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['late'];?>
" />次&nbsp;早退：<input type="text" name="zaotui" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['earlyRetreat'];?>
"/>次&nbsp;<br />
	病假：<input type="text" name="bingjia" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['sickLeave'];?>
" />天&nbsp;事假：<input type="text" name="shijia" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['eventLeave'];?>
" />天&nbsp;旷工：<input type="text" name="kuanggong"value="<?php echo $_smarty_tpl->tpl_vars['i']->value['absenteeism'];?>
" />天<br />
	总得分：<input type="hidden" name="zdf" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['score'];?>
">分<br />
	<input type="submit" value="提交" />

</form><?php }
}
