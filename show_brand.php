������:

function show_brand()/*ȫ��Ʒ�Ƶ���*/
	{
// 		print_r($_POST);
		@$url=$_POST['num_url']<1?1:$_POST['num_url']; //����brand_two.js������ֵ
		echo $url;
// 		echo $this->uri->segment(3)=='show_brand'?$this->uri->segment(4):$this->uri->segment(3);
		$this->load->library('pagination');
		$numpag=$url<1?1:$url;
		$num=6;
		$query['query']= $this->photo_model->show_brand($num,$url);
// 		$cat= $this->uri->segment(3);
		$total_nums=$this->db->count_all('product');
		$config['base_url']= $this->config->item('base_url').'/index.php/home/show_brand';
		$config['total_rows'] = $total_nums;//�ܹ�����������
		$config['per_page'] = $num;//ÿҳ��ʾ��������
		$config['first_link'] = FALSE;
		
		$config['last_link'] = FALSE;//��ϣ���ڷ�ҳ���ұ���ʾ�����һҳ�����ӵ����֡�
		
		$config['next_tag_open'] = '<a>';
		$config['next_link'] = '��һҳ';//��ϣ���ڷ�ҳ����ʾ����һҳ�����ӵ����֡�
		$config['next_tag_close'] = '</a>';
		
		
		
		$config['prev_tag_open'] = '<a>';
		$config['prev_link'] = '��һҳ';//��ϣ���ڷ�ҳ����ʾ����һҳ�����ӵ����֡�
		$config['prev_tag_close'] = '</a>';
		
		$config['display_pages'] = FALSE; //������������
// 		$config['num_links'] = 1;
		
		$this->pagination->initialize($config);
		$query['num']=$numpag;
// 		print_r($query);die();
// print_r($_POST);die();
     $url=$this->input->post('url_id');
    if($url=='0' or $url=='u' or $url=='d'){$this->load->view('home/show_brand',$query);}/*��Ů*/
    if($url=='1'){$this->load->view('home/show_brand2',$query);}/*����*/
    if($url=='2'){$this->load->view('home/show_brand2',$query);}/*�ü� ,��δ��֧ͨ��*/
	}
	