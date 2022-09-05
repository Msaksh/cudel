<?php
    class Staff extends MY_Controller{
    	public function __construct(){
            parent:: __construct();
        }
        
        public function index(){

        	$get = $this->input->get();
		    $filters = []; $url = ''; $where = [];

		    //orders

		    if(isset($get['date_sort'])){
		    	$filters['order'] = ['created_at', 'asc'];
		    }

		    if(isset($get['status_sort'])){
		    	$filters['order'] = ['status', 'A'];
		    }

		    //filters
		    if(isset($get['search']) && !empty($get['search'])){
		    	$url .= '&search='.$get['search'];
		    	$filters['like'] = "(name LIKE '%".$get['search']."%' OR phone LIKE '%".$get['search']."%' OR details LIKE '%".$get['search']."%')";
		    }

		    if(isset($get['status']) && !empty($get['status'])){
		    	$url .= '&status='.$get['status'];
		    	$where['status'] = $get['status']=='active'?'A':'D';
		    }

		    if(isset($get['from']) && !empty($get['from'])){
		    	$url .= '&from='.$get['from'];
		    	$where['date(created_at)>='] = $get['from'];
		    }

		    if(isset($get['to']) && !empty($get['to'])){
		    	$url .= '&to='.$get['to'];
		    	$where['date(created_at)<='] = $get['to'];
		    }

		    if($url){
		    	$url = '?'.ltrim($url, '&');
		    }

		    //pagination
        	$this->load->library('pagination');
		    $config['base_url'] = site_url('staff'.$url);
		    $config['total_rows'] = $this->appmodel->num_rows("staffs", $where, $filters);
		    $config['per_page'] = 10;
    		$config['page_query_string'] = TRUE;
    		$config['full_tag_open'] = '<div class="pagination">';
            $config['full_tag_close'] = '</div>';
             
            $config['first_link'] = 'First';
            $config['first_tag_open'] = '<span class="firstlink">';
            $config['first_tag_close'] = '</span>';
             
            $config['last_link'] = 'Last';
            $config['last_tag_open'] = '<span class="lastlink">';
            $config['last_tag_close'] = '</span>';
             
            $config['next_link'] = 'Next';
            $config['next_tag_open'] = '<span class="nextlink">';
            $config['next_tag_close'] = '</span>';
 
            $config['prev_link'] = 'Previous';
            $config['prev_tag_open'] = '<span class="prevlink">';
            $config['prev_tag_close'] = '</span>';
 
            $config['cur_tag_open'] = '<span class="curlink">';
            $config['cur_tag_close'] = '</span>';
 
            $config['num_tag_open'] = '<span class="numlink">';
            $config['num_tag_close'] = '</span>';

		    $page = (isset($get['per_page'])) ? $get['per_page'] : 0;
		    $this->pagination->initialize($config);
		    
		    $filters['limit'] = [$page, $config["per_page"]];
		    $items = $this->appmodel->select_all("staffs", $where, $filters);

		    $data = [
			  'items'	=> $items
			];
			$this->load->view('staff/list', $data);
		}

		public function create(){
		    
			$post_data = $this->input->post();
			if($post_data){
				$slug = (!empty($post_data['slug']))?$post_data['slug']:$this->common->formatUrl($post_data['name']);
				if($this->appmodel->select_one("staffs", ['slug'=>$slug])){
					$this->session->set_flashdata('error', 'slug already exiest');
					redirect(site_url("staff/create"));
				}

				$config = [
        			'upload_path'   => './assets/images/staff/',
        			'allowed_types' => 'jpg|png|gif|jpeg',
        			'encrypt_name'  => TRUE
        		];
        		$this->load->library('upload', $config); 
        		
        		$image = '';
        		if($this->upload->do_upload('image')){
    				$img_data = $this->upload->data();
    				$image = $img_data['file_name'];
    			}

				$config = [
        			'upload_path'   => './assets/images/staff/',
        			'allowed_types' => 'jpg|png|gif|jpeg',
        			'encrypt_name'  => TRUE
        		];
        		$this->upload->initialize($config);
        		
        		$icon = '';
        		if($this->upload->do_upload('iccon')){
    				$img_data = $this->upload->data();
    				$icon = $img_data['file_name'];
    			}

				$insert_data = array(
					"slug"     			=> $slug,
					"name"     			=> $post_data['name'],
					"details"     		=> $post_data['details'],
					"sort"     			=> $post_data['sort'],
					"position"			=> $post_data['position'],
					"email"				=> $post_data['email'],
					"phone"				=> $post_data['phone'],
					'image'        		=> $image,
					'icon'        		=> $icon,
					"status"   	    	=> (isset($post_data['draft_save']))?'D':'A',
					'created_at'		=> date('Y-m-d h:i')
				);
				$isInsert = $this->appmodel->insert_one('staffs', $insert_data);
				if($isInsert){
					$this->session->set_flashdata('success', 'staff successfully created');
				}else{
					$this->session->set_flashdata('error', 'something went wrong');
				}
				redirect(site_url("staff"));
		    } 
		    $this->load->view('staff/create', []);
		}
		
		
		public function edit($id){
		    $where = [
		        'id'    => $id   
		    ];

		    $post_data = $this->input->post();
			if($post_data){
				$slug = (!empty($post_data['slug']))?$post_data['slug']:$this->common->formatUrl($post_data['name']);
				if($this->appmodel->select_one("staffs", ['slug'=>$slug,'id!='=>$id])){
					$this->session->set_flashdata('error', 'slug already exiest');
					redirect($_SERVER['HTTP_REFERER']);
				}

				$insert_data = array(
					"slug"     			=> $slug,
					"name"     			=> $post_data['name'],
					"details"     		=> $post_data['details'],
					"position"     		=> $post_data['position'],
					"email"				=> $post_data['email'],
					"phone"				=> $post_data['phone'],
					"sort"     			=> $post_data['sort'],
					"status"   	    	=> (isset($post_data['draft_save']))?'D':'A',
				);
				
				$config = [
        			'upload_path'   => './assets/images/staff/',
        			'allowed_types' => 'jpg|png|gif|jpeg',
        			'encrypt_name'  => TRUE
        		];

        		$this->load->library('upload', $config);

				if($this->upload->do_upload('image')){
    				$img_data = $this->upload->data();
    				$insert_data['image'] = $img_data['file_name'];
    			}elseif(!$post_data['imageExiest']){
    				$insert_data['image'] = '';
    			}

				$isInsert = $this->appmodel->update('staffs', $where, $insert_data);
				if($isInsert){
					$this->session->set_flashdata('success', 'staff successfully update');
				}else{
					$this->session->set_flashdata('error', 'something went wrong');
				}
				redirect(site_url("staff"));
		    }
		    
		    $item = $this->appmodel->select_one("staffs", $where);
		    $data = [
		    	'item'   				=> $item  
		    ];
		    $this->load->view('staff/edit', $data);
		}

		public function delete($id){
			$where = [
				"id"	=> $this->uri->segment(3)
			];
			$isDelete = $this->appmodel->delete_one("staffs", $where);
			if($isDelete){
				$this->session->set_flashdata('success', 'staff successfully deleted');
			}
			redirect(site_url('staff'));
		}

		public function delete_all(){
			$isDelete = $this->appmodel->delete_all("staffs");
			if($isDelete){
				$this->session->set_flashdata('success', 'All staff successfully deleted');
			}
			redirect(site_url('staff'));
		}

		public function selected_delete(){
			$post = $this->input->post();
			if($post){
				$isDelete = '';
				foreach ($post['all'] as $key => $value) {
					$where = [
						"id"	=> $value
					];
					$isDelete = $this->appmodel->delete_one("staffs", $where);
				}
				if($isDelete){
					$this->session->set_flashdata('success', 'selected staff successfully deleted');
				}
			}
			redirect(site_url('staff'));
		}

		public function publication_update($id, $status){
			$where = [
		        'id'    => $id   
		    ];
		    $insert_data = [
				"status"   	    => $status=='A'?'D':'A',
			];
		    $isInsert = $this->appmodel->update('staffs', $where, $insert_data);
			if($isInsert){
				$this->session->set_flashdata('success', 'staff '.($status=='A'?'unpublish':'publish').' successfully');
			}else{
				$this->session->set_flashdata('error', 'something went wrong');
			}
			redirect(site_url("staff"));

		}

		public function dublicate($id){
			$where = [
		        'id'    => $id   
		    ];
		    $dublicate = $this->appmodel->select_one("staffs", $where);
		    if($dublicate){
		    	$insert = array(
		    		'slug'			=> $this->common->generate_string(20),
					"name"     		=> $dublicate->name,
					"details"   	=> $dublicate->details,
					"position"     	=> $dublicate->position,
					"email"			=> $dublicate->email,
					"phone"			=> $dublicate->phone,
					"status"   	    => $dublicate->status,
					"sort"   		=> $dublicate->sort,
					'image'        	=> $dublicate->image,
					'icon'        	=> $dublicate->icon,
					'created_at'	=> date('Y-m-d h:i')
				);
				$isDublicate = $this->appmodel->insert_one('staffs', $insert);
				if($isDublicate){
					$this->session->set_flashdata('success', 'staff successfully dublicated');
				}else{
					$this->session->set_flashdata('error', 'something went wrong');
				}
		    }
		    redirect(site_url("staff"));
		}

		public function export(){
			$get = $this->input->get();

			$filename = 'staff_'.date('Ymd').'.csv'; 
			header("Content-Description: File Transfer"); 
			header("Content-Disposition: attachment; filename=$filename"); 
			header("Content-Type: application/csv; ");
		   	
		   	$filters = []; $where = [];
		   	if(isset($get['search']) && !empty($get['search'])){
		    	$filters['like'] = "(name LIKE '%".$get['search']."%' OR details LIKE '%".$get['search']."%')";
		    }

		    if(isset($get['status']) && !empty($get['status'])){
		    	$where['status'] = $get['status']=='active'?'A':'D';
		    }
		    if(isset($get['from']) && !empty($get['from'])){
		    	$where['date(created_at)>='] = $get['from'];
		    }

		    if(isset($get['to']) && !empty($get['to'])){
		    	$where['date(created_at)<='] = $get['to'];
		    }
			$usersData = $this->appmodel->select_all('staffs', $where, $filters);

			// file creation 
			$file = fopen('php://output','w');
			$header = array("id", "slug", "name", "image", "details",  "icon", "position", "email", "phone", "sort", "status", "created_at"); 
			fputcsv($file, $header);
			foreach ($usersData as $key=>$value){ 
				$line = array($value->id, $value->slug, $value->name, $value->image, $value->details, $value->icon, $value->position, $value->email, $value->phone, $value->sort, $value->status, $value->created_at);
				fputcsv($file, $line); 
			}
			fclose($file); 
			exit;
		}

		public function import(){
			$post = $this->input->post();
			if($post){

				$file = $_FILES['excelsheet']['tmp_name'];
				$handle = fopen($file, "r");
				$c = 0;//
				while(($filesop = fgetcsv($handle, 1000, ",")) !== false) {
					if($c<>0){ /* SKIP THE FIRST ROW */
						$where = [
							'id'	=> $filesop[0]
						];
						$update = [
							'slug'				=> $filesop[1],
							'name'				=> $filesop[2],
							'image'				=> $filesop[3],
							'details'			=> $filesop[4],
							'icon'				=> $filesop[5],
							'position'			=> $filesop[6],
							'email'				=> $filesop[7],
							'phone'				=> $filesop[8],
							'sort'				=> $filesop[9],
							'status'			=> $filesop[10]
						];
						if(!$this->appmodel->select_one('staffs', $where)){
							$update['created_at'] = date('Y-m-d h:i');
							$this->appmodel->insert_one('staffs', $update);
						}else{
							$this->appmodel->update('staffs', $where, $update);
						}
						$isInsert = true;
					}
					$c = $c + 1;
				}

				if($isInsert){
					$this->session->set_flashdata('success', 'staffs successfully imported');
				}else{
					$this->session->set_flashdata('error', 'something went wrong');
				}
				redirect(site_url("staff"));
		    } 
		    $this->load->view('staff/import', []);
		}

    }