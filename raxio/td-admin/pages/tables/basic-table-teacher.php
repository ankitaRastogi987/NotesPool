<?php include 'sql_connection.php';?>
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
              <h3 class="page-title"> Basic Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            
              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Teacher Table</h4>
                    <p class="card-description">Teacher details
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> User </th>
                          <th> Name </th>
                          <th> College </th>
                          <th> Course </th>
                          <th> Branch </th>
                          <th> Phone </th>
                          <th> Email </th>
                          <th> Status </th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php
                          $sql="SELECT * from signup WHERE role='teacher'";
                          $result=mysqli_query($conn,$sql);
                          if(mysqli_num_rows($result)>0)
                          {
                            while ($val=mysqli_fetch_assoc($result))
                            {?>

                                <tr>
                                  <td class="py-1">
                                  
                                  <img src="../../../<?php echo $val['profilepic'];?>" alt="image" width="60" heigth="60">
                                  </td>
                                  <td><?php echo $val['name'];?></td>
                                  <td><?php echo $val['clg'];?></td>
                                  <td>
                                    <?php 
                                      $ii=$val['course'];
                                      $sql1="SELECT cou from course WHERE id=$ii";
                                      $result1=mysqli_query($conn,$sql1);
                                      if(mysqli_num_rows($result1)>0)
                                      {
                                        $val1=mysqli_fetch_array($result1);
                                        echo $val1['cou'];
                                      }  
                                    ?>
                                  </td>
                                  <td><?php echo $val['branch'];?></td>
                                  <td><?php echo $val['phone'];?></td>
                                  <td><?php echo $val['email'];?></td>

                                  <td>
                                      <a class="badge badge-danger" href="status.php?id=<?php echo $val['id']?>&role=teacher">
                                        <?php
                                          if($val['status']==0)
                                          {
                                            echo "Pending";
                                          }
                                          else
                                          {
                                            echo "Approved";
                                          }
                                        ?>
                                      </a>
                                  </td>
                                </tr>

                       <?php
                            }
                          }

                        ?>
                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
              
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          
          <!-- partial -->
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