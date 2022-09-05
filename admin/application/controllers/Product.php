<?php
class Product extends MY_Controller{
	public function __construct(){
		parent:: __construct();
	}        
	
	public function index(){

		$filters = ['order' => ['created_at', 'desc']]; $url = ''; $where = ['for_product'=>'P'];

		$items = $this->appmodel->select_all("service_rate_card", $where, $filters);

		$data = [
			'items'	=> $items
		];
		$this->load->view('product/list', $data);
	}

	public function create(){
		
		$post_data = $this->input->post();
		if($post_data){				

			$config = [
				'upload_path'   => './assets/images/blog/',
				'allowed_types' => 'jpg|png|gif|jpeg',
				'encrypt_name'  => TRUE
			];
			$this->load->library('upload', $config); 
			
			$image = '';
			if($this->upload->do_upload('image')){
				$img_data = $this->upload->data();
				$image = $img_data['file_name'];
			}
			$config['image_library'] = 'gd2';
					$config['source_image'] = './assets/images/blog/'.$image;
					$config['create_thumb'] = TRUE;
					$config['maintain_ratio'] = TRUE;
					$config['width']         = 75;
					$config['height']       = 50;

					$this->load->library('image_lib', $config);	

					$k=$this->image_lib->resize();	
			
			$insert_data = array(
				
				"name"     		=> $post_data['title'],					
				"details"   	=> $post_data['details'],
				"price"   		=> $post_data['price'],	
				"for_product"	=>"P",		
				
				"status"   	    => (isset($post_data['PUBLISH']))?'A':'D',
				'image'         => $banner_image,
				'created_at'	=> date('Y-m-d h:i')
			);
			$isInsert = $this->appmodel->insert_one('service_rate_card', $insert_data);
			if($isInsert){
				$this->session->set_flashdata('success', 'post successfully created');
			}else{
				$this->session->set_flashdata('error', 'something went wrong');
			}
			redirect(site_url("product"));
		}  
		
		$this->load->view('product/create');
	}
	
	
	public function edit($id){
		$where = [
			'id'    => $id   
		];
		$post_data = $this->input->post();

		if($post_data){
		
			if($this->appmodel->select_one("service_rate_card",$where )){	

				
			}
			$insert_data = [
				"name"     		=> $post_data['title'],					
				"details"   	=> $post_data['details'],
				"price"   		=> $post_data['price'],
				"for_product"	=>"P",		
				"status"   	    => (isset($post_data['PUBLISH']))?'A':'D',
			];
			$config = [
				'upload_path'   => './assets/images/blog/',
				'allowed_types' => 'jpg|png|gif|jpeg',
				'encrypt_name'  => TRUE,

			];
			$this->load->library('upload', $config);

			if($this->upload->do_upload('image')){
				$img_data = $this->upload->data();
				$insert_data['image'] = $img_data['file_name'];
				$image=$img_data['file_name'];
			}
			elseif(!$post_data['imageExiest']){
				$insert_data['image'] = '';
			}	

			$config['image_library'] = 'gd2';
					$config['source_image'] = './assets/images/blog/'.$image;
					$config['create_thumb'] = TRUE;
					$config['maintain_ratio'] = TRUE;
					$config['width']         = 75;
					$config['height']       = 50;
					$this->load->library('image_lib', $config);	
					$k=$this->image_lib->resize();	
					
			$isInsert = $this->appmodel->update('service_rate_card', $where, $insert_data);
			if($isInsert){
				$this->session->set_flashdata('success', 'Product successfully updated');
			}else{
				$this->session->set_flashdata('error', 'something went wrong');
			}
			redirect(site_url("product"));
		}
		
		$item = $this->appmodel->select_one("service_rate_card", $where);
		$data = [
		    	// 'categories'			=> $categories,
			'item'   				=> $item  
		];
		$this->load->view('product/edit', $data);
	}

	public function delete($id){
		$where = [
			"id"	=> $this->uri->segment(3)
		];
		$isDelete = $this->appmodel->delete_one("service_rate_card", $where);
		if($isDelete){
			$this->session->set_flashdata('success', 'post successfully deleted');
		}
		redirect(site_url('product'));
	}

	public function enable(){
		$post_data = $this->input->post();

		$where = [
			"id"  => $post_data['id']

		];

		$insert_data = [
			"status"	=> $post_data['status']
		];
		$isInsert = $this->appmodel->update('service_rate_card', $where, $insert_data);

		if($isInsert){
			$json = true;
		}else{
			$json = false;
		}


		echo json_encode($json);
	}

}