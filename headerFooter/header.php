<?php
require('./actions/_header.php');
require('./actions/loginAction.php');
?>
<!doctype html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wir</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon1.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>


<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo.png">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                    <div class="container-fluid">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left d-flex">
                                    <ul class="contact-now">
                                        <li>
                                            <!-- Si le user est connecter affiche sont prénom, sinon affiche rien -->
                                            <?php
                                            if (isset($Msgerror)) {
                                                echo $Msgerror;
                                            }
                                            if (isset($_SESSION['id'])) {
                                            ?>
                                        <li>
                                            Bonjour <?= $_SESSION['prenom']; ?>
                                        </li>
                                    <?php
                                            }
                                    ?>
                                    <!-- Fin de si -->
                                    </li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul>
                                        <li>
                                            <!-- Si le user est connecter pas de signup et sign in, sinon affiche tout -->
                                            <?php
                                            if (isset($_SESSION['id'])) {
                                            } else {
                                            ?>
                                                <a href="login.php">Se connecter</a>
                                                <a href="#">|</a>
                                                <a href="signup.php">S'indentifier</a>"
                                            <?php
                                            }
                                            ?>
                                            <!-- Fin de si -->

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
                                <div class="logo">
                                    <a href="index.php"><img src="Logo sans fond/1.png" width="80" height="70" alt="Notre logo Wir"></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li>
                                                <a href="index.php">Accueil</a>
                                            </li>
                                            <li>
                                                <a href="Catagori.php">Catégories</a>
                                            </li>
                                            <li class="#"><a href="about.php">A propos de nous</a>
                                            </li>
                                          <!--  <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="login.php">Login</a></li>
                                                    <li><a href="panier.php">Panier</a></li>
                                                    <li><a href="elements.php">Elements</a></li>
                                                    <li><a href="about.php">A propos</a></li>
                                                    <li><a href="confirmation.php">Confirmation paiement</a></li>
                                                    <li><a href="panier.php">Shopping Cart</a></li>
                                                    <li><a href="checkout.php">Pages d'info paiement</a></li>
                                                </ul>
                                            </li>  -->
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                                <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">

                                    <li class="d-none d-xl-block">
                                        <div class="form-box f-right ">
                                            <form action="GET">
                                                <input type="text" name="Search" placeholder="Rechercher">
                                                <div class="search-icon">
                                                    <i class="fas fa-search special-tag"></i>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shopping-card">
                                            <a href="panier.php"><i class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </li>
                                    <?php
                                    if (isset($_SESSION['auth'])) {
                                    ?>
                                        <li class="d-none d-lg-block"> <a href="./actions/logoutAction.php" class="btn header-btn">Déconnexion</a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>