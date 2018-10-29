<?php
	//刷新返回
	function QuickReturn($ReturnAddr)
	{
		echo "<script language='javascript'>location.href='".$ReturnAddr."';</script>";
		exit;
	}

	//错误返回,当前页
	function outalert($mess){
		echo "<script language='javascript'>alert('".$mess."');</script>";
		exit;
	}

	//错误返回,回退页
	function errorjump($mess){
		echo "<script language='javascript'>alert('".$mess."');history.go(-1);</script>";
		exit;
	}

	//错误返回，前台
	function errorReturn($mess){
		echo "<script language='javascript'>alert('".$mess."');</script>";
		exit;
	}

	//提示刷新跳转
	function messjump($jumpmess,$jumpaddr){
		echo "<script language='javascript'>alert('".$jumpmess."');location.href='".$jumpaddr."';</script>";
	}

	//提示刷新跳转,前台
	function successReturn($jumpmess,$jumpaddr){
		echo "<script language='javascript'>alertNew('".$jumpmess."','".$jumpaddr."');</script>";
		exit;
	}

	//修改checkbox
	function judeck($field,$text){

		$checkboxs = "no";
		if(trim($field)!=""){
			$judefield = explode(",",$field);
			for($i=0;$i<count($judefield);$i++)
			{
				if(trim($judefield[$i])==trim($text)){
					$checkboxs = "yes";
				}
			}
		}
		return $checkboxs;
	}

	//获取checkbox
	function getcheckbox($cbvalue){

		$cbArr = $cbvalue;
		if(empty($cbArr)==false){
			foreach($cbArr as $key => $values){
				$lastvalue = $lastvalue.",".$values;
			}
		}
		return substr($lastvalue,1);
	}

	//补0
	function AddZero($stradded){

		if((int)$stradded<10){
			$newstr = "0".$stradded;
		}else{
			$newstr = $stradded;
		}
		return $newstr;
	}

	//字符串截取
	function utfSubstr($str, $position, $length,$type=1){

	  $startPos = strlen($str);
	  $startByte = 0;
	  $endPos = strlen($str);
	  $count = 0;
	  for($i=0; $i<strlen($str); $i++){
	   if($count>=$position && $startPos>$i){
		$startPos = $i;
		$startByte = $count;
	   }
	   if(($count-$startByte) >= $length) {
		$endPos = $i;
		break;
	   }
	   $value = ord($str[$i]);
	   if($value > 127){
		$count++;
		if($value>=192 && $value<=223) $i++;
		elseif($value>=224 && $value<=239) $i = $i + 2;
		elseif($value>=240 && $value<=247) $i = $i + 3;
		else return MyClass::raiseError("\"$str\" Not a UTF-8 compatible string", 0, __CLASS__, __METHOD__, __FILE__, __LINE__);
	   }
	   $count++;

	  }
	  if($type==1 && $endPos>$length){
	   return substr($str, $startPos, $endPos-$startPos)."...";
		   }else{
	   return substr($str, $startPos, $endPos-$startPos);
		}


	 }

	//接收GET或POST值,
	//byName：传值变更名,
	//byType：值类型 1:数字 2:非数字
	//byMethod：传值方式 POST/GET/FILE/其它-REQUEST
	function byValue($byName,$byType,$byMethod){

		if($byName!=""&&$byType!=""){

			if($byType==1){

				//数字型，非数字默认设置为0
				$byStr = obtain($byName,$byMethod);
				if(!is_numeric($byStr)||$byStr==""){
					$returnValue = 0;
				}else{
					$returnValue = $byStr;
				}

			}else{

				//字符型，过滤字符中单引号与手机特殊字符
				$byStr = obtain($byName,$byMethod);
				$returnValue = $byStr;
				if($returnValue!=""){
					$returnValue = preg_replace_callback('/[\xf0-\xf7].{3}/', function($r) { return '';}, $returnValue);
					$returnValue = str_ireplace("'","",$returnValue);
					$returnValue = str_ireplace("\"","",$returnValue);
				}

			}


		}else{

			//传值异常,直接返回0
			$returnValue = 0;
		}

		return $returnValue;

	}

	//导入数据过滤
	function filterImport($filterData){

		if($filterData!=''){

			$filterData = trim($filterData);
			$filterData = preg_replace_callback('/[\xf0-\xf7].{3}/', function($r) { return '';}, $filterData);
			$filterData = str_ireplace("'","",$filterData);
			$filterData = str_ireplace("\\","",$filterData);

			return $filterData;
			
		}

		
	}

	//通过相应取值方法获取返回值
	function obtain($varname,$method){

		switch ($method) {
			case 'post':
				$obtainValue = $_POST[$varname];
				break;
			case 'get':
				$obtainValue = $_GET[$varname];
				break;
			case 'file':
				$obtainValue = $_FILES[$varname];
				break;
			default:
				$obtainValue = $_REQUEST[$varname];
				break;
		}

		return $obtainValue;

	}


	//图片上传
	function picUpload($formname,$picname,$picpath,$sizelimit,$typelimit,$picnum){

		$returnpic = array();
		$pics = $_FILES[$formname];

		//支持类型提示
		foreach($typelimit as $typeArr){
			$typename = $typename . "-" . $typeArr;
		}
		$typename = substr($typename,1);

		//支持文件大小提示
		$sizename = ceil($sizelimit/1024/1024);

		//图片数量从0开始
		$picnum = $picnum - 1;

		for ($pici=0;$pici<=$picnum;$pici++)  {

			//文件存在判断
			if($pics["name"][$pici]!=''&&is_uploaded_file($pics["tmp_name"][$pici]))
			{

				//判断上传文件类型
				if(!in_array($pics["type"][$pici],$typelimit))
				{
					errorjump("只能上传rar/zip/gzip类型文件.");
				}
				//检查文件大小
				if($sizelimit < $pics["size"][$pici])
				{
					errorjump("文件大小不能超过".$sizename."M.");
				}

				$filedir = $picpath;
				$imgname = $picname . $pici . substr($pics["name"][$pici],strrpos($pics["name"][$pici],'.'));

				//如果文件夹目录不存在则创建
				if(!file_exists($filedir)){mkdir($filedir); }

				//不允许上传同名文件
				if (file_exists($imgname) && $overwrite != true)
				{
					errorjump("同名文件已经存在.");
				}

				//执行上传
				if (!move_uploaded_file($pics["tmp_name"][$pici],$filedir.$imgname))
				{
					errorjump("移动文件出错.");
				}

				//返回值
				$returnpic[] = $imgname;
			 }else{

			 	$returnpic[] = "NO";		//多图不上传图片，默认设置成NO

			 }
		}

		return $returnpic;

	}

	function isbh($url,$pagename){
		if(strstr($url,$pagename)!=false){
			return 1;
		}else{
			return 0;
		}
	}

	//存图base64
	function saveImg($imgpath,$imgname,$baseimg){

		if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $baseimg, $result)){

		  $filetype = $result[2];
		  $savefile = $imgpath . $imgname . ".{$filetype}";

		  file_put_contents($savefile, base64_decode(str_replace($result[1], '', $baseimg)));

		  return $imgname . ".{$filetype}";

		}

	}

	//补0
	function supplyzero($number){

		$numberlen = strlen($number);
		if($numberlen<3){
			$forlen = 3-$numberlen;
			for($numberi=1;$numberi<=$forlen;$numberi++){
				$numbers = $numbers . "0";
			}
			return $numbers . $number;
		}else{
			return $number;
		}

	}

	/**
		* 方法:isdate()
		* 功能:判断日期格式是否正确
		* 参数:$str 日期字符串 $format日期格式
		* 返回:布儿值
	*/
	function isdate($str,$format="Y-m-d"){
		$strArr = explode("-",$str);
		if(empty($strArr)){
			return false;
		}
		foreach($strArr as $val){
			if(strlen($val)<2){
				$val="0".$val;
			}
			$newArr[]=$val;
		}
		$str =implode("-",$newArr);
	    $unixTime=strtotime($str);
	    $checkDate= date($format,$unixTime);
	    if($checkDate==$str)
	        return true;
	    else
	        return false;
	}

	//日期格式化
	function dateFormat($dateStr,$formatType){

		if(isdate($dateStr)){

			switch ($formatType) {
				case 1:
					$returnDate = date("Y-m-d H:i:s",strtotime($dateStr));
					break;
				case 2:
					$returnDate = date("Y-m-d",strtotime($dateStr));
					break;
				default:
					$returnDate = '';
					break;
			}

		}else{
			$returnDate = '';
		}

		return $returnDate;

	}

	//获取日期星期几
	function returnWeek($weekNumber){

		$weekArr = array("日","一","二","三","四","五","六");
		$weekStr = '星期' . $weekArr[$weekNumber];

		return $weekStr;

	}

	//获取客户端IP地址
	function getClientIp(){

		$ip=false;

		if(!empty($_SERVER["HTTP_CLIENT_IP"])){
			$ip = $_SERVER["HTTP_CLIENT_IP"];
		}

		if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

			$ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);

			if ($ip) {
			 	array_unshift($ips, $ip); $ip = FALSE; 
			}

			for ($i = 0; $i < count($ips); $i++) {
				if (!eregi ("^(10|172\.16|192\.168)\.", $ips[$i])) {
					$ip = $ips[$i];
					break;
				}
			}
		}

		return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
	}

	//判断字符串长度,中文算作1个字符
	function stringLen($str)
	{
	    if($str == ''){
	        return 0;
	    }
	    if(function_exists('mb_strlen')){
	        return mb_strlen($str,'utf-8');
	    }
	    else {
	        preg_match_all("/./u", $str, $ar);
	        return count($ar[0]);
	    }
	}

   //打成压缩包下载
   function toZip($Path,$ZipFile,$Typ=1,$Todo=1){

		//IF(!is_writeable($Path)){Exit("文件夹不可写!");}  

		$Path = Str_iReplace("\\","/",($Path)); 
	    IF(Is_Null($Path) Or Empty($Path) Or !IsSet($Path)){Return False;} 
	    IF(Is_Null($ZipFile) Or Empty($ZipFile) Or !IsSet($ZipFile)){Return False;} 

	    Include_once("/ini/class.phpZip.php"); 	// 载入代码库，注意路径 
	    $zip = New PHPZip; 
	    // IF(SubStr($Path,-1,1)=="/"){$Path=SubStr($Path,0,StrLen($Path)-1);} 
	 
	    // OB_end_clean(); 
	    
	    Switch ($Typ){ 
	    	Case "1": 
	       		$zip->ZipDir($Path,$ZipFile,$Todo); 
	        	Break; 
	   		Case "2": 
	       		$zip->ZipFile($Path,$ZipFile,$Todo); 
	       		Break; 
	    } 
	 
	    IF($Todo==1){ 
	        Die(); 
	    }Else{ 
	        Return True; 
	    } 

	}

	//单个文件下载
	function dl_file($file){  
   
	    //First, see if the file exists  
	    if (!is_file($file)) { die("<b>404 File not found!</b>"); }  
	   
	    //Gather relevent info about file  
	    $len = filesize($file);  
	    $filename = basename($file);  
	    $file_extension = strtolower(substr(strrchr($filename,"."),1));  
	   
	    //This will set the Content-Type to the appropriate setting for the file  
	    switch( $file_extension ) {  
	      case "pdf": $ctype="application/pdf"; break;  
	      case "exe": $ctype="application/octet-stream"; break;  
	      case "zip": $ctype="application/zip"; break;  
	      case "doc": $ctype="application/msword"; break;  
	      case "xls": $ctype="application/vnd.ms-excel"; break;  
	      case "ppt": $ctype="application/vnd.ms-powerpoint"; break;  
	      case "gif": $ctype="image/gif"; break;  
	      case "png": $ctype="image/png"; break;  
	      case "jpeg":  
	      case "jpg": $ctype="image/jpg"; break;  
	      case "mp3": $ctype="audio/mpeg"; break;  
	      case "wav": $ctype="audio/x-wav"; break;  
	      case "mpeg":  
	      case "mpg":  
	      case "mpe": $ctype="video/mpeg"; break;  
	      case "mov": $ctype="video/quicktime"; break;  
	      case "avi": $ctype="video/x-msvideo"; break;  
	   
	      //The following are for extensions that shouldn't be downloaded (sensitive stuff, like php files)  
	      case "php":  
	      case "htm":  
	      case "html":  
	      case "txt": die("<b>Cannot be used for ". $file_extension ." files!</b>"); break;  
	   
	      default: $ctype="application/force-download";  
	    }  
	   
	    //Begin writing headers  
	    header("Pragma: public");  
	    header("Expires: 0");  
	    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");  
	    header("Cache-Control: public");   
	    header("Content-Description: File Transfer");  
	       
	    //Use the switch-generated Content-Type  
	    header("Content-Type: $ctype");  
	   
	    //Force the download  
	    $header="Content-Disposition: attachment; filename=".$filename.";";  
	    header($header );  
	    header("Content-Transfer-Encoding: binary");  
	    header("Content-Length: ".$len);  
	    @readfile($file);  
	    exit;  
	}  

	//加密
	function encrypt($data,$key)
	{
		$char = '';$str = '';
		$key = md5($key);
		$x  = 0;
		$len = strlen($data);
		$l  = strlen($key);
		for ($i = 0; $i < $len; $i++)
		{
			if ($x == $l) 
			{
			 $x = 0;
			}
			$char .= $key{$x};
			$x++;
		}
		for ($i = 0; $i < $len; $i++)
		{
			$str .= chr(ord($data{$i}) + (ord($char{$i})) % 256);
		}
		return base64_encode($str);
	}

	//解密
	function decrypt($data,$key)
	{
		$char = '';$str = '';
		$key = md5($key);
		$x = 0;
		$data = base64_decode($data);
		$len = strlen($data);
		$l = strlen($key);
		for ($i = 0; $i < $len; $i++)
		{
			if ($x == $l) 
			{
			 $x = 0;
			}
			$char .= substr($key, $x, 1);
			$x++;
		}
		for ($i = 0; $i < $len; $i++)
		{
			if (ord(substr($data, $i, 1)) < ord(substr($char, $i, 1)))
			{
				$str .= chr((ord(substr($data, $i, 1)) + 256) - ord(substr($char, $i, 1)));
			}
			else
			{
				$str .= chr(ord(substr($data, $i, 1)) - ord(substr($char, $i, 1)));
			}
		}
		return $str;
	}

?>