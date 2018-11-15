<?php
	
	//# Mr.Z
	//# 2018-11-14
	//# OA首页

	//当前页面公共配置
	$pageTitle = 'DIT OA办公管理系统';

	//系统消息
	$where = 'where (receiverRole=0';
	$where .= 'or (receiverRole=1 and receiverOffice='.$common_office.')';
	$where .= ' or (receiverRole=2 and receiverGroup='.$common_group.')';
	$where .= ' or (receiverRole=3 and receiverUsr='.$common_staffId.')';
	$where .= ')';
	$where .= ' and messageId not in(select messageId from '.PRFIX.'message_read where readTime is not null and usrId='.$common_staffId.')';

	//最新一条未读信息
	$M = $db->get_one(PRFIX.'message',$where,'content');
	if($M){
		$messageContent = $M['content'];
	}

	//企业动态与活动 begin
	$fileds = 'newsId,title,newsTime';
	$where = 'where (toRole=0 or (toRole=1 and find_in_set('.$common_office.',toOffice)) or (toRole=2 and find_in_set('.$common_group.',toGroup)))';

	//企业动态
	$news = $db->get_all(PRFIX.'news',$where.' and isFeedback=0 limit 5',$fileds);

	//企业活动
	$actives = $db->get_all(PRFIX.'news',$where.' and isFeedback=1 limit 5',$fileds);
	//企业动态与活动 over

	//数据绑定
	$smarty->assign('messageContent',$messageContent);
	$smarty->assign('news',$news);
	$smarty->assign('actives',$actives);


?>