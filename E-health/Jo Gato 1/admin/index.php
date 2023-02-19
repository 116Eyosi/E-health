<?php
session_start();
if(isset( $_SESSION['username'])){
include('includess/header.php');
include('includess/navbar.php');

?>


















        

        

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">


                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="DoctorsList.php">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Registered Doctors</div></a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">


                                            <?php
                                            require('dbconfig.php');

                                            $query = "SELECT D_id FROM doctor ORDER BY D_id";  
                                            $query_run = mysqli_query($connection, $query);
                                            $row = mysqli_num_rows($query_run);
                                            echo '<h4> Total Doctors: '.$row.'</h4>';
                                            $row = mysqli_num_rows($query_run);
                                            echo '<h1> '.$row.'</h1>';
                                            ?>






                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <a href=""><i class="fas fa-user-md fa-2x text-gray-300"></i></a>
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
                                        <a href="patientList.php">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Patient 
                                            </div>
</a>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                        
                                                        <?php

                                                        require('dbconfig.php');
                                                        $query = "SELECT P_id FROM patient ORDER BY P_id";  
                                                        $query_run = mysqli_query($connection, $query);
                                                        $row = mysqli_num_rows($query_run);
                                                        echo '<h4> Total patient: '.$row.'</h4>';
                                                        $row = mysqli_num_rows($query_run);
                                                        echo '<h1> '.$row.'</h1>';
                                                        ?>


                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <a href="allAppointmentList.php">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total Appointment</div>  </a> 
                                                
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                            require('dbconfig.php');
                                            $query = "SELECT app_id FROM app ORDER BY app_id";  
                                            $query_run = mysqli_query($connection, $query);
                                            $row = mysqli_num_rows($query_run);
                                            echo '<h4> Total Appointments: '.$row.'</h4>';
                                            $row = mysqli_num_rows($query_run);
                                            echo '<h1> '.$row.'</h1>';
                                            ?> 
                                            </div>
                                           
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                       

                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <a href="allFollow.php">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total FollowUp</div>  </a> 
                                                
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                            require('dbconfig.php');
                                            $query = "SELECT f_id FROM followup";  
                                            $query_run = mysqli_query($connection, $query);
                                            $row = mysqli_num_rows($query_run);
                                            echo '<h4> Total Followup: '.$row.'</h4>';
                                            $row = mysqli_num_rows($query_run);
                                            echo '<h1> '.$row.'</h1>';
                                            ?> 
                                            </div>
                                           
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                       

                    </div>


            

   

    

    









<?php
include('includess/footers.php');
include('includess/script.php');
}
else{
    header("Location:../index.php");
}
?>