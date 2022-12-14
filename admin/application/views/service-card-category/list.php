<!DOCTYPE html>
<html lang="en">
<?php $category="service_card_category";?>

<head>
   <title><?=NAME?> | Service List</title>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
   <!-- Favicon icon -->
   <link rel="shortcut icon" href="<?=base_url()?>assets/images/logo.png" type="image/x-icon">
   <link rel="icon" href="<?=base_url()?>assets/cudel_logo.svg" type="image/x-icon">

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

   <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
   <link rel="stylesheet" type="text/css" href="<?=base_url('assets')?>/plugins/sweetalert/sweetalert2.min.css" id="sweetalert2"/>

   <!-- Weather css -->
   <link href="<?=base_url()?>assets/css/svg-weather.css" rel="stylesheet">


   <!-- Style.css -->
   <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/main.css">

   <!-- Responsive.css-->
   <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/responsive.css">
</head>

<body class="sidebar-mini fixed">
   <?php $this->load->view('common/loader'); ?>
   <div class="wrapper">
      <?php $this->load->view('common/header'); ?>

      <div class="content-wrapper">
         <!-- Container-fluid starts -->
         <!-- Main content starts -->
         <div class="container-fluid">
            <!-- Header Starts -->
            <div class="row">
               <div class="col-sm-12 p-0">
                  <div class="main-header">
                     <h4>Rate Card Managment</h4>
                     <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item">
                           <a href="<?=base_url()?>">
                              <i class="icofont icofont-home"></i>
                           </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Services</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">List</a>
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
                            <h5 class="card-header-text">Services List</h5>
                            <!-- <p>Basic example <code>without any additional modification</code> classes</p> -->
                          </div>
                          <div class="col-sm-6 text-right"> 
                            <a href="<?=base_url('service_card_category/create')?>" class="btn btn-success"><i class="icon-plus"></i></a>
                          </div>
                        </div>
                        
                     </div>


                     <div class="card-block">
                        
                        <div class="row">
                           <div class="col-sm-12 table-responsive">
                              <table class="table" id="myTable">
                                            <thead>
                                                <tr class="ul-widget6__tr--sticky-th">
                                                    <th scope="col">#</th>  
                                                    <th>Image</th>                                               
                                                    <th scope="col">Name</th>                                                  
                                                    <th scope="col">CreateAt</th>
                                                    <th scope="col">Status</th>
                                                   
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                        <tbody>
                                            <?php $i=0; foreach ($items as $key => $value) { ?>
                                            <tr>
                                                <td> <?=++$i?> </td>
                                                <td>
                                                    <span>
                                                    <div class="ul-widget_user-card">
                                                        <div class="ul-widget4__img">
                                                        <?php if($value->image && file_exists(FCPATH.'/assets/images/blog/'.$value->image)){ ?>
                                                          <img class="img-fluid" id="userDropdown" src="<?=base_url('/assets/images/blog/'.$value->image)?>" alt="<?=$value->name?>" />
                                                          <?php }else{ ?>
                                                            <img style="height: 68px;"  id="userDropdown" src="<?=base_url('assets/images/blank.jpg')?>" alt="notfound" />
                                                        <?php } ?>
                                                        </div>
                                                    </div>
                                                    </span>
                                                </td>
                                             
                                                <td style="padding-left: 20px;">
                                                    <?=$value->name?>
                                                </td>                                             
                                                
                                                <td style="padding-left: 20px;">
                                                    <?=date('d/m/Y', strtotime($value->created_at))?>       
                                                </td>
                                                <td style="padding-left: 20px;">
                                                    <label class="switch">
                                                     <input type="checkbox" <?php if($value->status=='A'){ echo 'checked'; } ?> onclick="updateStatus(this, <?=$value->id?>)" >
                                                     <span class="slider round"></span>
                                                  </label>
                                                </td>
                                              <!--  -->
                                                <td style="padding-left: 20px;">
                                                    <a href="<?=site_url('service_card_category/edit/'.$value->id)?>" class="btn btn-success">
                                                        <i class="icon-pencil"></i>
                                                    </a>                                                 
                                                      
                                                    <a href="<?=base_url()?>service_card_category/delete/<?=$value->id?>" class="btn btn-danger delete" type="button">   
                                                        <i class="icon-trash"></i>
                                                    </a> 
                                                    </td>                                              
                                            </tr>
                                        <?php } ?>              
                                        </tbody>
                                    </table>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Basic Table ends -->
               </div>
            </div>
         </div>
         <!-- Main content ends -->
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

   <script src="<?=base_url('assets')?>/plugins/sweetalert/sweetalert2.min.js"></script>
   <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

   <!-- custom js -->
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
    $(document).ready( function () {
        $('#myTable').DataTable();
    });

    $('.delete').on('click', function (e) {
            e.preventDefault();
            var href = $(this).attr('href');
            swal({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#0CC27E',
              cancelButtonColor: '#FF586B',
              confirmButtonText: 'Yes, delete it!',
              cancelButtonText: 'No, cancel!',
              confirmButtonClass: 'btn btn-success mr-5',
              cancelButtonClass: 'btn btn-danger',
              buttonsStyling: false
            }).then(function () {
              window.location = href;
            }, function (dismiss) {
              if (dismiss === 'cancel') {
                swal('Cancelled', 'Your imaginary file is safe :)', 'error');
              }
            });
    });
  </script>




  <script type="text/javascript">
    <?php if($this->session->flashdata('success')){ ?>
        success("<?=$this->session->flashdata('success')?>");
    <?php } ?>

    <?php if($this->session->flashdata('error')){ ?>
        error("<?=$this->session->flashdata('error')?>");
    <?php } ?>
  </script>


  <script>
            function updateStatus(event, id){
              var checked = 'D';
              if ($(event).is(':checked')) {
              checked = 'A';
              }
              var data = {
                  id: id,
                  status:checked
              };

              $.ajax({
                  type: 'POST',
                  url: "<?=base_url()?>service_card_category/enable",
                  data: data,
                  success: function(resultData) {
                    if(resultData){
                        success('successfully update status');
                    }
                  }
              });
          }
    </script>

</body>
</html>
