<?php  include 'sql_connection.php';

		if(isset($_POST['btn_signup']))
		{
			$name=$_POST['name'];
			$clg=$_POST['clg'];
			$course=$_POST['co'];
			$phone=$_POST['phone'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$role=$_POST['role'];

			if(empty($name))
			{
				$alert_name="please enter name";
			}
			else if(empty($clg))
			{
				$alert_clg="please enter college name";
			}
			else if(empty($course))
			{
				$alert_course ="please enter course name";
			}
			else if(empty($phone))
			{
				$alert_phone="please enter phone";
			}
			else if(strlen($phone)!=10)
			{
				 $alert_phone="enter a valid length number<br>";
			}
			else if(empty($email))
			{
				$alert_email="please enter email";
			}
			else if(empty($password))
			{
				$alert_password="please enter password";
			}
			else if(preg_match('/[^a-zA-Z\s]/', $name))
			{
				$alert_number="enter a valid name<br>";
			}
			else if(preg_match('/[^a-zA-Z\s]/', $clg))
			{
				$alert_clg="enter a valid college name<br>";
			}
			else if(preg_match('/[^0-9]/', $phone))
			{
				$alert_phone="enter a valid phone number<br>";
			}
			else
			{
				
				$sql1="SELECT * from signup WHERE phone='$phone'";
				$result1=mysqli_query($conn,$sql1);
				if( mysqli_num_rows($result1)>0)
				{
					$alert_phone= "Duplicate phone is not allowed";
				}
				
				else 
				{
					
					$sql2="SELECT * from signup WHERE email='$email'";
					$result2=mysqli_query($conn,$sql2);
					if( mysqli_num_rows($result2)>0)
					{
						$alert_email="Duplicate email is not allowed";
					}	
						
					else
					{
						
						$filename=$_FILES["profilepic"]["name"];
					    $tempname=$_FILES["profilepic"]["tmp_name"];
						$folder="profile/".$filename;
						// echo "about pic".$folder;
						move_uploaded_file($tempname, $folder);
						$profilepic=$folder;
						$branch=$_POST['branch'];

						$sql="INSERT into signup (name,clg,course,branch,profilepic,phone,email,password,role) values('$name','$clg','$course','$branch','$profilepic','$phone','$email','$password','$role')";
						$result=mysqli_query($conn,$sql);
						$last_id=mysqli_insert_id($conn);
						if($result)
						{
							echo"<script>alert('You are registered');</script>";
							$sql_d="SELECT quiz_id from quiz_details";
							// echo $sql_d;
							$result_d=mysqli_query($conn,$sql_d);
							if(!$result_d)
							{
								// echo "error: ".mysqli_error($conn);
							}
							else
							{
								while($val_d=mysqli_fetch_assoc($result_d)) 
								{
									$qid=$val_d['quiz_id'];
									$sql_n="INSERT into quiz_result (quiz_id,id,status,score,total_score) values($qid,$last_id,0,0,0)";
									echo $sql_n;
									$result_n=mysqli_query($conn,$sql_n);
									if($result_n)
									{
										// echo "done";
									}
									else
									{
										// echo "<script>alert('error aa gyi re baba')</script>".mysqli_error($conn);

									}
								}	
							}
							
						}
						else
						{
							// echo "error in insertion";
						}
					}
				}				
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
	<title>Sign Up</title>
	<!-- favicon -->
	<link rel="shortcut icon" href="img/fav.jpg" type="image/x-icon">
	<!--Google Font-->
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">
	<!--Bootstrap Stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!--Font Awesome Stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<!--Main Stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/logReg.css">
	<!-- responsive Stylesheet -->
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
						
						<img src="img/nyalogo.png" alt="logo is here" height="74px" width="215px" style="margin-top: -50px;margin-bottom: -30px;">
						<!-- <h1 style="color: white">Register Here</h1> -->
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="reg-box">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="student-tab" data-toggle="tab" href="#student" role="tab" aria-controls="worker"
									 aria-selected="true">
										As a Student
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="teacher-tab" data-toggle="tab" href="#teacher" role="tab" aria-controls="buyer"
									 aria-selected="false">
										As a Teacher
									</a>
								</li>
							</ul>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="student" role="tabpanel" aria-labelledby="student-tab">
									<form method="POST" enctype="multipart/form-data">
										<div class="row">
											<div class="col">
												<span style="color: red;"><?php if(isset($alert_name)){echo $alert_name;}?></span>
												<input type="text" name="name" class="mamunur_rashid_form" placeholder="Your Full Name..." required>
											</div>
										</div>

										<div class="row">
								
											<div class="col">
												<span style="color: red;"><?php if(isset($alert_clg)){echo $alert_clg;}?></span>
												<input type="text" name="clg" class="mamunur_rashid_form" placeholder="Your College Name..." required>
											</div>
										</div>

										<div class="row">

											<div class="col-md-6">
												<select name="co" class="mamunur_rashid_form" onchange="getCourse(this.value)" id="sel-sub">
													<?php
													include 'sql_connection.php';
													$sql="SELECT * from course where parent=0";
													$result=mysqli_query($conn,$sql);

													while ($val=mysqli_fetch_assoc($result)) 
													{
														$tt=$val['cou'];
														$id=$val['id'];
														echo "<option value=".$id.">".$tt."</option>";
													}
													?>
									
												</select>
											</div>

											<div class="col-md-6">
												<select class="mamunur_rashid_form" id="print" name="branch" >

												</select>
											</div>
											
										</div>
										<input type="hidden" name="role" value="student">
										

										<div class="row">
											<div class="col-md-6">
												<span style="color: red;"><?php if(isset($alert_phone)){echo $alert_phone;}?></span>
												<input type="text" name="phone" class="mamunur_rashid_form" placeholder="Your Phone..." required>
											</div>

											<div class="col-md-6">
												<input type="file" name="profilepic" class="mamunur_rashid_form" placeholder="Your Profile Pic...">
											</div>
										</div>
										<div class="row">
											<div class="col">
												<span style="color: red;"><?php if(isset($alert_email)){echo $alert_email;}?></span>
												<input type="email" name="email" class="mamunur_rashid_form" placeholder="Your Email..." required>
											</div>
										</div>
										<div class="row">
											<div class="col">
												<span style="color: red;"><?php if(isset($alert_password)){echo $alert_password;}?></span>
												<input type="password" name="password" class="mamunur_rashid_form" placeholder="Password..." required>
											</div>
										</div>
										<div class="row">
											<div class="col">
												<button type="submit" name="btn_signup" class="mr_button">Register Now</button>
												
											</div>
										</div>
									</form>
									<div class="row">
										<div class="col text-center">
											<p>Already A Member ? <a href="login.php">Log In Here</a></p>
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
												<input type="text" name="name" class="mamunur_rashid_form" placeholder="Your Full Name..." required>
											</div>
										</div>

										<div class="row">
								
											<div class="col">
												<input type="text" name="clg" class="mamunur_rashid_form" placeholder="Your College Name..." required>
											</div>
										</div>

										<div class="row">

											<div class="col-md-6">
												<select name="co" class="mamunur_rashid_form" onchange="getCourse2(this.value)" id="sel-sub">
													<?php
													include 'sql_connection.php';
													$sql="SELECT * from course where parent=0";
													$result=mysqli_query($conn,$sql);

													while ($val=mysqli_fetch_assoc($result)) 
													{
														$tt=$val['cou'];
														$id=$val['id'];
														echo "<option value=".$id.">".$tt."</option>";
													}
													?>
									
												</select>
											</div>

											<div class="col-md-6" id="hi">
												<select name="branch" class="mamunur_rashid_form" id="print2" >

												</select>
											</div>
											
										</div>
										<input type="hidden" name="role" value="teacher">
										

										<div class="row">
											<div class="col-md-6">
												<input type="text" name="phone" class="mamunur_rashid_form" placeholder="Your Phone..." required>
											</div>
											
											<div class="col-md-6">
												<input type="file" name="profilepic" class="mamunur_rashid_form" placeholder="Your Profile Pic...">
											</div>
										</div>
										<div class="row">
											<div class="col">
												<input type="email" name="email" class="mamunur_rashid_form" placeholder="Your Email..." required>
											</div>
										</div>
										<div class="row">
											<div class="col">
												<input type="password" name="password" class="mamunur_rashid_form" placeholder="Password..." required>
											</div>
										</div>
										<div class="row">
											<div class="col">
												<button type="submit" name="btn_signup" class="mr_button">Register Now</button>
											</div>
										</div>
									</form>
									<div class="row">
										<div class="col text-center">
											<p>Already A Member ? <a href="login.php">Log In Here</a></p>
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
	<!--Main-->

	
	<script type="text/javascript">
		function getCourse(e){
			// alert(e);
			$.ajax({
				url: 'course_ajax.php',
				type: 'POST',
				dataType: 'html',
				data: {id: e},
			})
			.done(function(res) {
				console.log(res);
				$("#print").html(res);
			})
			.fail(function() {
				console.log("error");
			});
			
		}
	</script>
	<script type="text/javascript">
		function getCourse2(e){
			// alert(e);
			$.ajax({
				url: 'course_ajax.php',
				type: 'POST',
				dataType: 'html',
				data: {id: e},
			})
			.done(function(res) {
				console.log(res);
				$("#print2").html(res);
			})
			.fail(function() {
				console.log("error");
			});
			
		}
	</script>
	
</body>
</html>