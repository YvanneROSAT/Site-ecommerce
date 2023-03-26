<?php
require('./actions/databases.php');


// Validation du formulaire
if (isset($_POST['validate'])) {

    // Vérifier si le user a bien complété tout les champs
    if (!empty($_POST['email']) and !empty($_POST['mdp'])) {

        // Evité que l'utilisateur malveillant utilise attaque SQL | Donnée USER
        $user_email = htmlspecialchars($_POST['email']);
        $user_mdp = htmlspecialchars($_POST['mdp']);

        // vérifier si l'utilisateur existe (si le mail est correct)
        $checkIfuserExists = $bdd->prepare('SELECT * FROM users WHERE email = ?');
        $checkIfuserExists->execute(array($user_email));

        // la méthode rowCount permet de compter les récupérer lors de la requête
        if ($checkIfuserExists->rowCount() > 0) {

            // Récuperé toutes les donnée de l'utilisateur
            $usersInfos = $checkIfuserExists->fetch();

            // Vérifier si le mot de passe est correct
            if (password_verify($user_mdp, $usersInfos['mdp'])) {

                # vérifier si le user est authentifier sur le site puis récupérer ses donnée à travers des variable globales sessions
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $usersInfos['id'];
                $_SESSION['email'] = $usersInfos['email'];
                $_SESSION['mdp'] = $usersInfos['mdp'];
                $_SESSION['prenom'] = $usersInfos['prénoms'];
                $_SESSION['nom'] = $usersInfos['nom'];


                // Redirige l'utilisateur vers la page d'accueil
                header("Location: ./index.php?id=".$_SESSION['id']);

            } else {
                $Msgerrors = "Mot de passe est incorrect.";
            }
        } else {
            $Msgerrors = "Votre E-mail est incorrect.";
        }
    } else {
        $Msgerrors = "Veuillez remplir tout les champs.";
    }
}
