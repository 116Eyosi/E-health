<?php
session_start();
if(isset($_SESSION['ID'])){
include('included/header.php');

$s= $_SESSION['ID'];
                        $ss="select * from patient where P_id=$s";
                        $q=mysqli_query($connection,$ss);
                        $r=mysqli_fetch_assoc($q);
                         $n=$r['Fname'];
                     
                         
?>

<div class="container-fluid text-centre" style="margin-top: 7%; margin-left: 12%;">
<section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">First Name:<?php echo $n;?></div>
                    
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Last Name:<?php echo $r['Lname'];?></div>
                    
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email:<?php echo $r['email'];?></div>
                    
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Password:<?php echo $r['password'];?></div>
                  
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Contact:<?php echo $r['contact'];?></div>
                    
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Age:<?php echo $r['age'];?></div>
              
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Emergency Contact Name:<?php echo $r['Emerg_name'];?></div>
                 
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Emergency Contact Phone:<?php echo $r['Emerg_contact'];?></div>
                   
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form method="POST" action="code.php">
                    

                    <div class="row mb-3">
                      <label for="inputFirstName" class="col-md-4 col-lg-3 col-form-label">FIrst Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="Fname" type="text" class="form-control" id="inputFirstName" value="" placeholder="Enter Your First Name">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputLastName" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                      <div class="col-md-8 col-lg-9">
                      <input name="Lname" type="text" class="form-control" id="inputLastName" value="" placeholder="Enter Your Last Name">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputEmail" class="col-md-4 col-lg-3 col-form-label">Email Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="inputEmail" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputPassword" class="col-md-4 col-lg-3 col-form-label">Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="Password" class="form-control" id="inputPassword" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputContact" class="col-md-4 col-lg-3 col-form-label">Contact</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="contact" type="text" class="form-control" id="cellphone" value="" placeholder="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputAge" class="col-md-4 col-lg-3 col-form-label">Age</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="age" type="text" class="form-control" id="inputAge" value="" placeholder="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputcontactname" class="col-md-4 col-lg-3 col-form-label">Emergency Contact Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="Emerg_name" type="text" class="form-control" id="inputcontactname" value="" placeholder="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputPhone" class="col-md-4 col-lg-3 col-form-label">Emergency Contact Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="Emerg_contact" type="text" class="form-control" id="inputPhone" value="" placeholder="">
                      </div>
                    </div>
                    
                    
                </div>

                    
                    <div class="text-center">
                      <button  name="update" type="submit" class="btn btn-primary">Update Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>
    </div>
                        </div>

    <?php
                include('included/footer.php');

}
else{
  header("Location:Login.php");
}




?>