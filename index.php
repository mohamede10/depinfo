<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>departement informatique universite de labe</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Ouvert: Lun - Sam : 08H 00  - 17H 00 , Dim Fermé </small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>depinfos.ul@gmail.com</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+224 622 294 367</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
   <!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
    <a href="index.html" class="navbar-brand p-0">
        <h1 class="m-0 text-primary">INFORMATIQUE</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto py-0">
            <a href="index.php" class="nav-item nav-link active">Accueil</a>
           
            <a href="connexion.php" class="nav-item nav-link">Annonces
                <span class="badge bg-danger" id="notificationCount">3</span> <!-- Badge de notification -->
            </a>
            <a href="programmes.php" class="nav-item nav-link ">Programmes</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Connexion</a>
                <div class="dropdown-menu m-0">
                    <a href="https://etudiant.parcoursupguinee.org/inscription" class="dropdown-item">Inscription</a>
                    <a href="https://etudiant.parcoursupguinee.org/login" class="dropdown-item">Reinscription</a>
                    <a href="mycount.php" class="dropdown-item">Mon compte</a>
            </div>
            
        </div>
           
            <div class="nav-item dropdown">
                 <a href="#" class=" nav-item nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown">A propos</a>
                    <div class="dropdown-menu m-0">
                        <a href="https://univ-labe.edu.gn/" class="dropdown-item" >Université</a>
                        <a href="apropos_dep.php" class="dropdown-item" >Département</a>
                        <a href="personnages.php" class="dropdown-item" >Personnages</a>
                        <a href="contact.php" class="dropdown-item">Contact</a>
                    </div>
            </div> 
        </div>
        
        </div> 
           
        </div>
        <a href="infosline.php" class="btn btn-primary py-2 px-4 ms-3">Infos digitales</a>
    </div>
</nav>
<!-- Navbar End -->

<!-- Ajoutez Font Awesome pour les icônes, si ce n'est pas déjà fait -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
    /* Style pour le badge de notification */
    #notificationCount {
        font-size: 0.75rem;
        position: relative;
        top: -10px;
        left: 5px;
    }
</style>

    <!-- Navbar End -->

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/cat-3.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">UNIVERTE DE LABE</h5>
                        <h4 class="display-4 text-white mb-md-4 animated zoomIn">SCIENCES * TECHNIQUES</h4>
                            <a href="appointment.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Apprentissage</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Perfectionnement</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/facult.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">UNIVERTE DE LABE</h5>
                            <h4 class="display-4 text-white mb-md-4 animated zoomIn">PROGRAMME * INFORMATIQUE </h4>
                            <a href="appointment.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Compétences</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Compétitif</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">UNIVERSITE DE LABE</h5>
                        <h1 class="display-5 mb-0">Département Informatique</h1>
                    </div>
                    <h5 class="text-body fst-italic mb-4" style="text-align: justify;">Le département informatique est une structure académique dédiée à la formation des étudiants dans le domaine des technologies de l'information et de la communication (TIC). Son objectif principal est de préparer les étudiants à maîtriser les outils et techniques informatiques nécessaires pour répondre aux besoins du marché du travail moderne et aux enjeux de la transformation digitale.</h5>
                    <p class="mb-4 text-dark" style="text-align: justify;">Former des professionnels capables de concevoir, développer et maintenir des systèmes informatiques adaptés à divers secteurs (entreprises, industries, administrations publiques).
Développer chez les étudiants des compétences solides en programmation, en gestion de bases de données, en réseaux informatiques, en sécurité informatique, et en ingénierie logicielle.
Promouvoir l'innovation à travers des projets pratiques en lien avec les nouvelles technologies telles que l'intelligence artificielle, l'internet des objets (IoT), l'analyse de données, et les systèmes embarqués. <br>
Les étudiants sont également encouragés à participer à des compétitions technologiques, des hackathons, et à mener des projets de recherche.</p>
                    
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/me.png" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-5 wow zoomIn" data-wow-delay="0.3s" style="min-height: 400px;">
                
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="img/cat.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">COURS DE CSI</h5>
                            </div>
                           
                        
                </div>
                <div class="col-lg-7">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Cours d'informatique</h5>
                        <h6 class="display-5 mb-0 text-center">Béneficier de meilleurs cours d'informatique à l'université de LABE/Rép de GUINEE</h6>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="img/python.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">COURS DE PYTHON</h5>
                            </div>
                        </div>
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.9s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="img/javaa.png" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">COURS DE JAVA</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-7">
                    <div class="row g-5">
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="img/php.png" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">COURS DE PHP</h5>
                            </div>
                        </div>
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="img/WIND.png" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">COURS INFOS DE BASE</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 service-item wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-danger rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
                        <h3 class="text-white mb-3">NOTATION</h3>
                        <p class="text-white mb-3">Chaque étudiant doit être capable de developper un site web, une application mobile, une base de donnée, comprendre le réseau informatique ainsi le système embarqué... </p>
                        <h2 class="text-white mb-0">+224 622 294 367</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Pricing Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Suivre une formation de comptance</h5>
                        <h6 class="display-5 mb-0">l'Université de Labé</h6>
                    </div>
                    <p class="mb-4 text-dark" style="text-align: justify;">L'Université de Labé est votre lumière sur le chemin de la technologie informatique. <br> Sur le marché de l'emploi dans le domaine informatique est en pleine expansion, offrant des opportunités de carrière avec des rémunérations attrayantes et une grande flexibilité. Alors, n'hésitez plus ! Plongez dans le monde de l'informatique et devenez les innovateurs de demain. Vous n'apprendrez pas seulement une discipline, mais vous contribuerez à façonner l'avenir avec des outils puissants et des connaissances inestimables. <br> <a href="https://etudiant.parcoursupguinee.org/inscription">inscription et reinscription </a>sur parcoursupguinee.</p>

                    
                </div>
                <div class="col-lg-7">
                    <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/siteweb.jpeg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                    <h2 class="text-primary m-0">01</h2>
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Développement</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>Site Web</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Application Mobile</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span>Application Desktop</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <a href="dev.php" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Savoir plus</a>
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/coding.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                    <h2 class="text-primary m-0">02</h2>
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Programmation</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>Logiciels</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Jeux videos</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span> Système embarqué</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <a href="programmation.php" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Savoir plus</a>
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/telecomm.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                    <h2 class="text-primary m-0">03</h2>
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>ReseauxInformatique</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>Administration réseaux </span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Administration systeme</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span>Sécurité informatique</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <a href="rxinfos.php" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Savoir plus</a>
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/bdR.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                    <h2 class="text-primary m-0">04</h2>
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Analyse et SGBD</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>Administration BD </span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Alyste</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span>Sécurité informatique</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <a href="sgbd.php" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Savoir plus</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <br>
            <div class="text-center">
            <div>
                <h2 style="text-align: left;">Les départements de l'Université de Labé</h2>
            </div>
            <h3> <marquee behavior="" direction=""> INFORMATIQUE - MIAGE - MATHEMATIQUES - ENERGIE PHOTOVOLTAÏQUE - ANGLAIS - SOCIOLOGIE - LETTRES MODERNES - BIOLOGIE APPLIQUEE - ANGLAIS - ECONOMIE - GESTION - ADMINISTRATION PUBLIQUE - ECONOMIE SOCIALE ET FAMILLIALE</marquee></h3>
        </div>
        </div>
        
    </div>
    <!-- Pricing End -->
    <br>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: -75px;">
        <div class="container pt-5">
            <div class="row g-5 pt-4">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Liens rapides</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Programmes</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>A Propos</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact</a>
                     
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Confidentiel</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Inscription</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Reinscription</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Se connecter</a>
                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Localisation</h3>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Guinée, Labé, CU/Hafia</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>infos_ul@gmail.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+224 622 294 367</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Suivez-nous</h3>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-light py-4" style="background: #051225;">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="#">informatique_ul.com</a>. Tout droit reservé.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Développer par <a class="text-white border-bottom" href="https://www.club-jp.com/">CJP</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


       <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/twentytwenty/jquery.event.move.js"></script>
    <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>