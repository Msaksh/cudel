<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- <title>CuDel cart page</title> -->
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="assets/images/logos-02.png">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">  
  <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css"> 
  <link  rel="stylesheet" type="text/css"  media="all" href="<?=base_url('../')?>assets/css/date_time.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/css/font.awesome.css">  
  <!-- Main Style CSS -->   

  <style>
    .notice{
      border: 1px solid #8c80ff;
      width: 100%;
      border-radius: 10px;
      margin: auto;
      margin-bottom: 15px;
      background: linear-gradient(to right, #fff, #8c80ff);
      color: #464646;
      padding: 5px;

      text-align: center;
    }

    .noteHeading{margin: 0;}

    .cpnApplyBtn{
      font-size: 16px;
      margin-bottom: 10px;
      }
    

    .m {
        /* border: 1px solid blue; */
        border-radius: 30px;
        width: 300px;
        padding: 10px;
        margin: 10px;
        background: linear-gradient(to right, white, #8c80ff);
        font-size: 18px;
        font-weight: 500;
        font-family: "Courier New", Courier, monospace;

        /* FlexBox */
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-family: 'Roboto', sans-serif;
        }

        .m > label{font-weight: 500;}

        .m:hover {
          background: linear-gradient(to right, white, #6454fc);
        }

        .method {width:  fit-content;}

        .cpnCodeDiv{
          width: fit-content;
          padding: 15px;
          background-color: #9489ff26;
          border-radius: 15px
        }

        .mainCpnDiv{
          display: flex;
          justify-content: space-around;
          align-items: center;
        }


        #NewTotal{
          color: green; 
          opacity: 1;
          border: none;
          height: auto;
          width: 100px;
          font-size: 18px;
          font-weight: 700;
          background-color: rgba(0, 0, 0, 0);
        }

        .newFlexClass{
          align-items: center;
          justify-content: flex-start;
        }

        .marginTop{
          margin-top: 18px;
        }

        .blinker{
          font-size: 2.5rem;
          font-weight: 900;
          animation: blinker 1.5s linear infinite;
        }

        @keyframes blinker {
          50% {
            opacity: 0;
          }
        }

        .notice > p{
          font-size:  18px;
        }
    @media only screen and (max-width: 768px) {
      .notice {
        width:  97%;
      }
      .mainCpnDiv{
        flex-direction: column;
      }

      .cpnCodeDiv{
        width: 100%;
        margin-top: 10px;
      }

      #coupon{
        margin-bottom: 0;
      }
      .marginTop{
          margin-top: 1px;
        }


    }
  </style>

</head>
<body onload="by_default()">
 <!--breadcrumbs area start-->
 <div class="breadcrumbs_area">
  <div class="container">
    <div class="row">
      <div class="col-10">
        <div class="breadcrumb_content">
          <ul>
            <li><a href="<?=base_url('my-account')?>">My Account</a></li>
            <li style="color:#3b2ade">Shopping Cart</li>
          </ul>
        </div>                    
      </div>
      <div class="col-md-2 ">
        <a style="color:#3b2ade" href="<?=base_url('login/logout')?>">Logout</a>
        <a style="color:#3b2ade;margin:10px;" href="<?=base_url('../')?>">Home</a>
      </div>
    </div>
  </div>
</div>
<!--breadcrumbs area end-->   
<?php if($this->cart->total()){?>

  <!--shopping cart area start -->
  <div class="shopping_cart_area">

    

    <div class="container">
      <form action="<?=base_url('payment')?>" method="post">
        <div class="row">
          <input type="hidden" name="id" id="customer_id" value="<?=$list->id?>">
          <div class="col-12">
            <div class="table_desc">
              <div class="cart_page table-responsive">
                <table>
                  <thead>
                    <tr >
                     <th class="product_thumb" style="border-bottom: 3px solid #3b2ade;">Image</th>
                     <th class="product_name" style="border-bottom: 3px solid #3b2ade;">Product</th>
                     <th class="product-price" style="border-bottom: 3px solid #3b2ade;">Price</th>
                     <th class="product_quantity" style="border-bottom: 3px solid #3b2ade;">Quantity</th>
                     <th class="product_remove" style="border-bottom: 3px solid #3b2ade;">Delete</th>
                     <th class="product_total"style="border-bottom: 3px solid #3b2ade;">Total</th>
                   </tr>
                 </thead>
                 <tbody>
                   <?php   foreach ( $data =$this->cart->contents() as $value) {?>              
                    <tr>                                           
                      <td class="product_thumb"><a href="#"><img
                       src="<?=base_url('assets/images/blog/'.@$value['image'])?>" alt=""></a></td>

                       <input type="hidden" name="name" value="<?=$value['name']?>">
                       <input type="hidden" name="qty" value="<?=$value['qty']?>">
                       <input type="hidden" name="phone" value="<?=$list->phone?>">
                     
                       <td class="product_name"><a href="#"><?=$value['name']?></a></td>
                       <td class="product-price"><?=$value['price']?></td>

                       <td class="product_quantity"><label></label> <input min="1"
                        max="100" value="<?=$value['qty']?>" type="number" onchange="updateQty(this,'<?php echo($value['rowid']);?>')" ></td>
                        <td class="product_remove"><a href="<?=base_url('cart/delete/'.$value['rowid'])?>"><i class="fa fa-trash"></i></a>
                        </td>
                        <td class="product_total"><?=$value['subtotal']?></td>
                      </tr>
                    <?php } ?>                             


                  </tbody>
                </table>
              </div>
              <div class="cart_submit">
                <input type="hidden" name="price" value="<?php echo($this->cart->total());?>">
                <h2><b>Total : </b>  <?php echo($this->cart->total());?></h2>
                

              </div>
            </div>
          </div>
        </div>
        <?php

        $date = date('d');
        $k=0;
        $date--;
        $month = date('M');
        ?> 
        <input type="hidden" name="date" value="" id="date">
        <input type="hidden" name="time" value="" id="time">
        <div class="container" style="margin-bottom:20px;padding:30px;box-shadow: 2px 4px 8px grey;">
          <div class="section">
            <div  class="component-wrapper booking-wrapper" data-bind="visible: isVisible()">
              <div data-bind="i18n: 'Select date of service', attr: {class: 'service-date-label'}" class="service-date-label "style="background: #3b2ade;color: white;">Select date of service </div>
              <ul id="navMenus" id="day" class="booking-dates" data-bind="foreach: bookingDates">
                <?php while($k<= 4){ $date=date('d M', strtotime(date('d-m-yy') . $k.' day')); $k++;?>
                  <li><span data-bind="text: bdate, click: $parent.addDate"><?php echo($date);?></span></li>

                <?php } ?> 

               </ul>
                
              <div class="service-time-label" data-bind="i18n: 'Select service time slot', attr: {class: 'service-time-label'}" style="background: #3b2ade;color: white;">Select service time slot</div>
                <ul id="navMenu" class="booking-times">
               <?php
                $time = date('H')+4;
                $day=date('d');
                $r=1;
                $current_date=date('d');
                @$selected_date=$_COOKIE['day'];
                if($current_date==$selected_date){
                if($time<=9){    // this code for when time  greater ho  9<current time  se       
                  $time=9;
                  while($time<=18){
                      $t=$time>12?($time-12):$time;
                      $a=$time>12?' PM':' AM';
                            if($r==1){ ?>
                               <li><span data-hour="<?=$t.':00'.$a?>"><?=$t.':00'.$a?> </span></li>
                               <?php 
                              $r++; 
                            }
                            else{?>
                            <li><span data-hour="<?=$t.':00'.$a?>"><?=$t.':00'.$a?> </span></li>
                          <?php } ?>        

                <li><span data-hour="<?=$t.':30'.$a?>"><?=$t.':30'.$a?> </span></li>

              <?php $time++; } } 

             else{ // this code for when time  greater ho  9>current time  se
                   $time=date('H')+4;
                    while($time<=18){
                     $t=$time<=12?$time:$time-12;
                      $a=$time>12?' PM':' AM';

                            if($r==1){ ?>

                               <li><span data-hour="<?=$time.':00'?>"><?=$t.':00'.$a?> </span></li>
                               <?php 
                              $r++; 
                            }
                            else{?>
                            <li><span data-hour="9"><?=$t.':00'.$a?> </span></li>
                          <?php } ?>             

                <li><span data-hour="9"><?=$t.':30'.$a?> </span></li>

              <?php $time++; }
               if($time>18){?>
                  <h3>Slots not available today </h3>

                <?php }
              }
                }
                else{

                // when  customer selected next day date
                  $time=9;

                     if($time<=9){    // this code for when time  greater ho  9<current time  se       
                  $time=9;
                  while($time<=18){
                      $t=$time>12?($time-12):$time;
                      $a=$time>12?' PM':' AM';
                            if($r==1){ ?>
                               <li><span data-hour="<?=@$t.':00'.@$a?>"><?=@$t.':00'.@$a?> </span></li>
                               <?php 
                              $r++; 
                            }
                            else{?>
                            <li><span data-hour="<?=@$t.':00'.@$a?>"><?=@$t.':00'.@$a?> </span></li>
                          <?php } ?>        

                <li><span data-hour="<?=@$t.':30'.@$a?>"><?=@$t.':30'.@$a?> </span></li>

              <?php $time++; } }
                }

              ?>
                
              </ul>
            </div>
          </div>
        </div>
        <!--coupon code area start-->
       

        <div class="coupon_area">
          <div class="row">                        
            <div class="col-lg-12 col-md-12">
              <div class="coupon_code right">
                <h3 style="background: #3b2ade;">Cart Totals</h3>
                <div class="coupon_inner">
                  <div class="cart_subtotal">
                    <p>Subtotal</p>
                    <p class="cart_amount"><b>Rs: </b><?php echo($this->cart->total());?></p>
                  </div> 

                  <a href="#">Calculate Order</a>

                  <div class="notice">
                      <!-- <h1 class="NoteHeading">Note:</h1> -->
                      <p>Coupons for smart shoppers </p>
                      <p class="blinker">CUDEL50</p>
                      <p>Pay online and get instant Rs 50 off</p>

                  </div>
                   <!-- <input checked="checked" type="radio" onclick="online_payment()" name="one" id="payOnlineBtn" >
                   <label for="payOnlineBtn" >Pay Online</label>

                     <input type="radio" onclick="cash_payment()" name="one" id="cashBtn">
                     <label for="cashBtn" >Cash</label><br> -->
                     <div class="mainCpnDiv" >
                         <div class="method">
                            <div class="m1 m">
                                <img src="<?=base_url('assets/images/cashless-payment.png')?>" alt="moneyImage" width="35" />
                                <label for="payOnlineBtn">Pay Online</label>
                                <input
                                    type="radio"
                                    style="width: 18px; height: 18px"
                                    checked="checked"
                                    onclick="online_payment()"
                                    name="one"
                                    id="payOnlineBtn"
                                />
                            </div>
                            <div class="m2 m">
                                <img src="<?=base_url('assets/images/money.png')?>" alt="moneyImage" width="35" />
                                <label for="cashBtn">Cash on Delivery</label>
                                <input
                                    type="radio"
                                    style="width: 18px; height: 18px"
                                    onclick="cash_payment()"
                                    name="one"
                                    id="cashBtn"
                                />
                            </div>
                          </div>


                      <div class="cpnCodeDiv" id="cpnCodeDiv">
                        
                         <label for="coupon" style="color: #696969;">Apply Coupon Code:</label> 
                         <div id="coupon-div" style="border-bottom: 2px solid purple; width: 300px; display: flex; align-items: center;">
                           <input id="coupon" value=""  type="text" name="coupon" placeholder="Enter code here" style="border: none"  >
                           <button type="button" onclick="appy_coupon()" class="cpnApplyBtn btn btn-primary">Apply</button>
                         </div>
                        <span id="coupon-sms" class="text-danger"></span>

                       
                       <!-- <span id="coupon-sms" class="text-danger"></span> -->
                       

                        <div class="cart_subtotal newFlexClass">
                          <p class="marginTop">Total :</p>
                          <input style="border:none;" type="text" name="NewTotal" id="NewTotal" disabled>
                          <p style="display: none;" class="cart_amount" id="NewTotal" ><b > </b><?php $total=$this->cart->total();?></p>

                        </div>

                      <?php
                           $where=[
                              'pin_code'=>$list->pin,
                           ];
                           $data=$this->appmodel->select_one('pin_code',$where);
                          if(@$data->pin_code){
                            if($total>=499){
                          ?>
                </div>

                      <div class="checkout_btn">
                       <!-- <a style="color:white;background-color:#3b2ade" href="#demo" class="btn" data-toggle="collapse">Book Now</a> -->
                           <div id="demo" class="collapse111" style="margin-top: 10px;">
                              <button name="online" id="online" style="text-align:right" class="btn btn-success btn-sm mb-2 buy_now" data-amount="<?php echo($this->cart->total());?>" type="submit">Book Now</button>
                              <button name="cash" id="cash" type="submit" style="text-align:right;text-decoration:none;color:white" href="<?=base_url('payment/'.$list->id)?>" class="btn btn-success btn-sm mb-2 date_check "  type="">Book Now</button>
                           </div>
                      </div>
              </div>


               <?php }else{
                echo('<h2 style="color:red">Minimum order amount is Rs: 499</h2>');
               } 
             }

                else{
                echo('<h2 style="color:red">Service not available in your area</h2>');

                echo('<h2 style="color:red">
                  <form  method="post">
                  <input id="pin"placeholder="Update your pin code" class="form-group" type="text" required>
                  <input id="address" placeholder="Update your address" class="form-group" type="text" required>
                  <input id="phone" placeholder="Update your address" value='."$list->phone".' class="form-group" type="hidden">
                  <button onclick="update_details()" class="form-group" type="button" name="Update">Update
                  </form>


                  </h2>');
               } ?>


               </div>
             </div>
           </div>
         </div>
       </div>

       <!--coupon code area end-->
     </form>
   </div>
 </div>

 <div class="shipping_area shipping_padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="single_shipping">
          <div class="shipping_icone">
            <i class="fa fa-phone"></i>
          </div>
          <div class="shipping_content">
            <h3><a id="phone"value="<?=$list->phone?>" href="tel:<?=PHONE?>"><?=$list->phone?></a></h3>
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
            <h3><?=$list->address?></h3>
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
<?php }

else{ 

  echo('<div style="text-align:center" ><h1  >Cart is empty</h1><br><a  href="http://localhost/cudel-test/">Back to homepage </a></div>');
}
?>
<script src="<?=base_url()?>assets/js/vendor/jquery-3.4.1.min.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

</body>
</html>
<script >
  $("#navMenus").on('click','li',function(){

    $("#navMenus li.active").removeClass("active");    
    var k = $(this).text(); 
    localStorage.setItem("date",k);
    let result = k.slice(0, 2);
     document.cookie = "day="+result;
     var date = localStorage.getItem('date');    
    $(date).addClass("active");
    $(this).addClass("active");
    $('#date').val(k); 
    $('.booking-times').load(window.location.href + ' .booking-times');   

  });
  $("#navMenu").on('click','li',function(){  
    $("#navMenu li.active").removeClass("active"); 
    var k = $(this).text(); 
    var date = localStorage.getItem('date');  
     $('#date').val(date); 
    $(this).addClass("active");
    $('#time').val(k); 


  });


  function updateQty(obj,rowid){  
   $.get("<?php echo base_url('cart/updateCartItem/');?>",
    {rowid:rowid , qty:obj.value},
    function(resp){

      if(resp== 'ok'){
        location.reload();
      }
      else{
        alert('error');
      }
    });

 }
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

  $('.date_check').click(function(e){
    var date = document.getElementById("date").value;
    var time = document.getElementById("time").value;
    var customer_id = document.getElementById("customer_id").value;
    var schedule = date+'  '+time;
    if(date==''&&time ==''){
     alert('Select date and time');
     return false;
   }
   });


  $('body').on('click', '.buy_now', function(e){
    // var totalAmount = $(this).attr("data-amount");
    var totalAmount = document.getElementById('NewTotal').value;
    var product_id =  $(this).attr("data-id");    
    var date = document.getElementById("date").value;
    var time = document.getElementById("time").value;
    var customer_id = document.getElementById("customer_id").value;
    var schedule = date+'  '+time;
    if(date==''&&time ==''){
     alert('Select date and time');
     return false;
    
   }
   var options = {
    // "key": "rzp_live_PPoWHyGr27vAFU",
     "key": "rzp_live_C7puA6sQrkbvzk",
    "amount": (totalAmount*100), // 2000 paise = INR 20
    "name": "CuDel",
    "description": "Payment",
    "image": "",
    "handler": function (response){
      $.ajax({
        url: '<?=base_url()?>/payment/payment_proccess',
        type: 'post',
        dataType: 'json',
        data: {
          razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id, schedule : schedule,customer_id : customer_id,
        }, 
        success: function (msg) {
          swal("Success!", "Payment done!", "success");
          window.location.href = '<?=base_url()?>payment/payment_success';
        }
      });

    },

    "theme": {
      "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();
});


  function update_details(){
    var pin= document.getElementById('pin').value;
    var address= document.getElementById('address').value;
    var phone= document.getElementById('phone').value;
     $.ajax({
      url:'<?=base_url()?>cart/update_customer_details',
      method:'post',
      data:{pin:pin,address:address,phone:phone},
      success:function(res){
        location.reload();
      }
     })
  }

</script>
<script type="text/javascript">
   function appy_coupon(){
     var coupon = document.getElementById('coupon').value;
     $.ajax({
      url:'<?=base_url()?>cart/appy_coupon',
      method:'post',
      data:{coupon:coupon},
      success:function(res){
            if(res==0){            
             $('#coupon-sms').html('<span style="color:red">Invalid coupon Code</span>');
          }
          else{
             var cart = "<?php echo $this->cart->total(); ?>";
             var total = cart-res;
            $('#NewTotal').val(total);
           $('#coupon-sms').html('<span style="color:green">Coupon code applied</span>');
           document.getElementById("coupon_price").value = res;
          }
        }
     })
  }

  function by_default(){
    document.getElementById( 'cpnCodeDiv' ).style.display = 'block';
     document.getElementById( 'cash' ).style.display = 'none';
     document.getElementById( 'online' ).style.display = 'block';
   }

  function online_payment(){
     document.getElementById( 'cpnCodeDiv' ).style.display = 'block';
     document.getElementById( 'cash' ).style.display = 'none';
     document.getElementById( 'online' ).style.display = 'block';  
   
  }
  function cash_payment(){

     document.getElementById( 'cpnCodeDiv' ).style.display = 'none';
      document.getElementById( 'online' ).style.display = 'none';
     document.getElementById( 'cash' ).style.display = 'block';
      var total = "<?php echo $this->cart->total(); ?>";
        $('#NewTotal').val(total);
  }
  </script>