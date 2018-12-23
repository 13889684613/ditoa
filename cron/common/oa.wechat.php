<?php

	//获取accessToken
	function accessToken(){

		global $db;

		$wx = $db->get_one(PRFIX.'wechat','limit 1','wechatId,appId,appSceret,accessToken,accessTiket,updateTime');
	    if($wx['appId']!='' && $wx['appSceret']!=''){
	        if($wx['updateTime']+7200>time() && $wx['accessToken']!=''){
	            return $wx['accessToken'];
	        }else{ 
	            $url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.$wx['appId'].'&secret='.$wx['appSceret'];
	            $ch = curl_init();
	            curl_setopt($ch, CURLOPT_URL, $url);
	            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
	            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
	            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	            $output = curl_exec($ch);
	            curl_close($ch);
	            $jsoninfo = json_decode($output, true);
	            $access_token = $jsoninfo["access_token"];

	            $val['updateTime'] = time();
	            $val['accessToken'] = $access_token;

	            $result = $db->update(PRFIX.'wechat',$val,'where wechatId='.$wx['wechatId'].'');
	            if($result){
	            	return $access_token;
	            }else{
	            	return false;
	            }
	        }
	    }else{
	        return false;
	    }
	}

	//获取模板消息发送状态
	function messageSendStatus($templateContent){

		//获得access_token
		$access_token = accessToken();
		$json_template = json_encode($templateContent);
		$url = 'https://api.weixin.qq.com/cgi-bin/message/template/send?access_token='.$access_token;
		$res = http_request($url,urldecode($json_template));

		return $res;
	
	}

	//模拟POST请求函数
	function http_request($url,$data=array()){

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		$output = curl_exec($ch);
		curl_close($ch);
		return $output;

	}

?>