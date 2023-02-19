<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Patient Sign Up</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">


                                    <?php
        if(isset($_SESSION['success']) && $_SESSION['success'] !='')
        {
            echo '<h2>'.$_SESSION['success'].'</h2>';
            unset($_SESSION['success']);
        }
        if(isset($_SESSION['status']) && $_SESSION['status'] !='')
        {
            echo '<h2>'.$_SESSION['status'].'</h2>';
            unset($_SESSION['status']);
        }
        
        
        ?>






                                        <form action="code.php" method="POST">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input   class="form-control" id="inputFirstName" type="text" name="First_Name" placeholder="Enter your first name" required />
                                                        <label for="inputFirstName">First name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input   class="form-control" id="inputLastName" type="text" name="Last_Name" placeholder="Enter your last name" required/>
                                                        <label for="inputLastName">Last name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input   class="form-control" id="inputEmail" type="email" name="Email" placeholder="name@example.com"  required/>
                                                <label for="inputEmail">Email Address</label>
                                            </div>
                                                <div class="form-floating mb-3">
                                                <input  class="form-control" id="inputPassword" type="password" name="password" placeholder="Create a password" required/>
                                                <label for="inputPassword">Password</label>
                                            </div>
                                                
                                                <div class="form-floating mb-3">
                                                <input  class="form-control" id="cellphone" type="text" name="Contact" placeholder="Please Enter Your Phone Number Here" required/>
                                                <label for="inputContact">Contact</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input   class="form-control" id="inputAge" type="text" name="Age" placeholder="Please Enter Your Age Here" required/>
                                                <label for="inputAge">Age</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputcontactname" type="text" name="Emerg_name" placeholder="Emergency Contact Name" required/>
                                                <label for="inputcontactname">Emergency Contact Name</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPhone" type="text" name="Emerg_contact" placeholder="Emergency Contact Phone " required/>
                                                <label for="inputPhone">Emergency Contact Phone</label>
                                            </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                            <div class="d-grid"><button class="btn btn-primary btn-block" type="submit" name="Createpatient" >Create Account</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy;<a href="../Ourteam.php">eHealthSystemTeam</a></div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
