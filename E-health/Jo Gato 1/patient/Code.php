<?php


session_start();
require_once 'db.php';
// create account for Patient

$email=mysqli_real_escape_string($connection,$_POST['email']);
$password=mysqli_real_escape_string($connection,$_POST['password']);



if(isset($_POST['Createpatient'])){

    $Fname =mysqli_real_escape_string($connection, $_POST['First_Name']);
    $Lname =mysqli_real_escape_string($connection, $_POST['Last_Name']);
    $email =mysqli_real_escape_string($connection, $_POST['Email']);
    $password =mysqli_real_escape_string($connection, $_POST['password']);
    
    $contact = mysqli_real_escape_string($connection,$_POST['Contact']);
    $age = mysqli_real_escape_string($connection,$_POST['Age']);
    $Emerg_name = mysqli_real_escape_string($connection,$_POST['Emerg_name']);
    $Emerg_contact = mysqli_real_escape_string($connection,$_POST['Emerg_contact']);

    

    $insert_query = "INSERT INTO patient (Fname, Lname, Email, password, Contact, Age, Emerg_name, Emerg_contact ) VALUES('$Fname','$Lname','$email','$password','$contact','$age','$Emerg_name','$Emerg_contact')";
    $query_run = mysqli_query($connection, $insert_query);
    if($query_run){
        $_SESSION['status'] = "Your Account is Created";
        header("Location: Login.php");
        
    }
    else{
        $_SESSION['status'] = "Your Account is Not Created Try Again";  
        header("Location: CreateAccount.php");
    
    }
    

    die;
    
    
    
}

// Patient Login
require_once('db.php');
if(isset($_POST['PatientLogin'])){
if(empty($_POST['email']) || empty($_POST['password'])){
$_SESSION['status'] = "Please fill it";
header("location:Login.php");
}
else{
$query="SELECT * from patient where email='$email' and password= '$password'";
$result=mysqli_query($connection,$query);
if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
$_SESSION['ID']=$row['P_id'];
header("location:patients.php");
}
else{
    $_SESSION['status'] = "Email / Password is Invalid";
header("location:Login.php");
}
}
}



//UPdate profile
if(isset($_POST['update'])){
$id= $_SESSION['ID']; 
    $Fname =  mysqli_real_escape_string($connection,$_POST['Fname']);
    $Lname = mysqli_real_escape_string($connection, $_POST['Lname']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    
    $contact =  mysqli_real_escape_string($connection,$_POST['contact']);
    $age = mysqli_real_escape_string($connection, $_POST['age']);
    $En = mysqli_real_escape_string($connection, $_POST['Emerg_name']);
    $Ec =  mysqli_real_escape_string($connection,$_POST['Emerg_contact']);

    

    $insert_query = "UPDATE patient SET Fname='$Fname',Lname='$Lname', email='$email', password='$password', contact='$contact',
    age='$age',Emerg_name='$En',Emerg_contact='$Ec' WHERE P_id=$id ";
  $q=mysqli_query($connection,$insert_query);
   if($q){
        $_SESSION['status'] = "Your Account is Created";
        header("Location: Login.php");
    
    }
   else{
        $_SESSION['status'] = "Your Account is Not Created Try Again";  
       header("Location: CreateAccount.php");
    
    
   }

    die;
    
    
    
}



// Patient Login by id
require_once('db.php');
if(isset($_POST['logid'])){
if(empty($_POST['email']) || empty($_POST['id'])){
    $_SESSION['status'] = "please fill it";
header("location:password.php");
}
else{
$query="SELECT * from patient where email='".$_POST['email']."' and p_id ='".$_POST['id']."'";
$result=mysqli_query($connection,$query);
if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
$_SESSION['ID']=$row['P_id'];
header("location:patients.php");
}
else{
    $_SESSION['status'] = "Email / ID is Invalid";
header("location:password.php");

}
}
}


// Ended Patient Login


// Followup Review

if(isset($_POST['Review'])){

    $P_id=$_SESSION['Patient_id'];
    $D_id=$_POST['Doctor_id'];
    $P_case=$_POST['case'];
    $D_ans=$_POST['case'];

   
   $insert_query="INSERT INTO followup (`Followup_id`,`Patient_id`,`Doctor_id`,`Patient_case`,`Doctor_Answer`) VALUES('','$P_id','$D_id','$P_case','$D_ans''')";
   $query=mysqli_query($connection,$insert_query);
   if($query){
       echo "Send Succesfully";
   }
   }
   // End Followup Review



   // Appointment
  if(isset($_SESSION['ID'])){
 if(isset($_GET['ap'])){
 
 $id=$_GET['ap'];
 
 if(isset($_POST['send'])){
   
 $dat=$_POST['d'];
 $DI=$id;
 $p_id=$_SESSION['ID'];
 
 //extract patient name
 
 $ss="SELECT Fname FROM patient WHERE P_id=$p_id";
 $qq=mysqli_query($connection,$ss);
 $rr=mysqli_fetch_assoc($qq);
 $pn=$rr['Fname'];
 
 //extract doctor name
 $sss="SELECT Fname From doctor WHERE D_id=$DI";
 $qqq=mysqli_query($connection,$sss);
 $rrr=mysqli_fetch_assoc($qqq);
 $dn=$rrr['Fname'];
 
 //set the value into table appointment (app)
 
 $s="INSERT INTO app (`app_id`,`P_id`,`D_id`,`pn`,`dn`,`date`) VALUES(DEFAULT,'$p_id','$DI','$pn','$dn','$dat')";
 $q=mysqli_query($connection,$s);
 if($q){
 header('Location:patients.php');
 }
 else{
 echo "error";
 }
 }
 


include('included/header.php');
?>

 
 <body style="background-color:grey">
    <div class="container bg-secondary w-100 p-3">
 <form method='POST' action="">
<center>
 <br><br><br>
 <label>Date <input type="datetime-local" name="d"></label><br><br>
 <button name='send' class="btn btn-primary">set</button>
</center> 
</form>
</div>
 </body>


 <?php
 }}
 else{
    header("Location:Login.php");
 }
 
 //followup
 if(isset($_SESSION['ID'])){
 if(isset($_GET['fdi'])){
    $id=$_GET['fdi'];

    if(isset($_POST['setf'])){
        echo "good";
    $P_case=$_POST['P_C'];
    $DI=$id;
    $p_id=$_SESSION['ID'];
    
    //extract patient name
    
    
    
    //set the value into table appointment (app)
    
    $s="INSERT INTO followup (`F_id`,`P_id`,`D_id`,`P_case`,`D_ans`) VALUES(DEFAULT,'$p_id','$DI','$P_case','')";
    $q=mysqli_query($connection,$s);
    if($q){
    header('Location:patients.php');
    }
    else{
    echo "<script>alert('Error');</script>";
    }
    }
    
include('included/header.php');

?>
 <!DOCTYPE html>
 <body style="background-color:grey">
    <div class="container bg-secondary w-100 p-3">
   
    <form method='POST' action=''>
    <center>
    <br><br><br>
    <label>Patient Case <textarea name="P_C" id="" cols="30" rows="5"></textarea></label><br><br>
    <button name='setf' class="btn btn-primary" >Send</button>
    </center> 
</form>

</div>
</body>

</html>

<?php

   }

 }else{
    header("Location:Login.php");
 }
?>
    
  
 
   