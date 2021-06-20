<?php 

class PremiumUser extends User{
  public $discount;
  public $category;

  public function __construct($_name, $_surname, $_age, $_category)
  {
    $this->name = $_name;
    $this->surname = $_surname;
    $this->age = $_age;
    /* Per vedere il livello dell'utente premium */
    if (strtolower($_category) === 'oro' || strtolower($_category) === 'argento' || strtolower($_category) === 'bronzo'){
      $this->category = $_category; 
    }
  }

  public function setDiscount(){

      if ($this->category === 'bronzo'){
      $this->discount = 10;
      } elseif ($this->category === 'argento'){
      $this->discount = 20;
      } elseif ($this->category === 'oro') {
      $this->discount = 30;
      }
      
  }

  public function getDiscount(){
    return $this->discount;
  }
}


?>