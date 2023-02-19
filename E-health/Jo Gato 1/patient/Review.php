<?php
include('included/header.php');

?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                Review List
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Review List Table
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                        <th>Doctor_Id</th>
                                        <th>First_Name</th>
                                        <th>Last_Name</th>
                                        <th>date</th>
                                        <th>permission</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                       require('db.php');
                                       $select_query="SELECT * FROM appointment";
                                       $query=mysqli_query($connection,$select_query);
                                       if(mysqli_num_rows($query)>0){
                                          while($row = mysqli_fetch_assoc($query)) {
                                             if($_SESSION['ID']==$row['P_id']){
                                                $D_id= $row['D_id'];

                                                $selectFirstName_query="SELECT Fname FROM doctor WHERE D_id= $D_id";
                                                $query_run=mysqli_query($connection,$selectFirstName_query);
                                                $rr=mysqli_fetch_assoc($query_run);
                                                ?>
                                                <tr>
                                                   <td> <?php echo $row['D_id']; ?></td>
                                                   <td><?php echo $rr['Fname'];?></td>
                                                   <td><?php echo $rr['Lname'];?></td>
                                                   <td> <?php echo $row['date']; ?></td>
                                                   <td><?php echo $row['permission'];?></td>
                                                </tr>
                                                <?php
                                                }
                                             }
                                          }
                                          ?>
                                          </table>
                                       </div>
                                       <form method="POST" action="Code.php" style="margin-top: 3%;">
                                    <label>Doctor's id <input type="number" name="Doctor_id" required></label><br><br>
                                 <label>Case </label>
                                 <textarea rows="5" cols="30" name="case" required></textarea><br>
                                 <button name='Review'>Review</button><br><br>
                              </form>
                              </main>
                
                </div>
            </div>
            <?php
            include('included/footer.php');
            ?>