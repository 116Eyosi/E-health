<?php
session_start();
if(isset( $_SESSION['username'])){
include('includess/header.php');
include('includess/navbar.php');

?>


<section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Doctor</h5>

              <?php
        if(isset($_SESSION['success']) && $_SESSION['success'] !='')
        {
            echo '<h2>'.$_SESSION['success'].'</h2>';
            unset($_SESSION['success']);
        }
        if(isset($_SESSION['status']) && $_SESSION['status'] !='')
        {
            echo '<h2>'.$_SESSION['status'].'</h2>';
            unset($_SESSION['status']);
        }
        
        
        ?>




              <!-- General Form Elements -->
              <form class="text-center" action="code.php" method="POST" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">First Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Fname" placeholder="Enter First Name Here">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Last Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Lname" placeholder="Enter  Last Name Here">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" placeholder="Enter  Email Address Here">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" placeholder="Enter Password Here">
                  </div>
                </div>
                
                
                
                <div class="row mb-3">
                  <label for="formFile" class="col-sm-2 col-form-label">Chose Picture</label>
                  
                  <div class="col-sm-10">
                  <input class="form-control" type="file" name="image" id="formFile">

                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Speciality</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Speciality" placeholder="Enter  Speciality Here">
                  </div>
                </div>
              
  
                <div class="row mb-3">
                  <label for="inputphone" class="col-sm-2 col-form-label">Contact</label>
                  <div class="col-sm-10">
                    <input type="phone" class="form-control" name="contact"  placeholder="Enter  Phone Number Here">
                  </div>
                </div>
                    <button type="submit" class="btn btn-primary" name="Rdoctor">Add Doctor</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>


</section>
































<?php
include('includess/footers.php');
include('includess/script.php');
}
else{
    header("Location:../index.php");
}
?>