
不是用 $符号 是解决与其他js冲突;这里是指在show_brand页面中的130到155这段的js代码

jQuery (document).ready(function() {
		jQuery (".brand_fy").on('click','#submit',function(){
//			alert();jQuery ('#submit').attr('value')
//		});
				var j=jQuery("#submit1").attr('value')
var i= parseInt(j); 
alert("当前点击次数："+i);
i--;
			jQuery .post('./index.php/home/show_brand',{'num_url':i,'url_id':jQuery ('#submit').attr('name')},function(data){
			jQuery (".show_brand").replaceWith(data);
			},'html');
				});
//        $(".brand_fy").on('click',function(){
        	

	
//});

jQuery (".brand_fy").on('click','#submit1',function(event){
//			alert();jQuery ('#submit').attr('value')
//		});
	var j=jQuery("#submit1").attr('value')
var i= parseInt(j); 
alert("当前点击次数："+i);
i++;

//$("#submit1").value(i); 
		jQuery .post('./index.php/home/show_brand',{'num_url':i,'url_id':jQuery ('#submit').attr('name')},function(data){
			jQuery (".show_brand").replaceWith(data);
			},'html');
//			,function(data){
//			return data.y_brand_fenlei;
//			},'html')

				
				});
//        $(".brand_fy").on('click',function(){
        	

	
//});