<?php session_start();
	
	if(isset($_SESSION['email']))
	{
		header("location:dashbord.php");
	}

	if(isset($_POST['btn_login']))
	{
		include 'sql_connection.php';

		$email=$_POST['email'];
		$password=$_POST['password'];
		$role=$_POST['role'];

		$sql="SELECT * from signup WHERE email='$email' and password='$password' and role='$role'";
		$result=mysqli_query($conn,$sql);
		$val=mysqli_fetch_assoc($result);

		if(count($val)>0)
		{
			if($val['status']==0)
			{
				$alert_invalid="Your profile is pending";

			}
			else
			{
				$_SESSION['email']= $_POST["email"];
				$_SESSION['password']= $_POST["password"];
				$_SESSION['role']= $_POST["role"];
				$_SESSION['name']= $val['name'];
				$_SESSION['profilepic']=$val['profilepic'];
				$_SESSION['clg']=$val['clg'];
				$_SESSION['date_time']=$val['date_time'];
				$_SESSION['id']= $val["id"];
				$_SESSION['course']=$val['course'];

				if($_SESSION['role']=='teacher')
				{
					header("location:dashbord.php");
				}
				else
				{
					header("location:dashbord_student.php");
				}

			}
		}
		else
		{
			$alert_invalid="Invalid username or password";
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
	<title>NotesPool-Login</title>
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


</head>

<body class="body-class reglog">
	<div class="overlay"></div>
	<!--Start Body Wrap-->
	<div id="body-wrap">

		<!-- ============ Register area start =============== -->

		<section id="register">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center r-logo">
						<!-- <h1 style="color: white">Login Here</h1> -->
						<img src="img/nyalogo.png" alt="logo is here" height="74px" width="215px" style="margin-top: -50px;margin-bottom: -30px;">
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="reg-box">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="student-tab" data-toggle="tab" href="#student" role="tab" aria-controls="student"
									 aria-selected="true">
										As a student
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="teacher-tab" data-toggle="tab" href="#teacher" role="tab" aria-controls="teacher"
									 aria-selected="false">
										As a teacher
									</a>
								</li>
							</ul>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="student" role="tabpanel" aria-labelledby="student-tab">
									<form method="POST">
										<div class="row">
											<div class="col">
												<input type="email" name="email" class="mamunur_rashid_form" placeholder="Your Email..." required>
											</div>
										</div>
										<div class="row">
											<div class="col">
												<input type="hidden" name="role" value="student">
												<input type="password" name="password" class="mamunur_rashid_form" placeholder="Password..." required>
											</div>
										</div>
										<div class="row">
											<div class="col">
												<button type="submit" name="btn_login" class="mr_button">Log In</button>
												<span style="color: red;"><?php if(isset($alert_invalid)){echo $alert_invalid;}?></span>
											</div>
										</div>
									</form>
									<div class="row">
										<div class="col d-flex justify-content-between  mr-d-block">
											<div class="left">
												<p>Not A Member Yet ? <a href="register.php">Register Now</a></p>
											</div>
											<div class="right">
												<a href="#">Forget Password ?</a>
											</div>
										</div>
									</div>
									<div class="row fb_tw">
										<div class="col-sm-6">
											<a href="#" class="mr_button mr_button2">Register With Facebook</a>
										</div>
										<div class="col-sm-6">
											<a href="#" class="mr_button mr_button3">Register With Facebook</a>
										</div>
									</div>

								</div>
								<div class="tab-pane fade" id="teacher" role="tabpanel" aria-labelledby="teacher-tab">
									<form method="POST">
										<div class="row">
											<div class="col">
												<input type="email" name="email" class="mamunur_rashid_form" placeholder="Your Email..." required>
											</div>
										</div>
										<div class="row">
											<div class="col">
												<input type="hidden" name="role" value="teacher">
												<input type="password" name="password" class="mamunur_rashid_form" placeholder="Password..." required>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<button type="submit" name="btn_login" class="mr_button">Login</button>
											</div>
											<span style="color: red;"><?php if(isset($alert_invalid)){echo $alert_invalid;}?></span>
										</div>
									</form>
									<div class="row">
										<div class="col d-flex justify-content-between mr-d-block">
											<div class="left">
												<p>Not A Member Yet ? <a href="register.php">Register Now</a></p>
											</div>
											<div class="right">
												<a href="#">Forget Password ?</a>
											</div>
										</div>
									</div>
									<div class="row fb_tw">
										<div class="col-sm-6">
											<a href="#" class="mr_button mr_button2">Register With Facebook</a>
										</div>
										<div class="col-sm-6">
											<a href="#" class="mr_button mr_button3">Register With Facebook</a>
										</div>
									</div>

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