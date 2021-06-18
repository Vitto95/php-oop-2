
<?php 

include_once __DIR__ .'/User.php';
include_once __DIR__ .'/Product.php';
include_once __DIR__ .'/Category.php';
include_once __DIR__ .'/CreditCard.php';


$user1 = new User('Mario','Rossi',45);
$prod1 = new Product('Ipad Pro','Tablet marchio Apple');
$cat1 = new Category('Informatica');

$user1 -> insertCreditCard(123456677,"12/21",147);


var_dump($user1);
var_dump($prod1);
var_dump($cat1);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebShop</title>
</head>
<body>
    
    <h2> 
        Nome: <?php echo $user1->name ?> <br> 
        Cognome: <?php echo $user1->surname ?> <br>
        Età: <?php echo $user1->age ?> <br>
        La tua carta di credito è: 
            <?php echo $user1->number ?>
            <?php echo $user1->term ?>
            <?php echo $user1->code ?>
    </h2>

</body>
</html>