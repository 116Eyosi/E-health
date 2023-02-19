
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
                                Doctor FollowUp
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Doctor & Patient FollowUp Table
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                        <th style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">Followup_id</th>
                                        
                                        <th style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">Patient_id</th>
                                        <th style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">Doctor_id</th>
                                        <th style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">Patient_case</th>
                                        <th style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">Doctor_Answer</th>
                                        <th style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">Action</th>
                                        </tr>
                                    </thead>
<tbody>

<?php

require('db.php');

$select_query="SELECT * FROM followup";
$query=mysqli_query($connection,$select_query);
if(mysqli_num_rows($query)>0){

while($row = mysqli_fetch_assoc($query)) {
   
 if($row['D_id']==$_SESSION['D']){

?>

 <tr>
<td style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black"><?php echo $row['f_id']; ?></td>
 <td style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black"> <?php echo $row['P_id']; ?></td>
 <td style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black"> <?php echo $row['D_id']; ?></td>
 <td style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black"> <?php echo $row['P_case']; ?></td>
 <td style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black"> <?php echo $row['D_ans']; ?></td>
 <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <a href="code.php?fi=
                                        <?php echo $row['f_id']; ?>" class="btn btn-primary" >
                                            Follow Up
                                            </a>
                                            </button></td>
 
</tr>
   <?php
}
}
}
?>
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
?>