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
 	$c=$_SESSION['course'];
 	$sql="SELECT quiz_title from quiz_details where quiz_course = (SELECT cou from course WHERE id=$c)";
 	$result=mysqli_query($conn,$sql);
 	if($result)
	{
		while($val=mysqli_fetch_assoc($result))
		{
			$q_title=$val['quiz_title'];
			// echo $q_title;
		}
	}
	else
	{
		echo 'error';
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
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
	<script src="js/jquery.2.1.2.min.js"></script>
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
    

<!-- ******************************************************************************************************     -->
		<script src="selectize.js-master/selectize.js-master/dist/js/standalone/selectize.js"></script>
		<script src="selectize.js-master/selectize.js-master/examples/js/index.js"></script>

		<script src="../dist/js/standalone/selectize.js"></script>
		<script src="text/examples/js/index.js"></script>
			
			<script src="js/index.js"></script>
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
  color: #fff;">Take Quiz</h2>
							<p>All the Best Learner...</p>
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
										<a class="nav-link" href="invite_in_stu.php">Quiz</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</section>
		
		
		<section id="catagoribody" style="padding-top: 50px;">
			<div class="" style="margin: 30px;">
				<div class="row">
					<div class="col-lg-2">
						<div class="mr_aside">
							<h3>Options</h3>
							<ul>								
								
						        <ul class="nav-item" style="padding-bottom: 20px;">
						              <a class="nav-link add-questions-btn" data-toggle="collapse" href="" aria-expanded="false" aria-controls="ui-basic" style="font-size: 19px;">
						                <span class="menu-title">Quiz</span>
						                
						              </a>
						        </ul>
						        <ul class="nav-item" style="padding-bottom: 20px;">
						              <a style="font-size: 19px;" class="nav-link result-btn" data-toggle="collapse" href="" aria-expanded="false" aria-controls="ui-basic">
						                <span class="menu-title">Quiz Result</span>
						               
						              </a>
						        </ul>
							</ul>
						</div>
					</div>
					
					<div class="col-lg-10" style="background-color: white;">
						<div class="create-quiz-section">
							<h2 style="padding-top: 32px;padding-bottom: 17px;">Create Quiz</h2>
							<form class="forms-sample quiz_form" name="quiz_form" method="POST" enctype="multipart/form-data">
		                      <div class="form-group">

		                      	<label for="exampleTextarea1" class='card-title'>Quiz Title<span title="mendetory field" style="color: red;">*</label>
		                        <input name="quiz_title" type="text" class=" col-lg-6 form-control quiz_title" id="exampleTextarea1" rows="4" placeholder="Write here..." required><br>

		                        <input class="quiz_maker_id" type="hidden" name="quiz_maker_id" value="<?php echo $_SESSION['id'];?>">
		                      </div>
	                     	<div class="row">
			                     <div class="col-md-6">
				                      <label for="exampleTextarea1" class='card-title'>Add Course<span title="mendetory field" style="color: red;">*</label>
				                      <select class="form-control quiz_course" name="quiz_course" id="exampleTextarea1" rows="4"  required>
										
										
				                      </select>
				                        <br>
		                	 	 </div>
	                        </div>
						    <a id="save_quiz_title" name="add_question" class="btn btn-success" style="color: white;margin-bottom: 10px;">Save Title</a>
						</div>
	                      <div class="add-questions-section">
	                      	<h2 style="padding-top: 32px;padding-bottom: 17px;">Quiz</h2>
	                      	
	                      <label for="exampleTextarea1" class='card-title'>Select Quiz<span title="mendetory field" style="color: red;">*</label>
	                      <select class="form-control quiz_id col-lg-6" name="quiz_id" id="exampleTextarea1" rows="4"  required>
							
							<?php
								// $ank_course=$SESSION['ank_course'];
								include 'sql_connection.php';
								$sql="SELECT quiz_title from quiz_details where quiz_course = (SELECT cou from course WHERE id=$c)";
								$result=mysqli_query($conn,$sql);

								while ($val=mysqli_fetch_assoc($result)) 
								{
									$tt=$val['quiz_title'];
									$quiz_id=$val['quiz_id'];
									echo "<option class='quiz_id_ar' value=".$quiz_id.">".$tt."</option>";
								}
								?>
	                      </select>
	                        <br>
	                	 <div id="display_questions"></div>
	                      <a href="dashbord_student.php"><span id="btn_post" name="btn_post" class="btn mr-2" style="background-color: rgba(13, 115, 230);color: white;" value="Done">Submit Exam</span></a>
	                  </form>

<script type="text/javascript">
	$(document).ready(function()
	{
		$('.quiz_id').change(function(event) {
			// alert('done');
			var quiz_id=$('.quiz_id_ar').val();

			var fun='show_questions';
			$.ajax({
				url: 'add_question_title.php',
				type: 'POST',
				data: {quiz_id,fun},
				success:function(data)
				{
					$('#display_questions').html(data);
					// alert("view questions successfull...");
				}

			});
		});

		// $('.quiz_id').click(function(event) {
		// 	alert('done');
		// });

		// $("#save_quiz_title").click(function(event) 
		// {
		// 	var quiz_title=$('.quiz_title').val();
		// 	var quiz_course=$('.quiz_course').val();
		// 	var quiz_maker_id=$('.quiz_maker_id').val();
		// 	var fun='save_quiz_title';
		// 	$.ajax({
		// 		url: 'add_question_title.php',
		// 		type: 'POST',
		// 		data: {quiz_title,quiz_course,quiz_maker_id,fun},
		// 		success:function(data,status)
		// 		{
		// 			alert("inserted title..");
		// 		}
		// 	});

		// });
		// $("#add_question").click(function()
		// {
		// 	var quiz_id=$('.quiz_id').val();
		// 	var question_field=$('.question_field').val();
		// 	var option1=$('.option1').val();
		// 	var option2=$('.option2').val();
		// 	var option3=$('.option3').val();
		// 	var option4=$('.option4').val();
		// 	var question_answer=$('.question_answer').val();

		// 	var fun='save_question_quiz';

		// 	$.ajax({
		// 		url: 'add_question_title.php',
		// 		type: 'POST',
		// 		data: {quiz_id,question_field,option1,option2,option3,option4,question_answer,fun},
		// 		success:function(data,status)
		// 		{
		// 			alert("inserted question...");
		// 		}
		// 	});

		// 	$('.question_field').val(" ");
		// 	$('.option1').val(" ");
		// 	$('.option2').val(" ");
		// 	$('.option3').val(" ");
		// 	$('.option4').val(" ");
			
		// 	var count_value=$('#question_count').text();
		// 	$('#question_count').text(parseInt($('#question_count').text())+1);
			
		// });	
	});
</script>

		</div>
		<div class="result-section">
			<h2 style="padding-top: 32px;padding-bottom: 17px;">Quiz Result</h2>
		</div>
				</div>
			</div>
		</div>
		</section>
		<script type="text/javascript">
			$(document).ready(function() 
			{
				$('.add-questions-section').css('display', 'block');
					$('.create-quiz-section').css('display', 'none');
					$('.result-section').css('display', 'none');

				// $('.create-quiz-btn').click(function(event) 
				// {
				// 	$('.create-quiz-section').css('display', 'block');
				// 	$('.add-questions-section').css('display', 'none');
				// 	$('.result-section').css('display', 'none');
				// });
				$('.add-questions-btn').click(function(event) 
				{
					$('.add-questions-section').css('display', 'block');
					$('.create-quiz-section').css('display', 'none');
					$('.result-section').css('display', 'none');
				});
				$('.result-btn').click(function(event) 
				{
					$('.result-section').css('display', 'block');
					$('.add-questions-section').css('display', 'none');
					$('.create-quiz-section').css('display', 'none');
				});
			});
		</script>	
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