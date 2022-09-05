<?php
    class Beautyexpert extends MY_Controller{
    	public function __construct(){
            parent:: __construct();
        }        
        
        public function index(){

		    $filters = ['order'	=> ['id','desc']
		]; $url = ''; $where = [];

		    $items = $this->appmodel->select_all("beautyexpert", $where, $filters);

		    $data = [
			  'items'	=> $items
			];
			// print_r($items); die;
			$this->load->view('beauty-expert/list', $data);
		}

		
		public function delete($id){
			$where = [
				"id"	=> $this->uri->segment(3)
			];
			$isDelete = $this->appmodel->delete_one("beautyexpert", $where);
			if($isDelete){
				$this->session->set_flashdata('success', 'Beauty Expert successfully deleted');
			}
			redirect(site_url('beautyexpert'));
		}	

    }