<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PengAngguran </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/home/ogani-master/css/bootstrap.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/home/ogani-master/css/font-awesome.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/home/ogani-master/css/elegant-icons.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/home/ogani-master/css/nice-select.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/home/ogani-master/css/jquery-ui.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/home/ogani-master/css/owl.carousel.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/home/ogani-master/css/slicknav.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/home/ogani-master/css/style.css'); ?>" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>



    <?php if (empty($this->session->userdata('idKonsumen'))) { ?>

        <!-- Humberger Begin -->
        <div class="humberger__menu__overlay"></div>
        <div class="humberger__menu__wrapper">
            <div class="humberger__menu__logo">
                <a href="<?php echo site_url('/'); ?>?>"><img src="<?php echo base_url('assets/home/ogani-master/img/logo.png'); ?>" alt="" width="100px" ></a>
            </div>
            <div class="humberger__menu__cart">
                <ul>
                    <li><a href="#"><i class="fa fa-heart"></i> <span>0</span></a></li>
                    <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>0</span></a></li>
                </ul>
            </div>
            <div class="humberger__menu__widget">
                <div class="header__top__right__auth">
                    <a href="<?php echo site_url('main/login/'); ?>"><i class="fa fa-user"></i> Login</a>
                </div>
            </div>
            <nav class="humberger__menu__nav mobile-menu">
                <ul>
                    <li class="active"><a href="<?php echo site_url('/'); ?>?>">Home</a></li>
                    <li><a href="<?php echo site_url('main/cart/'); ?>">Shoping cart</a>
                            <!-- <ul class="header__menu__dropdown">
                                <li><a href="<?php echo site_url('main/cart/'); ?>">Shoping Cart</a></li>
                            </ul> -->
                    </li>
                    <li><a href="<?php echo site_url('main/blog/'); ?>">Blog</a></li>
                    <li><a href="<?php echo site_url('main/contact/'); ?>">Kontak Kami</a></li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
            <div class="header__top__right__social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <!-- <a href="#"><i class="fa fa-linkedin"></i></a> -->
                <!-- <a href="#"><i class="fa fa-pinterest-p"></i></a> -->
            </div>
            <div class="humberger__menu__contact">
                <ul>
                    <li><i class="fa fa-envelope"></i> pengAngguran@gmail.com</li>
                    <!-- <li>Gratis Ongkir Untuk Pertama Kali Order!!!</li> -->
                </ul>
            </div>
        </div>
        <!-- Humberger End -->

        <!-- Header Section Begin -->
        <header class="header">
            <div class="header__top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="header__top__left">
                                <ul>
                                    <li><i class="fa fa-envelope"></i> pengAngguran@gmail.com</li>
                                    <!-- <li>Gratis Ongkir Untuk Pertama Kali Order!!!</li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="header__top__right">
                                <div class="header__top__right__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                                <div class="header__top__right__auth">
                                    <a href="<?php echo site_url('main/login/'); ?>"><i class="fa fa-user"></i> Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header__logo">
                            <a href="<?php echo site_url('/'); ?>"><img src="<?php echo base_url('assets/home/ogani-master/img/logo.png'); ?>" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="<?php echo site_url('/'); ?>">Home</a></li>
                                <li><a href="<?php echo site_url('main/cart/'); ?>">Shoping cart</a>
                                    <!-- <ul class="header__menu__dropdown">
                                        <li><a href="<?php echo site_url('main/cart/'); ?>">Shoping Cart</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="<?php echo site_url('main/blog/'); ?>">Blog</a></li>
                                <li><a href="<?php echo site_url('main/contact/'); ?>">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <div class="header__cart">
                            <ul>
                                <li><a href="#"><i class="fa fa-heart"></i> <span>0</span></a></li>
                                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>0</span></a></li>
                            </ul>
                            <!-- <div class="header__cart__price">Total: <span>Rp 150.000</span></div> -->
                        </div>
                    </div>
                </div>
                <div class="humberger__open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </header>
    <?php } else { ?>

        <!-- Humberger Begin -->
        <div class="humberger__menu__overlay"></div>
        <div class="humberger__menu__wrapper">
            <div class="humberger__menu__logo">
                <a href="<?php echo site_url('main/dashboard'); ?>"><img src="<?php echo base_url('assets/home/ogani-master/img/logo.png'); ?>" alt=""></a>
            </div>
            <div class="humberger__menu__cart">
                <ul>
                    <li><a href="#"><i class="fa fa-heart"></i> <span>0</span></a></li>
                    <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>0</span></a></li>
                </ul>
            </div>
            <div class="humberger__menu__widget">
                <div class="header__top__right__auth">
                    <a href="<?php echo site_url('main/logout'); ?>"><i class="fa fa-user-red"></i> Logout</a>
                </div>
            </div>
            <nav class="humberger__menu__nav mobile-menu">
                <ul>
                    <li class="active"><a href="<?php echo site_url('main/dashboard'); ?>">Home</a></li>

                    <li><a href="<?php echo site_url('toko'); ?>">Shop</a>
                    </li>
                    <li><a href="<?php echo site_url('member/tampil_profile'); ?>">Profile</a></li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
            <div class="header__top__right__social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <!-- <a href="#"><i class="fa fa-linkedin"></i></a> -->
                <!-- <a href="#"><i class="fa fa-pinterest-p"></i></a> -->
            </div>
            <div class="humberger__menu__contact">
                <ul>
                    <li><i class="fa fa-envelope"></i> pengAngguran@gmail.com</li>
                    <!-- <li>Gratis Ongkir Untuk Pertama Kali Order!!!</li> -->
                </ul>
            </div>
        </div>
        <!-- Humberger End -->

        <header class="header">
            <div class="header__top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="header__top__left">
                                <ul>
                                    <li><i class="fa fa-envelope"></i> pengAngguran@gmail.com</li>
                                    <!-- <li>Gratis Ongkir Untuk Pertama Kali Order!!!</li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="header__top__right">
                                <div class="header__top__right__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                                <div class="header__top__right__auth">
                                    <a href="<?php echo site_url('main/logout'); ?>"><i class="fa fa-user"></i> Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header__logo">
                            <a href="<?php echo site_url('main/dashboard'); ?>"><img src="<?php echo base_url('assets/home/ogani-master/img/logo.png'); ?>" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="<?php echo site_url('main/dashboard'); ?>">Home</a></li>

                                <li><a href="<?php echo site_url('toko'); ?>">Shop</a>
                                </li>
                                <li><a href="<?php echo site_url('member/tampil_profile'); ?>">Profile</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <div class="header__cart">
                            <ul>
                                <li><a href="#"><i class="fa fa-heart"></i> <span>0</span></a></li>
                                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>0</span></a></li>
                            </ul>
                           
                        </div>
                    </div>
                </div>
                <div class="humberger__open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </header>
    <?php } ?>
    <!-- Header Section End -->