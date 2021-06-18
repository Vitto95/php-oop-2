<?php 

    class CreditCard {

        public $number;
        public $term;
        public $code;

        public function __construct($_number, $_term, $_code){

            $this -> number = $_number;
            $this -> term = $_term;
            $this -> code = $_code;

        }

    }

?>