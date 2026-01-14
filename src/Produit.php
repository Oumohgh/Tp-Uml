<?php
namespace App;
use App\ItemCommande;

class Produit {
    private int $id;
    private string  $nom;
    private float $prix;
    private  int $quantite;

    private array  $commandItems;

}