<?php 

require_once __DIR__ . "/SecondHandItem.php";

class SecondHandItem extends Item{

   private $condition;

   // funzioni SET
   public function setCondition($_condition){
      $this->condition = $_condition;
   }

   // funzioni GET
   public function getCondition(){
      return $this->condition;
   }

   
}

?>