<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c);
BONUS:
Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->

<?php 

require_once __DIR__ . "/classes/Item.php";




$new_item = new Item("Tazza da caffé", 10);
$new_item->setBrand("Azienda X");
$new_item->setDescription("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum, labore?");
$new_item->setDiscount(10);



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP-OOP-2</title>
</head>
<body>
      
   <h2>
      <!-- item's name -->
      <?php echo $new_item->getName() ?>
   </h2>

   <h3>
      <!-- item's price -->
      <?php echo $new_item->getPrice() ?>€
   </h3>

   <h3>
      <!-- item's brand -->
      <?php echo $new_item->getBrand() ?>
   </h3>

   <h4>
      <!-- item's description -->
      Descrizione prodotto: <?php echo $new_item->getDescription() ?>
   </h4>

   <h3>
      <!-- item's discount -->
      <?php echo $new_item->getDiscount() ?>%
   </h3>


      
   




   
</body>
</html>