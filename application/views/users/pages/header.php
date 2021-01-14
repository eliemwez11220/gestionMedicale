<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= (!empty($title) ? $title: "Management"); ?> - Santeza</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?= base_url('ressources/security/'); ?>vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?= base_url('ressources/security/'); ?>vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?= base_url('ressources/security/'); ?>css/fontastic.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?= base_url('ressources/security/'); ?>css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?= base_url('ressources/security/'); ?>css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?= base_url('ressources/'); ?>logo/favicon.png">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <?php
    //grocery CRUD librairie
    if (isset($output)) {
        foreach ($css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>"/>
        <?php endforeach;
    } ?>

</head>
<body>
<div class="page">
    <!-- Main Navbar-->
    <header class="header fixed-top">
        <nav class="navbar">
            <!-- Search Box-->
            <div class="search-box">
                <button class="dismiss"><i class="icon-close"></i></button>
                <form id="searchForm" action="#" role="search">
                    <input type="search" placeholder="What are you looking for..." class="form-control">
                </form>
            </div>
            <div class="container-fluid">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <!-- Navbar Header-->
                    <div class="navbar-header">
                        <!-- Navbar Brand --><a href="<?= base_url('psges/view/home'); ?>"
                                                class="navbar-brand d-none d-sm-inline-block">
                            <div class="brand-text d-none d-lg-inline-block text-uppercase">
                                <span></span><strong>Santeza</strong>
                            </div>
                            <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>ZAD</strong></div>
                        </a>
                        <!-- Toggle Button--><a id="toggle-btn" href="#"
                                                class="menu-btn active"><span></span><span></span><span></span></a>
                    </div>
                    <!-- Navbar Menu -->
                    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                        <!-- Search-->
                        <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i
                                        class="icon-search"></i></a></li>
                        <!-- Notifications-->
                        <li class="nav-item dropdown"><a id="notifications" rel="nofollow" data-target="#" href="#"
                                                         data-toggle="dropdown" aria-haspopup="true"
                                                         aria-expanded="false" class="nav-link"><i
                                        class="fa fa-bell-o"></i><span class="badge bg-red badge-corner">12</span></a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification">
                                            <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You
                                                have 6 new messages
                                            </div>
                                            <div class="notification-time">
                                                <small>4 minutes ago</small>
                                            </div>
                                        </div>
                                    </a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification">
                                            <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You
                                                have
                                                2 followers
                                            </div>
                                            <div class="notification-time">
                                                <small>4 minutes ago</small>
                                            </div>
                                        </div>
                                    </a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification">
                                            <div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server
                                                Rebooted
                                            </div>
                                            <div class="notification-time">
                                                <small>4 minutes ago</small>
                                            </div>
                                        </div>
                                    </a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification">
                                            <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You
                                                have
                                                2 followers
                                            </div>
                                            <div class="notification-time">
                                                <small>10 minutes ago</small>
                                            </div>
                                        </div>
                                    </a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">
                                        <strong>view all notifications </strong></a></li>
                            </ul>
                        </li>
                        <!-- Messages                        -->
                        <li class="nav-item dropdown"><a id="messages" rel="nofollow" data-target="#" href="#"
                                                         data-toggle="dropdown" aria-haspopup="true"
                                                         aria-expanded="false" class="nav-link"><i
                                        class="fa fa-envelope-o"></i><span
                                        class="badge bg-orange badge-corner">10</span></a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                        <div class="msg-profile"><img
                                                    src="<?= base_url('ressources/avatars/'); ?>eliemwez.webp"
                                                    alt="..."
                                                    class="img-fluid rounded-circle h-100 w-100"></div>
                                        <div class="msg-body">
                                            <h3 class="h5">Elie Mwez </h3><span>Sent You Message</span>
                                        </div>
                                    </a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                        <div class="msg-profile"><img
                                                    src="<?= base_url('ressources/avatars/'); ?>emarruchi.webp"
                                                    alt="..."
                                                    class="img-fluid rounded-circle h-100 w-100"></div>
                                        <div class="msg-body">
                                            <h3 class="h5">Emar Ruchi </h3><span>Sent You Message</span>
                                        </div>
                                    </a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                        <div class="msg-profile"><img
                                                    src="<?= base_url('ressources/security/'); ?>img/avatar-1.jpg"
                                                    alt="..."
                                                    class="img-fluid rounded-circle"></div>
                                        <div class="msg-body">
                                            <h3 class="h5">Jason Doe</h3><span>Sent You Message</span>
                                        </div>
                                    </a></li>

                                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                        <div class="msg-profile"><img
                                                    src="<?= base_url('ressources/security/'); ?>img/avatar-2.jpg"
                                                    alt="..."
                                                    class="img-fluid rounded-circle "></div>
                                        <div class="msg-body">
                                            <h3 class="h5">Frank Williams</h3><span>Sent You Message</span>
                                        </div>
                                    </a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                        <div class="msg-profile"><img
                                                    src="<?= base_url('ressources/security/'); ?>img/avatar-3.jpg"
                                                    alt="..."
                                                    class="img-fluid rounded-circle"></div>
                                        <div class="msg-body">
                                            <h3 class="h5">Ashley Wood</h3><span>Sent You Message</span>
                                        </div>
                                    </a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">
                                        <strong>Read all messages </strong></a></li>
                            </ul>
                        </li>
                        <!-- Languages dropdown    -->
                        <li class="nav-item dropdown">
                            <a id="languages" rel="nofollow" data-target="#" href="#"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                               class="nav-link language dropdown-toggle">
                                <img src="<?= base_url('ressources/security/'); ?>img/flags/16/GB.png"
                                     alt="English"><span
                                        class="d-none d-sm-inline-block">English</span></a>
                            <ul aria-labelledby="languages" class="dropdown-menu">
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <img src="<?= base_url('ressources/security/'); ?>img/flags/16/DE.png"
                                             alt="English" class="mr-2">Portugal</a>
                                </li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <img src="<?= base_url('ressources/security/'); ?>img/flags/16/FR.png"
                                             alt="English" class="mr-2">French
                                    </a></li>
                            </ul>
                        </li>
                        <!-- Logout    -->
                        <li class="nav-item">
                            <a href="<?= base_url('pages/logout'); ?>" class="nav-link logout"
                               onclick="return confirm('Voulez-vous vraiment fermer cette session ? notez que toutes les opéations encours seront annulées') ">
                                <span class="d-none d-sm-inline">Se deconnecter</span><i class="fa fa-sign-out"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar mt-4 pt-4">
            <!-- Sidebar Header-->
            <div class="sidebar-header d-flex align-items-center">

                <div class="avatar">
                    <img src="<?= base_url('ressources/mdb/img/'); ?>avatar.png"
                         alt="Avatars" class="img-fluid rounded-circle h-100 w-100">
                </div>
                <div class="title">
                    <h1 class="h5 text-capitalize"><a href="">
                            <?= $this->session->fullname; ?> </a>
                    </h1>
                    <p class="text-capitalize"><?= $this->session->fonction; ?></p>
                </div>

            </div>
            <!-- Sidebar Navidation Menus-->
            <span class="heading">Main</span>
            <ul class="list-unstyled">
                <li class="<?php echo (uri_string() == 'pages/view/home') ? "active" : ""; ?>">
                    <a href="<?= base_url('pages/view/home'); ?>"> <i class="icon-home"></i>Vue d'ensemble</a>
                </li>

                <li class="<?php echo (uri_string() == 'pages/view/commandes') ? "active" : ""; ?>">
                    <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i
                                class="icon-interface-windows"></i>Consultation</a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="<?= base_url('pages/fichesMalades'); ?>">Fiches Malades (Femmes)</a></li>
                        <li><a href="<?= base_url('pages/ordonancesMedicales'); ?>">Ordonances medicales</a></li>
                        <li><a href="<?= base_url('pages/examensLaboratoire'); ?>">Examens de laboratoire</a></li>
                    </ul>
                </li>

                <li class="<?php echo (uri_string() == 'pages/ordonances' || uri_string() == 'pages/prescriptions') ? "active" : ""; ?>">
                    <a href="#exampledropdownDropdown2" aria-expanded="false" data-toggle="collapse"> <i
                                class="icon-interface-windows"></i>Prescriptions medicales</a>
                    <ul id="exampledropdownDropdown2" class="collapse list-unstyled ">
                        <li><a href="<?= base_url('pages/ordonances'); ?>">Ordonances medicales</a></li>
                        <li><a href="<?= base_url('pages/prescriptions'); ?>">Ajouter un produit a l'ordonance</a></li>
                        <li class="<?php echo (uri_string() == 'pages/medicaments') ? "active" : ""; ?>">
                            <a href="<?= base_url('pages/medicaments'); ?>"> <i class="icon-list"></i>Medicaments</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <span class="heading">Impressions des documents</span>
            <ul class="list-unstyled">
                <li class="<?php echo (uri_string() == 'pages/printFiches' || uri_string() == 'pages/printConsultations' ||
                    uri_string() == 'pages/printOrdonances' || uri_string() == 'pages/printExamens') ? "active" : ""; ?>">
                    <a href="#exampledropdownDropdownReports" aria-expanded="false" data-toggle="collapse"> <i
                                class="icon-interface-windows"></i>Impressions</a>
                    <ul id="exampledropdownDropdownReports" class="collapse list-unstyled ">
                        <li><a href="<?= base_url('pages/printFiches'); ?>">Fiches medicales</a></li>
                        <li><a href="<?= base_url('pages/printConsultations'); ?>">Consultations du medecin</a></li>
                        <li><a href="<?= base_url('pages/printOrdonances'); ?>">Ordonnances</a></li>
                        <li><a href="<?= base_url('pages/printExamens'); ?>">Resultats d'analyse examens</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="content-inner">
            <!-- Heading -->