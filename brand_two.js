
������ $���� �ǽ��������js��ͻ;������ָ��show_brandҳ���е�130��155��ε�js����

jQuery (document).ready(function() {
		jQuery (".brand_fy").on('click','#submit',function(){
//			alert();jQuery ('#submit').attr('value')
//		});
				var j=jQuery("#submit1").attr('value')
var i= parseInt(j); 
alert("��ǰ���������"+i);
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
alert("��ǰ���������"+i);
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