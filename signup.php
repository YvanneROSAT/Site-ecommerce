<?php
session_start();
require('./actions/signupAction.php');
require('./headerFooter/header.php');
?>





<!--================login_part Area =================-->
<form class="container" method="POST">
    <section class="login_part section_padding ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>* Champs obligatoires</h2>
                            <p>
                                Merci de retenir votre mot de passe car nous n'avons pas encore mis en
                                place la reinitialisation de mot de passe.</p>
                            <a href="#" class="btn_3">Me connecter</a>
                        </div>
                    </div>
                </div>
                <?php
                if (isset($Msgerrors)) {
                    echo '<p>' . $Msgerrors . '</p';
                }
                ?>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>S'identifier</h3>
                            <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" name="nom" placeholder="Nom">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" name="prenom" placeholder="Prénom">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" name="email" placeholder="Adresse e-mail">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" name="mdp" placeholder="Mot de passe">
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="creat_account d-flex align-items-center">
                                        <input type="checkbox" id="f-option" name="selector">
                                        <label for="f-option">Garder ma session ouverte</label>
                                    </div>
                                    <button type="submit" value="submit" class="btn_3" name="validate">
                                        Inscriptionn
                                    </button>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
<!--================login_part end =================-->

<?php 
require('./headerFooter/footer.php');
?>