<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo URLROOT; ?>/public/img/Logo_icon.png" type="image/png">
    <title><?php echo SITENAME; ?></title>
    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style-starter.css">
</head>

<body>
    <!-- header -->
    <header id="site-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="<?php echo URLROOT; ?>/img/logolong.png" style="width: 200px;" alt=""></a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link" href="#abouts">À propos de nous</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sign">Professeur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sign">Etudiant</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- //header -->

    <!-- banner section -->
    <section id="home" class="w3l-banner py-5">
        <div class="banner-content">
            <div class="container py-4">
                <div class="row align-items-center pt-sm-5 pt-4">
                    <div class="col-md-6">
                        <h3 class="mb-lg-4 mb-3">Vos enfants méritent le<span class="d-block">Meilleure éducation</span>
                        </h3>
                        <p class="banner-sub">Apprentissage actif, enseignants experts et environnement sûr</p>
                        <div class="d-flex align-items-center buttons-banner">
                            <a href="#sign" class="btn btn-style mt-lg-5 mt-4">Admission Maintenat</a>
                        </div>
                    </div>
                    <div class="col-md-6 right-banner-2 text-end position-relative mt-md-0 mt-5">
                        <div class="sub-banner-image mx-auto">
                            <img src="<?php echo URLROOT; ?>/img/banner.png" class="img-fluid position-relative" alt=" ">
                        </div>
                        <div class="banner-style-1 position-absolute">
                            <div class="banner-style-2 position-relative">
                                <h4>Retour à l'école</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->

    <!-- why choose block -->
    <section class="w3l-service-1 py-2" id="sign">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">CHOISISSEZ VOTRE RÔLE</p>
                <h3 class="title-style">Outils pour les enseignants et les apprenants</h3>
            </div>
            <div class="row content23-col-2 text-center">
                <div class="col-md-6">
                    <div class="content23-grid content23-grid1">
                        <h4><a href="<?php echo URLROOT; ?>/pages/teachersregister">Se connecter en tant qu'enseignant</a></h4>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-4">
                    <div class="content23-grid content23-grid2">
                        <h4><a href="<?php echo URLROOT; ?>/pages/studentsregister">Se connecter en tant qu'étudiant</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //why choose block -->

    <!-- home image with content block -->
    <section class="w3l-servicesblock py-2" id="abouts">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">CE QUE NOUS CROYONS</p>
                <h3 class="title-style">À propos de nous</h3>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 position-relative home-block-3-left pb-lg-0 pb-5">
                    <div class="position-relative">
                        <img src="<?php echo URLROOT; ?>/img/img1.jpg" alt="" class="img-fluid radius-image">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1 mt-lg-0 mt-5 pt-lg-0 pt-5">
                    <h3 class="title-style">La plateforme digitale de mise en relation avec les étudiants</h3>
                    <p class="mt-4">IDEAL PROF est le leader des cours particuliers à domicile, propose des cours de
                        soutien à domicile dans toutes les matières et pour tous les niveaux. Chaque professeur
                        particulier est minutieusement sélectionné et évalué.
                    </p>
                    <p class="mt-4">IDEAL PROF à développer une large gamme de services pour vous accompagner vers
                        l'excellence : Cours à domicile, cours du soir, cours de soutien en groupes, cours en ligne,
                        coaching scolaire ou professionnel, formations professionnelles...
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- //home image with content block -->

    <!-- contact block -->
    <section class="w3l-contact py-2" id="contact">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">ENTRER EN CONTACT</p>
                <h3 class="title-style">Nous contacter</h3>
            </div>
            <div class="row contact-block">
                <div class="col-md-7 contact-right">
                    <form action="" method="post" class="signin-form">
                        <div class="input-grids">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" name="w3lName" id="w3lName" placeholder="Votre Nom" class="contact-input" required="" />
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" name="w3lSender" id="w3lSender" placeholder="Votre Email" class="contact-input" required="" />
                                </div>
                            </div>
                            <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Subject" class="contact-input" required="" />
                            <input type="text" name="w3lWebsite" id="w3lWebsite" placeholder="Website URL" class="contact-input" required="" />
                        </div>
                        <div class="form-input">
                            <textarea name="w3lMessage" id="w3lMessage" placeholder="Tapez votre message ici" required=""></textarea>
                        </div>
                        <div class="text-start">
                            <button class="btn btn-style btn-style-3">Envoyer Le message</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 ps-lg-5 mt-md-0 mt-5">
                    <div class="contact-left">
                        <div class="cont-details">
                            <div class="d-flex contact-grid">
                                <div class="cont-left text-center me-3">
                                    <i class="fas fa-building"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Company Address</h6>
                                    <p>Edu School, 10001, 5th Avenue, 12202 street, London.</p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center me-3">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Call Us</h6>
                                    <p><a href="tel:+1(21) 234 4567">+1(21) 112 7368</a></p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center me-3">
                                    <i class="fas fa-envelope-open-text"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Email Us</h6>
                                    <p><a href="mailto:example@mail.com" class="mail">contact@idealprof.com</a></p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center me-3">
                                    <i class="fas fa-headphones-alt"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Customer Support</h6>
                                    <p><a href="mailto:info@support.com" class="mail">info@idealprof.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer block -->
    <footer class="w3l-footer-29-main">
        <div class="footer-29 pt-5 pb-4">
            <div class="container pt-md-4">
                <div class="row footer-top-29 justify-content-md-center">
                    <div class="col-lg-6 col-md-6 footer-list-29">
                        <h6 class="footer-title-29">Contact Info </h6>
                        <p class="mb-2 pe-xl-5">Address : IdealProf, 10001, 5th Avenue, #06 lane street, NY - 62617.
                        </p>
                        <p class="mb-2">Numéro de téléphone : <a href="tel:+1(21) 234 4567">+1(21) 234 4567</a></p>
                        <p class="mb-2">Email : <a href="mailto:info@example.com">info@idealprof.com</a></p>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 footer-list-29 mt-md-0 mt-4">
                        <ul>
                            <h6 class="footer-title-29">Liens</h6>
                            <li><a href="#abouts">À propos de nous</a></li>
                            <li><a href="#sign">Devenir a professeur</a></li>
                            <li><a href="#sign">Devenir a etudiant</a></li>
                            <li><a href="<?php echo URLROOT; ?>/pages/adminlogin">Espace Admin</a></li>
                            <li><a href="#contact">Contacter nous</a></li>
                        </ul>
                    </div>
                </div>
                <p class="copy-footer-29 text-center pt-lg-2 mt-5 pb-2">© 2021 IdealProf. Tous les droits sont réservés.</p>
            </div>
        </div>
    </footer>
    <script src="<?php echo URLROOT; ?>/js/bootstrap.min.js"></script>
</body>

</html>