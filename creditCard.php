<?php 

    // Trait carta di credito
    class CreditCard{

        // Card Number
        private $card_number;

        // Card expiration
        private $card_expiration;

        // Card CVV
        private $card_cvv;

        // Funzione construct
        function __construct($_card_number, $_card_expiration, $_card_cvv) {
            if (strlen($_card_number) == 16){
                $this->card_number = $_card_number;
            } else {
                echo "Numero carta non valido";
            }

            $this->card_expiration = $_card_expiration;

            if(strlen($_card_cvv) == 3) {
                $this->card_cvv = $_card_cvv;
            } else {
                echo "Numero cvv non valido";
            }
        }
    }
?>