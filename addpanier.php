<?php
require('./actions/_header.php');
?>

<?php
// Vérifier si l'id à été bien envoyer
if (isset($_GET['id'])) {
    $produit = $DB->query('SELECT id FROM produits WHERE id=:id', array('id' => $_GET['id']));
    if (empty($produit)) {
        die("Ce produit n'existe pas");
    }
    $paniers->add($produit[0]->id);
    die('<div class="alert alert-success" role="alert">
    Le produit à été bien ajouter a votre panier, <a href="Catagori.php" class="alert-link">retourner sur le catalogue</a></div>
    ');
} else {
    die("Vous n'avez pas ajouter de produit sélectionner au panier");
}
?>

<?php
require('./headerFooter/footer.php');
?>
