
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cudel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style type="text/css">  
  .gradient-custom-2 {
  /* fallback for old browsers */
  background: #fccb90;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, #3b2ade, black);

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, #3b2ade, #5f4ff7);
}

.logPage {
  /*border:  2px solid blue;*/
}

@media (min-width: 768px) {
  .gradient-form {
    height: 100vh !important;
  }
}
@media (min-width: 769px) {
  .gradient-custom-2 {
    border-top-right-radius: .3rem;
    border-bottom-right-radius: .3rem;
  }
}
</style>
</head>
<body>                                            
<section class=" gradient-form " style="background-color: #eee;height: 100%!important;">
  <div class="container py-5 h-100">
    <div class="logPage row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center"><a href="<?=base_url('../')?>">
                  <img src="<?=base_url()?>assets/cudel_logo.svg" style="width: 185px;" alt="logo"></a>
                  <h4 class="mt-1 mb-5 pb-1" style="color:#3b2ade"><b>Customer Login</b></h4>
                </div>
                  <?php
                       if(isset($_SESSION['sms'])) 
                            { 
                              echo $this->session->flashdata('sms');                            
                             unset($_SESSION['sms']);
                            }
                         else if(isset($_SESSION['match'])) 
                            { ?>
                             <script> swal("Please Login!", "Account already exist", "error"); </script>
                             
                             <?php  unset($_SESSION['match']);
                           }
                    ?> 
                <form action="<?=base_url()?>login/customer_login" method="post">
                  <p>Please login to your account</p>

                  <div class="form-outline mb-4"><i class="fa fa-user" style="color:#3b2ade;"></i>
                    <label class="form-label"  for="form2Example11">Username <span class="text-danger"> *</span></label>
                    <input type="text" name="user" id="form2Example11" class="form-control" placeholder="Phone number or email address"/ required>
                    
                  </div>

                  <div class="form-outline mb-4"><i class="fa fa-key" style="color:#3b2ade;"></i>
                    <label class="form-label" for="form2Example22">Password</label><span class="text-danger"> *</span>
                    <input type="password" id="form2Example22" name="password" class="form-control" placeholder="Password" required />
                    
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="Submit">Log in</button>
                    <a class="text-muted" href="#!" data-toggle="modal" data-target="#login">Forgot password?</a>
                  </div>
                </form>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <button type="button" data-toggle="modal" data-target="#signup" class="btn btn-outline-primary" style="margin-left: 15px;">Create new</button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">CuDel provides customer delight solutions which include mobile beauty services at your doorstep. Our vision is to save your time and effort going to salons by booking beauty services from the comfort of your own home at very reasonable price.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Sigup Modal form -->
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
        <div class="modal-header" style="background-color:#d92128">
          <h4 class="modal-title text-center" style="color:white">Sign Up Form</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <form action="<?=base_url()?>login/add_customer" method="post">
      <div class="modal-body"> <i class="fa fa-user" style="margin-right:3px;color:#d92128"></i>
          <label style="display: inline-flex;"> Mobile` ````````: <span class="text-danger" >*</span></label>
           <input class="form-control mb-3" type="tel" pattern="[0-9]{10}" name="phone" placeholder="Enter mobile no" required>
            <button type="Submit" value="Submit" class="btn btn-success" style="background-color:#d92128">Submit</button>
        </div>
      </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>      
    </div>
  </div>  
</div>
</body>
</html>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
setTimeout(function(){
        $('.change_pass_error').fadeOut(500);
                    }, 4000);
</script>

<style type="text/css">
    .swal-button {
        background: red;
    }
</style>
