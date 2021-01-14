<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Users SANTEZA - Management Application</title>

    <!-- Font Awesome -->
    <!-- icon -->
    <link rel="icon" href="<?= base_url('ressources/') ?>logo/shopiza.png">

    <!-- Bootstrap core CSS for mobile adaptation-->
    <link href="<?= base_url('ressources/mdb/') ?>plugins/css/main.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <!-- Font Awesome -->
    <link href="<?= base_url('ressources/mdb/'); ?>font/fa/fa.css" rel="stylesheet">
    <link href="<?= base_url('ressources/mdb/'); ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->

    <link href="<?= base_url('ressources/mdb/'); ?>css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?= base_url('ressources/mdb/'); ?>css/style.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?= base_url('ressources/mdb/') ?>addons/datatables.min.css" rel="stylesheet">
    <!-- DataTables Select CSS -->
    <link href="<?= base_url('resources/mdb/') ?>addons/datatables-select.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css"
          href="<?= base_url('ressources/mdb/') ?>css/plugins/bootstrap4.1.3/daterangepicker.css"/>

    <style>

        .map-container {
            overflow: hidden;
            padding-bottom: 56.25%;
            position: relative;
            height: 0;
        }

        .map-container iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }
    </style>

    <?php
    //grocery CRUD librairie
    if (isset($output)) {
        foreach ($css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>"/>
        <?php endforeach;
    } ?>

</head>

<body class="app sidebar-mini rtl">

<!--Main Navigation-->
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md fixed-top app-header navbar-light white">

        <div class="container-fluid">
            <div class="d-lg-none d-md-block">
                <a class="navbar-brand font-weight-bold" href="<?php echo base_url('pages/view/home'); ?>">
                    <img src="<?= base_url('ressources/') ?>logo/digitafriza.png" alt="Santeza - Digitafriza"
                         style=" width: 120px!important;">
                </a>
            </div>
            <!-- Collapse -->

            <a class="navbar-toggler app-sidebar__toggle" type="button" data-toggle="sidebar" href=""
               aria-label="Hide Sidebar" data-target="#navbarSupportedContent">
                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                </button>
            </a>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a href="<?php echo base_url('pages/view/home'); ?>"
                           class="nav-link waves-effect font-weight-bold h5 <?php echo (uri_string() == 'pages/view/home') ? "active" : ""; ?>">
                            Tableau de bord</a>
                    </li>

                </ul>

                <!-- Right -->
                <ul class="navbar-nav">

                    <li class="btn-group nav-item">
                        <a class="nav-link font-weight-bold" href=""
                           data-toggle="modal" data-target="#fluidModalRightSuccessDemo">
                            <i class="nav-link-icon fa fa-cog"></i>
                            Guide
                        </a>
                    </li>
                    <li class="btn-group nav-item">
                        <a class="nav-link font-weight-bold" href=""
                           data-toggle="modal"
                           data-target="#modalContactForm">
                            <i class="nav-link-icon fa fa-question-circle"></i>
                            Support
                        </a>
                    </li>
                    <li data-toggle="tooltip" data-placement="bottom" class="nav-item dropdown btn-group">
                        <a class="nav-link waves-effect app-nav__item dropdown-toggle" href="#"
                           data-toggle="dropdown">
                            <i class="fa fa-user"></i>
                            <span class="text-capitalize font-weight-bold">
                                    <?= $this->session->fullname ?></span>
                        </a>
                        <ul class="dropdown-menu settings-menu dropdown-menu-right">
                            <li class="dropdown-item">
                                <a href="<?php echo base_url('pages/view/home'); ?>"
                                   class="waves-effect text-center mt-3 pt-3">
                                    <img src="<?= base_url('ressources/mdb/') ?>img/avatar.png" alt="Logo App"
                                         class="img-fluid w-50 h-50">
                                    <br>
                                    <span class="text-capitalize font-weight-bold text-dark">
                                         <?= $this->session->fullname ?></span> <br>
                                    <span class="text-lowercase font-weight-bold text-dark">
                                         <?= $this->session->email ?></span> <br>
                                    <span class="small font-weight-bold text-capitalize ">
                                            <?= $this->session->type ?></span>
                                </a>
                            </li>

                            <li class="dropdown-item">
                                <a tabindex="0" class="btn btn-link"
                                   href="<?= base_url('admin/logout'); ?>">
                                    Deconnexion
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- Navbar -->
    <!-- Sidebar -->

    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="position-fixed app-sidebar white fixed-top mt-0 pt-0" id="sidebar">
        <div class="mt-1 pt-1">
            <a href="<?php echo base_url('pages/view/home'); ?>" class="waves-effect text-center">
                <img src="<?= base_url('ressources/mdb/') ?>img/avatar.png" alt="Logo App"
                     class="img-fluid w-50 h-50">
                <br>
                <span class="text-capitalize font-weight-bold text-dark">
        <?= $this->session->fullname ?></span> <br>
                <span class="text-capitalize grey-text font-weight-bold small ">
         <?= $this->session->groupe ?></span>
            </a>
        </div>

        <div class="list-group list-group-flush">
            <h5 class="grey-text mt-2 pt-2 ml-2  font-weight-bold ">Menu</h5>
            <!-- Preferences rubrique -->
            <a href="<?php echo base_url('pages/view/home'); ?>"
               class="list-group-item list-group-item-action waves-effect small
           <?= (uri_string() == 'pages/view/home') ? "active" : ""; ?>">
                <i class="fa fa-dashboard"></i> <strong> Vue d'ensemble</strong></a>
            <?php
            if ($this->session->groupe == "receptionniste" || $this->session->groupe == "infirmier") {
                ?>
                <a href="<?= base_url('pages/fichesMalades'); ?>"
                   class="list-group-item list-group-item-action waves-effect small
                <?= (uri_string() == 'pages/fichesMalades') ? "active" : ""; ?>">Fiches Patients</a>
            
            <a href="<?= base_url('pages/demandesRendezVous'); ?>"
                   class="list-group-item list-group-item-action waves-effect small
                <?= (uri_string() == 'pages/demandesRendezVous') ? "active" : ""; ?>">Demandes Rendez-vous</a>

      
            <a href="<?= base_url('pages/horairesMedecin'); ?>"
                   class="list-group-item list-group-item-action waves-effect small
                <?= (uri_string() == 'pages/horairesMedecin') ? "active" : ""; ?>">Horaires Medecins</a>

            <?php } elseif ($this->session->groupe == "medecin" || $this->session->groupe == "laborantin") { ?>
                <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"
                   class="list-group-item list-group-item-action waves-effect small dropdown-toggle
                    <?= ($this->uri->segment(2) == 'listingMalades' || $this->uri->segment(2) == 'examensLaboratoire'
                       || $this->uri->segment(2) == 'consultations') ? "active" : ""; ?>">
                    <i class="fa fa-users"></i> <strong>Cabinets medecins </strong></a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled">
                    <li><a href="<?= base_url('pages/listingMalades'); ?>"
                           class="list-group-item list-group-item-action waves-effect small
                        <?= ($this->uri->segment(2) == 'listingMalades') ? "active" : ""; ?>">
                            Listing Malades
                        </a>
                    </li>
                    <li><a href="<?= base_url('pages/consultations'); ?>"
                           class="list-group-item list-group-item-action waves-effect small
                           <?= ($this->uri->segment(2) == 'consultations') ? "active" : ""; ?>">
                            Enregistrer une consultation
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action waves-effect small
                        <?= ($this->uri->segment(2) == 'examensLaboratoire') ? "active" : ""; ?>"
                           href="<?= base_url('pages/examensLaboratoire'); ?>">Examens de laboratoire</a></li>
                </ul>

                <a href="#exampledropdownDropdown2" aria-expanded="false" data-toggle="collapse"
                   class="list-group-item list-group-item-action waves-effect small dropdown-toggle
                    <?= ($this->uri->segment(2) == 'ordonances' || $this->uri->segment(2) == 'prescriptions'
                       || $this->uri->segment(2) == 'medicaments') ? "active" : ""; ?>"> <i
                            class="fa fa-folder-open"></i>
                    <strong>Prescriptions medicales</strong>
                </a>
                <ul id="exampledropdownDropdown2" class="collapse list-unstyled ">
                    <li><a href="<?= base_url('pages/ordonances'); ?>"
                           class="list-group-item list-group-item-action waves-effect small <?= (uri_string() == 'pages/ordonances') ? "active" : ""; ?>">Ordonances
                            medicales</a>
                    </li>
                    <li><a href="<?= base_url('pages/prescriptions'); ?>"
                           class="list-group-item list-group-item-action waves-effect small <?= (uri_string() == 'pages/prescriptions') ? "active" : ""; ?>">Ajouter
                            un produit a
                            l'ordonance</a></li>
                    <li>
                        <a href="<?= base_url('pages/medicaments'); ?>"
                           class="list-group-item list-group-item-action waves-effect small
                            <?= (uri_string() == 'pages/medicaments') ? "active" : ""; ?>"> <i class="icon-list"></i>Medicaments</a>
                    </li>
                </ul>
            <?php } ?>


            <a href="#exampledropdownDropdownReports" aria-expanded="false" data-toggle="collapse"
               class="list-group-item list-group-item-action waves-effect small dropdown-toggle
                <?= (uri_string() == 'pages/printFiches' || uri_string() == 'pages/printOrdonances'
                   || uri_string() == 'pages/printConsultations' || uri_string() == 'pages/printExamens') ? "active" : ""; ?>">
                <i class="fa fa-print"></i>
                <strong>Impressions</strong></a>
            <ul id="exampledropdownDropdownReports" class="collapse list-unstyled ">
                <li><a href="<?= base_url('pages/printFiches'); ?>"
                       class="list-group-item list-group-item-action waves-effect small
                <?= (uri_string() == 'pages/printFiches') ? "active" : ""; ?>">Fiches malades</a></li>
                <li><a href="<?= base_url('pages/printConsultations'); ?>"
                       class="list-group-item list-group-item-action waves-effect small
                <?= (uri_string() == 'pages/printConsultations') ? "active" : ""; ?>">Consultations du medecin</a>
                </li>
                <li><a href="<?= base_url('pages/printOrdonances'); ?>"
                       class="list-group-item list-group-item-action waves-effect small
                <?= (uri_string() == 'pages/printOrdonances') ? "active" : ""; ?>">Ordonnances medicales</a></li>
                <li><a href="<?= base_url('pages/printExamens'); ?>"
                       class="list-group-item list-group-item-action waves-effect small
                <?= (uri_string() == 'pages/printExamens') ? "active" : ""; ?>">Resultats d'analyse examens</a>
                </li>
            </ul>


            <div class="dropdown">
                <a class="list-group-item list-group-item-action dropdown-toggle small"
                   id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    <i class="fa fa-gears"></i> <strong>Preferences</strong></a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item font-weight-bold small <?php echo (uri_string() == 'pages/monCompte') ? "active" : ""; ?>"
                       href="<?php echo base_url('pages/monCompte'); ?>">
                        <i class="nav-link-icon fa fa-edit"></i> Mon compte</a>

                    <div class="d-lg-none">
                        <a class="dropdown-item font-weight-bold small" href=""
                           data-toggle="modal" data-target="#fluidModalRightSuccessDemo">
                            <i class="nav-link-icon fa fa-cog"></i>
                            Guide utilisateur
                        </a>

                        <a class="dropdown-item font-weight-bold small" href=""
                           data-toggle="modal"
                           data-target="#modalContactForm">
                            <i class="nav-link-icon fa fa-question-circle"></i>
                            Support technique
                        </a>
                    </div>

                </div>
            </div>

            <!-- Fermeture de la session -->
            <a href="<?php echo base_url('pages/logout'); ?>"
               class="list-group-item list-group-item-action waves-effect small"
               onclick="return confirm('Voulez-vous vraiment fermer votre session administrateur ? ' +
                'notez que toutes les opéations encours seront annulées') ">
                <i class="fa fa-lock"></i> <strong>Deconnexion</strong></a>
        </div>
    </aside>
    <!-- Sidebar -->
</header>
<!--Main layout-->
<main class="pt-5 mt-5">
    <div class="container-fluid">
        <!-- Heading -->
        <ul class="app-breadcrumb breadcrumb text-capitalize">
            <li class="breadcrumb-item font-weight-bold"><a href="<?php echo base_url('admin'); ?>">Accueil</a></li>
            <?php
            if ($this->uri->segment(3) != '') {
                ?>
                <li class="breadcrumb-item font-weight-bold">
                    <a href="<?= base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2); ?>"><?= $this->uri->segment(2) ?> </a>
                </li>
                <li class="breadcrumb-item disabled" disabled><?= $this->uri->segment(3) ?></li>
            <?php } else { ?>
                <li class="breadcrumb-item disabled" disabled><?= $this->uri->segment(2) ?></li>
            <?php } ?>
        </ul>

        <!-- page content -->
        <?php
        if ((isset($_SESSION['success'])) OR (isset($_SESSION['error']))) { ?>
            <div class="container">
                <h6 class="text-dark">
                    <?php include_once "application/views/alertes/alert-index.php"; ?>
                </h6>
            </div>
        <?php } ?>
        <!-- include the view -->
        <?php

        if (isset($view)) {
            $this->load->view($view);
        }
        if (isset($output)) { ?>
            <div style='height:20px;'></div>
            <div style="padding: 10px">
                <?php echo $output; ?>
            </div>
        <?php } ?>
    </div>
</main>
<!--Main layout-->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer class="page-footer font-small unique-color-dark darken-2 mt-5">
    <!-- Social icons -->
    <div class="footer-copyright py-3">
        <div class="float-left text-left ml-3">
            <small>Consultation prenatale<br>
                Hopital Gecamines SUD<br>
                Republique Democratique du Congo.
            </small>
        </div>
        <div class="text-right">

            <small>Powered by <a href="https://digitafriza.congoagile.com" target="_blank">Digitafriza Teams</a>.
                Solutions informatiques !
            </small>
            <br>
            <small>
                © 2020 -
                <script>document.write(new Date().getFullYear());</script>
                | Santeza et son logo sont des marques déposées de <a href="https://www.digitafriza.com">Digitafriza,
                    Inc.</a>
            </small>
            <br>
            <small>Validate and authorized by <a href="https://www.congoagile.com" target="_blank">Congo Agile
                    Foundation.</a></small>
        </div>
    </div>
    <!--/.Copyright-->
    <!-- Social icons -->
</footer>

<div class="modal fade right" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-right modal-notify modal-info text-light modal-full-height" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="heading lead font-weight-bold text-uppercase">Ecrivez-nous</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
            $tb = mb_split("/", current_url());
            $redirect = "";
            for ($i = 2; $i < count($tb); $i++) {
                $redirect = $redirect . $tb[$i] . "/";
            }
            ?>
            <form class="" action="<?= base_url() . 'admin/aide_super_admin'; ?>" method="post">

                <div class="modal-body">
                    <div class="md-form">
                        <i class="fas fa-user prefix grey-text"></i>
                        <input type="text" id="form34" name="name" class="form-control validate text-capitalize"
                               value=" <?= $this->session->fullname ?>">
                        <label data-error="nom invalide" data-success="correct" for="form34">Votre nom complet</label>
                    </div>

                    <div class="md-form mb-5">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <input type="email" id="form29" name="email" class="form-control validate"
                               value=" <?= $this->session->email ?>">
                        <label data-error="Votre addresse email est incorrecte" data-success="correct" for="form29">Votre
                            adresse email</label>
                    </div>
                    <!---->
                    <div class="md-form mb-5">
                        <i class="fas fa-tag prefix grey-text"></i>
                        <input type="text" id="form32" name="subject" class="form-control validate">
                        <label data-error="" data-success="correct" for="form32">Sujet</label>
                    </div>
                    <!---->
                    <div class="md-form">
                        <i class="fa fa-pencil prefix grey-text"></i>
                        <textarea type="text" id="form8" name="issue" class="md-textarea form-control"
                                  rows="4"></textarea>
                        <label data-error="" data-success="correct" for="form8">Decrivez votre problème</label>
                    </div>

                </div>
                <div class="modal-footer d-flex">
                    <input type="submit" class="btn btn-danger btn-block" value="Envoyer">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Full Height Modal Right Success Demo-->
<div class="modal fade right" id="fluidModalRightSuccessDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Guide administrateur</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="card-body">
                    <p class="text-justify">
                        <strong class="font-weight-bold">TokDoc Monganga</strong> est une Application Web
                        conçue pour la gestion de différentes opérations
                        et activités liées au fonctionnement d'un cabinet medical en Republique Democratique du Congo.
                        Nous la mettons à la dispositions des utilisateurs ayant été crées par l'administrateur du site
                        afin qu'ils mettent
                        en ligne les activités de l'entreprise.
                        Pour les mesures d'utilisabilité, nous avons jugé bon de rendre cette application fonctionnelle
                        sur les formats des
                        ecrans des ordinateurs ou bien sur les tablettes ou encore sur vos smartphones.
                        Chaque utilisateur aura devant son écran un affichage personnalisé selon son rôle, cela
                        s'inscrit de nouveau dans les mesures
                        prises pour la sécurité de nos informations.
                        <br><br>
                        Pour commencer, vous devriez à votre première connexion à l'application modifier ou mettre à
                        jour vos informations personnelles
                        et surtout votre mot de passe car l'administrateur vous a octroyé un mot de passe par défaut qui
                        n'est pas sûr et sécurisé.
                        Pour ce faire, vous devez cliquer sur l'option <strong>Mon compte</strong> puis en bas de votre
                        photo de profile vous cliquez sur votre nom,
                        un formulaire devrait s'afficher, et là vous pouvez faire toutes les modifications possibles sur
                        votre compte,
                        enfin vous cliquez sur le bouton <strong>Modifier</strong>. Et voilà le tour sera bien joué.
                        <br><br>
                        Pour les activités de publications, nous tenons à vous informer qu'à chaque fois que vous
                        effectuer une publication,
                        cette dernière ne va pas directement être publiée, elle sera classée dans le brouillon en
                        attendant que le coordonnateur la valide
                        et la publie.
                        Seul le Gestionnaire des activités peut créer, modifier ou supprimer les publications;
                        L'administrateur du site seul est habile d'ajouter de nouveaux utilisateurs et changer leur
                        statut.
                    </p>
                </div>
                <hr>
                <ul class="list-group z-depth-0">
                    <li class="list-group-item justify-content-between">
                        Cras justo odio
                        <span class="badge badge-primary badge-pill">14</span>
                    </li>
                    <li class="list-group-item justify-content-between">
                        Dapibus ac facilisis in
                        <span class="badge badge-primary badge-pill">2</span>
                    </li>
                    <li class="list-group-item justify-content-between">
                        Morbi leo risus
                        <span class="badge badge-primary badge-pill">1</span>
                    </li>
                </ul>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Full Height Modal Right Success Demo-->
<?php
if (isset($output)) {
foreach ($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
<?php endforeach;
}else{ ?>
    <!-- JQuery -->
    <script type="text/javascript" src="<?= base_url('ressources/mdb/') ?>js/jquery-3.4.1.min.js"></script>
<?php } ?>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?= base_url('ressources/mdb/') ?>js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?= base_url('ressources/mdb/') ?>js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?= base_url('ressources/mdb/') ?>js/mdb.min.js"></script>

<script type="text/javascript" src="<?= base_url('ressources/mdb/') ?>plugins/js/main.js"></script>
<script type="text/javascript" src="<?= base_url('ressources/mdb/') ?>plugins/js/alert.js"></script>
<script type="text/javascript" src="<?= base_url('ressources/mdb/') ?>plugins/js/alert-index.js"></script>
<script type="text/javascript" src="<?= base_url('ressources/mdb/') ?>plugins/js/select2.min.js"></script>

<script>
    $(function () {
        // Summernote
        $('.textarea').summernote()
    })
</script>
<!-- Initializations -->
<script type="text/javascript">
    // Animations initialization
    new WOW().init();

    //for mobile navigation in the sidebar
    $(document).ready(function () {
        // SideNav Button Initialization
        $(".button-collapse").sideNav();
        // SideNav Scrollbar Initialization
        var sideNavScrollbar = document.querySelector('.custom-scrollbar');
        var ps = new PerfectScrollbar(sideNavScrollbar);
    });
    $(document).ready(function () {
        // Show sideNav
        $('.button-collapse').sideNav('show');
        // Hide sideNav
        $('.button-collapse').sideNav('hide');
    });
</script>


<!--Google Maps-->
<script src="https://maps.google.com/maps/api/js"></script>
<script>
    // Regular map
    function regular_map() {
        var var_location = new google.maps.LatLng(40.725118, -73.997699);

        var var_mapoptions = {
            center: var_location,
            zoom: 14
        };

        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);

        var var_marker = new google.maps.Marker({
            position: var_location,
            map: var_map,
            title: "New York"
        });
    }

    new Chart(document.getElementById("horizontalBar"), {
        "type": "horizontalBar",
        "data": {
            "labels": ["Red", "Orange", "Yellow", "Green", "Blue", "Purple", "Grey"],
            "datasets": [{
                "label": "My First Dataset",
                "data": [22, 33, 55, 12, 86, 23, 14],
                "fill": false,
                "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)",
                    "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)",
                    "rgba(54, 162, 235, 0.2)",
                    "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"
                ],
                "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)",
                    "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)",
                    "rgb(201, 203, 207)"
                ],
                "borderWidth": 1
            }]
        },
        "options": {
            "scales": {
                "xAxes": [{
                    "ticks": {
                        "beginAtZero": true
                    }
                }]
            }
        }
    });
    // Material Design example
    $(document).ready(function () {
        $('#dtMaterialDesignExample').DataTable();
        $('#dtMaterialDesignExample_wrapper').find('label').each(function () {
            $(this).parent().append($(this).children());
        });
        $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('input').each(function () {
            const $this = $(this);
            $this.attr("placeholder", "Recherche ...");
            $this.className("form-control-lg");
            $this.removeClass('form-control-sm');
        });
        $('#dtMaterialDesignExample_wrapper .dataTables_length').addClass('d-flex flex-row');
        $('#dtMaterialDesignExample_wrapper .dataTables_filter').addClass('md-form');
        $('#dtMaterialDesignExample_wrapper select').removeClass(
            'custom-select custom-select-sm form-control form-control-sm');
        $('#dtMaterialDesignExample_wrapper select').addClass('mdb-select');
        $('#dtMaterialDesignExample_wrapper .mdb-select').materialSelect();
        $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('label').remove();
    });
    $('#demoDate').datepicker({
        format: "dd/mm/yyyy",
        autoclose: true,
        todayHighlight: true
    });

    $('#demoSelect').select2();

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'})
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', {'placeholder': 'mm/dd/yyyy'})
    //Money Euro
    $('[data-mask]').inputmask()

</script>
</body>
</html>
