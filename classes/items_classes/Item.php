<?php  

class Item {
   private $name;
   private $price;
   private $brand;
   private $description;
   private $discount;


   // dati obbligatori NOME e PREZZO
   public function __construct($_name,$_price, $_discount)
   {
      $this->name = $_name;
      $this->price = $_price;
      $this->discount = $this->checkIfIsInteger($_discount);
   }


   // funzioni SET
   public function setName($_name){
      $this->name = $_name;
   }
   public function setPrice($_price){
      $this->price = $_price;
   }
   public function setBrand($_brand){
      $this->brand = $_brand;
   }
   public function setDescription($_description){
      $this->description = $_description;
   }
   public function setDiscount($_discount){
      $this->discount = $_discount;
   }

   // funzioni GET 

   public function getName(){
      return $this->name;
   }
   public function getPrice(){
      return $this->price;
   }
   public function getBrand(){
      return $this->brand;
   }
   public function getDescription(){
      return $this->description;
   }
   public function getDiscount(){
      return $this->discount;
   }


   // funzione per avere il prezzo finale
   public function getDiscountedPrice(){
      $discountedPrice = $this->price - (($this->price * $this->discount) / 100);
      return number_format($discountedPrice, 2, ", ", "");
   }

   // funzione per verificare se è un intero
   public function checkIfIsInteger($discount){

      // se non è un intero o se supera il 100(%) allora dammi errore
      if(!is_int($discount) || $discount > 100){
        throw new Exception('Sconto non valido!');

      }
      
      return  $discount;
   }


}

?>