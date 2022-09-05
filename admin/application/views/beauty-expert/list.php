<!DOCTYPE html>
<html lang="en">

<head>
 <title><?=NAME?> | Visitors List</title>

 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
 <!-- Favicon icon -->
 <link rel="shortcut icon" href="<?=base_url()?>assets/images/logo.png" type="image/x-icon">
 <link rel="icon" href="<?=base_url()?>assets/images/logo.png" type="image/x-icon">

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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
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
       <h4>Site Visitors List</h4>
       <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
        <li class="breadcrumb-item">
         <a href="<?=base_url()?>">
          <i class="icofont icofont-home"></i>
        </a>
      </li>
      <li class="breadcrumb-item"><a href="#">Site Visitors</a>
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
        <h5 class="card-header-text">Site Visitors List</h5>
        <!-- <p>Basic example <code>without any additional modification</code> classes</p> -->
      </div>
      <div class="col-sm-6 text-right"> 
        <!-- <a href="<?=base_url('beautyexpert/create')?>" class="btn btn-success"><i class="icon-plus"></i></a> -->
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
            <th scope="col">Name</th>
            <th scope="col">Mobile No.</th>
            <th scope="col">Pin Code</th>  
            <th scope="col">Profession</th>                                      
            <th scope="col">Experience</th>
            <th scope="col">Gender</th>
            <th scope="col">comment</th>
             <th scope="col">Date</th>

            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=0; foreach ($items as $key => $value) { ?>
            <tr>
              <td> <?=++$i?> </td>                                             
              <td>
                <?=$value->name?>
              </td>
              <td><?=$value->mobile?></td>
              <td><?=$value->pincode?></td>
              <td><?=$value->profession?></td> 
              <td><?=$value->experience?></td> 
              <td><?=$value->gender?></td>  
              <td><?=$value->comment?></td>                                        
              <td>
                <?=date('d/m/Y', strtotime($value->created_at))?>       
              </td>                                        
              <td>

                <a href="<?=base_url()?>beautyexpert/delete/<?=$value->id?>" class="btn btn-danger delete" type="button">   
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
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- custom js -->
<script type="text/javascript" src="<?=base_url()?>assets/js/main.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/pages/elements.js"></script>
<script src="<?=base_url()?>assets/js/menu.min.js"></script>
<!-- 28/06 -->
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<!-- it's for download  buttons -->
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>




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
          $('#myTable').DataTable({
           dom: 'lBfrtip',
        buttons: [
            'excelHtml5',
            'pdfHtml5',
        ]
        });
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

</body>
</html>
