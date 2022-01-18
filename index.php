<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c);
BONUS:
Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->

<?php 

// collego i file delle classi
require_once __DIR__ . "/classes/Item.php";
require_once __DIR__ . "/classes/HandmadeItem.php";
require_once __DIR__ . "/classes/SecondHandItem.php";



// creo un item
$new_item = new Item("Tazza da caffé", 10.99);
$new_item->setBrand("Azienda X");
$new_item->setDescription("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum, labore?");
$new_item->setDiscount(10);


// creo un HandmadeItem
$new_HandmadeItem = new HandmadeItem ("Quadro futurista", 199.99);
$new_HandmadeItem->setDescription("Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore error ullam neque, dolor veniam eius nobis placeat laudantium laboriosam nemo dignissimos corporis, tempore veritatis ut.");
$new_HandmadeItem->setHowItsMade("Handmade");
$new_HandmadeItem->setDiscount(5);


// creo un SecondHandItem
$new_SecondHandItem = new SecondHandItem ("Bicicletta per bambino", 129.99);
$new_SecondHandItem->setDescription("Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore error ullam neque, dolor veniam eius nobis placeat laudantium laboriosam nemo dignissimos corporis, tempore veritatis ut. laboriosam nemo dignissimos corporis, tempore veritatis ut.");
$new_SecondHandItem->setBrand("Decathlon");
$new_SecondHandItem->setCondition("In good condition");
$new_SecondHandItem->setDiscount(15);



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
   
   <!-- **** new item **** -->
   <h2>
      <!-- item's name -->
      <?php echo $new_item->getName() ?>
   </h2>

   <h3>
      <!-- item's price -->
      <?php echo $new_item->getPrice() ?> €
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

   <h2>
      <!-- item's discountedPrice -->
      Il prezzo scontato è: <?php echo $new_item->getDiscountedPrice() ?>€
   </h2>
   <!-- **** /new item **** -->

   <hr>

   <!-- **** new HandmadeItem **** -->
   <h2>
      <!-- HandmadeItem's name -->
      <?php echo $new_HandmadeItem->getName() ?>
   </h2>

   <h3>
      <!-- HandmadeItem's price -->
      <?php echo $new_HandmadeItem->getPrice() ?> €
   </h3>

   <h3>
      <!-- HandmadeItem's price -->
      <?php echo $new_HandmadeItem->getHowItsMade() ?>
   </h3>

   <h4>
      <!-- HandmadeItem's description -->
      Descrizione prodotto: <?php echo $new_HandmadeItem->getDescription() ?>
   </h4>

   <h3>
      <!-- HandmadeItem's discount -->
      <?php echo $new_HandmadeItem->getDiscount() ?>%
   </h3>

   <h2>
      <!-- HandmadeItem's discountedPrice -->
      Il prezzo scontato è: <?php echo $new_HandmadeItem->getDiscountedPrice() ?>€
   </h2>

   <!-- **** /new HandmadeItem **** -->

   <hr>

   <!-- **** new SecondHandItem **** -->
   <h2>
      <!-- SecondHandItem's name -->
      <?php echo $new_SecondHandItem->getName() ?>
   </h2>

   <h3>
      <!-- SecondHandItem's brand -->
      <?php echo $new_SecondHandItem->getBrand() ?>
   </h3>

   <h3>
      <!-- SecondHandItem's price -->
      <?php echo $new_SecondHandItem->getPrice() ?> €
   </h3>

   <h3>
      <!-- SecondHandItem's price -->
      <?php echo $new_SecondHandItem->getCondition() ?>
   </h3>

   <h4>
      <!-- SecondHandItem's description -->
      Descrizione prodotto: <?php echo $new_SecondHandItem->getDescription() ?>
   </h4>

   <h3>
      <!-- SecondHandItem's discount -->
      <?php echo $new_SecondHandItem->getDiscount() ?>%
   </h3>

   <h2>
      <!-- SecondHandItem's discountedPrice -->
      Il prezzo scontato è: <?php echo $new_SecondHandItem->getDiscountedPrice() ?>€
   </h2>

   <!-- **** /new SecondHandItem **** -->


      
   




   
</body>
</html>