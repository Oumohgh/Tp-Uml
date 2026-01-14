<?php
namespace App;
use App\User;
use App\Produit;
use App\Commande;
use App\ItemCommande;

class Client extends User {
    private int $id;
    private array $listCommandes;
    private array $listproduits;
    private Paiement $paiement;
    
    public function ConsulterProduits():Produit {

    }
    public function RechercheProduit(int $id):Produit {

    }
    public function PasserCommande(Commande $commande):bool {

    }
    
    public function AjouterProduitPannier(ItemCommande $itemCommande):bool {

    }
    public function EffectuePaiement(Paiement $paiement): bool {

    }
    
  
}