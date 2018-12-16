<?php

class page_link{
    
    var $page;//当前页码；
    var $firstcount; //（数据库）查询的起始项；
    var $total; //数据总数
    var $displaypg;//每页显示数据条数
    var $get_txt; //页码标示字段
    var $url;//页面地址
    var $lastpg;////最后页，也是总页数
    
    function page_linkTo($total,$displaypg=30,$get_txt='page',$url=''){
        $lastpg=ceil($total/$displaypg);
        $this->lastpg=$lastpg;
        $this->page=($_GET[$get_txt]=='')?1:min($_GET[$get_txt],$lastpg);
        $this->total=$total;
        $this->displaypg=$displaypg;
        $this->get_txt=$get_txt;
        $this->url=($url=='')?$_SERVER["REQUEST_URI"]:$url;
        $this->firstcount=($this->page-1)*$displaypg;
     }
    
    //url网址处理函数:URL后加页码查询信息待赋值
    function get_new_url(){
        $url=$this->url;
        $parse_url=parse_url($url);
        $url_query=$parse_url["query"]; //单独取出URL的查询字串
        if($url_query){
            //因为URL中可能包含了页码信息，我们要把它去掉，以便加入新的页码信息。
            $url_query=preg_replace("/(^|&)".$this->get_txt."=[0-9]+/","",$url_query);

            //将处理后的URL的查询字串替换原来的URL的查询字串：
            $new_url=str_replace($parse_url["query"],$url_query,$url);

            //在URL后加page查询信息，但待赋值
            if($url_query)$new_url.="&".$this->get_txt; else $new_url.=$this->get_txt;
         }else {
            $new_url=$url."?".$this->get_txt;
         }
        return  $new_url;
     }
    
    ////输出分页导航条代码：$style显示样式
    function show_link($style=null){

        if(!empty($style)){

            //$pagenav = '<div class="next-page">';
            $url = $this->get_new_url();

            //如果多于一页：
            if($this->lastpg >1){

                if($this->page<=1){
                    $prePage = 1;
                }else{
                    $prePage = $this->page-1;
                }

                if($this->page>=$this->lastpg){
                    $nextPage = $this->lastpg;
                }else{
                    $nextPage = $this->page+1;
                }

                if((int)$this->page>=5){
                    $ks = $this->page - 2;
                    $js = $this->page + 2;
                    if($ks<1){
                        $ks=1;$js=$ks+4;
                    }
                    if($js>(int)$this->lastpg){
                        $js = $this->lastpg;
                        $ks = $js-4;
                    }
                }else{
                    if((int)$this->lastpg>=5){
                        $ks=1;$js=5;
                    }else{
                        $ks=1;$js=$this->lastpg;
                    }
                }

                $pagenav .= '<div class="pageBox pull-right">';
                $pagenav .= '<div class="pagePart pull-left clearfix">';
                $pagenav .= '<div class="pagePartIndex pageButton pull-left"><a href="'.$url.'=1">首页</a></div>';        

                $pagenav .= '<div class="pagePartPrev pageButton pull-left"><a href="'.$url.'='.$prePage.'">上一页</a></div>';

                for($pagei=$ks;$pagei<=$js;$pagei++){
                    if((int)$pagei==(int)$this->page){
                        $pagenav .= '<div class="pageNumber pageButton pull-left active"><a href="'.$url.'='.$pagei.'">'.$pagei.'</a></div>';
                    }else{
                        $pagenav .= '<div class="pageNumber pageButton pull-left"><a href="'.$url.'='.$pagei.'">'.$pagei.'</a></div>';
                    }
                }
                $pagenav .= '</div>';

                $pagenav .= '<div class="pagePart pull-left marginLeft24 clearfix">';

                $pagenav .= '<div class="pagePartNext pageButton pull-left"><a href="'.$url.'='.$nextPage.'">下一页</a></div>';
                $pagenav .= '<div class="pagePartNext pageButton pull-left"><a href="'.$url.'='.$this->lastpg.'">末页</a></div>';
                $pagenav .= '</div>';

                $pagenav .= '<div class="pageText pull-left">跳转到第</div>';
                $pagenav .= '<div class="pageInput pull-left"><input type="text" id="jump" name="jump" value="'.$this->page.'" />页</div>';
                $pagenav .= '<div class="pageButtonSure pull-left"><a href="javascript:void(0);" onclick="javascript:location.href=\''.$url.'=\'+document.getElementById(\'jump\').value;">确定</a></div>';

                $pagenav .= '</div>';

                // $prepg=$this->page-1; //上一页
                // $nextpg=($this->page==$this->lastpg ? 0 : $this->page+1); //下一页
                // $url=$this->get_new_url();
                // if($prepg) $pagenav.="<a href='$url=$prepg' class='prav'>上一页</a>"; else $pagenav.="<a href='javascript:;' class='prav'>上一页</a>";
                // //页码1-10
                // for($i=1;$i<=$this->lastpg;$i++){
                //     $pagenav.="<a href='$url=$i'";
                //     if(empty($this->page) && $i==1){
                //         $pagenav.=" class='active'";
                //     }else if($this->page == $i){
                //         $pagenav.=" class='active'";
                //     }
                //     $pagenav.=">".$i."</a> ";

                // }
                // if($nextpg) $pagenav.="<a href='$url=$nextpg' class='prav'>下一页</a> "; else $pagenav.=" <a href='javascript:;' class='prav'>下一页</a>&nbsp;&nbsp;";
            
                // $pagenav .='当前'.$this->page.'/'.$this->lastpg.'页 共'.$this->total.'条';
                //$pagenav .='</div>';
            }
        }else{

            //如果多于一页：
            if($this->lastpg >1){
                $prepg=$this->page-1; //上一页
                $nextpg=($this->page==$this->lastpg ? 0 : $this->page+1); //下一页
                $url=$this->get_new_url();
                $pagenav.="<a href='$url=1'>第一页</a> ";
                if($prepg) $pagenav.=" <a href='$url=$prepg'>上一页</a> "; else $pagenav.=" 上一页 ";
                if($nextpg) $pagenav.=" <a href='$url=$nextpg'>下一页</a> "; else $pagenav.=" 下一页 ";
                $pagenav.=" <a href='$url=$this->lastpg'>末页</a> ";
                //下拉跳转列表，循环列出所有页码：
                $pagenav.="　到第 <select name='topage' size='1' onchange='javascript:window.location=\"$url=\"+this.value'>\n";
                for($i=1;$i<=$this->lastpg;$i++){
                    if($i==$this->page) $pagenav.="<option value='$i' selected>$i</option>\n";
                    else $pagenav.="<option value='$i'>$i</option>\n";
                }
                $pagenav.="</select> 页，共 $this->lastpg 页";
             }

        }
        return $pagenav;
     }
}
?>