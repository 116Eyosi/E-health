
<html>
<body>
<center>
<form method="POST" action="" enctype="multipart/form-data">
<table border="3px solid green">
<thead>
<tr>
<th>
name
</th>
<th>
Surgon
</th>
<th>
Department
</th>
</tr>
</thead>


<?php
require('db.php');
$s="SELECT * FROM doctor";
$q=mysqli_query($con,$s);
while($r=mysqli_fetch_array ($q)){
 $i=$r['img'];
?>
<tr>
<td>
<?php echo $r['Fname'];?>
</td>
<td><?php echo "<img src='$i' >";?></td>
<td><?php echo $r['department']?></td>
</tr>


<?php
}
?>



</table>
</form>
</center>

</body>


</html>
