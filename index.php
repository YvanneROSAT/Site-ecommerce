<?php
session_start();
require('./headerFooter/header.php');
require('./actions/profileUsers.php');
?>
<main>

    <!-- slider Area Start -->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active">
            <div class="single-slider slider-height" data-background="assets/img/hero/bg.jpg">
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-none d-md-block">
                            <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                <img src="assets/img/hero/banner.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-8">
                            <div class="hero__caption">
                                <span data-animation="fadeInRight" data-delay=".4s">100% garantie en cas d'usure.</span>
                                <h1 data-animation="fadeInRight" data-delay=".6s">Wir <br> Collection</h1>
                                <p data-animation="fadeInRight" data-delay=".8s">Wear we where and when you just feel like it</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInRight" data-delay="1s">
                                    <a href="about.php" class="btn hero-btn">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height" data-background="assets/img/hero/bg.jpg">
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-none d-md-block">
                            <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                <img src="assets/img/hero/banner.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-8">
                            <div class="hero__caption">
                                <span data-animation="fadeInRight" data-delay=".4s">100% garantie en cas d'usure.</span>
                                <h1 data-animation="fadeInRight" data-delay=".6s">Wir <br> Collection</h1>
                                <p data-animation="fadeInRight" data-delay=".8s">Wear we where and when you just feel like it</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInRight" data-delay="1s">
                                    <a href="about.php" class="btn hero-btn">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!-- Best Collection Start -->
    <div class="best-collection-area section-padding2">
        <div class="container">
            <div class="row d-flex justify-content-between align-items-end">
                <!-- Left content -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="best-left-cap">
                        <h2>Tendances du moment</h2>
                        <p>La meilleure collection.</p>
                        <a href="Catagori.php" class="btn shop1-btn">Acheter</a>
                    </div>
                    <div class="best-left-img mb-30 d-none d-sm-block">
                        <img src="assets/img/collection/titre1.png" alt="">
                    </div>
                </div>
                <!-- Mid Img -->
                <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                    <div class="best-mid-img mb-30 ">
                        <img src="assets/img/collection/banner_manequin.png" alt="">
                    </div>
                </div>
                <!-- Riht Caption -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="best-right-cap ">
                        <div class="best-single mb-30">
                            <div class="single-cap">
                                <h4>Sweat <br> Capuche</h4>
                            </div>
                            <div class="single-img">
                                <img src="assets/img/collection/1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="best-right-cap">
                        <div class="best-single mb-30">
                            <div class="single-cap active">
                                <h4>T-Shirt<br>Noir</h4>
                            </div>
                            <div class="single-img">
                                <img src="assets/img/collection/2.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="best-right-cap">
                        <div class="best-single mb-30">
                            <div class="single-cap">
                                <h4>Pontalon<br> Jogging</h4>
                            </div>
                            <div class="single-img">
                                <img src="assets/img/collection/3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Best Collection End -->

    <!-- Best Product Start -->
    <div class="best-product-area lf-padding">
        <div class="product-wrapper bg-height" style="background-image: url('assets/img/categori/card.png')">
            <div class="container position-relative">
                <div class="row justify-content-between align-items-end">
                    <div class="product-man position-absolute  d-none d-lg-block">
                        <img src="#" alt="">
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 d-none d-lg-block">
                        <div class="vertical-text">
                            <span>Wir</span>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="best-product-caption">
                            <h2>Les meilleurs produits
                                <br> de notre boutique
                            </h2>
                            <p>Des vêtements qui ne vont ni vous lâcher, ni vous lassez.</p>
                            <a href="Catagori.php" class="black-btn">Découvrez</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shape -->
        <div class="shape bounce-animate d-none d-md-block">
            <img src="assets/img/categori/card-shape1.png" alt="">
        </div>
    </div>
    <!-- Best Product End-->

    <!-- Shop Method Start-->
    <div class="shop-method-area section-padding30">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-method mb-40">
                        <i class="ti-package"></i>
                        <h6>Livraison gratuite</h6>
                        <p>Profitez de notre offre de livraisons gratuite sur tous nos produits.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-method mb-40">
                        <i class="ti-unlock"></i>
                        <h6>Paiement sécurisé</h6>
                        <p>Dans le cadre d'un paiement sécurisé, votre numéro de carte bancaire, date d'expiration et cryptogramme sont cryptés dans la transmission afin de vous protéger et d'assurer qu'aucune donnée ne transite en clair via internet.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-method mb-40">
                        <i class="ti-reload"></i>
                        <h6>Garantie de rechange</h6>
                        <p>En cas d'usure du vêtement acheté vous avez une garantie de rechange du vêtement une seul fois sur un an.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php
require('./headerFooter/footer.php');
?>