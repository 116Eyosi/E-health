<?php
require_once('db.php');

$s="INSERT INTO report (name,email,message)
VALUES('".$_POST['name']."','".$_POST['email']."','".$_POST['message']."')";

$q=mysqli_query($connection,$s);
 if($q){
    header("Location:index.php");
 }
 else{
   echo "<script>alert('Error')</script>";
 }
 ?>