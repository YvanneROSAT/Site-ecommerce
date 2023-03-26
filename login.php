<?php
session_start();
require('./headerFooter/header.php');
?>

<!--================login_part Area =================-->
<section class="login_part section_padding ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="login_part_text text-center">
                    <div class="login_part_text_iner">
                        <h2>* Champs obligatoires</h2>
                        <p>Nous collectons et traitons vos données personnelles afin de répondre à
                            vos demandes et de vous fournir les meilleurs produits et services. <br> </br>
                            Merci de retenir votre mot de passe car nous n'avons pas encore mis en
                            place la reinitialisation de mot de passe.</p>
                        <a href="signup.php" class="btn_3">Je m'inscris</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="login_part_form">
                    <div class="login_part_form_iner">
                        <h3>Se connecter</h3>
                        <form class="row contact_form" action="#" method="POST" novalidate="novalidate">
                            <div class="col-md-12 form-group p_star">
                                <input type="email" class="form-control" name="email" value="" 
                                placeholder="Adresse e-mail">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="password" class="form-control" name="mdp" value="" 
                                placeholder="Mot de passe">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account d-flex align-items-center">
                                    <input type="checkbox" id="f-option" name="selector">
                                    <label for="f-option">Garder ma session ouverte</label>
                                </div>
                                <button type="submit" value="submit" class="btn_3" name="validate">
                                    Connexion
                                </button>
                                <?php
                                if (isset($Msgerrors)) {
                                    echo '<h6 class="alert alert-danger">' . $Msgerrors . '</h6';
                                }
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--================login_part end =================-->

<?php
require('./headerFooter/footer.php');
?>