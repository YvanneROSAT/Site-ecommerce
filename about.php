<?php
session_start();
require('./headerFooter/header.php');
?>


<!-- product list part start-->
<section class="about_us padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="about_us_content">
                    <h5>A propos de nous</h5>
                    <h3>Wir est une entreprise française créée en 2021. Son nom fait référence au verbe "Wear" ayant pour signification "porter".
                        Notre secteur d'activité est basé sur l'industrie textile, plus précisément la vente de vêtement.
                        Le nom a été choisi dans l'objectif d'attirer l'attention du consommateur en le poussant à se demander la signification de notre marque.
                        Elle désigne à la fois l'activité, les produits et services vendus par notre entreprise.
                        Chez Wir, la volonté est de se démarquer des autres entreprises du textile, notamment avec des valeurs importantes concernant le développement durable.
                        Les enjeux de l'environnement sont une cause importante pour notre entreprise, nos produits ont pour volonté d'être recyclable et biodégradable.</h3>
                </div>
                <div class="about_us_video">
                    <iframe width="700" height="400" src="https://www.youtube.com/embed/GwQ4qmHYpNI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product list part end-->

<!-- feature part here -->
<section class="feature_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <div class="single_feature_part">
                    <img src="assets/img/icon/feature_icon_1.svg" alt="#">
                    <h4>Cartes de crédit</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_feature_part">
                    <img src="assets/img/icon/feature_icon_2.svg" alt="#">
                    <h4>Commande en ligne</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_feature_part">
                    <img src="assets/img/icon/feature_icon_3.svg" alt="#">
                    <h4>Livraison gratuite</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature part end -->

<!-- client review part here -->
<section class="client_review">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="client_review_slider owl-carousel">
                    <div class="single_client_review">
                        <div class="client_img">
                            <img src="assets/img/profils/yvanne.png" alt="#">
                        </div>
                        <p>"Directeur du service informatique</p>
                        <h5>- Yvanne ROSAT</h5>
                    </div>
                    <div class="single_client_review">
                        <div class="client_img">
                            <img src="assets/img/profils/vijith.png" alt="#">
                        </div>
                        <p>"Employer</p>
                        <h5>- Vijith VARATHARAJAN </h5>
                    </div>
                    <div class="single_client_review">
                        <div class="client_img">
                            <img src="assets/img/profils/iliaes.png" alt="#">
                        </div>
                        <p>"Employer</p>
                        <h5>- Iliaes ZADMI </h5>
                    </div>
                    <div class="single_client_review">
                        <div class="client_img">
                            <img src="assets/img/profils/Alanys.png" alt="#">
                        </div>
                        <p>"Employer</p>
                        <h5>- Alanys OCHISTE</h5>
                    </div>
                    <div class="single_client_review">
                        <div class="client_img">
                            <img src="assets/img/profils/Thomas_B.png" alt="#">
                        </div>
                        <p>"Employer</p>
                        <h5>- Thomas BEAUVAIS </h5>
                    </div>
                    <div class="single_client_review">
                        <div class="client_img">
                            <img src="assets/img/profils/Thomas_V.png" alt="#">
                        </div>
                        <p>"Employer</p>
                        <h5>- Thomas VENNEMANIE </h5>
                    </div>
                    <div class="single_client_review">
                        <div class="client_img">
                            <img src="assets/img/profils/jason.png" alt="#">
                        </div>
                        <p>"Employer</p>
                        <h5>- Jason SEGOR </h5>
                    </div>
                    <div class="single_client_review">
                        <div class="client_img">
                            <img src="assets/img/profils/Waren.png" alt="#">
                        </div>
                        <p>"Employer</p>
                        <h5>- Waren RIODIN </h5>
                    </div>
                </div>
</section>
<!-- client review part end -->


<?php
require('./headerFooter/footer.php');
?>