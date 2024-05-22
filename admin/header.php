<?php
include_once '../session.php';
Session::init();
include '../function.php';
$function = new Functions();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hospital Management System</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logos.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="index.php" class="text-nowrap logo-img">
            <img src="../assets/images/logos/hms.logo.png" width="180" alt="" /> 
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="fa-solid fa-x fs-8"></i>
          </div>
        </div>

        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="fa-solid fa-ellipsis nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="index.php" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-house"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="users.php" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-user-group"></i>
                </span>
                <span class="hide-menu">Users</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="patients.php" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-hospital-user"></i>
                </span>
                <span class="hide-menu">Patients</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="rooms.php" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-bed"></i>
                </span>
                <span class="hide-menu">Rooms</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="category.php" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-list"></i>
                </span>
                <span class="hide-menu">Category</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="appointment.php" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-calendar-check"></i>
                </span>
                <span class="hide-menu">Appointment</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="medical.php" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-notes-medical"></i>
                </span>
                <span class="hide-menu">Medical</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="medicine.php" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-pills"></i>
                </span>
                <span class="hide-menu">Medicine</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="supply.php" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-boxes"></i>
                </span>
                <span class="hide-menu">Supply</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="billing.php" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-credit-card"></i>
                </span>
                <span class="hide-menu">Billing</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="../" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-sign-out-alt"></i>
                </span>
                <span class="hide-menu">Logout</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="fa-solid fa-bars"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="fa-solid fa-bell"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">             
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../assets/images/profile/BiliranProvincialHospital-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="My-profile.php" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="fa-solid fa-user"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="../" aria-expanded="false" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->

<div class="container-fluid">
