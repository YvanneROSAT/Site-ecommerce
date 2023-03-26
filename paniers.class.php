<?php
class paniers
{
    private $DB;
    public function __construct($DB)
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (!isset($_SESSION['paniers'])) {
            $_SESSION['paniers'] = array();
        }
        $this->DB = $DB;

        if (isset($_GET['delPanier'])) {
            $this->del($_GET['delPanier']);
        }
        if (isset($_POST['paniers']['quantity'])) {
            $this->recalc();
        }
    }

    public function recalc()
    {
        foreach ($_SESSION['paniers'] as $produit_id => $quantity) {
            if (isset($_POST['paniers']['quantity'][$produit_id])) {
                $_SESSION['paniers'][$produit_id] = $_POST['paniers']['quantity'][$produit_id];
            }
        }
    }

    public function count()
    {
        return array_sum($_SESSION['paniers']);
    }
    public function total()
    {
        $total = 0;
        $ids = array_keys($_SESSION['paniers']);
        if (empty($ids)) {
            $produits = array();
        } else {
            $produits = $this->DB->query('SELECT id, prix FROM produits WHERE id IN (' . implode(',', $ids) . ')');
        }
        foreach ($produits as $produit) {
            $total += $produit->prix * $_SESSION['paniers'][$produit->id];
        }
        return $total;
    }
    public function add($produit_id)
    {
        if (isset($_SESSION['paniers'][$produit_id])) {
            $_SESSION['paniers'][$produit_id]++;
        } else {
            $_SESSION['paniers'][$produit_id] = 1;
        }
    }
    public function del($produit_id)
    {
        unset($_SESSION['paniers'][$produit_id]);
    }
}
