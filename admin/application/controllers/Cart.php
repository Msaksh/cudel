<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
 
    public function __construct(){
        parent:: __construct();
        if(!$this->session->userdata('customer')){
            redirect(base_url('Customer'));
        }
    }

    public function blank(){
        $this->load->view('blank');
    }
    
    
    public function index(){   

        $where =[
            'id' => $id =$this->session->userdata('customer')
        ];
        $data['list'] =$this->appmodel->select_one('customer',$where);    
        $this->load->view('my-cart/cart1',$data);       
        
    }

    public function myaccount(){
      $where =[
        'id' => $id =$this->session->userdata('customer')
    ];

    $data=$this->appmodel->select_one('customer',$where); 

    $where =[
        'phone' => $data->phone
    ];

    $address=$this->appmodel->select_one('phone',$where);  

    $where =[
        'customer_id' => $id =$this->session->userdata('customer')
    ];
    $filters = [
            'order' => ['created_at', 'desc'],
        ];

    $order=$this->appmodel->select_all('peyment_status',$where,$filters);              

    $data =[
        'list' => $data,
        'add' => $address,
        'order' => $order
    ];

    $this->load->view('my-cart/my-account1',$data);
}

public function updateCartItem(){
    $update = 0;
    $rowid = $this->input->get('rowid');
    $qty = $this->input->get('qty');
    if(!empty($rowid) && !empty($qty)){
        $data = array(
            'rowid' => $rowid,
            'qty' => $qty
        );
        $update = $this->cart->update($data);
    }               
    echo $update ? 'ok':'err';

}
public function delete($id){            
    $data = array(
       'rowid' => $id,
       'qty'   => 0
   );   

    $test=$this->cart->update($data); 
    redirect('cart');
}

public function customer_upate(){
    $post_data =$this->input->post();
    $where=[
        'id' => $this->session->userdata('customer')
    ];
    $data=[
        'name' => $post_data['name'],
        'email' => $post_data['email'],
        'phone' => $post_data['phone'],
        'address' => $post_data['address'],
        'pin' => $post_data['pin'],               

    ];
    $check = $this->appmodel->update('customer',$where,$data); 
    if($check){
        $this->session->set_flashdata('sms','');
    }
    $data['list']= $this->appmodel->select_one('customer',$where,$data);           
    redirect(base_url('cart/myaccount'));
}

public function update_customer_details(){
    $post_data=$this->input->post();
    $insert_data=[
        'pin' => $post_data['pin'],
        'address' => $post_data['address']
    ];
    $where=[
        'phone' =>$post_data['phone']
    ];
    $this->appmodel->update('customer',$where,$insert_data);;
}

public function appy_coupon(){
    $post_data=$this->input->post();
    $where=[
        'coupon_code' => $post_data['coupon'],
        ];
    
    $result = $this->appmodel->select_one('coupon',$where);
    if($result){
         $price = $result->price;
        echo($price);
        exit;
    }
    else{
        echo('0');
        exit;
    }
   
}


}