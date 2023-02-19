<?php
require('db.php');

$s="SELECT * FROM doctor";
$q=mysqli_query($con,$s);
$count=mysqli_num_rows($q);

if($count>0){
http_response_code(200);
while($row=mysqli_fetch_assoc($q)){
$w[]=$row;

}
}
else
{
http_response_code(404);
}
echo json_encode($w);
?>
