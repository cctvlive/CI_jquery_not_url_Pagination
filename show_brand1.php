
 html ҳ��
 
 
 
 
 
 
 <!--��ҳ-->
<!--      name��ֵ��url��ַ���������һ���ַ�     $num�Ǵӿ������ﴫ������(����JS+1����-1�����)-->
  <div class="brand_fy"><a id="submit" name="<?=substr(current_url(), -1)?>" value="<?=$num;?>">��һҳ</a><a  href="javascript:countClickedTimes();" id="submit1" value="<?=$num;?>"">��һҳ</a></div>
<!-- <div class="brand_fy"></div> -->
    <!--��ҳ����-->
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
	  dq=$(ii+i).className='sec'; //��ǰѡ�� 
	  $(iii+i).style.display="block";
	// return false; +�����ʵ��������ֵ
	   } 
	   else 
	   { 
	   dq=$(ii+i).className='sec1'; 
	  
	   $(iii+i).style.display="none"; 
	  
	   } 
	} 
	} 
        </script>