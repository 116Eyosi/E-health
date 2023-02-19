
<html>
<body>
<center>
<form action="" method="POST" enctype="multipart/form-data">
   <input type="file" name="image" value="upload"><br>
<input type="submit" name="save">
</form>
</center>
<?php
require_once('db.php');
if(isset($_POST['save'])){
$filename=$_FILES['image']['name'];
$filetmpname=$_FILES['image']['tmp_name'];
$folder='IU/'.$filename;
move_uploaded_file($tempname, $folder)


$s="UPDATE doctor SET img='$filename' WHERE D_id=7";






$q=mysqli_query($connection,$s);
if($q){
http_response_code(200);
}
else{
http_response_code(404);
}}
?>
</body>
</html>