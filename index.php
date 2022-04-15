<?php 

    require_once __DIR__ . "./user.php";
    require_once __DIR__ . "./userRegistered.php";
    require_once __DIR__ . "./creditCard.php";
    require_once __DIR__ . "./product.php";
    require_once __DIR__ . "./order.php";



    echo "Carta di credito 1 <br>";
    $creditcard1 = new CreditCard('4000340406860375', 2010, '333', 'mario', 'rossi');
    var_dump($creditcard1);

    echo "Carta di credito 2 <br>";
    $creditcard2 = new CreditCard('6004672372835754', 2023, '865', 'mario', 'rossi');
    var_dump($creditcard2);

    echo "Prodotto 1 <br>";
    $product1 = new Product(1, 'Pallina', 'Animali', 'Giochi', 20);
    var_dump($product1);

    echo "Prodotto 2 <br>";
    $product2 = new Product(2, 'Cuccia', 'Animali', 'Cura', 30);
    var_dump($product2);

    echo "Ordine 1 <br>";
    $order1 = new Order($product1);
    var_dump($order1);

    echo "Ordine 2 <br>";
    $order2 = new Order($product2);
    var_dump($order2);

    echo "Utente 1 <br>";
    $user1 = new User('Mario', 'Rossi', 30, 'mariorossi@gmail.com', $creditcard1, $order1);
    $user1->addCreditCard($creditcard2);
    var_dump($user1);

    echo "Utente registrato <br>";
    $userRegistered = new UserRegistered('Mario', 'Rossi', 30, 'mariorossi@gmail.com', 'jievbhe', $creditcard1, $order1);
    $userRegistered->addCreditCard($creditcard2);
    var_dump($userRegistered);
?>