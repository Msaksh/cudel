<!DOCTYPE html>
<html lang="en">

<head>
   <title>Social Planet | User Edit</title>

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
                     <h4>Manage User</h4>
                     <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item">
                           <a href="<?=base_url()?>">
                              <i class="icofont icofont-home"></i>
                           </a>
                        </li>
                        <li class="breadcrumb-item"><a href="<?=base_url('user')?>">Users</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Manage User</a>
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
                     <div class="card-block">
                        <form action="<?=base_url('user/edit/'.$item->id)?>" id="form" method="post"  enctype="multipart/form-data">
                    <div class="row mt-3">
                        <div class="col-sm-9">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group mb-3">
                                        <label for="name">Full Name <span class="text-danger">*</span></label>
                                        <input name="name" type="text" class="form-control" id="name" value="<?=$item->name?>" placeholder="Customer Full Name">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group mb-3">
                                                <label for="mobile">Mobile <span class="text-danger">*</span></label>
                                                <input name="mobile" type="text" class="form-control" value="<?=$item->mobile?>" id="mobile" placeholder="Customer Mobile">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-3">
                                                <label for="dob">Date of birth</label>
                                                <input name="dob" type="date" class="form-control" value="<?=date('Y-m-d',strtotime($item->dob))?>" id="dob">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email"  value="<?=$item->email?>" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <input type="submit" name="save" class="btn btn-info btn-sm btn-rounded m-1" value="Save" />
                                    <input type="submit" name="draft_save" class="btn  btn-sm btn-info btn-rounded m-1" value="Draft" />
                                    <a href="<?=base_url('user')?>" class="btn  btn-sm btn-outline-info btn-rounded m-1">Cancel</a>
                                </div>
                            </div>

                            <div class="card p-10">
                                <div class="card-body">
                                    <div class="card-title">Profile Image
                                        <i class="fa fa-trash cancel cancel1 <?=$item->image?'':'d-none'?>" onclick="cancelImage('1')"></i>
                                    </div>
                                    <div class="text-center">
                                        <?php if($item->image && file_exists(FCPATH.'/assets/images/user/'.$item->image)){ ?>
                                        <img class="img-fluid" onclick="selectImage('1')" src="<?=base_url('assets/images/user/'.$item->image)?>" id="profileImg1" />
                                        <?php }else{ ?>
                                        <img class="img-fluid" onclick="selectImage('1')" src="<?=base_url('assets/')?>images/blank.jpg" id="profileImg1" />
                                        <?php } ?>
                                        <input type="hidden" id="imageExiest1" name="imageExiest" value="<?=$item->image?>">
                                        <input type="file" id="profileInput1" name="profile_image" accept="image/*" onchange="PreviewImage('1');" hidden>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    </form>
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


            $("#form").validate({
                rules: {
                    name: {
                        required: true
                    },
                    mobile: {
                        required: true,
                        number: true,
                        minlength:10
                    }
                }
            });
        });
    </script>

</body>
</html>