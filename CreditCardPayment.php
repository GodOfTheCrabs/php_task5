<?php

class CreditCardPayment implements PaymentMethod {
    private $cardNumber;
    private $expirationDate;
    public function __construct(string $cardNumber, string $expirationDate) {
        $this->cardNumber = $cardNumber;
        $this->expirationDate = $expirationDate;
    }

    public function processPayment($amount){
        echo "Оплата {$amount} грн через кредитну картку пройшла успішно.\n";
        return true;
    }
}