<!DOCTYPE html>
<html lang="en">

<head>
   <title><?=NAME?> | Order View</title>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
   <!-- Favicon icon -->
   <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.png" type="image/x-icon">
   <link rel="icon" href="<?=base_url()?>assets/images/favicon.ico" type="image/x-icon">

   <!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

   <!-- themify -->
   <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/icon/themify-icons/themify-icons.css">

   <!-- iconfont -->
   <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/icon/icofont/css/icofont.css">

   <!-- simple line icon -->
   <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/icon/simple-line-icons/css/simple-line-icons.css">

   <!-- Required Fremwork -->
   <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css">

   <!-- Chartlist chart css -->
   <link rel="stylesheet" href="<?=base_url()?>assets/plugins/chartist/dist/chartist.css" type="text/css" media="all">

   <!-- Weather css -->
   <link href="<?=base_url()?>assets/css/svg-weather.css" rel="stylesheet">


   <!-- Style.css -->
   <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/main.css">

   <!-- Responsive.css-->
   <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/responsive.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="sidebar-mini fixed">
   <?php $this->load->view('common/loader'); ?>
   <div class="wrapper">
      <?php $this->load->view('common/header'); ?>

      <div class="content-wrapper">
         <!-- Container-fluid starts -->
         <!-- Main content starts -->
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12 p-0">
                  <div class="main-header">
                     <h4>Manage Order</h4>
                     <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item">
                           <a href="<?=base_url()?>">
                              <i class="icofont icofont-home"></i>
                           </a>
                        </li>
                        <li class="breadcrumb-item"><a href="<?=base_url('leads')?>">Order</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">View Order</a>
                        </li>
                     </ol>
                  </div>
               </div>
            </div>
            <!-- Header end -->
      <div class="row">
               <div class="col-sm-12">
                  <!-- Basic Table starts -->
                  <div class="card">
                     <div class="card-header">
                        <div class="row">
                          <div class="col-sm-6"> 
                            <h5 class="card-header-text">Order Management</h5>
                            <p>Basic example <code>without any additional modification</code> classes</p>
                          </div>
                          <!-- <div class="col-sm-6 text-right"> 
                            <a href="<?=base_url('blog_category/create')?>" class="btn btn-success"><i class="icon-plus"></i></a>
                          </div> -->
                        </div>
                        
                     </div>


                     <div class="card-block">
                        
                        <div class="row">
                           <div class="col-sm-12 table-responsive">
                              <table class="table" id="myTable">
                                            <thead>
                                                <tr class="ul-widget6__tr--sticky-th">
                                                    <th scope="col">#</th>
                                                    <!-- <th scope="col">Image</th> -->
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Qty</th>
                                                    <th scope="col">Payment Mode</th>
                                                    <th scope="col">Schedule</th>
                                                    <th scope="col">Payment Id</th>                                                    
                                                  </tr>
                                            </thead>
                                        <tbody>                                                                                                                     
                                        <?php $i=0; foreach ($orders as $key => $value) { 
                                              $where = [
                                                'id' => $value->product_id
                                              ];
                                             $data =  $this->appmodel->select_one('service_rate_card',$where);
                                              ?>
                                            <tr>
                                                <td> <?=++$i?> </td>
                                                <td> <?=@$data->name?> </td>
                                                <td>
                                                    <span>
                                                    <div class="ul-widget_user-card">
                                                        <div class="ul-widget4__img">
                                                        <?php if(@$data->image && file_exists(FCPATH.'/assets/images/blog/'.$data->image)){ ?>
                                                          <img style="height: 68px;" id="userDropdown" src="<?=base_url('/assets/images/blog/'.$data->image)?>" />
                                                          <?php }else{ ?>
                                                            <img style="height: 68px;"  id="userDropdown" src="<?=base_url('assets/images/blank.jpg')?>" alt="notfound" />
                                                        <?php } ?>
                                                        </div>
                                                    </div>
                                                    </span>
                                                </td>
                                                 <td><?=$value->qty?></td>
                                                  <td><?=$value->payment_mode?></td>  
                                                  <td><?=$value->schedule?></td> 
                                                  <td><?=$value->t_id?></td>   
                                                    

                                              
                                            </tr>
                                        <?php } ?>  
                                        
                                        </tbody>

                                    </table>
                                     <div style="text-align: right"><h5 scope="col">Total amount</h5><h6><?=$value->payment?></h6></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Basic Table ends -->
               </div>
            </div>
            
            </div>
        </div>
    </div>
     <!-- Required Jqurey -->
   <script src="<?=base_url()?>assets/plugins/Jquery/dist/jquery.min.js"></script>
   <script src="<?=base_url()?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
   <script src="<?=base_url()?>assets/plugins/tether/dist/js/tether.min.js"></script>

   <!-- Required Fremwork -->
   <script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

   <!-- Scrollbar JS-->
   <script src="<?=base_url()?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
   <script src="<?=base_url()?>assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

   <!--classic JS-->
   <script src="<?=base_url()?>assets/plugins/classie/classie.js"></script>

   <!-- notification -->
   <script src="<?=base_url()?>assets/plugins/notification/js/bootstrap-growl.min.js"></script>


   <script src="<?=base_url('assets')?>/js/jquery.validate.min.js"></script>

   <!-- custom js -->
   <script type="text/javascript"> var base_url = "<?=base_url()?>";</script>
   <script type="text/javascript" src="<?=base_url()?>assets/js/main.min.js"></script>
   <script type="text/javascript" src="<?=base_url()?>assets/pages/elements.js"></script>
   <script src="<?=base_url()?>assets/js/menu.min.js"></script>
  <script>
    var $window = $(window);
    var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
           nav.addClass('active');
        }
        else {
           nav.removeClass('active');
        }
    });
  </script>

  <script type="text/javascript">
    
        $(document).ready(function(){
            jQuery.validator.addMethod("noSpace", function(value, element) { 
                return value.indexOf(" ") < 0; 
            }, "No space please");

            $("#form").validate({
                ignore: [],
                rules: {
                    status: {
                        required: true
                    },
                    comment: {
                        required: true
                    }
                }
            });
        });
    </script>

</body>
</html>