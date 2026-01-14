<?php
namespace App;
use App\Admin;
class Categorie {
    private int $id;
    private string $name;
    private Admin $admin;
    public function __construct(string $name,Admin $admin){
        $this->name = $name;
        $this->admin = $admin;
    }
}