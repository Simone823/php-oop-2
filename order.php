<?php

    // Class order
    class Order {

        // Numero ordine
        protected $num_order = 0;

        // Prodotti
        protected $products = [];

        // Totale ordini
        protected $total_order;

        function __construct($_product) {
            $this->addOrder($_product); 
        }

        // Funzione aggiungi ordine
        public function addOrder ($product) {
            $this->num_order++;
            $this->total_order++;
            $this->products[] = $product;
        }
    }

?>