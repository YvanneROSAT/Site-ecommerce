<!-- Header Start -->
<?php
session_start();
require('./headerFooter/header.php');
?>
<!-- Header End -->



<!--================Single Product Area =================-->
<div class="product_image_area">
  <div class="container">
    <div class="row justify-content-center">
      <?php
      $_GET['id'];
      $produits = $DB->query('SELECT * FROM produits'); ?>
      <?php foreach ($produits as $produit) : ?>
        <!-- Si ID de produit correspond à celui de la base de donnée alors affiche moi ses donnée -->
        <?php if ($_GET['id'] == $produit->id) { ?>
          <div class="col-lg-12">
            <div class="product_img_slide owl-carousel">
              <div class="single_product_img">
                <img src="assets/img/produits/<?= $produit->photo; ?>" alt="#" class="img-fluid">
              </div>
              <div class="single_product_img">
                <img src="assets/img/produits/<?= $produit->photo; ?>" alt="#" class="img-fluid">
              </div>
              <div class="single_product_img">
                <img src="assets/img/produits/<?= $produit->photo; ?>" alt="#" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="single_product_text text-center">
              <h3>
                <!-- Appel des noms de produit qui de trouve dans ma BDD -->
                <?= $produit->nom; ?>
              </h3>
              <p>
                <?= nl2br($produit->description); ?>
              </p>
              <div class="card_area">
                <div class="product_count_area">
                  <p>Quantités</p>
                  <div class="product_count d-inline-block">
                    <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                    <input class="product_count_item input-number" type="text" value="1" min="0" max="10">
                    <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                  </div>
                  <p>
                    <?= number_format($produit->prix, 2, ',', ' '); ?> €
                  </p>
                </div>
                <div class="add_to_cart">
                  <a href="addpanier.php?id=<?= $produit->id; ?>" class="btn_3">Ajouter</a>
                </div>
              </div>
            </div>
          </div>
        <?php
        } else {
        }
        ?>
      <?php endforeach ?>
    </div>
  </div>
</div>
<!--================End Single Product Area =================-->


<!-- Footer Start-->
<?php
require('./headerFooter/footer.php');
?>