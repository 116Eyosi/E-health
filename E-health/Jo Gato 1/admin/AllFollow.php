<?php
session_start();
if(isset( $_SESSION['username'])){
include('includess/header.php');

?>

<div class="container bg-primary  w-100 p-3 h-100"  >

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                Follow Up
                            </div>
                        </div>
                        <div class="card mb-4  w-100">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Follow Up List Table
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                        <th  style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">FollowUp_id</th>
                                        <th  style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">Patient_id</th>
                                        <th  style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">Doctor_id</th>
                                 
                                        <th  style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">Patient_Case</th>
                                        <th  style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">Doctor_Answer</th>
                                       
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
require('db.php');




$select_query="SELECT * FROM followup";
$query=mysqli_query($connection,$select_query);
if(mysqli_num_rows($query)>0){
while($row = mysqli_fetch_assoc($query)) {
 $D_id= $row['D_id'];

   $SS="SELECT * FROM doctor WHERE D_id= $D_id";
   $qq=mysqli_query($connection,$SS);
   $rr=mysqli_fetch_assoc($qq);
   
?>
<tr>
                                        <td style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black"><?php echo $row['f_id']; ?></td>
                                        <td  style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black"><?php echo $row['P_id']; ?></td>
                                        <td  style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black"><?php echo $row['D_id']; ?></td>
                                        <td  style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black"> <?php echo $row['P_case']; ?></td>
                                        <td  style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black"><?php echo $row['D_ans']; ?></td>
                                      
                                       
                                    </tr>
                                    <?php

}
}
?>
</tbody>
                                </table>
                            
                </main>
                <button class="btn btn-danger">   <a href="index.php" style="font-size: 20px;font-weight:bold">HomePage</a>    </button> 
                
            </div>
        </div>
</div>




        <?php
                include('includess/footers.php');




}
else{
    header("Location:../index.php");
}


?>




