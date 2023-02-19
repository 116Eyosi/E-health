<?php
session_start();
if(isset( $_SESSION['D'])){
include('includes/header.php');

?>
<div class="container-fluid text-centre" style="margin-top: 7%; margin-left: 12%;">
<section class="section profile">

      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
         
            
            <?php
require('db.php');

$select_query="SELECT * FROM doctor";
$query=mysqli_query($connection,$select_query);
if(mysqli_num_rows($query)>0){
while($row = mysqli_fetch_assoc($query)) {
  $i=$row['img'];
 if($_SESSION['D']==$row['D_id']){
?>
<?php echo "<img src='../IU/$i'>";?>
              <img src="..." alt="" >
              <h2><?php echo $row['Fname']; ?> <?php echo $row['Lname']; ?></h2>
              <h3><?php echo $row['department']; ?></h3>
              
            </div>
          </div>

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
                  <h5 class="card-title">About Me</h5>
                 

                  <h5 class="card-title">Profile Details</h5>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">ID</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['D_id']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">First Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['Fname']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Last Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['Lname']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['email']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Date Of Birth</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['password']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Contact</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['contact']; ?></div>
                  </div>

                  

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Speciality</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['department']; ?></div>
                  </div>
                  <?php
                  }
                                    }
                                    }?>

                </div>
                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

<!-- Profile Edit Form -->
<form method="POST" action="code.php" enctype="multipart/form-data">
  

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
    <label for="inputContact" class="col-md-4 col-lg-3 col-form-label">Speciality</label>
    <div class="col-md-8 col-lg-9">
      <input name="department" type="text" class="form-control" id="cellphone" value="" placeholder="">
    </div>
  </div>

  <div class="row mb-3">
                  <label for="formFile" class="col-sm-2 col-form-label">Choose Picture</label>
                  
                  <div class="col-sm-10">
                  <input class="form-control" type="file" name="image" id="formFile">

                  </div>
                </div>
    <div class="text-center">
                      <button type="submit" name='u' class="btn btn-primary">Update Profile</button>
                    </div>
  </div>

                <?php
       


        ?>
               

                

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword" placeholder="Enter Your Current Password">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword" placeholder="Enter Your New Password">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword" placeholder="Re-Enter New Password">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

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
                include('includes/footer.php');


                                  }
                                  else{
                                    header("Location:../index.php"
                                  );
                                  }



?>