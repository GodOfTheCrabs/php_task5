<?php

class Car extends Vehicle {

    private $dailyRate;

    public $price;

    public function __construct($brand, $model, $year, $dailyRate, $price) {
        parent::__construct($brand, $model, $year);
        $this->dailyRate = $dailyRate;
        $this->price = $price;
    }
    public function calculateRentalCost($days) {
        return $days * $this->dailyRate;
    }

    public function getPrice() {
        return $this->price;
    }
}