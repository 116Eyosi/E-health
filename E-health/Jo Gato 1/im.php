
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



	$img_name = $_FILES['image']['name'];
	$img_size = $_FILES['image']['size'];
	$tmp_name = $_FILES['image']['tmp_name'];
	$error = $_FILES['image']['error'];


$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);


$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'IU/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
$s="UPDATE doctor SET img='$new_img_name' WHERE D_id=13";
$w=mysqli_query($connection,$s);

}
?>
</body>
</html>