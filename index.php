<?php
    include 'Vehicle.php';
    include 'PaymentMethod.php';
    include 'Car.php';
    include 'Motorcycle.php';
    include 'CreditCardPayment.php';
    include 'RentalSystem.php';

    $car = new Car("Toyota", "Camry", 2020, 50, 10000);
    $car1 = new Car("Toyota", "Camry", 2020, 50, 10000);
    $car2 = new Car("Toyota", "Camry", 2020, 50, 10000);
    $motorcycle = new Motorcycle("Yamaha", "MT-07", 2022,5);
    $creditCard = new CreditCardPayment("123121231231123123", "2025-12");

    echo $car->getInfo();
    echo "<br>Rental Cost for 5 days: $" . $car->calculateRentalCost(5);

    echo "<br>" . $motorcycle->getInfo();
    echo "<br>Rental Cost for 15 days: $" . $motorcycle->calculateRentalCost(15) . "<br>";

    $creditCard->processPayment(100);

    $rentalSystem = new RentalSystem();

    $rentalSystem->addVehicle($car);
    $rentalSystem->addVehicle($car1);
    $rentalSystem->addVehicle($car2);

    $rentalSystem->rentVehicle("Toyota", $creditCard);
    $rentalSystem->rentVehicle("Motocycle", $creditCard);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>