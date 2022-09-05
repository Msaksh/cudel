<?php
    class Leads extends MY_Controller{
    	public function __construct(){
            parent:: __construct();
        }
        
        
        public function index(){
			 $filters = [
			            'order' => ['created_at', 'desc'],
			            'limit' => [0, 20]
			        ];
			        $where = [
			            
			        ];
        $orders = $this->appmodel->select_all('peyment_status', $where, $filters);

        $data = [
        	'orders' =>$orders
        ];
			$this->load->view('lead/list', $data);
		}
		
		
		public function edit($id){
		    $where = [
		        'order_id'    => $id   
		    ];
		    
		    $item = $this->appmodel->select_all("peyment_status", $where);
		    $data = [
		    	'orders'   				=> $item  
		    ];		 
		  
		    $this->load->view('lead/edit', $data);
		}

		public function delete($id){
			$where = [
				"id"	=> $this->uri->segment(3)
			];
			$isDelete = $this->appmodel->delete_one("customers", $where);
			if($isDelete){
				$this->session->set_flashdata('success', 'user successfully deleted');
			}
			redirect(site_url('user'));
		}

    }