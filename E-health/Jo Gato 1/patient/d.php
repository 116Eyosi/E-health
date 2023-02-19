
<?php
session_start();
include('included/header.php');
require('Doctorlist.php');
if(isset($_POST['Appointment'])){
?>


<div style="margin-top: 80%;">
<div class="container-fluid text-centre" style="margin-left: 22%;">
<form method="POST" action="setD.php" class="text-center">

<label>Date <input type="datetime-local" name="Date"></label><br><br>
<label>Doctor's ID<input type="number" name="Doctor_ID"></label><br><br>
<button name='set'>set</button>
</form>
</div>
</div>
</body>
</html>



<?php

}
?>