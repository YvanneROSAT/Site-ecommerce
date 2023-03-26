<?php
session_start();
require('./actions/securityAction.php');
require('headerFooter/header.php');
?>
<!-- Header End -->
</header>



<!--================Checkout Area =================-->
<section class="checkout_area section_padding">
  <div class="container">
    <div class="billing_details">
      <div class="row">
        <div class="col-lg-8">
          <h3>Billing Details</h3>
          <form class="row contact_form" action="payment.php" method="post" novalidate="novalidate" id="payement-form">
            <div class="col-md-6 form-group p_star">
              <input type="text" class="form-control" id="first" name="name" value="Rosat"/>
              <span class="placeholder" data-placeholder="Nom(s)"></span>
            </div>
            <div class="col-md-6 form-group p_star">
              <input type="text" class="form-control" id="last" name="lastname" value="Yvanne"/>
              <span class="placeholder" data-placeholder="Prénom(s)"></span>
            </div>
            <div class="col-md-6 form-group p_star">
              <input type="text" class="form-control" id="number" name="number" value="0605764929" />
              <span class="placeholder" data-placeholder="Téléphone"></span>
            </div>
            <div class="col-md-6 form-group p_star">
              <input type="text" class="form-control" id="email" name="email" value="rosatyvann@gmail.com" />
              <span class="placeholder" data-placeholder="Adresse e-mail"></span>
            </div>
            <div class="col-md-12 form-group p_star">
              <input type="text" class="form-control" id="add1" name="add1" value="11 square beauregard"/>
              <span class="placeholder" data-placeholder="Adresse"></span>
            </div>
            <div class="col-md-12 form-group p_star">
              <input type="text" class="form-control" id="add2" name="add2" value="11041"/>
              <span class="placeholder" data-placeholder="Numéros appartement"></span>
            </div>
            <div class="col-md-12 form-group p_star">
              <input type="text" class="form-control" id="city" name="city" value="Nemours"/>
              <span class="placeholder" data-placeholder="Ville"></span>
            </div>
            <div class="col-md-12 form-group">
              <input type="text" class="form-control" id="zip" name="zip" placeholder="Code postal" value="77140"/>
            </div>
            <div class="col-md-12 form-group">
            </div>
            <div class="col-md-12 form-group">
              <div class="creat_account">
                <h3>Détail de l'expédition</h3>
              </div>
              <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
            </div>
            <div class="col-md-12 form-group">
              <div class="creat_account">
                <h3>Paiemment</h3>
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="add2" name="number" value="4242 4242 4242 4242"/>
                <span class="placeholder" data-placeholder="Numéros de votre carte" data-stripe="number" ></span>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="add2" name="exp_month" value="09" />
                <span class="placeholder" data-placeholder="Mois" data-stripe="exp_month"></span>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="add2" name="exp_year" value="2023"/>
                <span class="placeholder" data-placeholder="Année" data-stripe="exp_year"></span>
              </div>
            </div>
            <div class="col-md-12 form-group p_star">
              <input type="text" class="form-control" id="add2" name="cvc" value="123"/>
              <span class="placeholder" data-placeholder="CVC" data-stripe="cvc"></span>
            </div>
        </div>
        </form>
      </div>
      <div class="col-lg-4">
        <div class="order_box">
          <h2>Votre commande</h2>
          <ul class="list">
            <li>
              <a href="#">Product
                <span>Total</span>
              </a>
            </li>
            <li>
              <a href="#">Fresh Blackberry
                <span class="middle">x 02</span>
                <span class="last">$720.00</span>
              </a>
            </li>
            <li>
              <a href="#">Fresh Tomatoes
                <span class="middle">x 02</span>
                <span class="last">$720.00</span>
              </a>
            </li>
            <li>
              <a href="#">Fresh Brocoli
                <span class="middle">x 02</span>
                <span class="last">$720.00</span>
              </a>
            </li>
          </ul>
          <ul class="list list_2">
            <li>
              <a href="#">Subtotal
                <span>$2160.00</span>
              </a>
            </li>
            <li>
              <a href="#">Shipping
                <span>Flat rate: $50.00</span>
              </a>
            </li>
            <li>
              <a href="#">Total
                <span>$2210.00</span>
              </a>
            </li>
          </ul>
          <div class="creat_account">
            <input type="checkbox" id="f-option4" name="selector" />
            <label for="f-option4">J'ai lu et j'accepte les </label>
            <a href="conditionGene.php">Conditions générales*</a>
          </div>
          <a class="btn_3" href="#">Procédez au paiement</a>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<!--================End Checkout Area =================-->



<?php
require('headerFooter/footer.php');
?>