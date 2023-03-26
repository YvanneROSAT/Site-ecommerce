<?php
require('databases.php');

// Récupérer les indentifiant de l'utilisateur
if(isset($_GET['id']) AND !empty($_GET['id'])){
    // l'id de l'utilisateur
    $idOfUser = $_GET['id'];
    
    // Vérifier si l'utilisateur existe
    $checkIfUserExists = $bdd->prepare('SELECT * FROM users WHERE id = ?');
    $checkIfUserExists->execute(array($idOfUser));

    if($checkIfUserExists->rowCount() > 0){

        // Récuperer toutes les donnée de l'utilisateur
        $usersInfos = $checkIfUserExists->fetch();
        
        $_SESSION['id'] = $usersInfos['id'];
        $_SESSION['nom'] = $usersInfos['nom'];
        $_SESSION['prenom'] = $usersInfos['prénoms'];
    }else{
        $Msgerror = "Aucun utilisateur trouvé";
    }
}
?>