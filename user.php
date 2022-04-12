<?php

    // Includo creditCard.php
    require_once __DIR__."./creditCard.php";

    // Classe user
    class User {

        // Use CreditCard trait
        use CreditCard;

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

        // Funzione construct
        function __construct($_name = '', $_lastname = '', $_age = 0, $_email = '') {
            $this->name = $_name;
            $this->lastname = $_lastname;
            $this->age = $_age;
            $this->email = $_email;
        }

        // Funzione get full name
        function getFullName() {
            return "$this->name" . ' ' . "$this->lastname";
        }
    }

?>