<?php
class User {
    private $isGuest;
    private $username;
    private $discount; // Aggiungi l'attributo per lo sconto

    public function __construct($isGuest, $username = null, $discount = 0) {
        $this->isGuest = $isGuest;
        $this->username = $username;
        $this->discount = $discount; 
    }

    public function isGuest() {
        return $this->isGuest;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getDiscount() {
        return $this->discount; 
    }
}

//es
$user = new User(false, "username", 20);
echo "Utente Registrato: " . $user->getUsername() . "<br>";
echo "Sconto: " . $user->getDiscount() . "%<br>";


$guest = new User(true);
echo "Ospite: " . ($guest->isGuest() ? "Sì" : "No") . "<br>";