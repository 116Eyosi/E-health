<?php
session_start();
if(isset($_SESSION['ID'])){
include('included/header.php');

?>

<div id="layoutSidenav_content" class="bg-primary " >
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                Doctor List
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Doctor List Table
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" >
                                    <thead>
                                        <tr>
                                        <th>Doctor_id</th>
                                        <th>First_Name</th>
                                        <th>Last_Name</th>
                                        <th>Email</th>
                                        <th>Picture</th>
                                        <th>Speciality</th>

                                        
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
?>
<tr>
                                        
                                        <td><?php echo $row['D_id']; ?></td>
                                        <td><?php echo $row['Fname']; ?></td>
                                        <td><?php echo $row['Lname']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo "<img src='../IU/$i' >";?></td>
                                        <td><?php echo $row['department']; ?></td>
                                        <td><button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <a style="font-weight:bold; color:black"  href="code.php?fdi=
                                        <?php echo $row['D_id']; ?>">
                                            Follow Up
                                            </a>
                                            </button></td>


                                        
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
               
            }

            else{
                header("Location:Login.php");
               }





?>