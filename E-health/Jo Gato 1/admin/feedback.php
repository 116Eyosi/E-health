<?php
session_start();
if(isset( $_SESSION['username'])){
include('includess/header.php');

?>


<div class="container bg-primary  w-100 p-3 h-100"  >
<div id="layoutSidenav_content"  >
                <main>
                    <div class="container-fluid px-4 ">
                        <div class="card mb-4 ">
                            <div class="card-body" >
                               FeedBack
                            </div>
                        </div>
                        <div class="card mb-4 h-100 p-3 w-100"   >
                            <div class="card-header">
                                Feadback List
                            </div>
                            <div class="card-body ">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                        <th style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">Name</th>
                                        <th style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">Email</th>
                                        <th style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black">Message</th>
                                 
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
require('db.php');




$select_query="SELECT * FROM report";
$query=mysqli_query($connection,$select_query);
if(mysqli_num_rows($query)>0){
while($row = mysqli_fetch_assoc($query)) {
    ?>
<tr>
                                        <td style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black"><?php echo $row['name']; ?></td>
                                        <td style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black"><?php echo $row['email']; ?></td>
                                        <td style="border: 2px solid green;padding-left:20px;padding-right:10px;color:black"><?php echo $row['message']; ?></td>
                                        
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




