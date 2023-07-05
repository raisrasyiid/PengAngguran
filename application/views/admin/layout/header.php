<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/admin/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/admin/css/sb-admin-2.min.css');?>" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
          
            <li class="nav-item active">
                <a class="nav-link collapsed" href="<?php echo site_url('Adminpanel/dashboard');?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Heading -->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo site_url('Kategori/index');?>">
                    <i class="nav-icon fas fa-fw fa-th"></i>
                    <span>Kategori</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo site_url('Blog/index');?>">
                    <i class="nav-icon fas fa-fw fa-book"></i>
                    <span>Blog</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo site_url('Member/index');?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Member</span>
                </a>
            </li>
            <li class="nav-item">  
                <a class="nav-link collapsed" href="<?php echo site_url('Adminpanel/change_pass');?>">
                    <i class="fas fa-fw fa-key"></i>
                    <span>Ganti Password</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo site_url('Adminpanel/logout');?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>


        </ul>
        <!-- End of Sidebar -->
