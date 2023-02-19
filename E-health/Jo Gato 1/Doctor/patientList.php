<?php
session_start();
if(isset( $_SESSION['D'])){
include('includes/header.php');

?>

<div class="container bg-primary  w-100 p-3 h-100"  >

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                Patient
                            </div>
                        </div>
                        <div class="card mb-4  w-100">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Patient List Table
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                        <th  style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">Patient_id</th>
                                        <th  style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">First Name</th>
                                        <th  style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">Last Name</th>
                                 
                                        <th  style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">Email</th>
                                        <th  style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">Contact</th>
                                        <th  style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">Emergency Name</th>
                                        <th  style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">Emergency Contact</th>
                                       
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
require('db.php');




$select_query="SELECT * FROM patient";
$query=mysqli_query($connection,$select_query);
if(mysqli_num_rows($query)>0){
while($row = mysqli_fetch_assoc($query)) {

   $SS="SELECT * FROM doctor";
   $qq=mysqli_query($connection,$SS);
   $rr=mysqli_fetch_assoc($qq);
   
?>
<tr>
                                        <td style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black"><?php echo $row['P_id']; ?></td>
                                        <td  style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black"><?php echo $row['Fname']; ?></td>
                                        <td  style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black"><?php echo $row['Lname']; ?></td>
                                        <td  style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black"> <?php echo $row['email']; ?></td>
                                        <td  style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black"><?php echo $row['contact']; ?></td>
                                        <td  style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black"><?php echo $row['Emerg_name']; ?></td>
                                        <td  style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black"><?php echo $row['Emerg_contact']; ?></td>
                                      
                                       
                                    </tr>
                                    <?php

}
}
?>
</tbody>
                                </table>
                            
                </main>
                <button class="btn btn-danger" style="width:200px">   <a href="Doctor.php" style="font-size: 20px;font-weight:bold">HomePage</a>    </button> 
                
            </div>
        </div>
</div>




        <?php
                include('includes/footer.php');



}else{
    header("Location:../index.php");
}


?>




