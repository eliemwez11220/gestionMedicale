<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <title><?= $title; ?></title>
    <!-- SEO for website references by research robot -->
    <link rel="canonical" href="https://www.congoagile.com"/>
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>

    <meta name="author" content="Elie Mwez; Rubuz; Congo Agile; Digitafriza;">
    <meta name="keywords"
          content="Hopital; Centre de sante; soins medicaux; Santeza; Digitafriza; Congo Agile; Consultation medicale; ">
    <meta property="description"
          content="Santeza - Se soigner autrement grace aux applications intelligentes et sites internet de gestion medicale.
           Developpee par la compagnie Digitafriza, une compgnie de la fondation Congo Agile"/>

    <meta property="og:url" href="<?= base_url() . $page; ?>"/>
    <meta property="og:site_name"
          content="Santeza - Apps et sites internet de gestion medicale"/>
    <meta property="og:title"
          content="Santeza - Se soigner autrement grace aux applications intelligentes et sites internet de gestion medicale.
          Developpee par la compagnie Digitafriza, une compgnie de la fondation Congo Agile"/>

    <meta property="og:description"
          content="Santeza - Se soigner autrement grace aux applications intelligentes et sites internet de gestion medicale.  Developpee par la compagnie Digitafriza
                    , une compgnie de la fondation Congo Agile. Une plateforme qui regorge des milliers d'applications et sites internet de
                        gestion medicale. Consultation en ligne"/>
    <meta property="og:image" content="<?= base_url('ressources/'); ?>logo/santeza.jpg">
    <meta property="og:locale" content="fr_FR"/>
    <meta property="og:type" content="website"/>

    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="www.congoagile.com">
    <meta name="twitter:creator" content="@eliemwez">
    <meta name="twitter:title" content="Congo Agile Foundation in République démocratique du Congo, ville de Lubumbasshi, province du Haut-Katanga |
    Vous servir est notre devoir."/>
    <meta name="twitter:description"
          content="Congo Agile Foundation in République démocratique du Congo, ville de Lubumbasshi, province du Haut-Katanga"/>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="shortcut icon" href="<?= base_url('ressources/security/'); ?>logo/favicon.png">
    <link rel="stylesheet" href="<?= base_url('ressources/medico/'); ?>css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('ressources/medico/'); ?>css/animate.css">

    <link rel="stylesheet" href="<?= base_url('ressources/medico/'); ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('ressources/medico/'); ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('ressources/medico/'); ?>css/magnific-popup.css">

    <link rel="stylesheet" href="<?= base_url('ressources/medico/'); ?>css/aos.css">

    <link rel="stylesheet" href="<?= base_url('ressources/medico/'); ?>css/ionicons.min.css">

    <link rel="stylesheet" href="<?= base_url('ressources/medico/'); ?>css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url('ressources/medico/'); ?>css/icomoon.css">
    <link rel="stylesheet" href="<?= base_url('ressources/medico/'); ?>css/style.css">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<div class="py-1 bg-black top">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center">
                            <span class="icon-phone2"></span>
                        </div>
                        <a href="tel:+243977090011" class="text text-light">+243 977 090 011</a>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center">
                            <span class="icon-paper-plane"></span></div>
                        <span class="text">
                                <a href="mailto:contact@congoagile.com" class="text-light">contact@congoagile.com</a>
                            </span>
                    </div>
                    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                        <p class="mb-0 register-link">
                            <a href="https://wa.me/243858533285?text=bonjour" class="mr-3">
                                <i class="icon-whatsapp"></i>+243858533285</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target"
     id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>">
            <img src="<?= base_url('ressources/'); ?>logo/santeza.png"
                 alt="santeza" style="height: 60px!important; width: 100px!important;">
        </a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
                data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span>
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
               
                <li class="nav-item"><a href="#about-section" class="nav-link"><span>A propos</span></a></li>
                <li class="nav-item"><a href="#department-section" class="nav-link"><span>Services</span></a></li>
                <li class="nav-item"><a href="#doctor-section" class="nav-link"><span>Praticiens</span></a></li>
                <li class="nav-item"><a href="#blog-section" class="nav-link"><span>Nos Activites</span></a></li>
                <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
                <li class="nav-item cta mr-md-2"><a href="<?= base_url('consultation'); ?>" class="nav-link">Consultation</a>
                </li>
            </ul>
            <ul class="navbar-brand navbar-nav">
              
                <li class="nav-item mr-md-2">
                    <a href="<?= base_url('login'); ?>" class="nav-link border-primary">Se connecter</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero-wrap js-fullheight"
         style="background-image: url('<?= base_url('assets/uploads/'); ?>images/bg_3.jpg');" data-section="home"
         data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
             data-scrollax-parent="true">
            <div class="col-md-6 pt-5 ftco-animate">
                <div class="mt-5">
                    <span class="subheading">Bienvenue chez Santeza Mediplus</span>
                    <h1 class="mb-4">Nous sommes là <br> pour votre santé</h1>
                    <p class="mb-4">
                        La consultation prenatale est un service que nou tenons à aider les femmes pour leurs bien-être.
                    </p>
                    <p><a href="<?= base_url('consultation'); ?>" class="btn btn-primary py-3 px-4">Demander une consultation</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 col-lg-5 d-flex">
                <div class="img d-flex align-self-stretch align-items-center"
                     style="background-image:url(<?= base_url('assets/uploads/'); ?>images/about.jpg);">
                </div>
            </div>
            <div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
                <div class="py-md-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
                            <h2 class="mb-4">Nous sommes <span>Santeza Mediplus, </span> une clinique medicale
                            située à dans la ville de Lubumbashi en République Démocratique du Congo.</h2>
                            <p>
                                Notre clinique medicale accueil plusieurs femmes enceintes pour une consultation prenatale de qualité.
                                Nous sommes au coeur de toute consultation prenatale. Passer à notre clinique ou demander tout simplement
                                une consultation rapide.
                            </p>
                            <p><a href="<?= base_url('consultation'); ?>" class="btn btn-primary py-3 px-4">une consultation</a>
                                <a href="<?= base_url('register'); ?>" class="btn btn-secondary py-3 px-4">Contact
                                    us</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-7 py-5">
                <div class="py-lg-5">
                    <div class="row justify-content-center pb-5">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h2 class="mb-3">Nos Services</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services d-flex">
                                <div class="icon justify-content-center align-items-center d-flex"><span
                                            class="flaticon-ambulance"></span></div>
                                <div class="media-body pl-md-4">
                                    <h3 class="heading mb-3">Emergency Services</h3>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary
                                        regelialia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services d-flex">
                                <div class="icon justify-content-center align-items-center d-flex"><span
                                            class="flaticon-doctor"></span></div>
                                <div class="media-body pl-md-4">
                                    <h3 class="heading mb-3">Qualified Doctors</h3>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary
                                        regelialia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services d-flex">
                                <div class="icon justify-content-center align-items-center d-flex"><span
                                            class="flaticon-stethoscope"></span></div>
                                <div class="media-body pl-md-4">
                                    <h3 class="heading mb-3">Outdoors Checkup</h3>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary
                                        regelialia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services d-flex">
                                <div class="icon justify-content-center align-items-center d-flex"><span
                                            class="flaticon-24-hours"></span></div>
                                <div class="media-body pl-md-4">
                                    <h3 class="heading mb-3">24 Hours Service</h3>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary
                                        regelialia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 d-flex">
                <div class="appointment-wrap bg-white p-4 p-md-5 d-flex align-items-center">
                         <form action="<?= base_url('security/saveAppointment'); ?>" class="appointment-form ftco-animate" method="post">
                        <h3>Consultation gratuite</h3>
                        <div class="">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nom" name="first_name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Prenom" name="last_name" required>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="service_rdv" id="service" class="form-control" required>
                                            <option disabled selected>Selectionnez un Service</option>
                                            <option>Neurologie</option>
                                            <option>Cardiologie</option>
                                            <option>Dental</option>
                                            <option>Ophthalmologie</option>
                                            <option>CPN</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Numero telephone" name="phone_malade" required>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-md-calendar"></span></div>
                                    <input type="date" class="form-control appointment_date" placeholder="Date de consultation" name="date_rdv">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-ios-clock"></span></div>
                                    <input type="time" class="form-control appointment_time" placeholder="Heure" value="<?= date('H:i'); ?>" name="heure_rdv">
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group">
                                <textarea name="motif_rdv" id="message" cols="30" rows="2" class="form-control"
                                          placeholder="Motif de consultation"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Envoyer ma demande" class="btn btn-secondary py-3 px-4">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-intro img" style="background-image: url(<?= base_url('assets/uploads/'); ?>images/bg_2.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 text-center">
                <h2>Avec Santeza Mediplus, votre santé est notre priorité</h2>
                <p>
                    Notre clinique medicale accueil plusieurs femmes enceintes pour une consultation prenatale de qualité.
                Nous sommes au coeur de toute consultation prenatale. Passer à notre clinique ou demander tout simplement
                une consultation rapide.
                </p><p class="mb-0">
               <a href="<?= base_url('consultation'); ?>" class="btn btn-white px-4 py-3">Demander une demo</a></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb" id="department-section">
    <div class="container-fluid px-0">
        <div class="row no-gutters">
            <div class="col-md-4 d-flex">
                <div class="img img-dept align-self-stretch"
                     style="background-image: url(<?= base_url('assets/uploads/'); ?>images/dept-1.jpg);"></div>
            </div>

            <div class="col-md-8">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <div class="department-wrap p-4 ftco-animate">
                            <div class="text p-2 text-center">
                                <div class="icon">
                                    <span class="flaticon-stethoscope"></span>
                                </div>
                                <h3><a href="#">Neurology</a></h3>
                                <p>Far far away, behind the word mountains</p>
                            </div>
                        </div>
                        <div class="department-wrap p-4 ftco-animate">
                            <div class="text p-2 text-center">
                                <div class="icon">
                                    <span class="flaticon-stethoscope"></span>
                                </div>
                                <h3><a href="#">Surgical</a></h3>
                                <p>Far far away, behind the word mountains</p>
                            </div>
                        </div>
                        <div class="department-wrap p-4 ftco-animate">
                            <div class="text p-2 text-center">
                                <div class="icon">
                                    <span class="flaticon-stethoscope"></span>
                                </div>
                                <h3><a href="#">Dental</a></h3>
                                <p>Far far away, behind the word mountains</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="department-wrap p-4 ftco-animate">
                            <div class="text p-2 text-center">
                                <div class="icon">
                                    <span class="flaticon-stethoscope"></span>
                                </div>
                                <h3><a href="#">Opthalmology</a></h3>
                                <p>Far far away, behind the word mountains</p>
                            </div>
                        </div>
                        <div class="department-wrap p-4 ftco-animate">
                            <div class="text p-2 text-center">
                                <div class="icon">
                                    <span class="flaticon-stethoscope"></span>
                                </div>
                                <h3><a href="#">Cardiology</a></h3>
                                <p>Far far away, behind the word mountains</p>
                            </div>
                        </div>
                        <div class="department-wrap p-4 ftco-animate">
                            <div class="text p-2 text-center">
                                <div class="icon">
                                    <span class="flaticon-stethoscope"></span>
                                </div>
                                <h3><a href="#">Traumatology</a></h3>
                                <p>Far far away, behind the word mountains</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="department-wrap p-4 ftco-animate">
                            <div class="text p-2 text-center">
                                <div class="icon">
                                    <span class="flaticon-stethoscope"></span>
                                </div>
                                <h3><a href="#">Nuclear Magnetic</a></h3>
                                <p>Far far away, behind the word mountains</p>
                            </div>
                        </div>
                        <div class="department-wrap p-4 ftco-animate">
                            <div class="text p-2 text-center">
                                <div class="icon">
                                    <span class="flaticon-stethoscope"></span>
                                </div>
                                <h3><a href="#">X-ray</a></h3>
                                <p>Far far away, behind the word mountains</p>
                            </div>
                        </div>
                        <div class="department-wrap p-4 ftco-animate">
                            <div class="text p-2 text-center">
                                <div class="icon">
                                    <span class="flaticon-stethoscope"></span>
                                </div>
                                <h3><a href="#">Cardiology</a></h3>
                                <p>Far far away, behind the word mountains</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section" id="doctor-section">
    <div class="container-fluid px-5">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4">Nos praticients et docteurs qualifiés</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                    necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                             style="background-image: url(<?= base_url('assets/uploads/'); ?>images/doc-1.jpg);"></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3 class="mb-2">Dr. Lloyd Wilson</h3>
                        <span class="position mb-2">Neurologist</span>
                        <div class="faded">
                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                            <p><a href="<?= base_url('consultation'); ?>" class="btn btn-primary">Consultez-le</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                             style="background-image: url(<?= base_url('assets/uploads/'); ?>images/doc-2.jpg);"></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3 class="mb-2">Dr. Rachel Parker</h3>
                        <span class="position mb-2">Ophthalmologist</span>
                        <div class="faded">
                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                            <p><a href="<?= base_url('consultation'); ?>" class="btn btn-primary">Consultez-le</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                             style="background-image: url(<?= base_url('assets/uploads/'); ?>images/doc-3.jpg);"></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3 class="mb-2">Dr. Ian Smith</h3>
                        <span class="position mb-2">Dentist</span>
                        <div class="faded">
                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                            <p><a href="<?= base_url('consultation'); ?>" class="btn btn-primary">Consultez-le</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                             style="background-image: url(<?= base_url('assets/uploads/'); ?>images/doc-4.jpg);"></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3 class="mb-2">Dr. Alicia Henderson</h3>
                        <span class="position mb-2">Pediatrician</span>
                        <div class="faded">
                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                            <p><a href="<?= base_url('consultation'); ?>" class="btn btn-primary">Consultez-le</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-facts img ftco-counter"
         style="background-image: url(<?= base_url('assets/uploads/'); ?>images/bg_3.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-5 heading-section heading-section-white">
                <span class="subheading">Fun facts</span>
                <h2 class="mb-4">Over 5,100 patients trust us</h2>
                <p class="mb-0"><a href="<?= base_url('consultation'); ?>" class="btn btn-secondary px-4 py-3">
                        Demander une consultation gratuite
                    </a></p>
            </div>
            <div class="col-md-7">
                <div class="row pt-4">
                    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="30">0</strong>
                                <span>Years of Experienced</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="4500">0</strong>
                                <span>Happy Patients</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="84">0</strong>
                                <span>Number of Doctors</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="300">0</strong>
                                <span>Number of Staffs</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--


<section class="ftco-section bg-light" id="blog-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <h2 class="mb-4">Suivez toutes nos activités recentes</h2>
                <p>
                    Notre clinique dispose de meilleurs praticiens professionnels de santé dont vous
                    pouvez être fier de demander une consultation. Tous ce dont vous avez besoin c'est de rejoindre notre clinique.
                </p>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20"
                       style="background-image: url('<?= base_url('assets/uploads/'); ?>images/image_1.jpg');">
                    </a>
                    <div class="text d-block">
                        <div class="meta mb-3">
                            <div><a href="#">June 9, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20"
                       style="background-image: url('<?= base_url('assets/uploads/'); ?>images/image_2.jpg');">
                    </a>
                    <div class="text d-block">
                        <div class="meta mb-3">
                            <div><a href="#">June 9, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20"
                       style="background-image: url('<?= base_url('assets/uploads/'); ?>images/image_3.jpg');">
                    </a>
                    <div class="text d-block">
                        <div class="meta mb-3">
                            <div><a href="#">June 9, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20"
                       style="background-image: url('<?= base_url('assets/uploads/'); ?>images/image_4.jpg');">
                    </a>
                    <div class="text d-block">
                        <div class="meta mb-3">
                            <div><a href="#">June 9, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20"
                       style="background-image: url('<?= base_url('assets/uploads/'); ?>images/image_5.jpg');">
                    </a>
                    <div class="text d-block">
                        <div class="meta mb-3">
                            <div><a href="#">June 9, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20"
                       style="background-image: url('<?= base_url('assets/uploads/'); ?>images/image_6.jpg');">
                    </a>
                    <div class="text d-block">
                        <div class="meta mb-3">
                            <div><a href="#">June 9, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
-->

<section class="ftco-section testimony-section img"
         style="background-image: url(<?= base_url('assets/uploads/'); ?>images/bg_3.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center pb-3">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <span class="subheading"> Temoignages de patients</span>
                <h2 class="mb-4">Ce que disent les autres patients qui ont expérimenté les soins de notre clinique</h2>
            </div>
        </div>
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap text-center py-4 pb-5">
                            <div class="user-img"
                                 style="background-image: url(<?= base_url('assets/uploads/'); ?>images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text px-4">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <p class="name">Jeff Freshman</p>
                                <span class="position">Patients</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center py-4 pb-5">
                            <div class="user-img"
                                 style="background-image: url(<?= base_url('assets/uploads/'); ?>images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text px-4">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <p class="name">Jeff Freshman</p>
                                <span class="position">Patients</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center py-4 pb-5">
                            <div class="user-img"
                                 style="background-image: url(<?= base_url('assets/uploads/'); ?>images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text px-4">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <p class="name">Jeff Freshman</p>
                                <span class="position">Patients</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center py-4 pb-5">
                            <div class="user-img"
                                 style="background-image: url(<?= base_url('assets/uploads/'); ?>images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text px-4">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <p class="name">Jeff Freshman</p>
                                <span class="position">Patients</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center py-4 pb-5">
                            <div class="user-img"
                                 style="background-image: url(<?= base_url('assets/uploads/'); ?>images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text px-4">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <p class="name">Jeff Freshman</p>
                                <span class="position">Patients</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4">Contactez-nous</h2>
                <p>
                    Nous sommes là pour vous assister. Faites une demande de consultation auprès de nos praticiens professionnels de santé.
                </p>
            </div>
        </div>
        <div class="row d-flex contact-info mb-5">
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="align-self-stretch box p-4 text-center bg-light">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-map-signs"></span>
                    </div>
                    <h3 class="mb-4">Address</h3>
                    <p>Lubumbashi, Haut-Katanga, République Démocratique du Congo</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="align-self-stretch box p-4 text-center bg-light">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-phone2"></span>
                    </div>
                    <h3 class="mb-4">Contact Number</h3>
                    <p> <i class="icon-phone2"></i> <a href="tel:+243977090011">+243 977 090 011</a></p>
                    <p> <i class="icon-whatsapp"></i> <a href="https://wa.me/243977090011">+243 858 533 285</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="align-self-stretch box p-4 text-center bg-light">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-paper-plane"></span>
                    </div>
                    <h3 class="mb-4">Email Address</h3>
                    <p><a href="mailto:contact@congoagile.com">contact@congoagile.com</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="align-self-stretch box p-4 text-center bg-light">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-globe"></span>
                    </div>
                    <h3 class="mb-4">Website</h3>
                    <p><a href="https://www.congoagile.com">www.congoagile.com</a></p>
                </div>
            </div>
        </div>
        <div class="row no-gutters block-9">
            <div class="col-md-6 order-md-last d-flex">
                <form action="#" class="bg-light p-5 contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control"
                                  placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-secondary py-3 px-5">
                    </div>
                </form>

            </div>

            <div class="col-md-6 d-flex">
                <div id="map" class="bg-white"></div>
            </div>
        </div>
    </div>
</section>

<footer class="ftco-footer ftco-section img"
        style="background-image: url(<?= base_url('assets/uploads/'); ?>images/footer-bg.jpg);">
    <div class="overlay"></div>
    <div class="container-fluid px-md-5">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Santeza Mediplus</h2>
                    <p>Se faire soigner autrement. Une consultation gratuite et rapide</p>
                    <ul class="ftco-footer-social list-unstyled mt-5">
                        <li class="ftco-animate"><a href="https://twitter.com/elierubuz"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="https://fb.me/eliemwezrubuz"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="https://instagram.com/eliemwezrubuz"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Departments</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Neurology</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Opthalmology</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Nuclear Magnetic</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Surgical</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Cardiology</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Dental</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Liens rapide</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Departments</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Doctors</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Blog</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Pricing</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Services</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Emergency Services</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Qualified Doctors</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Outdoors Checkup</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>24 Hours Services</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Avez-vous des Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">
                                    Lubumbashi, Haut-Katanga, République Démocratique du Congo.</span>
                            </li>
                            <li><a href="tel:+243855533285"><span class="icon icon-phone"></span><span
                                            class="text">+243 855 533 285</span></a></li>
                            <li><a href="mailto:contact@congoagile.com"><span class="icon icon-envelope pr-4"></span><span class="text">contact@congoagile.com</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Social icons -->    <!--Copyright-->
            <div class="col-sm-12">

                <div class="text-right">
                    <small style="color: #0b0b0b!important;">Powered by Digitafriza. Solutions informatiques !</small>
                    <br>
                    <small style="color: #0b0b0b!important;">
                        © 2020 -
                        <script>document.write(new Date().getFullYear());</script>
                        | Santeza et son logo sont des marques déposées de <a href="https://www.digitafriza.com" style="color: #1312ff!important;">Digitafriza,
                            Inc.</a>
                    </small>
                    <br>
                    <small style="color: #0b0b0b!important;">Validate and authorized by
                        <a href="https://www.congoagile.com" style="color: #1312ff!important;">Congo Agile Foundation
                            Teams.</a></small>
                </div>
            </div>
            <!--/.Copyright-->
        </div>
    </div>
</footer>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>


<script src="<?= base_url('ressources/medico/'); ?>js/jquery.min.js"></script>
<script src="<?= base_url('ressources/medico/'); ?>js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url('ressources/medico/'); ?>js/popper.min.js"></script>
<script src="<?= base_url('ressources/medico/'); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('ressources/medico/'); ?>js/jquery.easing.1.3.js"></script>
<script src="<?= base_url('ressources/medico/'); ?>js/jquery.waypoints.min.js"></script>
<script src="<?= base_url('ressources/medico/'); ?>js/jquery.stellar.min.js"></script>
<script src="<?= base_url('ressources/medico/'); ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('ressources/medico/'); ?>js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('ressources/medico/'); ?>js/aos.js"></script>
<script src="<?= base_url('ressources/medico/'); ?>js/jquery.animateNumber.min.js"></script>
<script src="<?= base_url('ressources/medico/'); ?>js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?= base_url('ressources/medico/'); ?>js/google-map.js"></script>
<script src="<?= base_url('ressources/medico/'); ?>js/main.js"></script>

</body>
</html>