<?php
session_start();
if(isset( $_SESSION['D'])){
include('includes/header.php');
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Doctor</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        








                        <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 " >
                                                My Profile</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <a href="Profile.php"><i class="bi bi-people-fill fa-2x text-gray-300"></i></a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            <a href="patientList.php">  Total Patient</a>
                                        </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                            require('db.php');

                                            $query = "SELECT P_id  FROM patient ORDER BY P_id ";  
                                            $query_run = mysqli_query($connection, $query);
                                            $row = mysqli_num_rows($query_run);
                                            echo '<h4> Total Patient: '.$row.'</h4>';
                                            $row = mysqli_num_rows($query_run);
                                            echo '<h1> '.$row.'</h1>';
                                            ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <a href="Profile.php"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="Appointmentlist.php">Total Appointment
</a>  </div>
                                            <div class="row no-gutters align-items-center">
                                            <?php
                                            require('db.php');
                                            $q=$_SESSION['D'];
                                            $query = "SELECT app_id FROM app WHERE D_id=$q";  
                                            $query_run = mysqli_query($connection, $query);
                                          
                                            $row = mysqli_num_rows($query_run);
                                            echo '<h4> Total Appointment: '.$row.'</h4>';
                                            $row = mysqli_num_rows($query_run);
                                            echo '<h1> '.$row.'</h1>';
                                            ?>
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <a href="Profile.php"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text"></p>
        <a href="Appointmentlist.php" class="btn btn-primary">Appointment List</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text"></p>
        <a href="DoctorFollowup.php" class="btn btn-primary">Follow Up</a>
      </div>
    </div>
  </div>
</div>






                
                <?php
                include('includes/footer.php');
}
else{
    header("Location:../index.php");
}
                ?>