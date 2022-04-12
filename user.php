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

        // Funzione construct
        function __construct($_name = '', $_lastname = '', $_age = 0, $_email = '', $_credit_card) {
            $this->name = $_name;
            $this->lastname = $_lastname;
            $this->age = $_age;
            $this->email = $_email;
            $this->credit_cards[] = $_credit_card;
        }

        // Funzione get full name
        function getFullName() {
            return "$this->name" . ' ' . "$this->lastname";
        }
    }

?>