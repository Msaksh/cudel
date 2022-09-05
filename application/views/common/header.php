
<!doctype html>
<html lang="en">
  <head>
    <meta name="google-site-verification" content="zCAmvLStTnJOn0gXqNfKfHeN1Hr0Xvk0C4xzvvwSEUg" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CuDel Provides Beauty Salon at Home, Get Hygenic Beauty Services for Facial, Clean Up, Waxing, etc, in Delhi | Noida | Greater Noida | Ghaziabad | Faridabad"/>
<meta name="keywords" content="Beauty services at your doorstep, Salon at home Noida, Beauty services at home, Salon at home, Salon at home near me, Beauty treatments at home, Beauty salon, Beauty salon at home, Hair stylist at home, Beauty parlour services at home,  Salon at home in faridabad, Beauty services at home in Delhi, Beauty salon at home, Best Beauty salons near me, Beauty parlour at home, Salon at home Ghaziabad"/>

<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

	<title>Beauty Salon at Home | For Booking Contact @ 9311147877</title>
	<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?=base_url()?>assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> 
	<link href="<?=base_url()?>assets/css/style.css?v=1" rel="stylesheet" type="text/css" />
	<link href="<?=base_url()?>assets/css/responsive.css?v=1" rel="stylesheet" type="text/css" />

  <!-- today adding library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-4GD8601PT0');
</script>
  </head>
<body>
<style type="text/css">

  .nav-link{
    font-family: Sans-serif !important;
    font-weight: 400!important;
    /* border: 2px solid red; */
    /* height: 100%; */
  }

  @media only screen and (max-width:992px){
    .signup-modal {
      width:98%!important;
      margin-left: 0px!important;
    }
    .customNavbar {
      padding: 60px !important;
    }
    .header .navbar-collapse .navbar-nav{
      padding: 0 !important;
    }
    .nav-me{
      font-size: 11px!important;
    }
  
  }

</style>


<!--   ##########  Header   ############  -->
<header>
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="./"><img src="<?=base_url()?>assets/img/cudel_logo.svg"></a>
     <a  style="position:absolute;right:90px;"class="nav-link d-lg-none"  href="<?=base_url('welcome/getcart')?>" data-bs-toggle="modal" data-bs-target="#addtocart"><img src="<?=base_url()?>assets/img/addtocart.png" style="width: 30px;margin-top: -6px;"></a>

     <span class="d-lg-none text-danger" style="color:red!important;margin-left:-15px!important;margin-right:62px!important;
margin-top:-23px;">(<?php echo($this->cart->total_items())?>)</span>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainMenu">
	<div class="mobMenuHeader">	   
    <a class="navbar-brand" href="#"><img src="<?=base_url()?>assets/img/cudel_logo.svg"></a>
		<button class="navbar-toggler closeBurgerMenu float-right" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false"></button>
	</div>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mt-2 customNavbar ">
        <!--<li class="nav-item">
          <a class="nav-link active" href="#WhoWeAre">Who We Are</a>
        </li>-->
		<li class="nav-item hover nav-me">
          <a class="nav-link" href="<?=base_url()?>about">About Us</a>
        </li>
		<li class="nav-item  nav-me">
          <a class="nav-link" href="<?=base_url()?>#ourservices">Packages</a>
        </li>
		<li class="nav-item  nav-me">
          <a class="nav-link" href="<?=base_url()?>#package">Our Services</a>
        </li>
		<li class="nav-item  nav-me">
          <a class="nav-link" href="<?=base_url()?>beautyexpert">Beauty Experts</a>
        </li>
		<!-- <li class="nav-item  nav-me">
          <a class="nav-link" href="<?=base_url()?>#testimonials">Testimonials</a>
        </li> -->

		<li class="nav-item  nav-me empLogin">
          <a class="nav-link" href="https://api.whatsapp.com/send?phone=919311147877&amp;text=I'm%20interested%20in%20your%20services" style="margin-bottom: 10px; border:2px solid #3b2ade;">Book Now</a>
        </li> 
        <?php  if(!$this->session->userdata('customer')){?>
            <li class="nav-item  nav-me empLogin">
    <a type="button" data-toggle="modal"  data-target="#signup" class="signup btn-outline-primary btn-sm" style="border:2px solid #3b2ade;margin-left: -8px;margin-right: -16px;">Login</a>
      
</li> 
     <?php   } else{ ?>
<li class="nav-item  nav-me empLogin" style="margin-top: 7px;">
    <a  href="<?=base_url()?>admin/cart" class="signup btn-outline-primary btn-sm" style="border:2px solid #3b2ade;margin-left: -8px;margin-right: -16px;">dashboard</a>
      
</li> 
  <?php   } ?>
 

 <li class="nav-item   nav-me cartClass" >
          <a class="nav-link"  href="<?=base_url('welcome/getcart')?>" data-bs-toggle="modal" data-bs-target="#addtocart"><img src="<?=base_url()?>assets/img/addtocart.png" style="width: 30px;margin-top: -6px;"></a>
        </li><span style="color:#dc3545;margin-left:-15px; color: #3b2ade !important">(<?php echo($this->cart->total_items())?>)</span>
       
      </ul>
    </div>
  </div>
</nav>
</header>
 

<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>

<div class="container">
  <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <div class="modal fade" id="signup" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <?php
        if(isset($_SESSION['sms'])) 
  { ?>
   <script> swal("Try Again!", "Something went wrong!", "error"); </script>
   
   <?php  unset($_SESSION['sms']);
 } ?>
        <div class="modal-header" style="background-color:#3b2ade">
          <h4 class="modal-title text-center" style="color:white">Sign Up Form</h4>
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          
        </div>
       <form  class="check"> 
                  <div class="w3-container" style="padding:20px">               
                    Phone:<input type="text" id="number" class="form-control mt-1 mb-2" name="phone" placeholder="Enter mobile"  required> 
                    <div id="recaptcha-container"></div>
                    <button style="margin-top: 10px;margin-bottom: 10px" type="button" class="btn btn-primary" onclick="phoneAuth();">Send otp</button><span style="color:green;margin-left: 50px;" id="sms"></span>
                    <div id="verify"></div>       
                    
                  </div>
                  <footer class="w3-container w3-teal" style="background: #3b2ade !important;text-align: right;">
                    
                  </footer>
                </form>
      </div>      
    </div>
  </div>  
</div>

<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

        <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
      apiKey: "AIzaSyBDxYgmdzKIiUFRK5rmIOCWLUj5QtPSTf4",
      authDomain: "aktechnology.firebaseapp.com",
      projectId: "aktechnology",
      storageBucket: "aktechnology.appspot.com",
      messagingSenderId: "634141880859",
      appId: "1:634141880859:web:98aa4d77c902229b2b3ebe",
      measurementId: "G-KQY23MW9HV"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
</script>
<script >
  window.onload=function () {
    render();
  };
  function render() {
    window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
  }
  function phoneAuth() {
    //get the number
    var num = '+91';
    var number=document.getElementById('number').value;
    var number = num+number;
    //phone number authentication function of firebase
    //it takes two parameter first one is number,,,second one is recaptcha
    firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier).then(function (confirmationResult) {
        //s is in lowercase
        window.confirmationResult=confirmationResult;
        coderesult=confirmationResult;
        console.log(coderesult);        
        var text ="OTP Send Successfully";
        var text1 = '<input type="text"  onkeydown="return (event.keyCode!=13);" class="form-control" id="verificationCode" placeholder="Enter verification code"><button type="button" class="btn btn-success mt-2"  onclick="codeverify();">Verify code</button><span style="color:red;margin-left: 50px;" id="error"></span>';
        document.getElementById('verify').innerHTML = text1;
        document.getElementById("sms").innerHTML = text;  
    }).catch(function (error) {
      alert(error.message);

    });
}
function codeverify() {
  var code=document.getElementById('verificationCode').value;
  coderesult.confirm(code).then(function (result) {       
    // $('.signup').click();
     $("#signup").modal('hide');
     customer_login();     
    var user=result.user;
    console.log(user);
  }).catch(function (error) {
        // alert(error.message);     
        var text ="Try Again !!  Invalid OTP";
        document.getElementById("error").innerHTML = text;
    });
}

</script>
<div class="modal fade" id="getCodeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg signup-modal" style="width: 50%;margin-left: 26%;">
      <div class="modal-content">
       <div class="modal-header">
         <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
         <h4 class="modal-title "  id="myModalLabel"> Signup Form </h4>
       </div>
       <div class="modal-body" id="getCode" style="overflow-x: scroll;">
        <form  action="" method="post">
          
         Name: <input id="name" class="form-control" type="text" name="name" >
         Email: <input id="email" class="form-control" type="email" name="email" >
         Pin Code: <input id="zip" class="form-control" type="zip" name="pin" >
         Address:  <input id="address"  class="form-control" type="address" name="address" >
         <button  class="btn btn-success mt-4 left " onclick="customer_signup()"  type="button" name="button">Submit
       </form>
       </div>
    </div>
   </div>
 </div>

 <script type="text/javascript">
   
function customer_signup(){ 
  var number = document.getElementById('number').value;
  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var address = document.getElementById('address').value;
  var zip = document.getElementById('zip').value;

  $.ajax({
        url:"<?=base_url('welcome/customer_signup')?>",
        method:'post',
        data: {name:name,number:number,email:email,address:address,zip:zip},
        success: function(event){
          window.location.href = "<?=base_url()?>admin/cart";
         
            }
          });
}
 </script>
<script type="text/javascript">
function customer_login(){
  phone=document.getElementById('number').value;
$.ajax({
        url:"<?=base_url('welcome/customer_login')?>",
        method:'POST',
        data: {phone:phone},        
        success: function(login){
            if(login == 1) {
               window.location.href = "<?=base_url()?>admin/cart";
            }
            else{
             $("#getCodeModal").modal('show'); 
            }
          }
        });
  
}
</script>