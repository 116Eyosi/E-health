<?php




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
</head>
<body style="background-image: url(wallpaperflare.com_wallpape.jpg);">
    
    <?php
    
    include("include/header.php");
    
    
    ?>










<div class="container my-5 py-5 z-depth-1">

<!--Section: Content-->
<section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">


  <!--Grid row-->
  <div class="row d-flex justify-content-center">

    <!--Grid column-->
    <div class="col-md-6">

      <!-- Default form contact -->
      <form class="text-center" action="feedback.php" method="POST">

       <h3 class="font-weight-bold mb-4">Feedback</h3>

        <!-- Name -->
        <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name" name="name">

        <!-- Email -->
        <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">

       
        
        <!-- Message -->
        <div class="form-group">
          <textarea name="message" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"
            placeholder="Message"></textarea>
        </div>

        <!-- Copy -->
       

        <!-- Send button -->
        <button class="btn btn-info btn-block" type="submit" name="send">Send</button>

      </form>
      <!-- Default form contact -->

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->


</section>
<!--Section: Content-->


</div>







<?php
include('include/footer.php');

?>



</body>
</html>