<?php
require('db.php');

$id=intval($_POST['D_id']);

$s="SELECT * FROM followup WHERE D_id = $id";
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
