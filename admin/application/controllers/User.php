<?php
    class User extends MY_Controller{
    	public function __construct(){
            parent:: __construct();
        }
        
        
        public function index(){

        	$filters = [];
        	$items = $this->appmodel->select_all("customers", [], $filters);

		    $data = [
			  'items'	=> $items
			];
			$this->load->view('user/list', $data);
		}

		public function create(){
		    
			$post_data = $this->input->post();
			if($post_data){
				if($this->appmodel->select_one("customers", ['email'=>$post_data['email']])){
					$this->session->set_flashdata('error', 'email already exiest');
					redirect(site_url("user/create"));
				}

				$config = [
        			'upload_path'   => './assets/images/user/',
        			'allowed_types' => 'jpg|png|gif|jpeg',
        			'encrypt_name'  => TRUE
        		];
        		$this->load->library('upload', $config); 
        		
        		$image = '';
        		if($this->upload->do_upload('profile_image')){
    				$img_data = $this->upload->data();
    				$image = $img_data['file_name'];
    			}

				
				$insert_data = array(
					"name"     			=> $post_data['name'],
					"mobile"     		=> $post_data['mobile'],
					"email"   			=> $post_data['email'],
					"dob"				=> $post_data['dob'],
					'password'			=> $this->common->generate_string(6),
					'image'        		=> $image,
					"status"   	    	=> (isset($post_data['draft_save']))?'D':'A',
					'created_at'		=> date('Y-m-d h:i')
				);
				$isInsert = $this->appmodel->insert_one('customers', $insert_data);
				if($isInsert){
					$this->session->set_flashdata('success', 'customer successfully created');
				}else{
					$this->session->set_flashdata('error', 'something went wrong');
				}
				redirect(site_url("user"));
		    } 
		    $this->load->view('user/create', []);
		}
		
		
		public function edit($id){
		    $where = [
		        'id'    => $id   
		    ];

		    $post_data = $this->input->post();
			if($post_data){
				if($this->appmodel->select_one("customers", ['email'=>$post_data['email'],'id!='=>$id])){
					$this->session->set_flashdata('error', 'email already exiest');
					redirect($_SERVER['HTTP_REFERER']);
				}

				$insert_data = array(
					"name"     			=> $post_data['name'],
					"mobile"     		=> $post_data['mobile'],
					"dob"				=> $post_data['dob'],
					"status"   	    	=> (isset($post_data['draft_save']))?'D':'A'
				);

				$config = [
        			'upload_path'   => './assets/images/user/',
        			'allowed_types' => 'jpg|png|gif|jpeg',
        			'encrypt_name'  => TRUE
        		];
        		$this->load->library('upload', $config); 
        		
        		if($this->upload->do_upload('profile_image')){
    				$img_data = $this->upload->data();
    				$insert_data['image'] = $img_data['file_name'];
    			}elseif(!$post_data['imageExiest']){
    				$insert_data['image'] = '';
    			}

				$isInsert = $this->appmodel->update('customers', $where, $insert_data);
				if($isInsert){
					$this->session->set_flashdata('success', 'user successfully updated');
				}else{
					$this->session->set_flashdata('error', 'something went wrong');
				}
				redirect(site_url("user"));
		    }
		    
		    $item = $this->appmodel->select_one("customers", $where);
		    $data = [
		    	'item'   				=> $item  
		    ];
		    $this->load->view('user/edit', $data);
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

		public function enable(){
			$post_data = $this->input->post();

			$where = [
				"id"  => $post_data['id']
			];

			$insert_data = [
				"status"	=> $post_data['status']
			];
			$isInsert = $this->appmodel->update('customers', $where, $insert_data);

			if($isInsert){
				$json = true;
			}else{
				$json = false;
			}


			echo json_encode($json);
		}


    }