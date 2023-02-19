<?php
session_start();
require('db.php');
if(isset($_POST['set'])){
$date=$_POST['Date'];
$D_id=$_POST['D_id'];
$P_id=$_SESSION['ID'];

//extract patient name

$select="SELECT First_Name FROM patient WHERE P_id=$P_id";
$query_run=mysqli_query($connection,$select);
$rr=mysqli_fetch_assoc($query_run);
$pn=$rr['Fname'];


$select="SELECT Fname From doctor WHERE D_id=$D_id";
$query=mysqli_query($connection,$select);
$query_run=mysqli_fetch_assoc($query);
$dn=$query_run['Fname'];
echo "Patient_Name: ".$P_id."<br>"; 
echo "Patient_Id: ".$Pname."<br>";
echo "Doctor_ID: ".$D_id."<br>";
echo "Doctor_Name: ".$Doctor_Name."<br>";

//set the value into table appointment

$insert="INSERT INTO appointment (`Patient_id`,`Patient_Name`,`Doctor_id`,`Doctor_Name`,`Date`,`status`,`Patient_Email`) VALUES('','$P_id','$Pname','$D_id','$Doctor_Name','$date','$status','$Patient_Email')";
$query=mysqli_query($connection,$insert);
if($query){

}
else{
echo "bad";
}
}
?>
<html>
    <body>
<button><a href="patient_dashbord.php">Home</a></button>
<button><a >Logout</a></button>
</body>
</html>