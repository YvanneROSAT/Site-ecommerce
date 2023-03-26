<?php
session_start();
require('./headerFooter/header.php');
require('./actions/securityAction.php');
?>


<!--================Cart Area =================-->
<section class="cart_area section_padding">
  <div class="container">
    <div class="cart_inner">
      <form action="panier.php" method="post">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Produits</th>
                <th scope="col">Prix</th>
                <th scope="col">Quantités</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $ids = array_keys($_SESSION['paniers']);
              if (empty($ids)) {
                $produits = array();
              } else {
                $produits = $DB->query('SELECT * FROM produits WHERE id IN (' . implode(',', $ids) . ')');
              }
              foreach ($produits as $produit) :
              ?>
                <tr>
                  <td>
                    <div class="media">
                      <div class="d-flex">
                        <img src="assets/img/produits/<?= $produit->photo; ?>" alt="" />
                      </div>
                      <div class="media-body">
                        <p>
                          <?= $produit->nom; ?>
                        </p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <h5>
                      <?= number_format($produit->prix, 2, ',', ' '); ?> €
                    </h5>
                  </td>
                  <td>
                    <div class="product_count">
                      <input class="input-number" type="text" name="paniers[quantity][<?= $produit->id; ?>]" value="<?= $_SESSION['paniers'][$produit->id]; ?>" min="0" max="10">
                    </div>
                  </td>
                  <td>
                    <h5>
                      <a href="panier.php?delPanier=<?= $produit->id; ?>" class="genric-btn link">Supprimer</a>
                    </h5>
                  </td>
                </tr>
              <?php endforeach; ?>
              <tr>
                <td></td>
                <td>
                  <h5>
                    Total : <?= number_format($paniers->total(), 2, ',', ' ') ?> €
                  </h5>
                </td>
                <td>
                  <h5>Quantités : <?= $paniers->count() ?></h5>
                </td>
                <td></td>
              </tr>
              <tr class="bottom_button">
                <td>
                  <input type="submit" value="Recalculer" class="btn_1" />
                </td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
          <div class="checkout_btn_inner float-right">
            <a class="btn_1" href="Catagori.php">Catégories</a>
            <a class="btn_1 checkout_btn_1" href="checkout.php">Acheter</a>
          </div>
        </div>
      </form>
    </div>
<br><br><br><br>

    <script src="https://www.paypal.com/sdk/js?client-id=AZDRF85GDAVV2B_DqVUVw9Ba-gfJp18m_BKN_uwDVqg-jemmxpB6RdPUbpGNhENoS51WuxrbhYsWyhFr&currency=EUR"></script>
    <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>
    <script>
      paypal.Buttons({
        // Sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: '77.44' // Can also reference a variable or function
              }
            }]
          });
        },
        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
            // When ready to go live, remove the alert and show a success message within this page. For example:
            // const element = document.getElementById('paypal-button-container');
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
          });
        }
      }).render('#paypal-button-container');

    </script>
</section>
<!--================End Cart Area =================-->



<?php
require('./headerFooter/footer.php');
?>