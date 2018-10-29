<?php

	//数据分页计算
	function datapage($pageSize,$curPage,$dataCount){

		$returndata = array();

		$page = $curPage;					//当前分页数
		$pagesize = $pageNum;				//显示每页条数

		if ($page=="" or $page==1 or $page==0){
			$page = 1;
			$beginid = 0;
		}else{
			$beginid = ($page-1)*$pageSize;	 //从第几条调用数据
		}

		//取得分页的个数
		if ($dataCount > $pageSize){
			 if ($dataCount % $pageSize == 0){
				$pagecount = $dataCount/$pageSize; //当记录数正好是显示每页条数
			 }else{
				$pagecount = ceil($dataCount/$pageSize);
			 }
		}else{
			$pagecount=1;
		}

		$returndata[] = $beginid;
		$returndata[] = $pagecount;
		$returndata[] = $page;
	
		return $returndata;

	}

	//分页输出
	function printPage($page,$pageCount,$pageSize,$dataCount,$searchText){

		if($pageCount>1){

			if($page<=1){
				$prePage = 1;
			}else{
				$prePage = $page-1;
			}

			if($page>=$pageCount){
				$nextPage = $pageCount;
			}else{
				$nextPage = $page+1;
			}

			if((int)$page>=10){
				$ks = $page - 5;
				$js = $page + 5;
				if($ks<1){
					$ks=1;$js=$ks+9;
				}
				if($js>(int)$pageCount){
					$js = $pageCount;
					$ks = $js-9;
				}
			}else{
				if((int)$pageCount>=10){
					$ks=1;$js=10;
				}else{
					$ks=1;$js=$pageCount;
				}
			}

			$preTenPage = $ks - 10;
			if($preTenPage<1){
				$preTenPage = 1;
			}

			$nextTenPage = $ks + 10;
			if($nextTenPage>$pageCount){
				$nextTenPage = $pageCount;
			}
			
			$pageContent .= '<div class="pageBox" style="width:900px;height:auto;overflow:hidden;float:right;margin-top:60px;"><div class="inr-pageBox">';
			$pageContent .= '<a href="?page='.$prePage.''.$searchText.'">上一页</a>';

			for($pagei=$ks;$pagei<=$js;$pagei++){
				if((int)$pagei==(int)$page){
					$pageContent .= '<a href="?page='.$pagei.''.$searchText.'" class="active">'.$pagei.'</a>';
				}else{
					$pageContent .= '<a href="?page='.$pagei.''.$searchText.'">'.$pagei.'</a>';
				}
			}

			$pageContent .= '<a href="?page='.$nextPage.''.$searchText.'">下一页</a>';
			$pageContent .= '<div class="pageTips">当前'.$page.'/'.$pageCount.'页 共'.$dataCount.'条</div>';
			$pageContent .= '</div></div>';

		}else{
			$pageContent = '';
		}
		
		return $pageContent;

	}


?>