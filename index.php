<?php 

  require_once __DIR__ . '/Product.php';
  require_once __DIR__ . '/User.php';
  require_once __DIR__ . '/CreditCard.php';
  require_once __DIR__ . '/PremiumUser.php';


  /* PRODUCTS */
  /* Prodotto 1, Ipad */
  $prod1 = new Product("Samsung Galaxy S21", "Telefonia", 700);
  $prod1->price = 100;
  /* var_dump($prod1); */
  $prod2 = new Product("Iphone 12", "Telefonia", 800);
  /* var_dump($prod2); */
  $prod3 = new Product("Tostapane", "Elettrodomestici", 100);
  /* var_dump($prod3); */
  $prod4 = new Product("Bicicletta", "Sport e tempo libero", 500);
  /* var_dump($prod4); */
  /* Array con tutti i prodotti */
  $products = array($prod1, $prod2, $prod3, $prod4);
  /* var_dump($products); */
  /* /PRODUCTS */


  /* CREDIT CARDS */
  /* Carta di credito n°1 */
  $card1 = new CreditCard('1111111111111111', 2028, '200');
  /* var_dump($card1); */
  /* Carta di credito n°2 */
  $card2 = new CreditCard('2222222222222222', 2022, '500');
  /* var_dump($card2); */
  /* Carta di credito n°3 */
  $card3 = new CreditCard('3333333333333333', 2023, '404');
  /* var_dump($card3); */
  /* Carta di credito n°4 */
  $card4 = new CreditCard('4444444444444444', 2031, '504');
  /* Array con tutte le carte di credito */
  $cards = array($card1, $card2, $card3, $card4);
  /* /CREDIT CARDS */


  /* USERS */
  /* User 1 */
  $user1 = new User("Ugo", "De Ughi");
  /* Funzione che aggiunge la carta di credito all'utente selezionato */
  $user1->getCreditCard($card1);
  /* Funzione che aggiunge un prodotto al carrello dell'utente selezionato */
  $user1->addProduct($prod1);
  /* var_dump($user1); */
  /* User 2 */
  $user2 = new User("Franco", "Rossi");
  $user2->dateOfBirth = "10/08/1982";
  $user2->address = "Via Rossi 1, Milano";
  $user2->age = 39;
  $user2->gender = "Male";
  $user2->getCreditCard($card2);
  $user2->addProduct($prod2);
  /* var_dump($user2); */
  /* Array contenente tutti gli utenti */
  $users = array($user1, $user2);
  /* /USERS */

  /* PREMIUM USERS */
  /* Premium User 1 */
  $premiumUser1 = new PremiumUser('Giuseppe', 'Verdi', 22, 'bronzo');
  $premiumUser1->addProduct($prod3);
  $premiumUser1->setDiscount();
  /* var_dump($premiumUser1); */
  /* Premium User 2 */
  $premiumUser2 = new PremiumUser("Alessia", "Bianchi", 43, 'oro');
  $premiumUser2->addProduct($prod4);
  $premiumUser2->setDiscount();
  /* var_dump($premiumUser2); */
  /* Array contenente tutti gli utenti premium */
  $premiumUsers = array($premiumUser1, $premiumUser2);
  /* /PREMIUM USERS */

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
  </head>
  <body>
    <header>
      <h1>Shop Online</h1>
    </header>
    <main>

      <div>
        <div>
          <h3>Utenti base</h3>
          <?php foreach($users as $user) { ?>
            <div>
              <p> <?php echo $user-> name ?> <?php echo $user-> surname ?> </p>
            </div>
          <?php } ?>
        </div>
        <div>
          <h3>Utenti Premium</h3>
          <?php foreach($premiumUsers as $premiumUser) { ?>
            <p> <?php echo $premiumUser-> name ?> <?php echo $premiumUser-> surname ?> </p>
          <?php } ?>
        </div>
        <div>
          <h3>Prodotti</h3>
          <?php foreach($products as $product) { ?>
            <p> <?php echo $product->name ?> </p>
            <p> <?php echo $product->category ?> </p>
            <p> <?php echo $product->price ?> </p>
          <?php } ?>
        </div>
      </div>
      

    </main>
    
  </body>
</html>