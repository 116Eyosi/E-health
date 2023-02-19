<?php
require('dbconfig.php');


?>


<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Admin</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="index.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Admin Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>



<!-- Nav Item - Admin Profile -->
<li class="nav-item">
    <a class="nav-link" href="../index.php">
    <i class="bi bi-house-fill"></i>
        <span>Home Page</span></a>
</li>
<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Doctors</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Doctors</h6>
                        <a class="collapse-item" href="AddDoctor.php">Add Doctor</a>
                        <a class="collapse-item" href="DoctorsList.php">Delete Doctor</a>
                    </div>
                </div>
            </li>

<!-- Nav Item - Admin Profile -->
<li class="nav-item">
    <a class="nav-link" href="allAppointmentList.php">
    <i class="fas fa-fw fa-chart-area"></i>
        <span>Appointment</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="AllFollow.php">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Follow Up</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="feedback.php">
        
        <span>Feedback</span></a>
</li>
<!-- Nav Item - Admin Profile -->
<li class="nav-item">
                
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="Login.php">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>



<!-- Divider -->
<hr class="sidebar-divider">



<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

<!-- Sidebar Message -->


</ul>
<!-- End of Sidebar -->










<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        

        <!-- Topbar Search -->
        

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
           

           
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                       
                    <?php 
                    if(isset($_SESSION['username'])){echo $_SESSION['username'];}
                    ?>

                    </span>
                    <i class="fas fa-user fa-fw"></i>
                </a>
            
            <!-- Dropdown - User Information -->

                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                  
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="Logout.php" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->

















<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

  


  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="Logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>