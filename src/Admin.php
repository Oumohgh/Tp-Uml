<?php
namespace App\Admin;
use App\User;
use App\Produit;
use App\Categorie;
use App\Commande;

class Admin extends User {
    private int $id;
    private array  $produits;
    private array $categories;
    private array $commandes;
    public function createProfuit(Produit $produit): Produit{
       
    }
    public function ModifierProduit(Produit $produit):bool {}
    public function SupprimerProduit(int $id):bool{}
    public function CreatCtegorie(Categorie $categorie):Categorie{}
    public function SupprimerCategorie(int $id): bool {}
    public function ModifierCategorie(Categorie $categorie):Categorie {}

    public function ConsulterCommandes(): Commande {}
    public function ModifierStatutCommande(Commande $commade):bool {}

}