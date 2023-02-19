<?php
require_once('db.php');

$s="INSERT INTO report (name,email,message)
VALUES('".$_POST['name']."','".$_POST['email']."','".$_POST['message']."')";

$q=mysqli_query($con,$s);
if($q){
http_response_status(200);
}else{
http_response_status(404);
}
?>
