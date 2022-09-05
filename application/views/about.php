<!DOCTYPE html>
<html>
<head>
	<title>About us</title>
	 <link rel="icon" href="http://localhost/cudel-test/admin/assets/cudel_logo.svg" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Arima&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@0,300;0,400;1,100;1,300&display=swap" rel="stylesheet">
	<style>
		.header {
			width: 100%;
			margin: auto;
			padding: 30px;
			/*font-family: 'Alegreya Sans SC', sans-serif;*/
			font-weight: 100;
		}
		
		.header>h1 {
			text-align: center;
			color: #3b2ade;
			font-weight: 400;
			font-size: 3rem; 
			font-family: 'Alegreya Sans SC', sans-serif;
		}
		.header_content {
			width: 100%;
			text-align: justify;
			font-size: 1.1rem;
			letter-spacing: 2px;
			padding: 50px;
			background: linear-gradient(to right, #3b2ade, #3b2ade);
			border: 1px solid #3b2adea6;
			box-shadow: 0px 0px 10px #3b2adea6;
			border-radius: 20px;
			display: flex;
			align-items: center;
			background-position: center;
			background-size: cover;
		}
		.header_content p{
			line-height: 30px !important;
			color: #fff;
			padding : 0px 60px;
			font-weight: 400;
			font-size: 22px;

		}
		.red{
			color: white;
			font-size : 25px;
		}
		.teamImg {
			display: grid;
			grid-template-columns: auto auto auto auto !important;
			/*border: 2px solid red;*/
			padding: 20px;
			grid-gap: 20px;
			margin: auto;
		}
		.teamImg img {
			width: 290px;
			/*height: 300px;*/
			border-radius:20px;

		}
		.teamImg img:hover {
			box-shadow: 0px 0px 10px #3b2ade;
		}
		.team h1 {
			color: #3b2ade;
			font-family: 'Alegreya Sans SC', sans-serif;
			

		}
		@media only screen and (max-width: 700px){
			.teamImg {
				margin-left: 20px;
				grid-template-columns: auto;
				/*border: 2px solid red;*/
				display: flex;
				flex-direction: column;
				align-items: center;
				justify-content: center;

			}
			.header {
				width: 99%;
				padding: 10px;
				}
			.header_content {
				width: 100%;
				padding: 20px;
				flex-direction: column;	
			}	
			.header_content p {
				padding: 0;
			}


		}
		
	</style>	

</head>
<body>
<?php $this->load->view('common/header')?>
	<div class="header">
		<h1>ABOUT US</h1>
		<div class="header_content">
			<!-- <img style="width: 300px;padding: 10px;" src="assets/images/logos/logos-02.png"> -->
			<p>Cu<span class="red">D</span>el provides customer delight solutions which include mobile beauty services at your doorstep. Our vision is to save your time and effort going to salons by booking beauty services from the comfort of your own home at very reasonable price. <br><br>

Cu<span class="red">D</span>el has a team of highly experienced and certified Beauty Experts. All our Beauty Experts take care of hygiene and carry their customized kit to every customer. The top-notch quality products used by our Experts as well as grooming team, gets delivered in one-sealed sachets and secure packaging so that we can maintain transparency and boost the customer satisfaction. <br><br>

We also offer a free consultation by our Beauty Expert to help you look more radiant and gorgeous. Book our services online which is quick, reliable and delightful over the whatsapp or you can connect by calling to our customer care executive 24*7 . Our services at home including Facial, Clean Up, Bleach, Waxing, Pedicure, Manicure, Threading, Hair Spa, Hair Cut, Head Massage and Makeup etc at your doorstep..<br><br> Cu<span class="red">D</span>el has a vision to set milestone in beauty and body care service offering. .We at Cu<span class="red">D</span>el are dedicated to use original, authentic and effective branded products that have gone through quality checks, have skin-friendly composition and are super-safe. Ensuring the high quality products being used along with best grooming services we are making beauty routines relaxing, classy and glamorous.</p>
		</div>

		
	</div>
	<div class="team">
			<h1 style="text-align: center;">Beauty Experts</h1>
			<div class="teamImg">
				<img src="assets/images/cudelPartners/cp1.jpeg">
				<img src="assets/images/cudelPartners/cp2.jpeg">
				<img src="assets/images/cudelPartners/cp10.jpeg">
				<img src="assets/images/cudelPartners/cp11.jpeg">
				<!-- <img src="assets/images/cudelPartners/cp5.jpeg">
				<img src="assets/images/cudelPartners/cp6.jpeg">
				<img src="assets/images/cudelPartners/cp7.jpeg">
				<img src="assets/images/cudelPartners/cp8.jpeg"> -->
				<!-- <img src="assets/images/cudelPartners/cp9.jpeg"> -->
			</div>
		</div>
		<?php $this->load->view('common/footer')?>
</body>
</html>