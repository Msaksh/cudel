<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    
    public function __construct(){
        parent:: __construct();
        if(!$this->session->userdata('capp_admin')){
            redirect(base_url('login'));
        }
    }

    public function blank(){
        $this->load->view('blank');
    }
    
    
    public function index(){    

        $filters = [
            'order' => ['created_at', 'desc'],
            'limit' => [0, 20]
        ];
        $where = [
            
        ];
        $orders = $this->appmodel->select_all('peyment_status', $where, $filters);
         $query = [
        'select'  => "COUNT(id) as totaldayfee"
      ];
        $products = $this->appmodel->select_one('product',$where,$query);

         $query = [
        'select'  => "COUNT(order_id) as totalorder"
      ];
      $where = [
        'day(created_at)'  => date('d'),
        'month(created_at)'  => date('m'),
        'year(created_at)'  => date('Y')
      ];
      $today_orders = $this->appmodel->select_one("peyment_status", $where, $query);
       $query = [
        'select'  => "COUNT(id) as totalorder"
      ];
      $where = [
        // 'day(created_at)'  => date('d'),
        'month(created_at)'  => date('m'),
        'year(created_at)'  => date('Y')
      ];
      $monthly_orders = $this->appmodel->select_one("peyment_status", $where, $query);

       $query = [
        'select'  => "SUM(payment) as totalorder"
      ];
      $where = [
        'payment_mode' => 'online',
        // 'day(created_at)'  => date('d'),
        'month(created_at)'  => date('m'),
        'year(created_at)'  => date('Y')
      ];
      $monthly_earnings = $this->appmodel->select_one("peyment_status", $where, $query);

        $data = [
            'orders'        =>$orders,
            'all_products' =>  $products->totaldayfee,
            'today_orders' => $today_orders->totalorder,
            'monthly_orders' => $monthly_orders->totalorder,
            'monthly_earnings' => $monthly_earnings->totalorder

        ];     
       
        $this->load->view('index', $data);
    }
    
    public function support_seen(){
        $json = ['status'=>false];
        $post = $this->input->post();
        if($post){
            $update = [
                'seen_status'   => 'A'
            ];
            $is = $this->appmodel->update('support', ['id'=>$post['id']], $update);
            if($is){
                $json['status'] = true;
            }
        }
        
        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode($json)); 
    }
}