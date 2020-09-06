<?php session_start();
    	include 'sql_connection.php';
    	include 'helper.php';
    
//working perfect
    	if(!isset($_SESSION['email']) && !isset($_SESSION['password']))
		{
			header("Location:login.php");
		}
 ?>

 <?php
 	if(isset($_POST['btn_post']))
 	{
 		$filename=$_FILES["notes_pdf"]["name"];
        $tempname=$_FILES["notes_pdf"]["tmp_name"];
        $t=str_replace(" ","",$filename);
	    $folder="notes/".time().$t;
	    move_uploaded_file($tempname, $folder);

		$title=$_POST['title'];
		$detail=$_POST['detail'];
		$cat=$_POST['cat'];
		$teacher_id=$_SESSION['id'];

 		$sql="INSERT into notes (notes_path,title,detail,cat,teacher_id) values ('$folder','$title','$detail','$cat',$teacher_id)";
 		$result=mysqli_query($conn,$sql);
 		if($result)
 		{
 			echo "successfully uploaded notes";
 			echo "<script>alert('Successfully Uploaded');</script>";
 		}
 		else
 		{
 			echo "error in uploading notes";
 			echo "<script>alert('Error in uploading notes');</script>";
 		}
 	}
 ?>
<?php
	$teacher_id=$_SESSION['id'];
	$sql="SELECT * from notes WHERE teacher_id=$teacher_id";
	$result=mysqli_query($conn,$sql);
	  if($result)
	  {
	    $notes_uploded=mysqli_num_rows($result);
	  }
	  else
	  {
	    echo "error";
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
	<title>NotesPool-Student Dashboard</title>
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
	<link rel="stylesheet" type="text/css" href="css/dashbord.css">
	<!-- Responsive  Start -->
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	
	<link rel="stylesheet" type="text/css" href="css/logReg.css">
	

	<link rel="stylesheet" href="td-admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="td-admin/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="td-admin/assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- ******************************************************************************************************     -->
		<script src="selectize.js-master/selectize.js-master/dist/js/standalone/selectize.js"></script>
		<script src="selectize.js-master/selectize.js-master/examples/js/index.js"></script>

		<script src="../dist/js/standalone/selectize.js"></script>
		<script src="text/examples/js/index.js"></script>
			
			<script src="js/index.js"></script>
</head>

<body class="body-class catagoris">
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
								<a  style="font-weight: 800;color: white;" class="nav-link" href="invite_in_stu.php">Refere a friend</a>
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
		<section id="mybreadcrumb">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="title_area">
							<h2 style="font-size: 48px;
  color: #fff;">Student DashBoard</h2>
							<p>Welcome Learner...</p>
						</div>
					</div>
				</div>
				<div class="row breadcrumb_menu">
					<div class="col-12">
						<nav class="navbar navbar-expand-lg navbar-light bg-light">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
							 aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent2">
								<ul class="navbar-nav">
									<li class="nav-item">
										<a class="nav-link" href="view_notes_student.php">View All Notes</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="">View Notifications</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="invite_in_stu.php">Refer a friend</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="student_quiz.php">Quiz</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<!-- =========== mybreadcrumb  Area end =========== -->

		<!-- ========== catagoris body content area start ========== -->
		<section id="dashbord">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="aside_box">
							<div class="title_box">
								<div class="img text-center">
									<div class="img-shape" >
										
										<img class="w-10" src="<?php echo $_SESSION['profilepic'];?>" alt="profile pic here" style="border-radius: 50%;border: 2px solid #c1c1c1;">
										<span></span>
									</div>
									<a href="#?upd=<?php echo $_SESSION['id']?>">
									 <i class="fa fa-pencil-square-o"></i></a>
								</div>
								<div class="name" style="text-transform: capitalize;">
									<h4>
										<?php echo $_SESSION['name'];?>
									</h4>
								</div>
								<div class="designation" style="text-transform: capitalize;">
									<p><?php echo $_SESSION['role'];?></p>
								</div>
								<span class="hr"></span>
								<div class="adderss">
									<ul>
										<li class="d-flex justify-content-between">
											<div class="left">From</div>
											<div class="right"><?php echo $_SESSION['clg'];?></div>
										</li>
										<li class="d-flex justify-content-between">
											<div class="left">Member Since</div>
											<div class="right">
 												<?php getuserdate($_SESSION['date_time']); ?>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-8">
						

						<div class="row earning_chart">
							<div class="col-md-12 col-xl-12">
								<div class="box">
									<div class="col-12 grid-margin stretch-card">
						                <div class="card">
						                  <div class="card-body">
						                    <h3 class="">New Notifications</h3><br>
							
								<div class="box">
									<h5><a href="notify_status.php?id=<?php echo $_SESSION['id'];?>">New Notes Uploaded</a></h5>
									<h4>
									<?php
										$today=date("Y-m-d");
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

										$sql="SELECT * from notes WHERE postupload_time like '%$today%' and cat='$coucou'";
										

										$result=mysqli_query($conn,$sql);
										if($result)
										{
											$no_of_row=mysqli_num_rows($result);
											echo $no_of_row;
												$count=1;
											while($row=mysqli_fetch_assoc($result))
											{
												 //echo $row['notes_path']."<br>";
												//echo $count;
												//echo "New ";
												?>
												<a href="view_notes_student.php"><?php //echo $row['title'];?></a>
												<?php
												//echo " Uploded";
												//echo "<br>";
												$count++;
											}

										}
										else
										{
											echo "error";
										}
									?>
									</h4>
								</div>	
												                    
						                  </div>
					                </div>
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
						<p>2020 | All Right Reserved By <span>NotesPool</span></p>
					</div>
				</div>
			</div>
		</div>


		<!-- ========= Footer Section Start =========== -->
		<script type="text/javascript">
			$(".file-upload-browse").click(function() {
				$(".file-upload-default").click();

			});
			$('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            $(".file-upload-info").val(fileName);
            // alert('The file "' + fileName +  '" has been selected.');
        }); 
		</script>

		



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