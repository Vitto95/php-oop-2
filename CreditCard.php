<?php 

  class CreditCard{
    public $number;
    public $expirationDate;
    public $code;

    public function __construct($_number, $_expirationDate, $_code){
      /* Controllo per numero di cifre corrette della carta */
      if (strlen($_number) !== 16 ){
        throw new Exception("Numero carta di credito non valido. Le cifre devono essere 16.");
      } else{
        $this->number = $_number;
      }
      /* Controllo per vedere che la carta non sia scaduta. */
      if ($_expirationDate > date('Y')){
        $this->expirationDate = $_expirationDate;
      } else {
        throw new Exception("ATTENZIONE! Carta di credito scaduta.");
      } 
      /* Controllo per vedere che il codice segreto abbia il numero corretto di cifre */
      if (strlen($_code) === 3){
        $this->code = $_code;
      } else {
        throw new Exception("Codice carta errato. Le cifre devono essere 3.");
      }
      
    }

  }



?>