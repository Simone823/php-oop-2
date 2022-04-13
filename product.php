<?php 

    // Class Product
    class Product {

        // Id prodotto
        protected $id_product;

        // Nome prodotto
        protected $name_product;

        // Categoria
        protected $categories;

        // Genere
        protected $genre;

        // Prezzo
        protected $price;

        // Funzione construct
        function __construct($_id_product, $_name_product, $_categories, $_genre, $_price) {
            $this->id_product = $_id_product;
            $this->name_product = $_name_product;
            $this->categories = $_categories;
            $this->genre = $_genre;
            $this->price = $_price;
        }
    }

?>