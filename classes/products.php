<?php
class Products{
    public $name;
    public $price;
    public $weight;
    public $vote;
    public $coupon;
    public $typeProduct;
    public $for;
    public $image_url;

    public function __construct($name, $price, $weight, $vote, $coupon, $typeProduct, $for, $image_url)
    {
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
        $this->vote = $vote;
        $this->coupon = $coupon;
        $this->typeProduct = $typeProduct;
        $this->for = $for;
        $this->image_url = $image_url;
    }

    public function details()
    {
        echo "Titolo: " . $this->name . "<br>";
        echo "€: " . $this->price . "<br>";
        echo "kg: " . $this->weight . "<br>";
        echo "Valutazione: " . $this->vote . "<br>";
        echo "Sconto: " . $this->coupon . "<br>";
    }
}
