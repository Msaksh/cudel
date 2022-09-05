
<?php $this->load->view('common/header');?>

<link rel="stylesheet" href="assets/css/cudel.css">
<link rel="stylesheet" href="assets/css/cudel.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<?php
if(isset($_SESSION['payment'])) 
	{ ?>
		<script> swal("Success!", "Payment successfully done !", "success"); </script>
		
		<?php  unset($_SESSION['payment']);
	}
	else if(isset($_SESSION['success'])) 
		{ ?>
			<script> swal("Success!", "Product added successfully!", "success"); </script>
			
			<?php  unset($_SESSION['success']);
		}

		else if(isset($_SESSION['success_delete'])) 
			{ ?>
				<script> swal("Success!", "Product delete successfully!", "success"); </script>
				
				<?php  unset($_SESSION['success_delete']);
			}
		else if(isset($_SESSION['sms'])) 
				{ ?>
					<script> swal("Try Again!", "Invalid email/password!", "error"); </script>					
					<?php  unset($_SESSION['sms']);
				}
		else if(isset($_SESSION['match'])) 
					{ ?>
						<script> swal("Try Again!", "Account already exist", "error"); </script>
						
		<?php  unset($_SESSION['match']);
	}
	else if(isset($_SESSION['beautyexpert'])) 
					{ ?>
						<script> swal("Success!", "Form submitted ", "success"); </script>
						
		<?php  unset($_SESSION['beautyexpert']);
	}


?> 
<style type="text/css">						
	.w3-animate-left{							
		animation: animateleft 3s!important;
						}
	.w3-animate-right{							
		animation: animateright 3s!important;
						}
	.w3-animate-bottom{							
		animation: animatebottom 3s!important;
						}
	.border{
		border-radius:40px;
	}
	.servicesPack1 a:before {
    	position: inherit!important; 
    	display: inline-block;
	}					
 </style>
	<!-- new section BG -->
<style>
	.word {
	/* position: absolute; */
	top: 0;
	margin: auto;
	/* color: #ee3a3b; */
	color: #3b2ade;
	font-weight: 700;
	font-size: 4rem;
	font-family: sans-serif;
	text-shadow: 0px 0px 1px #fff;
}

.typing {
	top: 0; */
	width: 50%;
	/* height: 100%; */
	display: flex;
	align-items: flex-end;
	justify-content: center;
	/*border:  2px solid red;*/
}
.typing_content {
	/* border: 2px solid green; */
	border-radius: 30px;
	width: 250px;
	height: 100px;
	/*margin-bottom: 80px;*/
	/* box-shadow: 0px 0px 10px whitesmoke; */
}

.typing_content p {
	font-size: 1rem;
	width: fit-content;
	font-weight: 600;
	margin: auto;
	margin-top: 10px;
	color: rgb(120, 120, 120);
	
}

.typing .word {
	width: 100%;
	/* height: 100%; */
	text-align: center;
	font-size: 1.8rem;
}

.intro {
	text-align: justify;
	color: #3b2ade;
	font-size: 1.3rem;
 
	width: 100%;
	padding: 10px;
}

.intro > p {
	width: 75%;
	/* border: 2px solid yellow; */
	margin: auto;
	margin-top: 50px;
}


.red {
	color: rgb(100, 100, 100) !important;
}

.afterIntro {
	/* border: 2px solid blue; */
	display : flex;
	align-items: center;
	justify-content: center;
	width: 58%;
	margin: auto;
	height: 200px;
	margin-top: -20px;
}
.pinbox{
	/* border: 2px solid green; */
	width: 450px;
	/* height: 132px; */
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
}

.barber {
	width: 330px;
}

@media only screen and (max-width: 900px) {

	.intro {
		padding: 10px 40px 10px 40px;
		text-align: justify;	
		word-spacing: -2px;
		
	}
	.intro > p{
		width: 100%;
		padding: 10px;
		font-size : 1.2rem;
		margin-top: 30px;
	}

	/* .typing {
		border: 2px solid blue;
	} */
	.typing_content > p{
		font-size : 1.2rem;
	}

	.word {
		font-size: 2rem;
	}
	.afterIntro {
		flex-direction: column;
		width: 100%;
		height: 100%;
	}
	
	.pinbox {
		margin: auto;
		width: 88%;
	}

	.barber {
		width: 300px;
	}

}
</style>

	<div class="newBG">
		

		<div class="intro">
            <p>
                Cu<span class="red">D</span>el provides <span class="red">customer delight
                    solutions</span> which include mobile beauty services at your
                    doorstep. Our vision is to save your time and effort going
                    to salons by booking beauty services from the comfort of
                    your own home at very reasonable price.
            </p>
        </div>

		<div class="afterIntro">			
			<div class="pinbox">
				<div class="typing">
					<div class="typing_content">
						<p>Currently available in:</p>
						<div class="word"></div>
					</div>
				</div>

			<div class="pincode">
				<input id="pincode" maxlength="6" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" type="text" placeholder="Enter pincode">
				<button  type="button" onclick="search_pincode()">Check	
				</div>
			</div>
			
			<img class="barber" src="assets/images/barberr.png" alt="cudel barber image">
			
			</div>
		</div>


	<section class="banner-bg" >
		<h1 style="text-align: center;">POPULAR PACKAGES</h1>
		<div class="owl-carousel owl-theme" >
			<?php foreach ($banners as $banner) {?>
				<div class="item ">
					<div class="sliderMainDiv" style="height: 300px">
						<a class="show_details" href="javascript:void();" data-bs-toggle="modal" data-bs-target="#show_banner_details" data-id="<?=$banner->id?>">
							<div class="sliderDataInner" style="height: 317px;">						
								<div class="packInner">	
									<h4 style="font-size: 21px;background: #3b2ad3a6;"><?=$banner->name?></h4>
								</div>					
							</div>					
							<img class="packImg" src="<?=base_url('admin/assets/images/banner/'.$banner->image)?>">
						</a>
					</div>			
				</div>	

			<?php } ?>	

		</div>
	</section>



	<!--### Services Section ###-->	
	<section class="ourServices" style="border-top: 2px solid #eee;">
		<a href="#" class="sectionScroll" id="ourservices"></a>
		<div class="sectionTitle">
			<h2>OUR BEAUTY SERVICE PACKAGES</h2>
		</div>
		<div class="container clearfix">
			<div class="row bottomServicesPack">
				<?php foreach($products as $product){?>
					<div class="col-sm-6 col-md-3 col-lg-3 text-center" style="z-index: 1;">
						<div class="servicesPack">
							<a href="javascript:void();" class="buy" data-id="<?=$product->id?>" data-bs-toggle="modal" data-bs-target="#CompleteGlow">
								<div class="packInner">
									<div class="packPrice">₹<?=$product->price?></div>
									<h4 style="font-size:13px"><?=$product->name?></h4>
								</div>				
								<img style="object-fit: scale-down;min-height: auto!important;"class="packImg imgStrtBtm" src="<?=base_url('admin/assets/images/blog/'.$product->image)?>">
							</a>
						</div>
					</div>	
				<?php } ?>				

			</div>
		</div>
	</section>

	<section class="coffeeHomeWrapper">
		<div class="container">
			<div class="coffeeHomeSec">
				<div class="row">
					<div class="col-md-9">
						<div class="coffeeDataSec">
							<h2 data-bs-toggle="modal" data-bs-target="#GetPartyReadyPackage">Get Party Ready while sipping your coffee at home</h2>
							<!-- <div class="ladyPicSec d-block" data-bs-toggle="modal" data-bs-target="#GetPartyReadyPackage">
								<img src="<?=base_url('admin/assets/images/blog/'.$product->image)?>">
							</div> -->
							<p data-bs-toggle="modal" data-bs-target="#GetPartyReadyPackage">We always strives to create our customers looks more radiant and gorgeous. Our makeup artists are certified and experience. We are using all international brands</p>
							<div class="coffeePrice">Only in 1999/-</div>
							<div class="reachUsBtn">
								<a href="https://api.whatsapp.com/send?phone=919311147877&amp;text=I'm%20interested%20in%20your%20services" class="btn">Reach Us</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 d-none d-md-block">
						<div class="ladyPicSec d-block" data-bs-toggle="modal" data-bs-target="#GetPartyReadyPackage">
							<img src="<?=base_url()?>assets/img/ladyPic.png">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<section class="ourServices" style="border-top: 2px solid #eee;">
			<a href="#" class="sectionScroll" id="package"></a>
			<div class="sectionTitle">
				<h6></h6>
				<h2>OUR SERVICES </h2>
			</div>
			<div class="container clearfix">
				<div class="row bottomServicesPack">
					<?php foreach($service as $product){?>
						<div class="col-sm-6 col-md-3 col-lg-3 text-center" style="z-index: 1;">
							<div class="servicesPack servicesPack1">
								<a href="javascript:void();" class="rate-card border" data-id="<?=$product->id?>" data-bs-toggle="modal" data-bs-target="#rate-card">
									<div class="packInner">
										<!-- <div class="packPrice">₹<?=$product->price?></div> -->
										<h4 class="rateCard" style="text-align: center;font-size: 12px; width: 200px; border-radius: 5px;"><?=$product->name?></h4>
									</div>				
									<img class="packImg imgStrtBtm" src="<?=base_url('admin/assets/images/blog/'.$product->image)?>">
								</a>
							</div>
						</div>	
					<?php } ?>				

				</div>
			</div>
		</section>

	</section>
	<style>
		@media (max-width: 700px) {
			.rateCard {
				width: 293px !important;
				font-size :16px !important;
			}
		}
	</style>

	<section class="workProcess">
		<div class="container clearfix">
			<div class="sectionTitle">
				
				<h2>How Cu<span>D</span>el Works</h2>
				<p class="pt-3">CuDel enlist the professional out there on this platform so that you can choose them as per your requirement of services like Facial, Waxing, Manicure, Pedicure, Head Massage Threading, Hair Cut and get Party Makeup.</p>
				<p>You can call & whatsapp to our customer services team 24*7, our team would make a customize package for you, pick the time slot between (9 AM to 7 PM) and our Expert would be booked to pamper you at your own home while sipping your coffee & watching TV.</p>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-3">
					<div class="workCols">
						<img src="<?=base_url()?>assets/img/wp-1.png">
						<h5>Select Services</h5>
						<p>Choose from a wide range of beauty services offered directly to your doorstep.</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="workCols">
						<img src="<?=base_url()?>assets/img/wp-2.png">
						<h5>Pick Date and Time</h5>
						<p>Book beauty sessions at your convenience, anytime and anywhere..</p>
					</div>
				</div>	
				<div class="col-md-6 col-lg-3">
					<div class="workCols">
						<img src="<?=base_url()?>assets/img/wp-3.png">
						<h5>Recieve Confirmation</h5>
						<p>Upon booking, you'll immediately receive confirmation with relevant details.</p>
					</div>
				</div>	
				<div class="col-md-6 col-lg-3">
					<div class="workCols">
						<img src="<?=base_url()?>assets/img/wp-4.png">
						<h5>Rate and Enjoy</h5>
						<p>Relax and enjoy the pampering because ladies, you deserve it.</p>
					</div>
				</div>	
			</div>	
		</div>
	</section>

	<section class="whyCudelSec">
		<div class="container clearfix">		
			<div class="row">
				<div class="col-md-12 col-lg-8">
					<div class="sectionTitle">
						<h6>100% Quality Assured</h6>
						<h2>Why Cu<span>D</span>el?</h2>
					</div>
					<div class="whyUsCol">
						<div class="imgSec"><img src="<?=base_url()?>assets/img/wy-1.png"></div>
						<div class="wyData">
							<h5>Reasonable & Easy on Pocket Prices</h5>
							<p>Reasonable & Pocket friendly rates, We are offering the best available pocket friendly packages compare to other beauty home salon services. You will also get assured satisfaction with our services satisfaction.</p>
						</div>
					</div>
					<div class="whyUsCol">
						<div class="imgSec"><img src="<?=base_url()?>assets/img/wy-2.png"></div>				 
						<div class="wyData">
							<h5>Certified & Trained Beauty Experts</h5>
							<p>We have Experienced & Verified trained Beauty Experts. All the Experts are trained under the WHO Guidelines & maintaining all the hygiene standards.</p>
						</div>
					</div>
					<div class="whyUsCol">
						<div class="imgSec"><img src="<?=base_url()?>assets/img/wy-3.png"></div>			  
						<div class="wyData">
							<h5>100% Genuine & Sealed Products</h5>
							<p>All our Beauty Experts use only branded and genuine products in sealed & single time use sachet packets. We provide 100% transparency in our Products.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="whyUsImg">
						<img class="img-fluid" src="<?=base_url()?>assets/img/whyusImg.png">
					</div>
				</div>
			</div>	
		</div>
	</section>

	<section>  
		<a href="#" class="sectionScroll" id="beautyexperts"></a>
		<div class="container">
			<div class="coronaSec">
				<div class="row">
					<div class="col-sm-12">
						<div class="covidTitle">
							<img src="<?=base_url()?>assets/img/safe.png">
							<h2>Our <span>Beauty Experts</span> are <span>fully vaccinated</span></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-lg-3">
						<div class="coronaCols">
							<img src="<?=base_url()?>assets/img/cr-1.png">
							<h4>We use mask & gloves</h4>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="coronaCols">
							<img src="<?=base_url()?>assets/img/cr-2.png">
							<h4>Daily Temperature Check</h4>
						</div>
					</div>	
					<div class="col-sm-6 col-lg-3">
						<div class="coronaCols">
							<img src="<?=base_url()?>assets/img/cr-3.png">
							<h4>Sanitization of tools & area</h4>
						</div>
					</div>	
					<div class="col-sm-6 col-lg-3">
						<div class="coronaCols">
							<img src="<?=base_url()?>assets/img/cr-4.png">
							<h4>Ensure to Aarogya setu App to all</h4>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</section>

	<section class="testimonialSec">
		<a href="#" class="sectionScroll" id="testimonials"></a>
		<div class="container clearfix">
			<div class="sectionTitle">
				<h6>Reviews</h6>
				<h2>Customer Testimonials</h2>
			</div>		
			<div id="testimonialSlider" class="cudelSlide carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
					<?php $i=0; foreach($testimonials as  $testimonial){?>
						<div class="carousel-item  <?php echo $status = ($i==0) ? 'active' :''?> ">
							<div class="testimonialOuter">				
								<div class="testimonialDes">
									<div class="userRating">
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
									</div>
									<p><?=$testimonial->details?></p>					
								</div>				
								<div class="userDetails">					
									<img class="img-thumbnail rounded-circle" src="<?=base_url('admin/assets/images/blog/'.$testimonial->image)?>" alt="tamannaGera">
									<h3><?=$testimonial->name?></h3>
									<h5><?=$testimonial->designation?></h5>
								</div>
							</div>	
						</div>
						<?php $i++; } ?>

					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#testimonialSlider" data-bs-slide="prev"><i class="bi bi-arrow-left"></i></button>	  
					<button class="carousel-control-next" type="button" data-bs-target="#testimonialSlider" data-bs-slide="next"><i class="bi bi-arrow-right"></i></button>
				</div>
			</div>
		</section>

		<?php $this->load->view('common/footer');?>
		<!--Services Packages modal-->
		<!-- Complete Glow Package -->
		<div class="modal fade" id="CompleteGlow" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<form action="<?=base_url()?>welcome/cart" method="post" >

					<div class="modal-content">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						<div class="modal-body data">

						</div>
						<input type="hidden" class="form-control" name="id" id="productid" value="productid">
					</div>
				</form>
			</div>
		</div>

	</div>
</div>
<!-- Get Party Ready Package -->
<div class="modal fade" id="show_banner_details" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			<div class="modal-body show_banner_details">


			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="rate-card" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			<div class="modal-body rate-card1" >
			</div>
		</div>
	</div>
</div>
<!-- The Modal -->
<div class="modal" id="addtocart">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">    	
			<!-- Modal body -->
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<center>
							<img src="<?=base_url()?>assets/img/addtocart.png" style="width:7%;margin-left: -75%;">
						</center>
					</div><!--col-->
				</div>
				<form id="submit" action="<?=base_url()?>welcome/payment" method="POST">
					<?php foreach ($check = $this->cart->contents() as $items) { 	

						?>  
						<!--  -->

						<div class="row mt-4">        	
							<div class="col-sm-6 col-md-6">
								<div class="popupImg">
									<center>
										<img class="img-fluid" name="image" src="<?=base_url('admin/assets/images/blog/'.@$items['image'])?>" style="width: 25%;height: 84px;"> 			</center>
									</div> <!--popupimg-->
								</div><!--col-->           
								<div class="col-sm-6 col-md-3">
									<h2 name="name" style="font-size: 1rem;"><input type="hidden" name="name" value="Advance Hair Cut Package" /> <?php echo $items['name']; ?></h2>
									<div class="popupPrice" name="price"><input type="hidden" name="payment" value=" <?php echo $items['price']; ?>" /> <?php echo $items['price']; ?>/-</div>


									<a  href="<?=base_url('welcome/delete/'.$items['rowid'])?>"  class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></a> 
								</div><!--col--> 
							</div>
						<?php  } 
						if($check){	
						}
						else{
							echo('<h2 style="text-align:center">Your cart is empty </h2><br>');
							$items['id'] ='';
						}
						?>
						<a onclick="remove_modal()" class="buy" data-toggle="modal" data-target="#signup" data-id="<?=$items['id']?>" type="button" style="background-color: #3b2ade; color: white; padding-right: 25px; padding-left: 25px; border:2px solid #3b2ade; margin-top: 14px;padding-top: 8px;padding-bottom: 8px; border-radius: 13px;text-decoration:none"href="" >Proceed to checkout</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function addcart(){
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
	}

</script>
<style type="text/css">	
	.swal-button--confirm{
		background-color: limegreen!important;
	}
	.swal-icon--success__line--long{
		background-color:green!important;
	}
	.swal-icon--success__line--tip{
		background-color:green!important;
	}
</style>

<script type="text/javascript">
	$('.buy').on('click',function(){           
		var signup = $(this).data('id');
		var sigin = signup;
		$("#signup1").val(signup);
		$("#sigin").val(sigin);

	}); 
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">      
	$('.buy').on('click',function(){        

		var id = $(this).data('id');      
		$("#productid").val(id);
		$.ajax({
			url:"<?=base_url('welcome/product')?>",
			method:'post',
			data: {id:id},
			success: function(event){
				$('.data').html(event);
			}
		});
	});

	$('.rate-card').on('click',function(){        

		var id = $(this).data('id');     
		$("#productid").val(id);		
		$.ajax({
			url:"<?=base_url('welcome/rate_card')?>",
			method:'post',
			data: {id:id},
			success: function(res){
				$('.rate-card1').html(res);
			


			}
		});
	});

	$('.show_details').on('click',function(){ 

		var id = $(this).data('id');    
							$("#productid").val(id);
							$.ajax({
								url:"<?=base_url('welcome/show_banner_details')?>",
								method:'post',
								data: {id:id},
								success: function(event){
									(event);
									$('.show_banner_details').html(event);
						}
					});
			}); 

	function my(id){
		$.ajax({
				url:"<?=base_url('welcome/rate_cart')?>",
				method:'POST',
				data: {id:id},
				success: function(event){			
				 	location.reload();
						}
					});

	}            	

					</script>

<!-- typewriting JS -->
<script>
            var words = ["Delhi", "Noida", "Ghaziabad", " Greater Noida"],
                part,
                i = 0,
                offset = 0,
                len = words.length,
                forwards = true,
                skip_count = 0,
                skip_delay = 15,
                speed = 70;
            var wordflick = function () {
                setInterval(function () {
                    if (forwards) {
                        if (offset >= words[i].length) {
                            ++skip_count;
                            if (skip_count == skip_delay) {
                                forwards = false;
                                skip_count = 0;
                            }
                        }
                    } else {
                        if (offset == 0) {
                            forwards = true;
                            i++;
                            offset = 0;
                            if (i >= len) {
                                i = 0;
                            }
                        }
                    }
                    part = words[i].substr(0, offset);
                    if (skip_count == 0) {
                        if (forwards) {
                            offset++;
                        } else {
                            offset--;
                        }
                    }
                    $(".word").text(part);
                }, speed);
            };

            $(document).ready(function () {
                wordflick();
            });

         function remove_modal(){
         	$('#addtocart').modal('hide');
            }
  function search_pincode(){

  pin=document.getElementById('pincode').value;
$.ajax({
        url:'<?=base_url()?>check-pin',
        method:'POST',
        data: {pin:pin},
        success: function(login){
            if(login == 1) {

              var sms="Service available in your area";  
              document.getElementById("pincode").value = sms;
              document.getElementById("pincode").style.color="green";
                         
            }
            else{
             var sms='Service not available in your area';
            document.getElementById("pincode").value = sms;
            document.getElementById("pincode").style.color="red";
            }
          }
        });
  
}
        </script>
		
