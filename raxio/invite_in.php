
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
					<a class="navbar-brand" href="index-2.html">
						<img  src="img/nyalogo.png" alt="logo is here" height="74px" width="215px" style="margin-top: 15px;padding-top: 5px;">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-top: 21px;">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link ar-head" href="dashbord.php" style="color: white;font-size: 18px;
    font-weight: 500;
    text-transform: capitalize;
    letter-spacing: .5px;">Dashboard</a>
							</li>
						<li class="nav-item">
								<a class="nav-link" href="invite_in.php" title="Login Here"  style="color: white;font-size: 18px;
    font-weight: 500;
    text-transform: capitalize;
    letter-spacing: .5px;">Refer a student</a>
							</li>
							<li class="nav-item">
								<a class="nav-link ar-head" href="index.php#about" style="color: white;font-size: 18px;
    font-weight: 500;
    text-transform: capitalize;
    letter-spacing: .5px;">About Us</a>
							</li>
	
							<li class="nav-item">
								<a class="nav-link" href="contact_in.php"  style="color: white;font-size: 18px;
    font-weight: 500;
    text-transform: capitalize;
    letter-spacing: .5px;">Contact Us</a>
							</li>
	
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
						<a href=""><h1 style="color: white">REFER A FRIEND</h1></a>
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
									<?php 
										if(isset($_POST['invite_btn']))
										{
									       $to = $_POST['friend_email'];
									        $subject = "This is subject";
									         
									         $message = "<b>This is HTML message.</b>";
									         $message .= "<h1>This is headline.</h1>";
									         
									         $header = "From: ".$_POST['friend_email']."\r\n";
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


							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="student" role="tabpanel" aria-labelledby="student-tab">
									<form method="POST">
										<div class="row">
											<div class="col">
												<input type="text" name="friend_email" class="mamunur_rashid_form" placeholder="Enter friend's email address..." required>
												<input type="text" name="own_email" class="mamunur_rashid_form" placeholder="Enter Your email address..." required>
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