<?php
include('include/header.php');



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patient Page</title>
  <!-- Bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome css -->
    <link rel="stylesheet" href="css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    
</head>
<body style="background-image: url(wallpaperflare.com_wallpaper8.jpg);">
  












<div style="margin-top: 70px;"></div>





<div class="row" style="justify-content: center;">
						<div class="col-md-12">
							<div class="card" style="height: 100%; width: 80%;">
								<div class="card-header">
									<h4 class="card-title" style="text-align: center;">Patient Rigister Form</h4>
								</div>
								<div class="card-body">
									<form action="#">
										<h4 class="card-title">Personal Information</h4>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>First Name</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Last Name</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Blood Group</label>
													<select class="select">
														<option>Select</option>
														<option value="1">A+</option>
														<option value="2">O+</option>
														<option value="3">B+</option>
														<option value="4">AB+</option>
													</select>
												</div>
                        <br>
												<div class="form-group">
													<label class="d-block">Gender:</label>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="gender" id="gender_male" value="option1">
														<label class="form-check-label" for="gender_male">Male</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="gender" id="gender_female" value="option2">
														<label class="form-check-label" for="gender_female">Female</label>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Username</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Email</label>
													<input type="text" class="form-control">
												</div>

												<div class="form-group">
													<label>Password</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Repeat Password</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<h4 class="card-title">Postal Address</h4>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Address Line 1</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Address Line 2</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>State</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>City</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Country</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Postal Code</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>














<!--
<div class="card">
<h5 class="card-header" style="text-align: center;">Rigister Here</h5>
    <div class="card-body">
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="Name">
  <label for="floatingInput">Patient Name</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingTextarea" placeholder="Address">
  <label for="floatingTextarea">Address</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="Phone Number">
  <label for="floatingInput">Phone Number</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="City">
  <label for="floatingInput">City</label>
</div>
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="Email address">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="Blood Type">
  <label for="floatingInput">Blood Type</label>
</div>
<div class="form-floating mb-3">
  <input type="date" class="form-control" id="floatingInput" placeholder="Date Of Birth">
  <label for="floatingInput">Date Of Birth</label>
</div>
<select id="inputState" class="form-select">
      <option selected>Gender</option>
      <option>Male</option>
      <option>Female</option>
      
      <a href="#">
      <input type="button" value="Register" class="btn btn-outline-success">
      </a>
    </div>
    
</div>


-->


<!-- Jquery and Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>



<!-- Font Awesome JavaScript -->
<script src="js/all.min.js"></script>




<?php
include('include/footer.php');

?>
</body>
</html>