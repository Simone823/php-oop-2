<?php

    // Includo il file user.php
    require_once __DIR__. "./user.php";

    // Classe user registered che estende la classe user
    class UserRegistered extends User{

        // Password
        private $password;

        // Funzione construct
        function __construct($_name = '', $_lastname = '', $_age = 0, $_email = '', $_password = ''){

            $this->registered = true;
            $this->discount = 20;

            // Parent user
            parent::__construct(
                $this->name = $_name, 
                $this->lastname = $_lastname,
                $this->age = $_age,
                $this->email = $_email,
                $this->password = $_password,
            );
        }

    }

?>