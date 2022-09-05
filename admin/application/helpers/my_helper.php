<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('getss'))
{
	function getss()
	{
        
		return 'dddddd / ';
	}
}

if ( ! function_exists('pagination'))
{
	function pagination()
	{
        
		return 'dddddd / ';
	}
}

function email($email,$name,$p_qty,$final_time,$phone,$cash,$total_amount,$order_id,$address){
	$CI = &get_instance(); 
	$to= $email;
	 $from = 'cudelbooking@gmail.com';  

            $emailContent = '<!DOCTYPE><html><head></head><body><table width="600px" style="border:1px solid #cccccc;margin: auto;border-spacing:0;"><tr><td style="padding-left:3%">Welcome  to CuDel<img src="" width="300px" vspace=10 /></td></tr>';
            $emailContent .='<tr><td style="height:20px"></td></tr>';

            $emailContent .='Product Qty :- ' .$p_qty .'<br> '.'Appointment Time:- '.$final_time.'<br>'.'Mobile No. :- '.$phone.'<br>'.'Payment Mode: -'.$cash.'<br>'.'Total Amount:'.$total_amount.'<br>'.'Order Id :'.$order_id.'<br>'.'Address :-'.$address; //   Post message available here

            $emailContent .='<tr><td style="height:20px"></td></tr>';
            $emailContent .= "<tr><td style='color:#ffffff;padding: 2%;text-align: center;font-size: 13px;'><p style='margin-top:1px;'><img src='' 
             style='text-decoration:none;color:#ffffff;'>cudel.in</a></p></td></tr></table></body></html>";           

            $config['protocol']    = 'smtp';
            $config['smtp_host']    = 'ssl://smtp.gmail.com';
            $config['smtp_port']    = '465';
            $config['smtp_timeout'] = '60';

            $config['smtp_user']    = 'cudelbooking@gmail.com';    //Important
            $config['smtp_pass']    = 'olvpdveucvmbrsmo';  //Important

            $config['charset']    = 'utf-8';
            $config['newline']    = "\r\n";
            $config['mailtype'] = 'html'; // or html
            $config['validation'] = TRUE; // bool whether to validate email or not 

           $CI->email->initialize($config);
           $CI->email->set_mailtype("html");
			$CI->email->from($to);
            $CI->email->to($from);
            $CI->email->subject($name);           
              $CI->email->message($emailContent); 
            $query =$CI->email->send();

            $CI->email->initialize($config);
            $CI->email->set_mailtype("html");
            $CI->email->from($from);
            $CI->email->to($to);
            $CI->email->subject('Cudel.in');
            $CI->email->message('Hi  '.$name.'<br>'.$emailContent);
                

            $query = $CI->email->send();
}
