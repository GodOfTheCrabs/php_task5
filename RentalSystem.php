<?php

class RentalSystem {
    private $vehicles = [];
    public function addVehicle($vehicle) {
        $this->vehicles[] = $vehicle;
    }
    public function rentVehicle($vehicleName, $paymentMethod) {
        foreach ($this->vehicles as $index => $vehicle) {
            if ($vehicle->getName() === $vehicleName) {
                $price = $vehicle->getPrice();
                if ($paymentMethod->processPayment($price)) {
                    unset($this->vehicles[$index]); 
                    echo "Ви успішно орендували {$vehicleName} за {$price} грн.\n";
                    return true;
                } else {
                    echo "Помилка оплати.\n";
                    return false;
                }
            }
        }
        echo "Транспортний засіб {$vehicleName} не знайдено.\n";
        return false;
    }
}
