<?php  

require_once __DIR__ . "/Item.php";

class HandmadeItem extends Item{

   private $HowItsmade;


   // funzioni SET
   public function setHowItsMade($_HowItsMade){
      $this->HowItsmade = $_HowItsMade;
   }

   // funzioni GET
   public function getHowItsMade(){
      return $this->HowItsmade;
   }
}

?>