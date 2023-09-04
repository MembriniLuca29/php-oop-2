<?php
class CreditCard {
    private $cardNumber;
    private $cardUser;
    private $expirationDate;

    public function __construct($cardNumber, $cardUser, $expirationDate) {
        $this->cardNumber = $cardNumber;
        $this->cardUser = $cardUser;
        $this->expirationDate = $expirationDate;
    }

    public function getCardNumber() {
        return $this->cardNumber;
    }

    public function getcardUser() {
        return $this->cardUser;
    }

    public function getExpirationDate() {
        return $this->expirationDate;
    }

    public function isExpired() {
        $currentDate = date('Y-m-d');

        return strtotime($this->expirationDate) < strtotime($currentDate);
    }
}

