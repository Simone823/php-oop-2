<?php

    // Includo il file user.php
    require_once __DIR__. "./user.php";

    // Classe user registered che estende la classe user
    class UserRegistered extends User{

        // Password
        private $password;

        // Funzione construct
        function __construct($_name, $_lastname, $_age, $_email, $_password, $_credit_card){

            $this->registered = true;
            $this->discount = 20;
            $this->password = $_password;

            // Parent user
            parent::__construct(
                $_name, 
                $_lastname,
                $_age,
                $_email,
                $_credit_card,
            );
        }

    }

?>