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
 	$_SESSION['uploed_status']=0;
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
		$type=$_POST['type'];
		$teacher_id=$_SESSION['id'];


 		$sql="INSERT into notes (notes_path,title,detail,cat,type,teacher_id) values ('$folder','$title','$detail','$cat','$type',$teacher_id)";
 		$result=mysqli_query($conn,$sql);

 		if($result)
 		{
 			$_SESSION['uploed_status']=1;
 		}
 		else
 		{
 			$_SESSION['uploed_status']=2;
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
	<title>NotesPool-Teacher Dashboard</title>
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
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
	
	<link rel="stylesheet" type="text/css" href="css/logReg.css">
	

	<link rel="stylesheet" href="td-admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="td-admin/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="td-admin/assets/css/style.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

<!-- ******************************************************************************************************     -->
		<script src="selectize.js-master/selectize.js-master/dist/js/standalone/selectize.js"></script>
		<script src="selectize.js-master/selectize.js-master/examples/js/index.js"></script>

		<script src="../dist/js/standalone/selectize.js"></script>
		<script src="text/examples/js/index.js"></script>
			
			<script src="js/index.js"></script>
		<style type="text/css">
			.form-control
			{
				font-size: 20px;
			}
		</style>
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
								<a class="nav-link" href="dashbord.php"  style="font-weight: 800;color: white;">Dashboard</a>
							</li>
							<li class="nav-item">
								<a  style="font-weight: 800;color: white;" class="nav-link" href="invite_in.php">Refere a student</a>
							</li>
							<li class="nav-item">
								<a  style="font-weight: 800;color: white;" class="nav-link" href="index.php#about">About Us</a>
							</li>
							
							<li class="nav-item">
								<a  style="font-weight: 800;color: white;" class="nav-link" href="contact_in.php">Contact Us</a>
							</li>
							
								
			<li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown" style="font-weight: 800;color: white;font-size: 26px;" class="nav-link">
                 <i class="fa fa-bell-o" aria-hidden="true"></i><span
								style="background-color: red;
								position: inherit;
								border-radius: 50%;
							    background-color: red;
							    top: -12px;
							    right: 9px;
							    padding-bottom: 2px;
							    padding-left: 5px;
							    padding-right: 6px;
							    font-size: 23px;
								" id="noti_count">4</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Approved</h6>
                    <p class="text-gray ellipsis mb-0">Yours notes <b>Title</b> Approved by the admin.</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                
                <h6 class="p-3 mb-0 text-center">See all notifications</h6>
              </div>
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
							<h2 style="font-size: 48px;color: #fff;">DashBoard</h2>
							<p>Welcome to Dashboard.</p>
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
										<a class="nav-link" href="view_notes.php">View All Notes</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="uploded_notes.php">Uploded Notes</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="invite_in.php">Refer A Student</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="classroom.php">ClassRoom</a>
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

						<div class="aside_box" style="box-shadow: 0px 0px 15px rgb(13, 115, 230)";>
													<div class="row earning_chart">
							<div class="col-md-6 col-xl-6">
								<div class="box">
									<h5>Notes Uploaded</h5>
									<h4>
										<?php echo $notes_uploded;?>
									</h4>
								</div>
							</div>
							<div class="col-md-6 col-xl-6">
								<div class="box">
									<h5>Students added</h5>
									<h4>767 </h4>
								</div>
							</div>
						</div>
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
					<div class="col-lg-8" >
	

						<div class="row earning_chart">
							<div class="col-md-12 col-xl-12">
								<div class="box" style="box-shadow: 0px 0px 15px rgb(13, 115, 230);padding-bottom: 3px;">
									<div class="col-12 grid-margin stretch-card">
						                <div class="card">
						                  <div class="card-body">
						                    <h3 class="">Post Notes Here</h3><br>
<!-- ********************************************************************* -->
										<?php 
											if($_SESSION['uploed_status']==1)
											{
										?>
						                    <div class="col-md-8 alert alert-success">
											  <strong>Success! </strong>Notes uploded Successfully.
											</div>
										<?php
											}
											else if($_SESSION['uploed_status']==2)
											{
										?>
<!-- ********************************************************************* -->
											<div class="col-md-8 alert alert-danger">
											  <strong>Error! </strong>Something went wrong.
											</div>
										<?php
											}
										?>
						                    <form class="forms-sample" method="POST" enctype="multipart/form-data">
						                      <div class="form-group">

						                      	<label for="exampleTextarea1" class='card-title'>Title<span title="mendetory field" style="color: red;">*</label>
						                        <input name="title" type="text" class="form-control" id="exampleTextarea1" rows="4" placeholder="Write here..." required><br>

						                        <label class="card-title" >File upload<span title="mendetory field" style="color: red;">*</label>
						                        <input type="file" name="notes_pdf" class="file-upload-default" required>
						                        <div class="input-group col-xs-12">
						                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">

						                          <span class="input-group-append">
						                            <button class="file-upload-browse btn" type="button" style="background-color: rgba(13, 115, 230);color: white;">Upload</button>
						                          </span>
						                        </div>
						                      </div>
						                      <div class="row">
						                     <div class="col-md-6">
						                      <label for="exampleTextarea1" class='card-title'>Add Course<span title="mendetory field" style="color: red;">*</label>
						                      <select class="form-control" name="cat" id="exampleTextarea1" rows="4"  required>
												
												<?php
													include 'sql_connection.php';
													$sql="SELECT * from course where parent=0";
													$result=mysqli_query($conn,$sql);

													while ($val=mysqli_fetch_assoc($result)) 
													{
														$tt=$val['cou'];
														// $id=$val['id'];
														echo "<option value=".$tt.">".$tt."</option>";
													}
													?>
						                      </select>
						                        <!-- <input name="cat" type="text" class="form-control" id="exampleTextarea1" rows="4" placeholder="Add category here..." required> --><br>
						                	  </div>
						                	  <div class="col-md-6">
						                      <label for="exampleTextarea1" class='card-title'>Type<span title="mendetory field" style="color: red;">*</span></label>
						                      <select name="type" class="form-control" id="exampleTextarea1" rows="4" placeholder="Add category here..." required>
						                      	<option value="Subject_notes" selected>Subject notes</option>
						                      	<option value="Syllabus">Syllabus</option>
						                      	<option value="Question_bank">Question bank</option>
						                      	<option value="Previous_year_papers">Previous year papers</option>
						                      </select>
						                        <!-- <input name="cat" type="text" class="form-control" id="exampleTextarea1" rows="4" placeholder="Add category here..." required> --><br>
						                       </div>
						                       </div>
						                      <div class="form-group">
						                        <label for="exampleTextarea1" class='card-title'>Description</label>
						                        <textarea name="detail" class="form-control" id="exampleTextarea1" rows="4" placeholder="Write here..."></textarea>
						                      </div>
						                      <button type="submit" name="btn_post" class="btn mr-2" style="background-color: rgba(13, 115, 230);color: white;">Post</button>
						                      <button class="btn btn-light">Cancel</button>
						                 
						                    </form>
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
						<p>2018 | All Right Reserved By Your Company & <span>NotesPool</span></p>
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
            alert('The file "' + fileName +  '" has been selected.');
        }); 
		</script>

		



		<!--Start ClickToTop-->
		
		<div class="totop">
			<a href="#top"><i class="fa fa-arrow-up"></i></a>
		</div>
		<!--End ClickToTop-->
	</div>
	<!--End Body Wrap-->
	<script type="text/javascript">
		$(document).ready(function(){
		noti_chk();
		function noti_chk()
		{
			$.ajax({
				url: 'notification_chk.php',
				type: 'POST',
				success:function(responsedata){
					$("#noti_count").html("1");
				}
			});
		}			
	</script>

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