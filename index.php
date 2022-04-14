<?php 

    require_once __DIR__ . "./user.php";
    require_once __DIR__ . "./userRegistered.php";
    require_once __DIR__ . "./creditCard.php";
    require_once __DIR__ . "./product.php";
    require_once __DIR__ . "./order.php";



    $creditcard1 = new CreditCard('4000340406860375', 2010, '333', 'mario', 'rossi');
    var_dump($creditcard1);

    $user1 = new User('Mario', 'Rossi', 30, 'euivbheuvb', $creditcard1);
    var_dump($user1);

    $userRegistered = new UserRegistered('Mario', 'Rossi', 30, 'uhgberyfe', 'jievbhe', $creditcard1);
    var_dump($userRegistered);

    $product1 = new Product(1, 'Pallina', 'Animali', 'Giochi', 20);
    var_dump($product1);

    $product2 = new Product(2, 'Cuccia', 'Animali', 'Cura', 30);
    var_dump($product2);

    $order1 = new Order($product1);
    var_dump($order1);

    $order2 = new Order($product2);
    var_dump($order2);
?>