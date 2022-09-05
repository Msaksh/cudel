<?php
// defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');

class Welcome extends CI_Controller {
	public function index()
	{
		$where=[
			'status' =>'A',
			'for_product'=> 'P'
		];
		$data['products'] = $this->app_model->select_all('service_rate_card',$where);
		$where=[
			'status' =>'A',
		];
		$data['banners'] = $this->app_model->select_all('banners',$where);
		$data['testimonials'] = $this->app_model->select_all('testimonial',$where);
		$data['service'] = $this->app_model->select_all('service_card_category',$where);


		$this->load->view('index',$data);
	}

	public function customer_signup(){
		$post_data = $this->input->post();

			$insert = [
				'name' =>$post_data['name'],
				'phone' =>$post_data['number'],
				'email' =>$post_data['email'],
				'pin' => $post_data['zip'],
				'address' => $post_data['address']

			];

			$result=$this->app_model->insert_one('customer',$insert);	
			$where=[
			 	 'phone' => $post_data['number']			 	
			 ];
			 $login=$this->app_model->select_one('customer',$where);	
			$this->session->set_userdata('customer', $login->id);
			json_encode($result);

	}

	public function customer_login(){
	$phone=$this->input->post('phone');
		$where=[
			'phone' =>$phone
		];
		$login=$this->app_model->select_one('customer',$where);
		
		if($login){
			$this->session->set_userdata('customer', $login->id);
			$login='1';
		  echo($login);
			return true;
		}
		else{
			$login='0';
			echo($login);
			
			return false;
		}
		json_encode($login);

	}


	public function cart(){
		
		$post_data=$this->input->post();	
		
		$where = [
			'id' => $post_data['id']
		];
		$data = $this->app_model->select_one('service_rate_card',$where);
		
	

		$insert = array(
			'id'      => $data->id,
			'qty'     => 1,
			'image'		=> $data->image,
			'price'   => $data->price,
			'name'    => $data->name,
			// 'details'    => $data->details,
		);


		$data =$this->cart->insert($insert); 
		$res=$this->cart->contents();		
		if($data){
			$this->session->set_flashdata('success', '');
		}
		else{
			$this->session->set_flashdata('error', '');
		}

		redirect(base_url(),$cart_data);
	}

	public function rate_cart(){
		
		$post_data=$this->input->post();	
	
		$where = [
			'id' => $post_data['id']
		];
		$data = $this->app_model->select_one('service_rate_card',$where);
		$where = [
			'id' => $data->service_id
		];
		$cat=$this->app_model->select_one('service_card_category',$where);
		$insert = array(
			'id'      => $data->id,
			'qty'     => 1,
			'image'		=> $cat->image,
			'price'   => $data->price,
			'name'    => $data->name,
		);

		$data =$this->cart->insert($insert);		
		if($data){
			$this->session->set_flashdata('success', '');
		}
		else{
			$this->session->set_flashdata('error', '');
		}
		redirect(base_url(),$cart_data);
		
		
	}

	public function getcart(){
		$post_data=$this->input->post();
	}

	public function delete($id){		
		$data = array(
			'rowid' => $id,
			'qty'   => 0
		);
		$this->cart->update($data);	
		
		$this->session->set_flashdata('success_delete','');
		redirect('welcome');		
	}	

	public function verify(){
		$post_data['list']= $this->input->post();
		$this->load->view('payment/verify',$post_data);
	}
	public function login(){
		$this->load->view('login');
		
	}
	
	public function addcart(){
		$id=$this->input->post();				
	}
	public function product(){
		$post =$this->input->post();
		$where=[
			'id' => $post['id'],
			'for_product'=>'P'
		];
		$product= $this->app_model->select_one('service_rate_card',$where);

		$html='
		<div class="row">
		<div class="col-md-6">
		<div class="popupImg">
		<input name="image" class="img-fluid"  accept="image/*" value="<?=base_url()?>assets/img/complete-glow-pack.jpg" type="hidden"><img class="img-fluid" name="image" style="height: 472px;" src="'.base_url('admin/assets/images/blog/').$product->image.'">
		</div>  
		</div>		
		
		<div class="col-md-6">
		<div class="popupData ">

		<h2 name="name"><input type="hidden" name="name" class="data" id="cart_name" value="'.$product->name.'">'.$product->name.'</h2>
		<div class="popupPrice" name="price"><input type="hidden" name="price" id="cart_name" value="'.$product->price.'">₹'.$product->price.'/ <span>Only</span></div>
		<h4>Description-</h4>
		'.$product->details.'		
		<button type="sumbit" style="background-color: #3b2adea6; color: white; padding-right: 20px; padding-left: 20px; border:2px solid #3b2adea6;margin-top:20px;" onclick="addcart()">Add to Cart</button>
		</div> 
		</div>
		</div> ';
		echo($html);	
		json_encode($html);
		
	}

	public function show_banner_details(){
		$post =$this->input->post();
		$where=[
			'id' => $post['id']
		];
		$banner= $this->app_model->select_one('banners',$where);

		$html='
		<div class="row">
		<div class="col-md-5">
		<div class="popupImg">
		<img class="img-fluid" src="'.base_url('admin/assets/images/banner/').$banner->image.'">
		</div>  
		</div>  
		<div class="col-md-7">
		<div class="popupData">
		<h2>'.$banner->name.'</h2>
		<div class="popupPrice">₹'.$banner->price.'/ <span>Only</span></div>
		<h4>How it works-</h4>
		<ul>
		<li>'.$banner->des2.'</li>
		
		</ul>
		</div>
		</div>
		</div>
		</div> ';
		echo($html);	
		json_encode($html);
		
	}

	public function rate_card(){
		$post =$this->input->post();
		$where=[
			'service_id' => $post['id']
		];
		$data= $this->app_model->select_all('service_rate_card',$where);
$k=0;
		foreach ($data as $rate) {		
		
		@$html.='
		<div class="row">
		<div class="col-md-12">
		<div class="popupImg">
		</div>  
		</div>		
		
		<div class="col-md-12">
		<div class="popupData ">
		<form id="cart" >
	<table class="table" style="width:100%">
  <thead class="thead-dark">
    
  </thead>
  <tbody">
    <tr>
    
      <td  style="width:60%">'.$rate->name.'</td>
      <td   style="width:20%">Rs- '.$rate->price.'</td>
      <td  style="width:20%"><button type="sumbit" style="background-color: #3b2adea6; color:white;"  onclick="my('.$rate->id.')" class="btn cart-button" >Add to cart</td>
    </tr>
    </tbody>
    </table>
		</form>
		
		
		
		</div> 
		</div>
		</div> ';
		}
		echo(@$html!=''?@$html:'<h2 style="text-align:center"> Product not available</h2>');	
		
		json_encode(@$html);
		
	}

	public function addmobile(){
		$data = $this->input->post();			
		$where = [
			'name' => $data['name'],
			'phone' => $data['phone'],
			'city' => $data['city'],
			'country' => $data['country'],
			'pin' => $data['pin']
		];
		$data = 	$this->app_model->insert_one('phone',$where);	
		$where=[
			'status' =>'A'
		];
		$product['products'] = $this->app_model->select_all('product',$where);	
		redirect(base_url(''));
		
	}
	
	public function about(){
		$this->load->view('about');
	}

	public function check_pin_code(){
	$pin=$this->input->post('pin');
		$where=[
			'pin_code' =>$pin
		];
		$login=$this->app_model->select_one('pin_code',$where);
		
		if($login){
			$login='1';
		  echo($login);
			return true;
		}
		else{
			$login='0';
			echo($login);
			
			return false;
		}
		json_encode($login);

	}

	public function beautyexpert(){
		$post_data=$this->input->post();
		
		if($post_data){

			$insert =[				
				'name'		=>$post_data['name'],
				'pincode'	=>$post_data['pincode'],
				'mobile'	=>$post_data['mobile'],
				'profession'=>$post_data['profession'],
				'experience'=>$post_data['experience'],
				'gender' 	=> $post_data['gender'],
				'comment'	=> $post_data['comment'],
			];

			$data =$this->app_model->insert_one('beautyexpert',$insert);
			if($data){
				$this->session->set_flashdata('beautyexpert', '');
				redirect(base_url());
			}

		}		
			$this->load->view('beautyexpert');
		

	}
	 public function privacy() {
			$this->load->view('privacy');
	 }
	 public function terms() {
			$this->load->view('terms');	
		}
}
