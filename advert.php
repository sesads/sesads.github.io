<?php
require 'includes/core.inc.php';
require 'includes/connect.php';

?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--+++++++++ Lines above are required ++++++++++++++--> 
        
        
        <!-- Website Description-->
        <meta name="theme-color" content="#255">
        <meta name="description" content="Serene~Sparkles">
        <meta name="author" content="Ojo Philemon">
        <link rel="icon" href="logoicon.png">
        <title>SES-ads</title>
        <!--++++++++++++++++++++++++++++++++++++++-->

        <!--Easy to find stuff-->
        <meta name="keywords" content="advert, advertise, advertising, sesads, serene sparkles, advertisement agency, site for advertising, sesads advert agency">
        <meta property="og:url" content="http://sesads.tk">
        <meta name="description" content="Ojo Philemon - Computer Engineer">
        <meta property="og:description" content="Ses-Ads | Sell &amp; Find Locally Trusted Products And Services">
        <meta property="og:title" content="Ses-Ads | Advertisement Agency">
        <meta name="author" content="Ojo Philemon | 'Serene Sparkles'">
        <!--++++++++++++++++++++++++++++++++++++++-->
        
        <!-- Core Frameworks -->
        <link rel="stylesheet" href="assets/bootstrap.css"> <!-- Bootstrap -->
        
        <!-- Custom CSS & fonts -->    
        <link rel="stylesheet" href="assets/device-mockups.css"><!-- Plugin CSS -->
        <link rel="stylesheet" href="assets/style0.css"/><!-- custom CSS -->
        <link rel="stylesheet" href="assets/style1.css"/><!-- custom CSS -->
        <link rel="stylesheet" href="modal.css"/><!-- custom CSS -->
        
		<link rel="stylesheet" href="text-anims.css"/><!-- custom CSS -->
		<link rel="stylesheet" href="assets/main.css">
        
        <link rel="stylesheet" href="assets/font-awesome.css">
        <link rel="stylesheet" href="assets/simple-line-icons.css">
        <link href="assets/fonts.css" rel="stylesheet">
        
        <!-- Viewport workaround -->
        <link href="assets/css/ie10-viewport-bug-workaround.css" rel="styesheet"><!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie-emulation-modes-warning.js"></script>
    </head>
        
    <body id="page-top">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
            <div class="container">                
                <a class="navbar-brand js-scroll-trigger" href="#page-top">
                    <h2 class="sesad"><em>SES-ads</em></h2>
                </a>
                
                <a style="border-color:pink" class="nav-link btn btn-outline btn-xl js-scroll-trigger" href="index.html"><img class="small-icon-white" style="object-fit: contain;" src="home.png"/></a>
                <br>
                <sub>
                    <h6 style="color:pink; text-transform:uppercase; font-size: 12px;">│ Advertise &amp; Find Trusted Products And Services</h6>
                </sub>
            </div>
        </nav>
			<!-- start banner Area -->
			<section class="banner-pic2 relative" id="home">
				<div class="overlay overlay-bg"></div>
				<!--<div class="container">-->
					<div class="row d-flex align-items-center justify-content-center">
						<!--<div class="about-content col-lg-12">-->
							<h1 style="color:#eee; filter:opacity(100);
							text-align:center">
								Send Us Your Advert
							</h1>	
						<!--</div>-->	
					</div>
				<!--</div>-->
			</section>
			<!-- End banner Area -->

			<!-- Start Collect Advert Area -->
			<section>
					<?php 

					if (isset($_POST['submit-advert-form'])) {
					    $name = $_POST['name'];
					    $email = $_POST['email'];
					    $businessName = $_POST['businessName'];
					    $writeUp = $_POST['writeUp'];
						$phoneNumber = $_POST['phoneNumber'];
						$whatsappNumber = $_POST['whatsappNumber'];
						$igAccount = $_POST['igAccount'];
						$link =$_POST['link'];
						$otherContactInfo = $_POST['otherContactInfo'];
						
					  
					            if (applyAdvert($name,$email,$businessName,$writeUp,$phoneNumber,$whatsappNumber,$igAccount,$link,$otherContactInfo)) { ?>
					                 <div class ="alert alert-success alert-dismissible"><h5>Alert Message!! </h5> 
					                   	<button type = "button" class="close" data-dismiss = "alert">x</button>
										<h7>  Advert Details Submitted Successfully </h7>
										<h3>  <a href="index.html">Tap here</a> to go back </h3>
					                </div>
					                
					          <?php  } else { ?>
					                <div class ="alert alert-danger alert-dismissible"><h5>Alert Message!! </h5> 
					                   	<button type = "button" class="close" data-dismiss = "alert">x</button>
					                	<h7>  Advert Details Failed To Submit </h7>
					                </div>
					           <?php }
					} ?> 

				<h3 class="mb-30 my-auto" style="text-align:center; color:#222">Advert Details</h3>
				<div class="container">
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-8 col-md-12 home-about-left">
							<form action="<?php echo $currentfile?>" method="post">
								<div class="mt-10">
									<input required type="text" name="name" placeholder="Enter Your Fullname Here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Fullame Here'" class="single-input single-input-primary">
								</div>
								<div class="mt-10">
									<input required type="text" name="businessName" placeholder="Company Or Business Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Company Or Business Name'" class="single-input single-input-primary">
								</div>
								<div class="input-group-icon mt-10 form-group">
									<textarea required class="common-textarea form-control" name="writeUp"  placeholder="Put a short write-up to summarize your selling point here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Put a short write-up to summarize your selling point here'"></textarea>
								</div>
								<div class="mt-10">
									<input required type="text" name="email" placeholder="Enter Your E-mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your E-mail'" class="single-input single-input-primary">
								</div>
								<div class="mt-10">
									<input required type="text" name="phoneNumber" placeholder="Enter Your Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Phone Number'" class="single-input single-input-primary" onkeypress="return !(event.charCode > 31 && (event.charCode < 48 || event.charCode > 57))">
								</div>
								<div class="mt-10">
									<input type="text" name="whatsappNumber" placeholder="WhatsApp Number (optional)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'WhatsApp Number (optional)'" class="single-input single-input-primary" onkeypress="return !(event.charCode > 31 && (event.charCode < 48 || event.charCode > 57))">
								</div>
								<div class="mt-10">
									<input type="text" name="igAccount" placeholder="Instagram Account (if any)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Instagram Account (if any)'" class="single-input single-input-primary">
								</div>
								<div class="mt-10">
									<input type="text" name="link" placeholder="website/link (if any)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'website/link (if any)'" class="single-input single-input-primary">
								</div>
								<div class="input-group-icon mt-10">
									<input name="otherContactInfo" placeholder="Other contact info (if any)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Other contact info(optional)'" class="common-input mb-20 form-control" type="text">
								</div>
								<div class="mt-10">
									<button class="btn btn-outline btn-xl js-scroll-trigger" style="background-color:#255; float:right" name="submit-advert-form">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>	      
			</section>
			<!-- End Advert Application Area -->		

			<!-- Start Tips Are-->
			<div>
				<p class="lead" style="text-align:justify">
					<ul>
						<p class="lead">Tips</p>
						<li> Your photos and advert should be concise and inviting at the same time</li>
						<li> Photo sizes should not be up 100kb(preferably 50kb)</li>
						<li> Photo dimensions should be moderately and equal {eg. (70x70)px}</li>
					</ul>
					<br>
					<span style="color:#255; font-size: 20px;">
						To forward your relevent info &amp; To get more info About SES-Ads
					</span>
					<p class="italize" style="color:#222">Click on an icon Below</p>
					
						<a href="https://www.instagram.com/ses_ads">
							<img class="ses-small-icon" src="instagram.svg">
						</a>
				
						<a href="tel:08175244888">
							<img class="ses-small-icon" src="phone-icon.png">
						</a>
				
						<!-- <a href="intent://send/+(234)808-348-7711#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end">SES-ad Whatsapp</a> -->
						<a href="https://api.whatsapp.com/send?phone=2348175244888">
							<img class="ses-small-icon" src="whatsapp.png">
						</a>

						<a href="mailto:philebaba47@outlook.com?subject=Hello%20from%20Sesads">
							<img class="ses-small-icon" src="microsoftoutlook.svg">
							sesadserver@gmail.com
						</a>
						<br>
					<i>Terms and Conditions Apply</i>
				</p>
			</div>
			<!-- End Tips Are-->
			
			<br/><br/>
			<div style="text-align:center">
                <a class="client-links" style="color:red" href="mailto:sesadserver@gmail.com?subject=Client%20from%20Sesads"
                    target="_blank">Report A problem
				</a>
			</div>
			<br/><br/>
			
					


				
			<!-- start footer Area -->		
			<footer>
                <div class="container">
                    &copy; Copyright SES-Ads <script>document.write(new Date().getFullYear());</script>. All Rights Reserved.

                    <ul class="list-inline">
                        <li class="">
                            <a href="#">Legal Stuff</a>
                        </li>
                    </ul>
                </div>
            </footer>

        <!-- Bootstrap JavaScript -->
        <script src="assets/jquery.js"></script>
        <script src="assets/bootstrap.js"></script>

        <!-- Plugin JavaScript -->
        <script src="assets/plugin.js"></script>

        <!-- Custom JavaScript -->
        <script type="text/javascript" src="swipe.js"></script>
        <script type="text/javascript" src="assets/custom.js"></script>
        <script type="text/javascript" src="text-anims.js"></script>
        <script src="fallingsnow_v6.js"></script>

        <!-- Back to top button -->
        <a id="back2Top" class="js-scroll-trigger" title="Back to top" href="#page-top">&#10148;
            <!-- <img  width="50px" height="50px" src="go-up.png" alt="Go To Top" title="Go To Top"/> -->
        </a>
		</body>
	</html>



