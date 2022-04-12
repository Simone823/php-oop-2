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