<?php

abstract class Vehicle {
    protected $brand;
    protected $model;
    protected $year;

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    abstract public function calculateRentalCost($days);

    public function getInfo() {
        return "Brand: $this->brand, Model: $this->model, Year: $this->year";
    }

    public function getName() {
        return $this->brand;
    }
}