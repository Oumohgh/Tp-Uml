<?php
class Commande {
    private int $id;
    private Date $date;

    private string $statut;
    private Client $client;
    private Admin $admin;

    public function __construct(Date $date,string $statut,Client $client,Admin $admin){
        $this->date = $date;
         $this->client = $client;
        $this->admin = $admin;
        $this->statut = $statut;
    }

}