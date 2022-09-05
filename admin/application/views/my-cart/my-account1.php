<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CuDel- my account</title>
    <!-- <meta name="description" content=""> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="stylesheet"href="<?=base_url()?>cart_assets/css/bootstrap.min.css">  
    <link rel="stylesheet"href="<?=base_url()?>cart_assets/css/font.awesome.css">  
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Main Style CSS -->
    <link rel="stylesheet"href="<?=base_url()?>cart_assets/css/style.css"> 
</head>
<body>
    <!--breadcrumbs area start-->
      <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li style="font-size: 18px;"><a href="<?=base_url('../')?>">home</a></li>
                            <li style="font-size: 18px">Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- my account start  -->
    <section class="main_content_area">
        <div class="container">
            <div class="account_dashboard">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <!-- Nav tabs -->
                          <?php
                             if(isset($_SESSION['sms'])) 
                              { ?>
                               <script> swal("Success!", "Updated Susseccfully ", "success"); </script>
                               
                               <?php  unset($_SESSION['sms']);
                             }
                             if(isset($_SESSION['booking'])) 
                              { ?>
                               <script> swal("Success!", "Booking Susseccfully ", "success"); </script>
                               
                               <?php  unset($_SESSION['booking']);
                             }

                    ?>
                        <div class="dashboard_tab_button">
                            <ul role="tablist" class="nav flex-column dashboard-list">
                            
                                <li> <a style="background-color:#3b2abe" href="#orders" data-bs-toggle="tab" class="nav-link active">Orders</a></li>                                
                                
                                <li><a style="background-color:#3b2abe" href="#account-details" data-bs-toggle="tab" class="nav-link">Account details</a>
                                </li>
                                <li><a style="background-color:#3b2abe" href="<?=base_url('logout')?>" class="nav-link">logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <!-- Tab panes -->
                        <div class="tab-content dashboard_content">
                            
                            <div class="tab-pane fade show active" id="orders">
                                <h3>Orders</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th >Order</th>
                                                <th>Date</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                                <th><a href="<?=base_url('cart')?>" class="view">Go Cart</a></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=0; foreach($order as $orders){
                                                $where=[
                                                    'id'=> $orders->product_id
                                                ];
                                                $data=$this->appmodel->select_one('service_rate_card',$where);


                                                ?>
                                            <tr>
                                                <td><?php echo(@$data->name)?></td>
                                                <td><?php echo ($orders->schedule) ?></td>
                                                <td><span class="success"><?=$orders->qty?></span></td>
                                                <td><?=$orders->payment?> </td>
                                                <td></td>
                                            </tr>
                                        <?php } ?> 

                                        </tbody>
                                        
                                    </table>
                                    <div  style="text-align: right;">
                                        <a style="padding-right:60px;color:red" href="<?=base_url('cart')?>" class="view"><b>Go to cart</b></a>
                                    </div>
                                    
                                </div>
                            </div>  

                        
                            <div class="tab-pane fade" id="account-details">
                                <h3>Account details </h3>
                                <div class="login">
                                    <div class="login_form_container">
                                        <div class="account_login_form">
                                            <form action="<?=base_url()?>cart/customer_upate" method="POST">
                                                <p>Already have an account? <a href="#">Log in instead!</a></p>
                                                <div class="input-radio">
                                                  
                                                </div> <br>
                                                <label>Name</label>
                                                <input type="text" name="name" value="<?=$list->name?>">
                                                <label>Email</label>
                                                <input type="text" name="email" value="<?=$list->email?>">
                                                 <label>Phone</label>
                                                <input type="text" name="phone" value="<?=$list->phone?>">
                                                 <label>Address</label>
                                                <input type="text" name="address" value="<?=$list->address?>">
                                                <label>Pincode</label>
                                                <input type="text" name="pin" value="<?=$list->pin?>">
                                               
                                                <br>
                                                <span class="custom_checkbox">
                                                    <input type="checkbox" value="1" name="optin">
                                                    <label>Receive offers from our partners</label>
                                                </span>
                                                <br>
                                               
                                                <div class="save_button primary_btn default_button">
                                                    <button type="submit">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="shipping_area shipping_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="shipping_content">
                            <h3><a href="tel:0123456789"><?=$list->phone?></a></h3>
                            <p>/ Phone</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <i class="fa fa-address-card"></i>
                        </div>
                        <div class="shipping_content">
                            <h3><?=$list->address?>.</h3>
                            <p>/ Address</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_shipping col3">
                        <div class="shipping_icone">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="shipping_content">
                            <h3><a href="#"><?=$list->email?></a></h3>
                            <p>/ Email</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--jquery min js-->
    <script src="<?=base_url()?>cart_assets/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="<?=base_url()?>cart_assets/js/bootstrap.min.js"></script>
</body>

</html>
<style type="text/css">
    .swal-button {
        background: red;
    }
</style>