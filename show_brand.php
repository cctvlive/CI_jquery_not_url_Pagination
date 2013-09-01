控制器:

function show_brand()/*全部品牌弹框*/
	{
// 		print_r($_POST);
		@$url=$_POST['num_url']<1?1:$_POST['num_url']; //接收brand_two.js传来的值
		echo $url;
// 		echo $this->uri->segment(3)=='show_brand'?$this->uri->segment(4):$this->uri->segment(3);
		$this->load->library('pagination');
		$numpag=$url<1?1:$url;
		$num=6;
		$query['query']= $this->photo_model->show_brand($num,$url);
// 		$cat= $this->uri->segment(3);
		$total_nums=$this->db->count_all('product');
		$config['base_url']= $this->config->item('base_url').'/index.php/home/show_brand';
		$config['total_rows'] = $total_nums;//总共多少条数据
		$config['per_page'] = $num;//每页显示几条数据
		$config['first_link'] = FALSE;
		
		$config['last_link'] = FALSE;//你希望在分页的右边显示“最后一页”链接的名字。
		
		$config['next_tag_open'] = '<a>';
		$config['next_link'] = '下一页';//你希望在分页中显示“下一页”链接的名字。
		$config['next_tag_close'] = '</a>';
		
		
		
		$config['prev_tag_open'] = '<a>';
		$config['prev_link'] = '上一页';//你希望在分页中显示“上一页”链接的名字。
		$config['prev_tag_close'] = '</a>';
		
		$config['display_pages'] = FALSE; //隐藏数字连接
// 		$config['num_links'] = 1;
		
		$this->pagination->initialize($config);
		$query['num']=$numpag;
// 		print_r($query);die();
// print_r($_POST);die();
     $url=$this->input->post('url_id');
    if($url=='0' or $url=='u' or $url=='d'){$this->load->view('home/show_brand',$query);}/*月女*/
    if($url=='1'){$this->load->view('home/show_brand2',$query);}/*悦男*/
    if($url=='2'){$this->load->view('home/show_brand2',$query);}/*悦加 ,暂未开通支持*/
	}
	