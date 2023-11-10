<?php
session_start();
if (!isset($_SESSION['email'])) {
  ?>
<script>
window.location.href = '../../index.php'
</script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <!--<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">-->
            <!--    <a class="navbar-brand brand-logo" href="../admin/RGI Admin/index.php"><img src="../../assets/images/dmc.png"-->
            <!--            alt="logo" /></a>-->
            <!--    <a class="navbar-brand brand-logo-mini" href="../admin/RGI Admin/index.php"><img src="../../assets/images/adp.png "-->
            <!--            alt="logo" /></a>-->
            <!--</div>-->
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <div class="search-field d-none d-md-block">
                    <form class="d-flex align-items-center h-100" action="#">
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <i class="input-group-text border-0 mdi mdi-magnify"></i>
                            </div>
                            <input type="text" class="form-control bg-transparent border-0"
                                placeholder="Search projects">
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <div class="nav-profile-img">
                                <img src="../../assets/images/dmc.png" class="img img-thumbnail" alt="image">
                                <span class="availability-status online"></span>
                            </div>
                            <div class="nav-profile-text">
                                <p class="mb-1 text-black">Auto Detaling Depot</p>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="pages/ui-features/logout.php">
                                <i class="mdi mdi-logout me-2 text-primary">Signout</i></a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
                            <div class="nav-profile-image">
                                <img src="../../assets/images/faces/adp.png" alt="profile">
                                <span class="login-status online"></span>
                                <!--change to offline or busy as needed-->
                            </div>
                            <div class="nav-profile-text d-flex flex-column">
                                <span class="font-weight-bold mb-2">SHIVAM</span>
                                <span class="text-secondary text-small">Director</span>
                            </div>
                            <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php">
                            <span class="menu-title">Dashboard</span>
                            <i class="mdi mdi-home menu-icon"></i>
                        </a>
                        <a class="nav-link" href="Contact Us.php">
                            <span class="menu-title">Contact Us</span>
                            <i class="mdi mdi-home menu-icon"></i>
                        </a>
                        <a class="nav-link" href="Feedback.php">
                            <span class="menu-title">Appointment</span>
                            <i class="mdi mdi-home menu-icon"></i>
                        </a>
                        <!--<a class="nav-link" href="enquiry.php">-->
                        <!--    <span class="menu-title">Enquiry</span>-->
                        <!--    <i class="mdi mdi-home menu-icon"></i>-->
                        <!--</a>-->
                    </li>
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"-->
                    <!--        aria-controls="ui-basic">-->
                    <!--        <span class="menu-title">Update Gallery</span>-->
                    <!--        <i class="menu-arrow"></i>-->
                    <!--        <i class="mdi mdi-crosshairs-gps menu-icon"></i>-->
                    <!--    </a>-->
                    <!--    <div class="collapse" id="ui-basic">-->
                    <!--        <ul class="nav flex-column sub-menu">-->
                    <!--            <li class="nav-item"> <a class="nav-link" href="gallery.php">Update</a></li>-->
                    <!--            <li class="nav-item"> <a class="nav-link" href="delete.php">Delete</a></li>-->
                    <!--        </ul>-->

                    <!--    </div>-->
                    <!--</li>-->
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header"> </div>
                    <div class="row">
                        <table class="table-responsive">
                          <thead style="border-bottom: 2px solid green;padding-bottom:5px !important; color:red;">
                            <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Subject</th>
                              <th>Message</th>
                              <th>Delete</th>
                            </tr>
                          </thead>
                          
                          <tbody>
                          <tbody>
                    <?php
                    include 'config.php';

                    $selectquery = " select * from contact_form ";

                    $query = mysqli_query( $conn,$selectquery);

                    $nums = mysqli_num_rows($query);

                    while($res = mysqli_fetch_array($query)){
                    ?>
                      <tr>
                        <td><?php echo $res['name']; ?></td>
                        <td><?php echo $res['email']; ?></td>
                        <td><?php echo $res['subject']; ?></td>
                        <td><?php echo $res['message']; ?></td>
                        <td>
                            <a href="image_delete.php?id=<?php echo $res['id'];?>" data-toggle="tooltip"
                                    data-placement="bottom" title="DELETE">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a></td>
                      </tr>
                      
                    <?php    
                        }
                    ?>
                          </tbody>
                        </table>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <footer class="footer">
                    <div class="container-fluid d-flex justify-content-between">
                        <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © Auto Detaling Depot 2023</span>
                        <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Designed and developed by <a
                                href="" target="_blank">Aman</a></span>
                    </div>
                </footer>
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
    <script src="../../assets/js/file-upload.js"></script>
    <!-- End custom js for this page -->
</body>

</html>