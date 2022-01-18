<?php 

class BasicUser{

   private $name;
   private $lastname;
   private $email;
   public $discount;

   function __construct($_name, $_lastname)
   {
      $this->name = $_name;
      $this->lastname = $_lastname;
   }


   // funzioni SET
   public function setName($_name){
      $this->name = $_name;
   }

   public function setLastname($_lastname){
      $this->lastname = $_lastname;
   }

   public function setEmail($_email){
      $this->email = $_email;
   }

   public function setDiscount($_discount){
      $this->discount = $_discount;
   }


   // funzioni GET
   public function getName(){
      return $this->name;
   }

   public function getLastname(){
      return $this->lastname;
   }

   public function getEmail(){
      return $this->email;
   }

   public function getDiscount(){
      return $this->discount;
   }
}



?>