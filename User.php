<?php 

    include_once __DIR__ .'/CreditCard.php';

    class User extends CreditCard {

        public $name;
        public $surname;
        public $dateOfBirth;
        public $address;
        public $age;
        public $gender;

        public function __construct($_name, $_surname, $_age){

            $this -> name = $_name;
            $this -> surname = $_surname;
            $this -> age = $_age;
    
        }

        public function insertCreditCard($_number, $_term, $_code){

            $this -> number = $_number;
            $this -> term = $_term;
            $this -> code = $_code;


        }

        public function insertCreditCard2($_card){
          
            $this -> number = $_card -> number;
            $this -> term = $_card -> term;
            $this -> code = $_card -> code;

        }

    }

?>