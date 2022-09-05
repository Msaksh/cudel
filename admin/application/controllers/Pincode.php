<?php
class Pincode extends MY_Controller{
	public function __construct(){
		parent:: __construct();
	}        
	
	public function index(){

		$filters = ['order' => ['created_at', 'desc']]; $url = ''; $where = [];
		$items = $this->appmodel->select_all("pin_code", $where, $filters);
		$data = [
			'items'	=> $items
		];
		$this->load->view('pin-code/list', $data);
	}

	public function create(){		
		$post_data = $this->input->post();
		if($post_data){		
			$insert_data = array(				
				"pin_code"     		=> $post_data['pin'],	
				"status"   	    	=> (isset($post_data['PUBLISH']))?'A':'D',
				'created_at'		=> date('Y-m-d h:i')
			);
			$isInsert = $this->appmodel->insert_one('pin_code', $insert_data);
			if($isInsert){
				$this->session->set_flashdata('success', 'post successfully created');
			}else{
				$this->session->set_flashdata('error', 'something went wrong');
			}
			redirect(site_url("pincode"));
		} 		
		$this->load->view('pin-code/create');
	}
		
	public function edit($id){
		$where = [
			'id'    => $id   
		];
		$post_data = $this->input->post();
		if($post_data){

			$insert_data = [
				"pin_code"     		=> $post_data['pin'],		
				"status"   	   => (isset($post_data['PUBLISH']))?'A':'D',
				
			];
			$isInsert = $this->appmodel->update('pin_code', $where, $insert_data);
			if($isInsert){
				$this->session->set_flashdata('success', 'Product successfully updated');
			}else{
				$this->session->set_flashdata('error', 'something went wrong');
			}
			redirect(site_url("pincode"));
		}
		
		$item = $this->appmodel->select_one("pin_code", $where);

		$data = [
			'item'   				=> $item  
		];
		$this->load->view('pin-code/edit', $data);
	}

	public function delete($id){
		$where = [
			"id"	=> $this->uri->segment(3)
		];
		$isDelete = $this->appmodel->delete_one("pin_code", $where);
		if($isDelete){
			$this->session->set_flashdata('success', 'post successfully deleted');
		}
		redirect(site_url('pincode'));
	}

	public function enable(){
		$post_data = $this->input->post();

		$where = [
			"id"  => $post_data['id']

		];

		$insert_data = [
			"status"	=> $post_data['status']
		];
		$isInsert = $this->appmodel->update('pin_code', $where, $insert_data);

		if($isInsert){
			$json = true;
		}else{
			$json = false;
		}
		echo json_encode($json);
	}
}