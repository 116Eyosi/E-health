<?php
session_start();
if(isset($_SESSION['ID'])){
include('included/header.php');

?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Patient</h1>
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

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Doctors</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">

                                            <?php
                                            require('db.php');

                                            $query = "SELECT D_id  FROM doctor ORDER BY D_id ";  
                                            $query_run = mysqli_query($connection, $query);
                                            $row = mysqli_num_rows($query_run);
                                            echo '<h4> Total Doctors: '.$row.'</h4>';
                                            $row = mysqli_num_rows($query_run);
                                            echo '<h1> '.$row.'</h1>';
                                            ?>




                                            </div>
                                        </div>
                                        <div class="col-auto">
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                        <!-- Pending Requests Card Example -->
                       
                        








                    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
     
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text"></p>
        <a href="Doctorlist.php" class="btn btn-primary">Make Appointment</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
     
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text"></p>
        <a href="Followup.php" class="btn btn-primary">Follow Up</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text"></p>
        <a href="HistoryList.php" class="btn btn-primary">Previous Appointment</a>
      </div>
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text"></p>
        <a href="FollowupHist.php" class="btn btn-primary">Previous Followup</a>
      </div>
    </div>
  </div>
</div>
</div>
















                
                <?php
      
                include('included/footer.php');





}
else{
 header("Location:../index.php");
}
?>