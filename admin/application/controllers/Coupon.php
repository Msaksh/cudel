<?php
class Coupon extends MY_Controller{
	public function __construct(){
		parent:: __construct();
	}        
	
	public function index(){

		$filters = ['order' => ['created_at', 'desc']]; $url = ''; $where = [];
		$items = $this->appmodel->select_all("coupon", $where, $filters);
		$data = [
			'items'	=> $items
		];
		$this->load->view('coupon/list', $data);
	}

	public function create(){		
		$post_data = $this->input->post();
		if($post_data){		
			$insert_data = array(				
				"coupon_code"     	=> $post_data['coupon'],
				"price"     		=> $post_data['price'],	
				"status"   	    	=> (isset($post_data['PUBLISH']))?'A':'D',
				'created_at'		=> date('Y-m-d h:i')
			);
			$isInsert = $this->appmodel->insert_one('coupon', $insert_data);
			if($isInsert){
				$this->session->set_flashdata('success', 'post successfully created');
			}else{
				$this->session->set_flashdata('error', 'something went wrong');
			}
			redirect(site_url("coupon"));
		} 		
		$this->load->view('coupon/create');
	}
	
	public function edit($id){
		$where = [
			'id'    => $id   
		];
		$post_data = $this->input->post();
		if($post_data){

			$insert_data = [
				"coupon_code"   => $post_data['coupon'],
				"price"     	=> $post_data['price'],			
				"status"   	    => (isset($post_data['PUBLISH']))?'A':'D',
				
			];
			$isInsert = $this->appmodel->update('coupon', $where, $insert_data);
			if($isInsert){
				$this->session->set_flashdata('success', 'Product successfully updated');
			}else{
				$this->session->set_flashdata('error', 'something went wrong');
			}
			redirect(site_url("coupon"));
		}
		
		$item = $this->appmodel->select_one("coupon", $where);

		$data = [
			'item'   				=> $item  
		];
		$this->load->view('coupon/edit', $data);
	}

	public function delete($id){
		$where = [
			"id"	=> $this->uri->segment(3)
		];
		$isDelete = $this->appmodel->delete_one("coupon", $where);
		if($isDelete){
			$this->session->set_flashdata('success', 'post successfully deleted');
		}
		redirect(site_url('coupon'));
	}

	public function enable(){
		$post_data = $this->input->post();

		$where = [
			"id"  => $post_data['id']

		];

		$insert_data = [
			"status"	=> $post_data['status']
		];
		$isInsert = $this->appmodel->update('coupon', $where, $insert_data);

		if($isInsert){
			$json = true;
		}else{
			$json = false;
		}
		echo json_encode($json);
	}
}