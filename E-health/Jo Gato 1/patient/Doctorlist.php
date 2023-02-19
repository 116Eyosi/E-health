<?php
session_start();
if(isset($_SESSION['ID'])){
include('included/header.php');

?>


<div id="layoutSidenav_content"  class="bg-primary">
                <main>
                    <div class="container-fluid px-4" >
                        <div class="card mb-4">
                            <div class="card-body" class="bg-primary " >
                                Doctor's List
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Doctor's List Table
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                        <th>Doctor_id</th>
                                        <th>First_Name</th>
                                        <th>Last_Name</th>
                                        <th>Email</th>
                                        <th>Picture</th>
                                        <th>Speciality</th>
                                        <th>Contact</th>
                                        <th>Peremision</th>
                                       

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
require('db.php');

$select_query="SELECT * FROM doctor";
$query=mysqli_query($connection,$select_query);
if(mysqli_num_rows($query)>0){
while($row = mysqli_fetch_assoc($query)) {
  $i=$row['img'];
 $_SESSION['D_id']="GOOD";
?>
<tr>
                                        <td><?php echo $row['D_id']; ?></td>
                                        <td><?php echo $row['Fname']; ?></td>
                                        <td><?php echo $row['Lname']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo "<img src='../IU/$i' >";?></td>
                                        <td><?php echo $row['department']; ?></td>
                                        <td><?php echo $row['contact']; ?></td>
                                        



                                        <form method="POST" action="d.php">
                                          <td><!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary" ">
                                            <a  style="font-weight:bold; color:black" href="code.php?ap=
                                        <?php echo $row['D_id']; ?>" style="font-size: 20px;font-weight:bold">
                                            Appointment
                                            </a>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">First Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="First_Name" value="<?php echo $row['Fname']; ?>" placeholder="Enter Your First Name Here">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Last Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Last_Name" value="<?php echo $row['Lname']; ?>" placeholder="Enter Your Last Name Here">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="Email" value="<?php echo $row['email']; ?>" placeholder="Enter Your Email Address Here">
                  </div>
                </div>
                
                
                
                

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Speciality</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Speciality" value="<?php echo $row['Speciality']; ?>" placeholder="Enter Your Speciality Here">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Appointment Days</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="appday" value="<?php echo $row['appday']; ?>" placeholder="Enter Your Appointment Days Here">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Avaliabel Time</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Avaliabel" value="<?php echo $row['Avalitime']; ?>" placeholder="Enter Your Speciality Here">
                  </div>
                </div>

                

                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">About Me</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="About_Me" value="<?php echo $row['About_Me']; ?>"  placeholder="Enter Your Bio Here"></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputphone" class="col-sm-2 col-form-label">Contact</label>
                  <div class="col-sm-10">
                    <input type="phone" class="form-control" name="contact" value="<?php echo $row['contact']; ?>" placeholder="Enter Your Phone Number Here">
                  </div>
                </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" name="MakeApp" class="btn btn-primary">Make Appointment</button>
                                                </div>
                                                </div>

                                            </div>
                                            </div></td>
                                         
                                       </form>
                                    </tr>
                                    <?php
                                    }
                                    }?>
                                     </tbody>
                                </table>
                                
                </main>
                
            </div>
        </div>
                                        































<?php
            include('included/footer.php');


                                  }
            else{
              header("Location:Login.php");
             }


            ?>



