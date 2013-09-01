
 html 页面
 
 
 
 
 
 
 <!--翻页-->
<!--      name的值是url地址栏里的最后的一个字符     $num是从控制器里传出来的(接收JS+1后者-1后的数)-->
  <div class="brand_fy"><a id="submit" name="<?=substr(current_url(), -1)?>" value="<?=$num;?>">上一页</a><a  href="javascript:countClickedTimes();" id="submit1" value="<?=$num;?>"">下一页</a></div>
<!-- <div class="brand_fy"></div> -->
    <!--翻页结束-->
</div>
 <script type="text/javascript"  src="style/jstwo/brand_two.js"></script>
<script type="text/javascript" language="javascript">

function $(id){ 
	return document.getElementById(id); 
	} 
	function xxk(num,id,ii,iii) 
	{ 
	//alert(ii); 
	var dq; 
	for(var i=1;i<=num;i++) 
	{ 
	   if(i==id){ 
	  dq=$(ii+i).className='sec'; //当前选项 
	  $(iii+i).style.display="block";
	// return false; +上这句实现评级传值
	   } 
	   else 
	   { 
	   dq=$(ii+i).className='sec1'; 
	  
	   $(iii+i).style.display="none"; 
	  
	   } 
	} 
	} 
        </script>