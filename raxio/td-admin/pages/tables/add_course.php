<?php include 'sql_connection.php';?>
<?php
  if(isset($_POST['btn_add']))
  {
    $new_course=$_POST['new_course'];
    $new_course_parent=$_POST['new_course_parent'];
    $sql="INSERT into course (cou,parent) values('$new_course',$new_course_parent)";
    $result=mysqli_query($conn,$sql);
    // echo "<script>alert('working');</script>";
    if($result)
    {
      echo "<script>alert('Successsful');</script>";
    }
    else
    {
      echo "<script>alert('Error');</script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="../../index.html"><img src="../../assets/images/nyalogo.png" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="../../assets/images/faces/face1.jpg" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">Admin</p>
                </div>
              </a>
              
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="../../assets/images/faces/face1.jpg" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Admin</span>
                  <span class="text-secondary text-small">Admin</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../index.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">View Data</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">                  
                  <li class="nav-item"> <a class="nav-link" href="../../pages/tables/basic-table-student.php">Student Data</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/tables/basic-table-teacher.php">Teacher Data</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/tables/basic-table-notes.php">Notes Details</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/tables/add_course.php">
                <span class="menu-title">Add course</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
           
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Add Courses </h3>
              
            </div>
                             
              <div class="col-12 grid-margin stretch-card">
             <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Course</h4>
                    <form class="forms-sample" method="POST">
                      <div class="form-group">
                        <label for="exampleInputName1">Course*</label>
                        <input type="text" name="new_course" class="form-control" id="exampleInputName1" placeholder="Course" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Parent</label>
                        <input type="text" name="new_course_parent" class="form-control" id="exampleInputName1" placeholder="Add Parent">
                      </div>
                      
                      <button type="submit" class="btn btn-gradient-primary mr-2" name="btn_add">Add</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

                            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Student Table</h4>
                    <p class="card-description"> Student Data
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <tr>
                          <th>S.No.</th>
                          <th> Course</th>
                          <th> Parent </th>
                          <th> Status </th>
                        </tr>
                        </tr>
                      </thead>
                      <tbody>
                          
                            <?php 
                              $sql="SELECT * from course";
                              $result=mysqli_query($conn,$sql);
                              if($result)
                              {
                                while($row=mysqli_fetch_assoc($result))
                                {
                                ?>
                                <tr>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['cou'];?></td>
                                <td><?php echo $row['parent'];?></td>
                                <td><?php echo $row['status_course'];?></td>
                                </tr>
                                <?php
                                }
                              }
                              else
                              {
                                echo "Error";
                              }
                            ?>
                          
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <!-- <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer> -->
              </div>
            </div>
          </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>