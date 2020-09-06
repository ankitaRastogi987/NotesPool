<?php include'sql_connection.php';?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<title>NotesPool-Share notes</title>
	<!-- favicon -->
	<link rel="shortcut icon" href="img/fav.jpg" type="image/x-icon">
	<!--Google Font-->
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">
	<!--Bootstrap Stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- Animate Stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/plugins/animate.css">
	<!--Font Awesome Stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<!--Owl Carousel Stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/plugins/owl.carousel.min.css">
	<!--Slick Slider Stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/plugins/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/plugins/slick.css">
	<!--Veno Box Stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/plugins/venobox.css">
	<!--Main Stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--Responsive Stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>

<body class="body-class indexpage">
	<!--Start Preloader-->
	<div class="site-preloader">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
	<!--End Preloader-->

	<!--Start Body Wrap-->
	<div id="body-wrap">
		<div id="main-menu">
			<nav class="navbar navbar-expand-md navbar-light">
				<div class="container">
					<a class="navbar-brand" href="index.php">
						<img  src="img/nyalogo.png" alt="logo is here" height="74px" width="215px" style="margin-top: 15px;">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="index.php">Home</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="#about">About Us</a>
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

		<!-- =========== Banner Area Start end =========== -->
		<section id="banner">
			<div class="container">
				<div class="row justify-content-lg-center justify-content-xl-start">
					<div class="col-lg-8 col-xl-6 p-relative">
						<div class="header-content">
							<h1>Most Important place for Students and Teachers</h1>
							<p>Find your study resources
							and the best documents shared by your teachers and fellow students, organized in one place.</p>
							<form class="form-inline" action="search_outsider.php">
								<input name="course" class="mr-form-control" type="search" aria-label="Search" placeholder="MBA,MCA,BTECH..." required>
								<button class="mr-btn-serch" type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- =========== Banner Area end =========== -->


		<!-- =========== About Us Start ============= -->
		<section id="about">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 left-text-class">
						<h2><span>NotesPool</span> The World Top Micro Notes sharing Platfrom In This Current Time.</h2>
						
							<p>
								A platform where teachers and students are connected together 
								to share their information. Here Teacher can share Subject Notes and any kind of notification with all students in a single click.<br>
								Student will be able to get notes any time from anywhere. 
							</p>
						<a href="register.php">Join With Us</a>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6">
								<div class="box box1 wow fadeInUp" data-wow-delay=".4s">
									<div class="img">
										<img src="img/other/bag-icon.png" alt="">
										
										<h4>Why this</h4>
										<p>All of the notes you need in a single place</p>
									</div>
								</div>
								<div class="box box2 wow fadeInUp" data-wow-delay=".8s">
									<div class="img">
										<img src="img/other/bag-icon.png" alt="">
										
										<h4>Benifits</h4>
										<p>Because it allows you to share notes with others</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="box box3  wow fadeInUp" data-wow-delay=".6s">
									<div class="img">
										<img src="img/other/bag-icon.png" alt="">
										
										<h4>Uses</h4>
										<p>endless ways to use NotesPool… Use it for school, college, work and beyond.</p>
									</div>
								</div>
								<div class="box box4  wow fadeInUp" data-wow-delay="1s">
									<div class="img">
										<img src="img/other/bag-icon.png" alt="">
										
										<h4>For all</h4>
										<p>If you are not a member of org you can pay and take benifits</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- =========== About Us End ============= -->

		<!--======= Explore The Catagories Start ========== -->
		<section id="catagories">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-10 text-center">
						<h2 class="section-title">Explore The Courses</h2>
						<p class="section-text">
							Hey! You can search your subject notes according to these categories.<br>
							Best of luck!
						</p>
					</div>
				</div>
				<div class="row">
				
					<div class="col-lg-4">
						<a href="search_outsider.php?course=BTECH"><div class="c-box text-center wow fadeInUp" data-wow-delay=".4s">
							<h3>BTECH</h3>
							<span class="bar"></span>
							<p></p>
							
						</div></a>
					</div>
					<div class="col-lg-4">
						<a href="search_outsider.php?course=BCA"><div class="c-box text-center wow fadeInUp" data-wow-delay=".6s">
							<h3>BCA</h3>
							<span class="bar"></span>
							
							
						</div></a>
					</div>
					<div class="col-lg-4">
						<a href="search_outsider.php?course=BBA">
						<div class="c-box text-center wow fadeInUp" data-wow-delay=".8s">
							<h3>BBA</h3>
							<span class="bar"></span>
							
							
						</div></a>
					</div>
					<div class="col-lg-4">
						<a href="search_outsider.php?course=MTECH">
						<div class="c-box text-center wow fadeInUp" data-wow-delay="1s">
							<h3>MTECH</h3>
							<span class="bar"></span>
							
							
						</div></a>
					</div>
					<div class="col-lg-4">
						<a href="search_outsider.php?course=MCA">
						<div class="c-box text-center wow fadeInUp" data-wow-delay="1.2s">
							<h3>MCA</h3>
							<span class="bar"></span>
							
						</div></a>
					</div>
					<div class="col-lg-4">
						<a href="search_outsider.php?course=MBA">
						<div class="c-box text-center wow fadeInUp" data-wow-delay="1.4s">
							<h3>MBA</h3>
							<span class="bar"></span>
							
							
						</div></a>
					</div>
				
				</div>
			</div>
		</section>
		<!--======= Explore The Catagories End ========== -->

		<!-- ======= Whay People Like Us Area Start ========= -->

		<section id="w_like_us">
			<div class="container">
				
				<div class="row">
					<div class="col-lg-6">
						<div class="row">
							<div class="col-md-4 text-center">
								<div class="wl-box wl-box-1 wow fadeInUp" data-wow-delay=".4s">
									<h3>Use on Desktop</h3>
								</div>
							</div>
							<div class="col-md-4 text-center">
								<div class="wl-box wl-box-2 wow fadeInUp" data-wow-delay=".6s">
									<h3>Use on Laptop</h3>
								</div>
								<div class="wl-box wl-box-3 wow fadeInUp" data-wow-delay=".8s">
									<h3>Use on Tablet</h3>
								</div>
							</div>
							<div class="col-md-4 text-center">
								<div class="wl-box wl-box-4 wow fadeInUp" data-wow-delay="1s">
									<h3>Use on Mobile</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 right-text-content">
						<h2>Study anytime, anywhere, on any device</h2>
						<p>Because your planning is not always perfect, you need to be able to study whenever, wherever. Just practice your exam one last time on your tablet or phone while you're on the go.</p>
						<a href="register.php">Join us</a>
					</div>
				</div>
			</div>
		</section>


		<!-- ======= Whay People Like Us Area End ========= -->

		<section id="invite">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-6 col-lg-8 col-md-10 text-center">
						<h2>Start by inviting friends</h2>
						<p>Be Someone's helping hand</p>
						<a href="invite.php">Invite Frind</a>
					</div>
				</div>
			</div>
		</section>

		<!-- ======= Guidelines Area Start ========= -->
		<section id="guidelines">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-10 text-center">
						<h2 class="section-title">Top Contributors</h2>
						<p class="section-text">People who have uploaded the max number of notes on website</p>
					</div>
				</div>
				<div class="row">
				
				<?php
					$sql="SELECT teacher_id,count(teacher_id) FROM `notes` GROUP BY teacher_id DESC limit 3";
					$result=mysqli_query($conn,$sql);
					if($result)
					{
						while($row=mysqli_fetch_assoc($result))
						{
							$vv=$row['teacher_id'];
							$sql1="SELECT * from signup WHERE id=$vv";
							$result1=mysqli_query($conn,$sql1);
							if($result1)
							{
								while($row1=mysqli_fetch_assoc($result1))
								{
				?>
					<div class="col-lg-4 col-md-6">
						<div class="g-box g-box2 text-center">
							<div class="g-icon-wraper">
								<div class="g-icon d-flex justify-content-center wow fadeInUp" data-wow-delay=".6s">
									<img class="align-self-center" src="<?php echo $row1['profilepic'];?>" alt="" style="border-radius: 50%;width: 130px;height: 130px;">
								</div>
							</div>
							<h5><?php echo ucfirst($row1['name']);?></h5>
							<p><?php echo $row1['email'];?></p>

						</div>
					</div>
				<?php           }								
							}
							
							else
							{
								echo "Error inside";
							}

						}
					}
					else
					{
						echo "No contributor found";
					}
				?>
					<!-- <div class="col-lg-3 col-md-6">
						<div class="g-box g-box1 text-center">
							<h5>Find People</h5>
							<p>On the other hand, we denounce with righteous indignation</p>
							<div class="g-icon-wraper">
								<div class="g-icon d-flex justify-content-center wow fadeInUp" data-wow-delay=".4s">
									<img class="align-self-center" src="img/guidline/g1.png" alt="">
								</div>
							</div>
						</div>
					</div> -->

					<!-- <div class="col-lg-3 col-md-6">
						<div class="g-box g-box3 text-center">
							<h5>Find People</h5>
							<p>On the other hand, we denounce with righteous indignation</p>
							<div class="g-icon-wraper">
								<div class="g-icon d-flex justify-content-center wow fadeInUp" data-wow-delay=".8s">
									<img class="align-self-center" src="img/guidline/g3.png" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="g-box g-box4 text-center">
							<div class="g-icon-wraper">
								<div class="g-icon d-flex justify-content-center wow fadeInUp" data-wow-delay="1s">
									<img class="align-self-center" src="img/guidline/g4.png" alt="">
								</div>
							</div>
							<h5>Find People</h5>
							<p>On the other hand, we denounce with righteous indignation</p>

						</div>
					</div> -->
				</div>
			</div>
		</section>		
		<!-- ======= Guidlines Area End ========= -->

		<!-- =======  Invite Area Start ========= -->

		<!-- =======  Invite Area End ========= -->

		<!-- ======= Clint FeedBack Area Start =========== -->
		
		<!-- ======= Clint FeedBack Area End =========== -->

		<!-- ========= Our Patner Area Start ============= -->
		<section id="patner" style="display: none">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-10 text-center">
						<h2 class="section-title">Some Feedback</h2>
						<p class="section-text">On the other hand, we denounce with righteous indignation and dislike men who are so
							beguiled and demoralized</p>
					</div>
				</div>
				<div class="row justify-content-center patnet_logo">
					<div class="col-lg-2 col-md-3 col-4">
						<a href="#"><img class="img-fluid wow fadeInUp" data-wow-delay=".4s" src="img/patner/p1.png" alt=""></a>
					</div>
					<div class="col-lg-2 col-md-3 col-4">
						<a href="#"><img class="img-fluid wow fadeInUp" data-wow-delay=".5s" src="img/patner/p2.png" alt=""></a>
					</div>
					<div class="col-lg-2 col-md-3 col-4">
						<a href="#"><img class="img-fluid wow fadeInUp" data-wow-delay=".6s" src="img/patner/p3.png" alt=""></a>
					</div>
					<div class="col-lg-2 col-md-3 col-4">
						<a href="#"><img class="img-fluid wow fadeInUp" data-wow-delay=".7s" src="img/patner/p1.png" alt=""></a>
					</div>
					<div class="col-lg-2 col-md-3 col-4">
						<a href="#"><img class="img-fluid wow fadeInUp" data-wow-delay=".8s" src="img/patner/p2.png" alt=""></a>
					</div>
					<div class="col-lg-2 col-md-3 col-4">
						<a href="#"><img class="img-fluid wow fadeInUp" data-wow-delay=".9s" src="img/patner/p3.png" alt=""></a>
					</div>
					<div class="col-lg-2 col-md-3 col-4">
						<a href="#"><img class="img-fluid wow fadeInUp" data-wow-delay="1s" src="img/patner/p1.png" alt=""></a>
					</div>
					<div class="col-lg-2 col-md-3 col-4">
						<a href="#"><img class="img-fluid wow fadeInUp" data-wow-delay="1.1s" src="img/patner/p2.png" alt=""></a>
					</div>
					<div class="col-lg-2 col-md-3 col-4">
						<a href="#"><img class="img-fluid wow fadeInUp" data-wow-delay="1.2s" src="img/patner/p3.png" alt=""></a>
					</div>
				</div>
			</div>
		</section>
		<!-- ========= Our Patner Area End ============= -->


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
