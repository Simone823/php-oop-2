<?php

    // Classe user
    class User {

        // Name
        public $name;

        // Lastname
        public $lastname;

        // Age
        protected $age;

        // Email
        protected $email;

        // Registered
        protected $registered = false;

        // Sconto
        protected $discount = 0;

        protected $credit_cards = [];

        // Ordini
        public $orders = [];

        // Funzione construct
        function __construct($_name = '', $_lastname = '', $_age = 0, $_email = '', $_credit_card, $_orders) {
            $this->name = $_name;
            $this->lastname = $_lastname;
            $this->age = $_age;
            $this->verifiedEmail($_email);
            $this->credit_cards[] = $_credit_card;
            $this->orders[] = $_orders;
        }

        // Funzione get full name
        function getFullName() {
            return "$this->name" . ' ' . "$this->lastname";
        }

        // Funzione verifica email
        function verifiedEmail($_email) {
            if( filter_var($_email, FILTER_VALIDATE_EMAIL) === false ){
                die('Formato email non corretto');
            } else {
                $this->email = $_email;
            }
        }
    }

?>