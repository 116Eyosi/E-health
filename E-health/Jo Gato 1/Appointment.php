<?php
include('include/header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Appointment Page</title>
  <!-- Bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome css -->
    <link rel="stylesheet" href="css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    
</head>
<body>
  


<div style="margin-top: 70px;"></div>













<!-

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
<textarea name="appreason" id="appreason" style="width:300px;height:100px;"placeholder="Appointment reason"></textarea>
</div>
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="Blood Type">
  <label for="floatingInput">Blood Type</label>
</div>
<div class="form-floating mb-3">
  <input type="date" class="form-control" id="floatingInput" placeholder="Date Of Birth">
  <label for="floatingInput">Date Of Birth</label>
</div>

      
      <a href="#">
      <input type="button" value="Register" class="btn btn-outline-success">
      </a>
    </div>
    
</div>




















<div style="height: 50%;width:50% ;margin:auto">
<div class="wrapper col2">
  <div class="continer">
  </div>
</div>
<div class="wrapper col4">
  <div id="container">
    <h1>Add new Appointment record</h1>
   <form method="post" action="" name="frmappnt" onSubmit="return validateform()">
    <input type="hidden" name="select2" value="Offline" > 
    <table width="490" border="3">                
        <tr>
          
          <td>Patient Name</td>
          <td><input type="text" name="text" id="text" value="" /></td>
          </td>
        </tr>
      
        <tr>
          <td>Department</td>
          <td><select name="select5" id="select5">
           <option value="">Select</option>
           </select></td>
       
        </tr>
        <tr>
          <td>Appointment Date</td>
          <td><input type="date" name="appointmentdate" id="appointmentdate" value="" /></td>
        </tr>
        <tr>
          <td>Appointment Time</td>
          <td><input type="time" name="time" id="time" value="" /></td>
        </tr>
        <tr>
          <td>Doctor</td>
          <td>
          <select name="select6" id="select6">
            <option value="">Select</option>
            </select></td>
         
        </tr>
        
         <tr>
          <td>Appointment reason</td>
          <td><textarea name="appreason" id="appreason" style="width:300px;height:100px;"></textarea></td>
         
        </tr>		        
        <tr>
          <td>Status</td>
          <td><select name="select" id="select">
          <option value="">Select</option>
          </select></td>
        </tr>	
        <tr>
          <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit" /></td>
        </tr>
      </tbody>
    </table>
    </form>
    <p>&nbsp;</p>
    </div>
  </div>
</div>
</div>
 <div class="clear"></div>
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