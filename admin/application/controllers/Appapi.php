<?php  
class Appapi extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('appmodel');
        $this->load->database();
        
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Headers: *');
        header('Access-Control-Allow-Headers: consumer-device-id,consumer-ip,consumer-key,consumer-nonce,consumer-secret,X-Auth-Token,authorization,Content-Type');
    }
    
    public function test(){
    }
    public function image_upload(){
        $config = [
	       'upload_path' 	=> './admin/assets/img/customer/',
	       'allowed_types' => 'jpg|jpeg|png|gif',
	       'max_size'		=> '102400'
	   ];
	   $this->load->library('upload', $config);
	   if($this->upload->do_upload('file')){
		 $imgdata = $this->upload->data();
	   }
    }
    public function selects(){
        $CLField = json_decode(file_get_contents('php://input'), true);
        if( ! empty($CLField)) {
            if(isset($CLField['table'])){
                $table = $CLField['table'];
            }

            if(isset($CLField['where'])){
                $where = $CLField['where'];
            }else{
               $where = []; 
            }

            if(isset($CLField['query'])){
                $queries = $CLField['query'];
            }else{
               $queries = []; 
            }

            $query = $this->appmodel->select_all($table, $where, $queries);

            $return = [];
            if($query){
                $return = $query;
            }
            echo json_encode($return);
        }
    }

    public function select(){
        $CLField = json_decode(file_get_contents('php://input'), true);
        if( ! empty($CLField)) {
            if(isset($CLField['table'])){
                $table = $CLField['table'];
            }

            if(isset($CLField['where'])){
                $where = $CLField['where'];
            }else{
               $where = []; 
            }

            if(isset($CLField['query'])){
                $queries = $CLField['query'];
            }else{
               $queries = []; 
            }

            $query = $this->appmodel->select_one($table, $where, $queries);

            $return = $query;
            
            echo json_encode($return);
        }
    }

    public function insert(){
        $CLField = json_decode(file_get_contents('php://input'), true);
        if( ! empty($CLField)) {
            if(isset($CLField['table'])){
                $table = $CLField['table'];
            }

            if(isset($CLField['data'])){
                $data = $CLField['data'];
            }else{
               $data = []; 
            }

            if(isset($CLField['date'])){
                $date = $CLField['date'];
                $data[$date] = date('Y/m/d h:i');
            }

            if(isset($CLField['unique'])){
                $where = $CLField['unique'];
            }else{
                $where = []; 
            }

            $return_data = [];
            $is_uniqued = false;

            if($where){  
                $s = $this->appmodel->select_one($table, $where);
                if($s){
                    $is_uniqued = true;
                }

                $return_data['unique'][] = $is_uniqued;
            }

            $q = [];
            if(!$is_uniqued){
                $q = $this->appmodel->insert_one($table, $data);
                if(isset($CLField['select_by'])){
                    $where[$CLField['select_by']] = $q;
                    $q = $this->appmodel->select_one($table, $where);
                }
            }

            $return_data = [
                'data'          =>$q,
                'status'        =>$q?1:0
            ];

            echo json_encode($return_data);
        }
    }
    
    
    public function update(){
        $CLField = json_decode(file_get_contents('php://input'), true);
        if( ! empty($CLField)) {
            if(isset($CLField['table'])){
              $table = $CLField['table'];
            }

            if(isset($CLField['where'])){
              $where = $CLField['where'];
            }else{
              $where = []; 
            }
            
            if(isset($CLField['data'])){
                $data = $CLField['data'];
            }else{
              $data = []; 
            }
            
            $q = $this->appmodel->update($table, $where, $data);

            $json = ['status'=>false];
            if($q){
                $json['status'] = true; 
            }

            echo json_encode($json);
        }
    }


    public function delete(){
        $CLField = json_decode(file_get_contents('php://input'), true);
        if( ! empty($CLField)) {
            if(isset($CLField['table'])){
              $table = $CLField['table'];
            }

            if(isset($CLField['where'])){
              $where = $CLField['where'];
            }else{
              $where = []; 
            }
            
            $q = $this->appmodel->delete_one($table, $where);

            $data = array();
            if($q){
                $data = $q; 
            }

            echo json_encode($data);
        }
    }

    public function sendMail(){

        $status = false;
        $CLField = json_decode(file_get_contents('php://input'), true);
        if( ! empty($CLField)) {

            if(isset($CLField['from'])){
                $from = $CLField['from'];
            }else{
               $from = 'arunfaceyou@email.com'; 
            }

            if(isset($CLField['to'])){
                $to = $CLField['to'];
            }else{
               $to = ''; 
            }

            if(isset($CLField['subject'])){
                $subject = $CLField['subject'];
            }else{
               $subject = ''; 
            }

            if(isset($CLField['message'])){
                $message = $CLField['message'];
            }else{
               $message = ''; 
            }

            // To send HTML mail, the Content-type header must be set
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
             
            // Create email headers
            $headers .= 'From: '.$from."\r\n".
                'Reply-To: '.$from."\r\n" .
                'X-Mailer: PHP/' . phpversion();

            $mes = '<html><body>';
            $mes .= $message;
            $mes .= '</body></html>';

            if(mail($to, $subject, $mes, $headers)){
                $status = true;
            }
        }

        $json = [
            "status"    => $status
        ];

        echo json_encode($json);
    } 


    public function image_update(){
          
        $CLField = json_decode(file_get_contents('php://input'), true);

        $config['upload_path']   = $_POST['img_path']; 
        $config['allowed_types'] = 'gif|jpg|png'; 
        $config['max_size']             = 10024;
               
        $this->load->library('upload', $config);

        $image = '';
        if ($_FILES){
            if ($this->upload->do_upload('image')) {
                    $img_data = $this->upload->data();
                    $image = $img_data['file_name'];
            }
        }

        $status = $image;

        echo json_encode($status);
    }
    
    
    
    public function generateOtp(){

        $CLField = json_decode(file_get_contents('php://input'), true);

        if( ! empty($CLField)) {

          	$return_data = ['status'=> 0];

            if(isset($CLField['mobile'])){

                $mobile = $CLField['mobile'];

                $otp = mt_rand(10000,99999);

              

                $this->otpAPI($mobile, $otp);

              

                $return_data = [

                	'otp'		=> $otp,

                  	'status'	=> 1

                ];

            }

            

          echo json_encode($return_data);

        }

    }
    
    
    public function sendSmsMobile(){

        $CLField = json_decode(file_get_contents('php://input'), true);

        if( ! empty($CLField)) {

          	$return_data = ['status'=> 0];

            if(isset($CLField['mobile']) && isset($CLField['sms'])){

                $mobile = $CLField['mobile'];

                $sms = $CLField['sms'];

              

                $this->otpAPI($mobile, $sms);

              

                $return_data = [

                  	'status'	=> 1

                ];

            }

            

          echo json_encode($return_data);

        }

    }
    
    public function otpAPI($contacts, $otp){
        $api_key = '25FF448EE24480';
        $from = 'PEYWEY';
        $sms_text = urlencode('login-otp:'.$otp);
        
        $api_url = "http://smsweb.smsleases.com/app/smsapi/index.php?key=".$api_key."&campaign=0&routeid=9&type=text&contacts=".$contacts."&senderid=".$from."&msg=".$sms_text."&template_id=1234567890";
        
        //Submit to server
        
        $response = file_get_contents( $api_url );
        //echo $response;
    }
    

  	public function otpAPI_old($mobile, $otp){
      
        $message = 'login-otp:'.$otp;

       $urk = "http://hindit.co.in/API/pushsms.aspx?". http_build_query(array(

           

           'loginID' => 'P1HytechExpert',

           'password' => '04320',

           'mobile' => $mobile,

           'text' => $message,

           'senderid' => 'HYTECH',

           'route_id' => 3,

           'Unicode'=> 0
           
           ));

        

        $ch  =  curl_init();

        curl_setopt($ch, CURLOPT_POST, false);

        curl_setopt ($ch,CURLOPT_URL, $urk) ;

        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Length: 0'));

        curl_setopt ($ch,CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch) ;

        curl_close($ch) ;    

    }

}
?>