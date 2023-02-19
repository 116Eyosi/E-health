<?php
require_once 'db.php';
session_start();
//$connection = mysqli_connect("localhost","root","","adminpanel");


// Doctor Login 
//if(isset($_POST['Doctorlogin']))
//{
   // $email = $_POST['email']; 
   // $password = $_POST['password']; 

   // $query = "SELECT * FROM doctor WHERE email='$email' AND password='$password' ";
   // $query_run = mysqli_query($connection, $query);

  // if(mysqli_fetch_array($query_run))
   //{
    //    $_SESSION['username'] = $email;
    //    header('Location: Doctor.php');
  // } 
  // else
  // {
       // $_SESSION['status'] = "Email / Password is Invalid";
      //  header('Location: login.php');
   //}
    
///}
// End Doctor login
 


// Doctor Followup Answers

require('db.php');
if(isset($_POST['Answer_submit'])){
$P_id=$_SESSION['ID'];
$F_id=$_POST['F_id'];
$D_ans=$_POST['Doctor_Answer'];

$select_query="UPDATE followup SET D_ans= '$D_ans' WHERE F_id=$F_id";
$query=mysqli_query($connection,$select_query);
if($query){
    echo "Send succesfully";
}
}

//Ended Doctor Followup Answers


// Doctor Login
require_once('db.php');
$email=mysqli_real_escape_string($connection,$_POST['email']);
if(isset($_POST['Doctorlogin'])){
if(empty($_POST['email']) || empty($_POST['password'])){
    header("location:Login.php");
    $_SESSION['status'] = "please fill it";

}
else{
$query="SELECT * from doctor where email='$email' and password='".$_POST['password']."' ";
$result=mysqli_query($connection,$query);
if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);





        //$_SESSION['username'] = $email_login;    
    $_SESSION['D']=$row['D_id'];
    header("location:Doctor.php");
}
else{
    $_SESSION['status'] = "Email / Password is Invalid";
header("location:Login.php");
}
}
}

// Ended Doctor Login

// Login by id
require_once('db.php');
if(isset($_POST['logid'])){
if(empty($_POST['email']) || empty($_POST['id'])){
    $_SESSION['status'] = "please fill it";
header("location:Recoverypassword.php");
}
else{
$query="SELECT * from doctor where email='".$_POST['email']."' and D_id ='".$_POST['id']."'";
$result=mysqli_query($connection,$query);
if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
$_SESSION['D']=$row['D_id'];
header("location:Doctor.php");
}
else{
    $_SESSION['status'] = "Email / ID is Invalid";
header("location:Recoverypassword.php");

}
}
}


//update Doctor Profile

if(isset($_POST['Update_Doctor']))
{
    
    $Fname = $_POST['Edit_First_Name'];
    $Lname = $_POST['Edit_Last_Name'];
    $email = $_POST['Edit_email'];
    $password = $_POST['Edit_password'];
    $picture = $_POST['Picture'];
    $Date_Of_Birth = $_POST['Edit_Date_Of_Birth'];
    $Speciality = $_POST['Edit_Speciality'];
    $About_Me = $_POST['Edit_About_Me'];
    $contact = $_POST['Edit_Contact'];

    $query = "UPDATE doctor SET First_Name='$Fname', Last_Name='$Lname', email='$email', password='$password', Picture='$picture', Date_Of_Birth='$Date_Of_Birth', Speciality='$Speciality', About_Me='$About_Me', Contact='$contact' WHERE Doctor_id='$Doctor_id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Profile is Updated";
        
        header('Location: Profile.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Profile is NOT Updated";
        
        header('Location: Profile.php'); 
    }
}
//End Doctor Profile

 //update doctor
 if(isset($_POST['u'])){
    $i=$_SESSION['D'];
 
	$img_name = $_FILES['image']['name'];
	$img_size = $_FILES['image']['size'];
	$tmp_name = $_FILES['image']['tmp_name'];
	$error = $_FILES['image']['error'];


$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);


$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = '../IU/'.$new_img_name;
			move_uploaded_file($tmp_name, $img_upload_path);
   
   
    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $de = $_POST['department'];
    $contact = $_POST['contact'];
    

    $insert_query = "UPDATE doctor SET  Fname='$Fname', Lname='$Lname', email='$email', password='$password', 
    contact='$contact',department='$de', img='$new_img_name' WHERE D_id=$i";
    $query_run = mysqli_query($connection, $insert_query);
    
    if($query_run){
        $_SESSION['status'] = "Your Data is Updated";
        
        header('Location: profile.php'); 
        
    }
    else{
        $_SESSION['status'] = "Your Data not Updated";       
       echo "error";
      header('Location: Doctor.php'); 
    
    }
}

if(isset( $_SESSION['D'])){
if(isset($_GET['fi'])){
    $id=$_GET['fi'];

    if(isset($_POST['ans'])){
    $DA=$_POST['DAnsw'];
    
    //extract patient name
   



    
    
    //set the value into table appointment (app)
    
    $s="UPDATE followup SET D_ans='$DA' Where F_id=$id";
    $q=mysqli_query($connection,$s);
    if($q){
    header('Location:DoctorFollowup.php');
    }
    else{
    echo "<script>alert('Error');</script>";
    }
    }
  include('includes/headA.php');
    ?>
    <!DOCTYPE html>
    <body style="background-color:grey">
        <div class="container bg-secondary w-100 p-3">
    <form method="POST" action="">
        <center>
    <br><br><br>
    <label>Doctor Answer <textarea name="DAnsw"  cols="30" rows="5"></textarea></label><br><br>
    <button name='ans' class="btn btn-primary" >Answer</button>
</center>
    </form>
</div>
    </body>
    </html>
    
    
    <?php
}
else("Location:../index.php");
    }


    if(isset( $_SESSION['D'])){
    //appointment response
    if(isset($_GET['ai'])){
        $id=$_GET['ai'];
    
        if(isset($_POST['aR'])){
        $DA=$_POST['ar'];
        
        //extract patient name
        
        
        
        //set the value into table appointment (app)
        
        $s="UPDATE app SET permission='$DA' Where app_id=$id";
        $q=mysqli_query($connection,$s);
        if($q){
           
    header('Location:Appointmentlist.php');
 
        }
        else{
        echo "<script>alert('Error');</script>";
        }
        }
        include('includes/headA.php');
        ?>
        <!DOCTYPE html>
        
        <body style="background-color:grey">
        <div class="container bg-secondary w-100 p-3">
        <form method="POST" action="">
            <center>
        <br><br><br>
        <label>Response <textarea name="ar"  cols="30" rows="5"></textarea></label><br><br>
        <button name='aR' class="btn btn-primary" >Answer</button>
    </center>    
    </form>
    </div>
        </body>
        </html>
        
        
        <?php
    }

        }
        else{
            header("Location:../index.php");
        }
 ?>

