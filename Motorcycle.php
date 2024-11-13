<?php

class Motorcycle extends Vehicle {
    private $hourlyRate;

    public function __construct($brand, $model, $year, $hourlyRate) {
        parent::__construct($brand, $model, $year);
        $this->hourlyRate = $hourlyRate;
    }
    public function calculateRentalCost($days) {
        return $days * ($this->hourlyRate * 24);
    }
}