<?php 

    class Product {

        public $nameProd;
        public $info;
        private $price;

        public function __construct($_name, $_info){

            $this-> name = $_name;
            $this-> info = $_info;

        }

    }

?>