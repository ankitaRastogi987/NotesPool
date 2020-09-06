<?php include'sql_connection.php';?>
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
	<!--Owl Carousel Stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/plugins/owl.carousel.min.css">
	<!--Slick Slider Stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/plugins/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/plugins/slick.css">
	<!--Font Awesome Stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<!--Animate Stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/plugins/animate.css">
	<!--Main Stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/catagori.css">
	<!-- Responsive Stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>

<body class="body-class catagoris">
	<!--Start Preloader-->
	<!-- <div class="site-preloader">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div> -->
	<!--End Preloader-->

	<!--Start Body Wrap-->
	<div id="body-wrap">
		<div id="main-menu">
<nav class="navbar navbar-expand-md navbar-light">
				<div class="container">
					<a class="navbar-brand" href="index.php">
						<img src="img/nyalogo.png" alt="logo is here" height="74px" width="215px" style="margin-top: 15px;">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="index.php">Home</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="index.php#about">About Us</a>
							</li>
							
							<li class="nav-item">
								<a class="nav-link" href="contact.php">Contact Us</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="login.php" title="Login Here">Sign in</a>
							</li>
						</ul>
						<a class="mamunur_rashid_top_book_btn" href="register.php" title="Register Here">Join Now</a>
					</div>
				</div>
			</nav>
		</div>

		<!-- =========== nav end =========== -->

		<!-- =========== mybreadcrumb Area Start =========== -->
		<section id="mybreadcrumb" style="height: 385px;">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="title_area" style="padding-top: 175px;">
							<h1>All Notes</h1>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when
								looking.</p>
						</div>
					</div>
				</div>
					
			</div>
		</section>
		<!-- =========== mybreadcrumb  Area end =========== -->

		<!-- ========== catagoris body content area start ========== -->
		<section id="catagoribody" style="padding-top: 50px;">
			<div class="container">
				<div class="row">
					
									
					<div class="col-lg-12 order-first order-lg-last">
						<div class="row mamunurrashid_gig_wraper" style="margin-top: 0px;">
							<?php
								
								if(isset($_GET['course']))
								{
									$t=$_GET['course'];
									$sqld="SELECT * from notes WHERE cat='$t'";
								}
								
								
								$result=mysqli_query($conn,$sqld);

								// print_r(mysqli_fetch_assoc($result));
								// echo $sqld;
								
								if(mysqli_num_rows($result)>0)
								{
								
									while($val=mysqli_fetch_assoc($result))
									{?>
							<div class="col-md-4">
								<div class="mr_card">
									<div class="mr_img" >
										<!-- <img class="w-100" src="img/catagories/gigs/g2.jpg" alt=""> -->
										
										<!-- <img src="pdf_icon4.png" width="200px" height="220px" style="padding-left: 68px;width: 273px;">	 -->						
									<img src="ank.png" width="100%" height="100%" >	
									</div>
									<div class="mr_card_body">
										<div class="price">
											<div class="p-box d-flex justify-content-between">
												<a href="">
													<p>
														<?php 
															$teacher_id=$val['teacher_id'];
															$sql1="SELECT name from signup WHERE id=$teacher_id";
															$result1=mysqli_query($conn,$sql1);
															if($result1)
															{
																$row=mysqli_fetch_assoc($result1);
																echo $row['name'];
															}
															else
															{
																echo "<script>alert('no notes found');</script>";
																echo "Error";
															}
														?>	
													</p>
												</a>
												<span><?php echo $val['cat'];?></span>
											</div>
										</div>
										<div class="title d-flex justify-content-between" style="padding-left: 30px;">
										
											<a class="p" ><?php echo $val['title'];?></a>
										</div>	
									</div>
								</div>
							</div>										
										

							   <?php
									}
								}
								else
								{

									// echo "<script>alert('no notes found');</script>";
									echo "NO NOTES FOUND";
								}
							?>							
						</div>
						
					</div>
				</div>
			</div>
		</section>

		<!-- ========== catagoris body content area end ========== -->

		<!-- ========= Footer Section Start =========== -->
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center footer-logo" style="padding-bottom: 38px;">
						<img src="img/bandw-removebg-preview.png" height="94%" width="251px" alt=""><br>
						<!-- <span class="f-bar"></span> -->
					</div>
				</div>
				<div class="row f-links">
					<div class="col-lg-3 col-6">
						<h3>Quick Info</h3>
						<ul>
							<li>
								<a href="tel:+910000000000">+91 0000000000</a>
							</li>
							<li>
								<a href="mailto:ankitarastogi987@gmail.com">ankitarastogi987@gmail.com</a>
							</li>
							
							<li>
								<p>
									Meerut , Utter Predesh
								</p>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-6">
						<h3>About Us</h3>
						<ul>
							<li>
								<a href="#">Who we are</a>
							</li>
							<li>
								<a href="#">Advantages</a>
							</li>
							<li>
								<a href="#">how it works</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-6">
						<h3 class="f-40">Supports</h3>
						<ul>
							<li>
								<a href="#">F.A.Q.</a>
							</li>
							
						</ul>
					</div>
					<div class="col-lg-3 col-6">
						<h3 class="f-40">Social Activity</h3>
						<ul>
							<li>
								<a href="#">Facebook</a>
							</li>
							<li>
								<a href="#">Twitter</a>
							</li>
							<li>
								<a href="#">Linkedin</a>
							</li>
							<li>
								<a href="#">Youtube</a>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<div id="copyright">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<p>2020 | All Right Reserved By<span>NotesPool</span></p>
					</div>
				</div>
			</div>
		</div>
		<!-- ========= Footer Section Start =========== -->



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
	<!--Wow JS-->
	<script src="js/plugins/wow.min.js"></script>
	<!--Owl Carousel JS-->
	<script src="js/plugins/owl.carousel.min.js"></script>
	<!--Venobox JS-->
	<script src="js/plugins/venobox.min.js"></script>
	<!--Slick Slider JS-->
	<script src="js/plugins/slick.min.js"></script>
	<!--Main-->
	<script src="js/custom.js"></script>

</body>

</html>