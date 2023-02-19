<?php
session_start();
if(isset( $_SESSION['D'])){
include('includes/header.php');

?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                Appointment List
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Appointment List Table
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" style="2px solid grey">
                                    <thead>
                                        <tr>
                                        <th style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">Appointment_id</th>
                                        <th style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">Patient_id</th>
                                        <th style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">Doctor_id</th>
                                        <th style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">Patient_Name</th>
                                        <th style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">Doctor_Name</th>
                                        <th style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">Date</th>
                                        <th style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">Status</th>
                                        <th style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">Action</th>
                                      
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    require('db.php');
                                    
                                    $select_query="SELECT * FROM app";
                                    $query=mysqli_query($connection,$select_query);
                                    if(mysqli_num_rows($query)>0){
                                      
                                        while($row = mysqli_fetch_assoc($query)) {
                                            if($_SESSION['D']==$row['D_id']){
                                                
                                                                                  
                                    ?>
                                     <tr>
                                        <td style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black"><?php echo $row['app_id']; ?></td>
                                        <td style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black"><?php echo $row['P_id']; ?></td>
                                        <td style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black"><?php echo $row['D_id']; ?></td>
                                        <td style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black"><?php echo $row['pn']; ?></td>
                                        <td style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black"><?php echo $row['dn']; ?></td>
                                        <td style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black"><?php echo $row['date']; ?></td>
                                        <td style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black"><?php echo $row['permission']; ?></td>

                                        <td><button type="button" class="btn btn-primary" >
                                            <a href="code.php?ai=
                                        <?php echo $row['app_id']; ?>" class="btn btn-primary" >
                                        Appointmet
                                            </a>
                                            </button></td>
                                    </tr>
                                    <?php
                                    }
                                }
                            }?>    
                                    </tbody>
                                </table>
                                
                </main>
                
            </div>
        </div>
                <?php
                include('includes/footer.php');
            }
            else{
                header("Location:../index.php");
            }
                ?>