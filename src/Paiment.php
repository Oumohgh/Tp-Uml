<?php
namespace App;

use App\Client;

class Paiment {
    private int $id;
    private string $montant;
    private string $modePaiment;

    private Client $client;
}