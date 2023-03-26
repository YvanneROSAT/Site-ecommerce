<?php
session_start();
require('./headerFooter/header.php');
?>
<main>


    <!-- Latest Products Start -->
    <section class="latest-product-area latest-padding">
        <div class="container">
            <div class="row product-btn d-flex justify-content-between">
                <div class="properties__button">
                    <!--Nav Button  -->
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tout nos produits</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">T-shirt</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Sweat</a>
                            <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">SweatPants</a>
                        </div>
                    </nav>
                    <!--End Nav Button  -->
                </div>
            </div>
            <!-- Nav Card -->
            <div class="tab-content" id="nav-tabContent">
                <!-- card one -->
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <!-- Appel de mes produits de la base de donnée avec une boucle -->
                        <?php $produits = $DB->query('SELECT * FROM produits'); ?>
                        <?php foreach ($produits as $produit) : ?>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="product-img">
                                        <img src="assets/img/produits/<?= $produit->photo; ?>" alt="">
                                        <div class="new-product">
                                            <span>Nouveau</span>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4>
                                            <!-- Lien de redirection avec l'id sur la pages single-product -->
                                            <a href="single-product.php?id=<?= $produit->id; ?>">
                                                <!-- Appel des noms de produit qui de trouve dans ma BDD -->
                                                <?= $produit->nom; ?>
                                            </a>
                                        </h4>
                                        <div class="price">
                                            <ul>
                                                <li>
                                                    <!-- Appel des prix de produit de ma BDD -->
                                                    <?= number_format($produit->prix, 2, ',', ' '); ?> €
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
                <!--  Fin de l'appel de mes produits de la base de donnée avec une boucle -->
                <!-- Card two -->
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                        <!-- Appel de mes produits de la base de donnée par catégorie avec une boucle -->
                        <?php $produits = $DB->query('SELECT * FROM produits WHERE idCategorie = 2;'); ?>
                        <?php foreach ($produits as $produit) : ?>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="product-img">
                                        <img src="assets/img/produits/<?= $produit->photo; ?>" alt="">
                                        <div class="new-product">
                                            <span>Nouveau</span>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4>
                                            <!-- Lien de redirection avec l'id sur la pages single-product -->
                                            <a href="single-product.php?id=<?= $produit->id; ?>">
                                                <!-- Appel des noms de produit qui de trouve dans ma BDD -->
                                                <?= $produit->nom; ?>
                                            </a>
                                        </h4>
                                        <div class="price">
                                            <ul>
                                                <li>
                                                    <!-- Appel des prix de produit de ma BDD -->
                                                    <?= number_format($produit->prix, 2, ',', ' '); ?> €
                                                </li>
                                                <li class="discount">$19.99</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
                <!-- End Nav Card -->

                <!-- Card three -->
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="row">
                        <!-- Appel de mes produits de la base de donnée par Catégorie avec une boucle -->
                        <?php $produits = $DB->query('SELECT * FROM produits WHERE idCategorie = 1;'); ?>
                        <?php foreach ($produits as $produit) : ?>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="product-img">
                                        <img src="assets/img/produits/<?= $produit->photo; ?>" alt="">
                                        <div class="new-product">
                                            <span>Nouveau</span>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4>
                                            <!-- Lien de redirection avec l'id sur la pages single-product -->
                                            <a href="single-product.php?id=<?= $produit->id; ?>">
                                                <!-- Appel des noms de produit qui de trouve dans ma BDD -->
                                                <?= $produit->nom; ?>
                                            </a>
                                        </h4>
                                        <div class="price">
                                            <ul>
                                                <li>
                                                    <!-- Appel des prix de produit de ma BDD -->
                                                    <?= number_format($produit->prix, 2, ',', ' '); ?> €
                                                </li>
                                                <li class="discount">$40.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
                <!-- card foure -->
                <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                    <div class="row">
                        <!-- Appel de mes produits de la base de donnée par Catégorie avec une boucle -->
                        <?php $produits = $DB->query('SELECT * FROM produits WHERE idCategorie = 3;'); ?>
                        <?php foreach ($produits as $produit) : ?>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="product-img">
                                        <img src="assets/img/produits/<?= $produit->photo; ?>" alt="">
                                        <div class="new-product">
                                            <span>Nouveau</span>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4>
                                            <!-- Lien de redirection avec l'id sur la pages single-product -->
                                            <a href="single-product.php?id=<?= $produit->id; ?>">
                                                <!-- Appel des noms de produit qui de trouve dans ma BDD -->
                                                <?= $produit->nom; ?>
                                            </a>
                                        </h4>
                                        <div class="price">
                                            <ul>
                                                <li>
                                                    <!-- Appel des prix de produit de ma BDD -->
                                                    <?= number_format($produit->prix, 2, ',', ' '); ?> €
                                                </li>
                                                <li class="discount">$25.49</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Products End -->

</main>


<?php
require('./headerFooter/footer.php');
?>