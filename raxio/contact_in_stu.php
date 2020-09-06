<?php 
	if(isset($_POST['invite_btn']))
	{
		$sender_name=$_POST['name'];
		$sender_email=$_POST['email'];

       $to = "ankitarastogi987@gmail.com";
        $subject = "This is subject";
         
         $message = $_POST['msg'];
        
         
         $header = "From: ".$_POST['sender_email']."\r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
     }
?>


<!DOCTYPE html>

<html lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<title>Raxio - Micro Freelancing Marketplace</title>
	<!-- favicon -->
	<link rel="shortcut icon" href="img/fav.jpg" type="image/x-icon">
	<!--Google Font-->
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">
	<!--Bootstrap Stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!--Main Stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/logReg.css">
	<!-- Responsive  Stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
<!-- ******************************************************************************** -->
	<!--Font Awesome Stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<!--Owl Carousel Stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/plugins/owl.carousel.min.css">
	<!--Slick Slider Stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/plugins/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/plugins/slick.css">
	<!--Animate Stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/plugins/animate.css">
	<!-- Veno box css Stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/plugins/venobox.css">
	<link rel="stylesheet" type="text/css" href="css/catagori.css">
	<link rel="stylesheet" type="text/css" href="css/blog.css">
	<style type="text/css">

	</style>
</head>

<body class="body-class">
			<nav class="navbar navbar-expand-md navbar-light" style="margin-top: -25px;
    margin-bottom: -91px;
    z-index: 100;
    background: rgba(0,0,0,0.05);">
				<div class="container">
					<a class="navbar-brand" href="">
						<img src="img/nyalogo.png" alt="logo is here" height="74px" width="215px" style="margin-top: 15px;">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto" >
							<li class="nav-item" >
								<a class="nav-link" href="dashbord_student.php"  style="font-weight: 800;color: white;">Dashboard</a>
							</li>
							<li class="nav-item">
								<a  style="font-weight: 800;color: white;" class="nav-link" href="invite_in_stu.php">Refere a student</a>
							</li>
							<li class="nav-item">
								<a  style="font-weight: 800;color: white;" class="nav-link" href="index.php#about">About Us</a>
							</li>
							
							<li class="nav-item">
								<a  style="font-weight: 800;color: white;" class="nav-link" href="contact_in_stu.php">Contact Us</a>
							</li>
							<!-- <li class="nav-item">
								<a class="nav-link" href="#banner">How Its Work</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#about">About Us</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownpage" role="button" data-toggle="dropdown"
								 aria-haspopup="true" aria-expanded="false">
									Pages
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdownpage">
									<a class="dropdown-item" href="profile.html">Profile</a>
									<a class="dropdown-item" href="dashbord.html">Dashbord</a>
									<a class="dropdown-item" href="graphicsDesign.html">Job Catagori</a>
									<a class="dropdown-item" href="jobDetails.html">Job Details</a>
									<a class="dropdown-item" href="offerapost.html">Post A Offer</a>
									<a class="dropdown-item" href="manageOrder.html">Manage Order</a>
									<a class="dropdown-item" href="blog.html">Blog</a>
									<a class="dropdown-item" href="blogDetails.html">Blog Details</a>
									<a class="dropdown-item" href="faq.html">FAQ</a>
									<a class="dropdown-item" href="privecy.html">Privecy</a>
									<a class="dropdown-item" href="404.html">404</a>
								</div>
							</li> -->
							
						</ul>
					</div>
				</div>
			</nav>

	
	<!--Start Body Wrap-->

	<div id="body-wrap" class="reglog">
		<div class="overlay"></div>
		<!-- ============ Register area start =============== -->
		<section id="register">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center r-logo" style="margin-top: 105px;">
						<a href=""><h1 style="color: white">Contact Us</h1></a>
						<span class="f-bar"></span>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="reg-box">
							<ul class="" id="" role="tablist">
								<li class="">
									<a class="nav-link active" id="student-tab" data-toggle="tab" href="#student" role="tab" aria-controls="student"
									 aria-selected="true">
										
									</a>
								</li>
								<li class="">
									<a class="nav-link" id="teacher-tab" data-toggle="tab" href="#teacher" role="tab" aria-controls="teacher"
									 aria-selected="false">
										
									</a>
								</li>
							</ul>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="student" role="tabpanel" aria-labelledby="student-tab">
									<form method="POST">
										<div class="row">
											<div class="col">
												<input type="text" name="name" class="mamunur_rashid_form" placeholder="Your Full Name..." required>
											</div>
										</div>
										<div class="row">
											<div class="col">
												<input type="email" name="email" class="mamunur_rashid_form" placeholder="Your Email..." required>
											</div>
										</div>
										<div class="row">
											<div class="col">
												<textarea type="text" name="msg" class="mamunur_rashid_form" placeholder="Your Write Your Message Here..." required style="height: 150px;resize: none;"></textarea>
											</div>
										</div>
										<div class="row">
											<div class="col">
												<button type="submit" name="btn_login" class="mr_button">Send</button>
												<span style="color: red;"><?php if(isset($alert_invalid)){echo $alert_invalid;}?></span>
											</div>
										</div>
									</form>
									

								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- ============ Register area start =============== -->


		<!--Start ClickToTop-->
		<div class="totop">
			<a href="#top"><i class="fa fa-arrow-up"></i></a>
		</div>
		<!--End ClickToTop-->
	</div>
	<!--End Body Wrap-->
	<!--jQuery JS-->
	<script src="js/jquery.2.1.2.min.js"></script>
	<!--Bootstrap JS-->
	<script src="js/bootstrap.min.js"></script>

</body>


</html>