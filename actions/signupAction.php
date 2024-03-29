<?php
require('./actions/databases.php');

// Validation du formulaire
if (isset($_POST['validate'])) {

    // Vérifier si le user a bien complété tout les champs
    if (!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['email']) and !empty($_POST['mdp'])) {

        // Evité que l'utilisateur malveillant utilise attaque SQL | Donnée USER
        $user_prenom = htmlspecialchars($_POST['prenom']);
        $user_nom = htmlspecialchars($_POST['nom']);
        $user_email = htmlspecialchars($_POST['email']);
        $user_mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

        // Vérification du e-mail du user pour vérifier et s'il existe déjà
        $checkIfUserAlreadyExists = $bdd->prepare('SELECT email FROM users WHERE email = ?');
        $checkIfUserAlreadyExists->execute(array($user_email));

        // S'il ne retrouve pas la même addresse mail alors retourne une erreur
        if ($checkIfUserAlreadyExists->rowCount() == 0) {

            # Inscription du user dans la base de donnée | BDD
            $insertUserOneWebsite = $bdd->prepare('INSERT INTO users(nom, prénoms, email, mdp)VALUES(?, ?, ?, ?)');
            $insertUserOneWebsite->execute(array($user_nom, $user_prenom, $user_email, $user_mdp));

            # Affichier mon user grâce à son ID et récupérer ses informations
            $getInfoOfThisUserRep = $bdd->prepare('SELECT id, nom, prénoms, email FROM users WHERE nom = ? AND prénoms = ? AND email = ?');
            $getInfoOfThisUserRep->execute(array($user_nom, $user_prenom, $user_email));

            # Récupérer les données de la requête faite ci-dessus dans une variable
            $usersInfos = $getInfoOfThisUserRep->fetch();

            # vérifier si le user est authentifier sur le site puis récupérer ses donnée à travers des variable globales sessions
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $usersInfos['id'];
            $_SESSION['nom'] = $usersInfos['nom'];
            $_SESSION['prenom'] = $usersInfos['prénoms'];
            $_SESSION['email'] = $usersInfos['email'];

            # Rediriger l'utilisateur vers la page d'accueil
            header('Location: ./index.php');

        } else {
            $Msgerrors = "Cette utilisateur existe déjà sur le site";
        }
    } else {
        $Msgerrors = "Veuillez remplir tout les champs SVP...";
    }
}
