<?php
namespace App\User;

class User {
    protected int $id;
    protected string $nom;
    protected string $email;
    protected string $password;


    public static function getArgs(string $nom,string $email, string $password){
        $user = new self();
        $user->nom = $nom;
        $user->email = $email;
        $user->password = $password;
        
        return $user;
    }


    public function getNom(){
         return $this->nom; }

    public function getEmail(){
        return $this->email; }

    public function getPassword() { 
        return $this->password;
     }


    public function SetNom($nom){
        $this->nom = $nom;
    }
     public function SetEmail($email){
        $this->email = $email;
    }

     public function SetPassword($password){
        $this->password =  $password;
    }

   public function Register($nom,$email,$password){
        
        echo "register" ;
    }
    public function login($email, $password): Utilisateur{
            echo "login";
    }
 
}