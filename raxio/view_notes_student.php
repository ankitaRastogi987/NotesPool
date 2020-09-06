<?php session_start();?>
<?php include 'sql_connection.php';?>
<?php 
    if(!isset($_SESSION['email']) && !isset($_SESSION['password']))
	{
		header("Location:login.php");
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
	<title>NotesPool - Micro Freelancing Marketplace</title>
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
			<nav class="navbar navbar-expand-md navbar-light" style="background: rgba(0,0,0,0.05);margin-top: -15px;">
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
							
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle"  id="navbarDropdown2" role="button" data-toggle="dropdown"
								 aria-haspopup="true" aria-expanded="false">
									<div class="img d-inline-block">
										<img class="w-10" src="<?php echo $_SESSION['profilepic']?>" alt="" width="60" height='60' style="border-radius: 50%;">
									</div>
									<p  style="font-weight: 800; color: white;" class="d-inline-block"><?php echo $_SESSION['name'];?></p>
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown2">
									<a class="dropdown-item" href="logout.php">Log Out</a>
								</div>
							</li>
						</ul>
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
								
								
									$c=$_SESSION['course'];
									$sql_course="SELECT cou from course WHERE id=$c";
									$result_course=mysqli_query($conn,$sql_course);
									if($result_course)
									{
										$row_course=mysqli_fetch_assoc($result_course);
										$coucou=$row_course['cou'];
									}
									else
									{
										echo "error in course query";
									}

									$sqld="SELECT * from notes where cat='$coucou'";
									
								
								$result=mysqli_query($conn,$sqld);

								if($result)
								{
									while($val=mysqli_fetch_assoc($result))
									{?>
							<div class="col-md-4">
								<div class="mr_card">
									<div class="mr_img" >
										<!-- <img class="w-100" src="img/catagories/gigs/g2.jpg" alt=""> -->
										
										<!-- <img src="pdf_icon4.png" width="200px" height="220px" style="padding-left: 68px;width: 273px;"> -->
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
																echo "Error";
															}
														?>	
													</p>
												</a>
												<span><?php 
												$_SESSION['ank_course']=$val['cat'];
												echo $val['cat'];?></span>
											</div>
										</div>
										<div class="title d-flex justify-content-between" style="padding-left: 30px;">
											<?php $path=$val['notes_path'];?>
											<a title="click here to download" class="p" href="<?php echo $path;?>" download><?php echo $val['title'];?></a>
										</div>	
									</div>
								</div>
							</div>										
										

							   <?php
									}
								}
								else
								{
									echo "NO NOTES FOUND";
								}
							?>							
						</div>
						<div class="row paginationsarea">
							<div class="col-12 d-flex justify-content-end">
								<nav aria-label="Page navigation example">
									<ul class="pagination">
										<li class="page-item">
											<a class="page-link" href="#" aria-label="Previous">
												<span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
												<span class="sr-only">Previous</span>
											</a>
										</li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item">
											<a class="page-link" href="#" aria-label="Next">
												<span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
												<span class="sr-only">Next</span>
											</a>
										</li>
									</ul>
								</nav>
							</div>
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
						<p>2018 | All Right Reserved By Your Company & <span>NotesPool</span></p>
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