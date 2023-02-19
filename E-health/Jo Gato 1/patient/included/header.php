<?php
require('db.php');


?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Patient Dashboard</title>
    /<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>

 


    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="Patients.php">Patient Dashboard</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
         
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="Profile.php">Profile</a></li>
                
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="Logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="Patients.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="../index.php">
                                <div class="sb-nav-link-icon"><i class="bi bi-house-fill"></i></i></div>
                                Home Page
                            </a>
                            
                            <a class="nav-link" href="Doctorlist.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-user-md"></i></div>
                                Choose Doctor
                            </a>
                            
                            <a class="nav-link" href="HistoryList.php">
                                <div class="sb-nav-link-icon"><i class="bi bi-calendar-date"></i></div>
                                Appointment Shedule
                            </a>
                            <a class="nav-link" href="Profile.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user fa-fw"></i></div>
                                Profile
                            </a>
                            
                            
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="Login.php">Login</a>
                                            <a class="nav-link" href="Register.php">Register</a>
                                            <a class="nav-link" href="password.php">Forgot Password</a>
                                        </nav>
                                    </div>
                                    
                            </div>
                            <a class="nav-link" href="Followup.php">
                                <div class="sb-nav-link-icon"><i class="bi bi-laptop-fill"></i></div>
                                Follow Up
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                    
                    </div>
                </nav>
            </div>
        
