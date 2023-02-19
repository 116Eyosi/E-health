<?php

session_start();
$connection = mysqli_connect("localhost","root","","mydb");

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    $email_query = "SELECT * FROM admin WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: admin_register.php');  
    }
    else
    {
        if($password === $cpassword)
        {
            $query = "INSERT INTO register (username,email,password) VALUES ('$username','$email','$password')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: admin_register.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: admin_register.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('Location: admin_register.php');  
        }
    }

}





//update admin data

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    $query = "UPDATE admin SET username='$username', email='$email', password='$password' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        
        header('Location: admin_register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        
        header('Location: admin_register.php'); 
    }
}
//delete admin
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        
        header('Location: admin_register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
       
        header('Location: admin_register.php'); 
    }    
}

if(isset($_GET['del'])){
    $id=$_GET['del'];
    $s=" DELETE FROM doctor WHERE D_id=$id";

    $q=mysqli_query($connection,$s);
    if($q){
    header('Location:DoctorsList.php');
}
    else{
        echo "<script>alert('Error')</script>";
    }

}


//admin login


if(isset($_POST['login']))
{
   
    if(empty($_POST['email']) || empty($_POST['password'])){
        $_SESSION['status'] = "Please fill it";
        header("location:login.php");
        }

  
else{
    $email_login = $_POST['email']; 
    $password_login = $_POST['password']; 
    $query = "SELECT * FROM admin WHERE email='$email_login' AND password='$password_login' ";
    $query_run = mysqli_query($connection, $query);

   if(mysqli_num_rows($query_run)>0)
   {
        $_SESSION['username'] = $email_login;
        header('Location: index.php');
   } 
   else
   {
        $_SESSION['status'] = "Email / Password is Invalid";
        header('Location: login.php');
   }
}
}

    



// Add Doctors

if(isset($_POST['Rdoctor'])){




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
    $de = $_POST['Speciality'];
    $contact = $_POST['contact'];
    

    $insert_query = "INSERT INTO doctor (Fname, Lname, email, password, contact,department,img) VALUES('$Fname','$Lname','$email','$password','$contact','$de','$new_img_name')";
    $query_run = mysqli_query($connection, $insert_query);
    
    if($query_run){
        $_SESSION['status'] = "Your Data is Added";
        
        header('Location: index.php'); 
        
    }
    else{
        $_SESSION['status'] = "Your Data is Added";       
       
        header('Location: AddDoctor.php'); 
    
    }
    

    die;
//delete doctor


}














?>