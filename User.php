
<?php 

  class User{

        public $name;
        public $surname;
        public $dateOfBirth;
        public $address;
        public $age;
        public $gender;
        public $creditCard;
        public $cart = array();


        public function __construct($_name, $_surname)
        {
          $this->name = $_name;
          $this->surname = $_surname;
        }

        /* aggiunge all'user selezionato l'oggetto CreditCard */
        public function getCreditCard($card){
          $this->creditCard = $card;
        }
        /* aggiunge all'user selezionato l'oggetto Product */
        public function addProduct($prod){
          $this->cart[] = $prod;  
        }
        
  }


?>